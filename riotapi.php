<?php
/*
  Manejador de llamadas a la API de Riot. Solo TFT.
  Versión 1.1 23/07/2019
  Si se sobrepasa el límite de peticiones se obtiene NULL.

  EJEMPLO DE USO EN OTRO FICHERO PHP:
  include 'riotapi.php';
  $servidor = 'euw';
  $usuario = 'vox santiabascal';

  # Si quiero obtener datos de un usuario:
  $datosUsuario = RiotAPI::obtenerUsuario($servidor, $usuario);
  # Datos interesantes:
    'id': id del usuario para obtener sus datos de rankeds
    'name': nombre bien escrito del usuario
    'profileIconId': id del icono de invocador
    'summonerLevel': nivel del invocador

  # Para obtener sus datos de clasificatorias:
  $datosClasificatorias = RiotAPI::obtenerInfoRankeds($servidor, $datosUsuario['id']);
  # Datos interesantes:
    'wins': número de victorias
    'losses': número de derrotas
    'tier': tier en el que está
    'rank': rank en el que está
    'leaguePoints': puntos que tiene
    'hotStreak': buleano que indica si está en racha de victorias
    'veteran': buleano que indica si es veterano
    'inactive': buleano que indica si está inactivo
    'freshBlood': buleano que indica si acaba de ascender

  # Para obtener un ranking(challenger, grandmaster o master):
  $rankingMaster = RiotAPI::ranking($servidor,'master');
  # El ranking viene ordenador de mayor a menor según los puntos de liga
  # Datos interesantes:
    'tier': tier del ranking
    'name': nombre de la liga
    'entries': array con los usuarios que están en dicha liga
      'summonerName': nombre del invocador
      'wins': número de victorias
      'losses': número de derrotas
      'rank': rank en el que está
      'leaguePoints': puntos que tiene
      'hotStreak': buleano que indica si está en racha de victorias
      'veteran': buleano que indica si es veterano
      'inactive': buleano que indica si está inactivo
      'freshBlood': buleano que indica si acaba de ascender
  # Ejemplo para recorrer los usuarios de un ranking:
  foreach($rankingMaster['entries'] as $usuario){
    # accedo a los datos de $usuario
  }
*/
  class RiotAPI{
    private static $token = 'RGAPI-6ff40bc1-4af7-432a-be74-c82f1553a2bc';
    private static $servidores = array(
      'euw' => 'euw1',
      'eune' => 'eun1',
      'br' => 'br1',
      'na' => 'na1',
      'la1' => 'la1',
      'la2' => 'la2',
    );
    private static $funciones_api = array(
      'usuario' => '/lol/summoner/v4/summoners/by-name/',
      'usuario_ranked' => '/lol/league/v4/entries/by-summoner/',
      'challenger' => '/lol/league/v4/challengerleagues/by-queue/',
      'grandmaster' => '/lol/league/v4/grandmasterleagues/by-queue/',
      'master' => '/lol/league/v4/masterleagues/by-queue/',
    );

    private static function orderArrayByValue($array, $keyOfValue){
      if(empty($array)) return null;
      if(empty($keyOfValue))return null;
      $newEntries = [];
      $tempArray = [];
      foreach ($array as $entry) {
        $tempArray[] = $entry[$keyOfValue];
      }
      arsort($tempArray);
      foreach ($tempArray as $key => $value) {
        $newEntries[] = $array[$key];
      }
      return $newEntries;
    }

    private static function caller($servidor,$funcion,$parametro){
      $scurl = curl_init();
      $paramero_escapado =  curl_escape($scurl, $parametro);
      $url = 'https://' . $servidor . '.api.riotgames.com' . $funcion . $paramero_escapado;
      $opciones = array(
        CURLOPT_URL => $url,
        CURLOPT_HTTPHEADER => array(
          "Accept-Charset:application/x-www-form-urlencoded; charset=UTF-8",
          "X-Riot-Token:".RiotAPI::$token,
        ),
        CURLOPT_RETURNTRANSFER => true,
      );
      curl_setopt_array($scurl,$opciones);
      $datos = json_decode(curl_exec($scurl), true);
      curl_close($scurl);
      return $datos;
    }
################################################################################
################################################################################
    public static function obtenerUsuario($servidor,$nombre){
      return RiotAPI::caller(RiotAPI::$servidores[$servidor],RiotAPI::$funciones_api['usuario'],$nombre);
    }

    public static function obtenerInfoRankeds($servidor,$id_usuario){
      $intentos = 0;
      while($intentos < 3){
        $i = 0;
        $encontrado = false;
        $datos = RiotAPI::caller(RiotAPI::$servidores[$servidor],RiotAPI::$funciones_api['usuario_ranked'], $id_usuario);
        foreach ($datos as $dato) {
          if($dato['queueType'] == 'RANKED_TFT'){
            $encontrado = true;
            $indice = $i;
            break;
          }
          $i++;
        }
        if($encontrado){
          break;
        }
        $intentos++;
      }
      if($intentos == 3){
          return null;
      }
      return $datos[$i];
    }

    public static function ranking($servidor, $tier){
      $data = RiotAPI::caller(RiotAPI::$servidores[$servidor], RiotAPI::$funciones_api[$tier], 'RANKED_TFT');
      $data['entries'] = RiotAPI::orderArrayByValue($data['entries'],'leaguePoints');
      return $data;
    }
  }
  /*
  function cdebug($data){
    print_r('<p>');
    print_r($data);
    print_r('</p>');
  }
  */
?>
