<?php 
function get_timeago( $ptime ) {
  $estimate_time = time() - $ptime;
  if( $estimate_time < 1 ){
    return 'hace menos de 1 segundo';
  }
  $condition = array( 
    12 * 30 * 24 * 60 * 60  =>  'año',
    30 * 24 * 60 * 60       =>  'mes',
    24 * 60 * 60            =>  'día',
    60 * 60                 =>  'hora',
    60                      =>  'minuto',
    1                       =>  'segundo'
  );

  $a_plural = array( 'año'   => 'años',
              'mes'  => 'meses',
              'día'    => 'días',
              'hora'   => 'horas',
              'minuto' => 'minutos',
              'segundo' => 'segundos'
  );

  foreach( $condition as $secs => $str ){
    $d = $estimate_time / $secs;

    if( $d >= 1 ){
        $r = round( $d );
        return 'Publicado hace ' . $r . ' ' . ( $r > 1 ? $a_plural[$str] : $str ) . ' ';
    }
  }
}
?>