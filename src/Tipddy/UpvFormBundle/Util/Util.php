<?php 

class Util 
{
   public static function cleanRut($rut)
   {
           $rut = str_replace(".", "", $rut);
	       $rut = str_replace("-", "", $rut);
	       
	       $tam_rut = strlen($rut);
	       
	       $rut_part1 = substr($rut, 0, $tam_rut - 1);
	       $rut_part2 = $rut[$tam_rut -1];
	       
	       $return $rut_part1."-".$rut_part2;
	   
   }


}