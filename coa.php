<?php 
////////////   INCOME STATEMENT
$RTLR = 'RTLR';
$ECOR = 'ECOR';
$ESGA = 'ESGA';  
$ETOE = 'ETOE';
$EIBT = 'EIBT';
$TTAX = 'TTAX';
$TIAT = 'TIAT';
$CIAC = 'CIAC';
$XNIC = 'XNIC';
$XNIA = 'XNIA';
$STSI = 'STSI';
$VDEP = 'VDEP';
$VAMI = 'VAMI';
$VAMA = 'VAMA';
$DCGD = 'DCGD';
$DDPS1 = 'DDPS1';
$DDPS2 = 'DDPS2';
$DSPS1 = 'DSPS1';
$VITT = 'VITT';
$EDEP = 'EDEP';
$EAMI = 'EAMI';
$ERXP = 'ERXP';
$VRXP = 'VRXP';
$EIIN = 'EIIN';
$EIEX = 'EIEX';
$NIIN = 'NIIN';
$NIEN = 'NIEN';
$VIEX = 'VIEX';
$VCAP = 'VCAP';
$VEIA = 'VEIA';
$XTRA = 'XTRA';
$GBAS = 'GBAS';
$GDWS = 'GDWS';
$HFFO = 'HFFO';
$VIAU = 'VIAU';
$ERDW = 'ERDW';
$ERES = 'ERES';
$ELIT = 'ELIT';
$EIAU = 'EIAU';
$EIAS = 'EIAS';
$EGLA = 'EGLA';
$EUIE = 'EUIE';
$NGLA = 'NGLA';
$NUII = 'NUII';
$NRES = 'NRES';
$NLIT = 'NLIT';
$NUIE = 'NUIE';
$NAMA = 'NAMA';
$VAMA = 'VAMA';
$VGLA = 'VGLA';
$VIAS = 'VIAS';
$VIAU = 'VIAU';
$VLIT = 'VLIT';
$VRDW = 'VRDW';
$VRES = 'VRES';
$VUIE = 'VUIE';
$VRAD = 'VRAD';


if(strpos($row['COA'], $RTLR) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($RTLR));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($RTLR));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($RTLR));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($RTLR));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $RTLR0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $RTLR1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $RTLR2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $RTLR3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }


} 

if(strpos($row['COA'], $ECOR) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($ECOR));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($ECOR));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($ECOR));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($ECOR));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $ECOR0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $ECOR1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $ECOR2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $ECOR3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $ESGA) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($ESGA));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($ESGA));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($ESGA));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($ESGA));
      
      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $ESGA0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $ESGA1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $ESGA2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $ESGA3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}  

if(strpos($row['COA'], $ETOE) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($ETOE));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($ETOE));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($ETOE));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($ETOE));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $ETOE0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $ETOE1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $ETOE2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $ETOE3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}  

if(strpos($row['COA'], $EIBT) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($EIBT));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($EIBT));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($EIBT));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($EIBT));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $EIBT0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $EIBT1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $EIBT2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $EIBT3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $TTAX) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($TTAX));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($TTAX));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($TTAX));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($TTAX));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $TTAX0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $TTAX1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $TTAX2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $TTAX3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);           
      }
      
} 


if(strpos($row['COA'], $TIAT) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($TIAT));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($TIAT));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($TIAT));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($TIAT));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $TIAT0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $TIAT1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $TIAT2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $TIAT3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 


if(strpos($row['COA'], $CIAC) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($CIAC));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($CIAC));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($CIAC));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($CIAC));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $CIAC0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $CIAC1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $CIAC2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $CIAC3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 


if(strpos($row['COA'], $XNIC) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($XNIC));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($XNIC));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($XNIC));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($XNIC));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $XNIC0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $XNIC1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $XNIC2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $XNIC3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 


if(strpos($row['COA'], $XNIA) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($XNIA));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($XNIA));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($XNIA));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($XNIA));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $XNIA0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $XNIA1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $XNIA2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $XNIA3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 


if(strpos($row['COA'], $STSI) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($STSI));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($STSI));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($STSI));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($STSI));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $STSI0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $STSI1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $STSI2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $STSI3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 


if(strpos($row['COA'], $VDEP) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($VDEP));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($VDEP));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($VDEP));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($VDEP));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $VDEP0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $VDEP1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $VDEP2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $VDEP3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 


if(strpos($row['COA'], $VAMI) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($VAMI));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($VAMI));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($VAMI));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($VAMI));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $VAMI0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $VAMI1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $VAMI2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $VAMI3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 


if(strpos($row['COA'], $VAMA) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($VAMA));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($VAMA));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($VAMA));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($VAMA));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $VAMA0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $VAMA1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $VAMA2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $VAMA3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $DCGD) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($DCGD));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($DCGD));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($DCGD));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($DCGD));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $DCGD0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $DCGD1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $DCGD2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $DCGD3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $DDPS1) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($DDPS1));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($DDPS1));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($DDPS1));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($DDPS1));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $DDPS10[] = filter_var($row['LineItemValue'], FILTER_VALIDATE_FLOAT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $DDPS11[] = filter_var($row['LineItemValue'], FILTER_VALIDATE_FLOAT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $DDPS12[] = filter_var($row['LineItemValue'], FILTER_VALIDATE_FLOAT);
      }

      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $DDPS13[] = filter_var($row['LineItemValue'], FILTER_VALIDATE_FLOAT);
      }
}

if(strpos($row['COA'], $DDPS2) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($DDPS2));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($DDPS2));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($DDPS2));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($DDPS2));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $DDPS20[] = $row['LineItemValue'];
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $DDPS21[] = $row['LineItemValue'];
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $DDPS22[] = $row['LineItemValue'];
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $DDPS23[] = $row['LineItemValue'];
      }
}

if(strpos($row['COA'], $DSPS1) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($DSPS1));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($DSPS1));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($DSPS1));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($DSPS1));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $DSPS10[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $DSPS11[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $DSPS12[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $DSPS13[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $VITT) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($VITT));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($VITT));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($VITT));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($VITT));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $VITT0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $VITT1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $VITT2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $VITT3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $EDEP) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($EDEP));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($EDEP));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($EDEP));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($EDEP));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $EDEP0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $EDEP1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $EDEP2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $EDEP3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $EAMI) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($EAMI));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($EAMI));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($EAMI));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($EAMI));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $EAMI0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $EAMI1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $EAMI2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $EAMI3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $ERXP) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($ERXP));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($ERXP));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($ERXP));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($ERXP));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $ERXP0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $ERXP1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $ERXP2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $ERXP3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $VRXP) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($VRXP));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($VRXP));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($VRXP));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($VRXP));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $VRXP0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $VRXP1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $VRXP2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $VRXP3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $EIIN) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($EIIN));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($EIIN));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($EIIN));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($EIIN));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $EIIN0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $EIIN1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $EIIN2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $EIIN3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $EIEX) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($EIEX));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($EIEX));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($EIEX));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($EIEX));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $EIEX0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $EIEX1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $EIEX2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $EIEX3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      
} 

if(strpos($row['COA'], $NIEN) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($NIEN));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($NIEN));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($NIEN));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($NIEN));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $NIEN0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $NIEN1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $NIEN2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $NIEN3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $VIEX) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($VIEX));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($VIEX));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($VIEX));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($VIEX));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $VIEX0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $VIEX1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $VIEX2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $VIEX3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $VCAP) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($VCAP));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($VCAP));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($VCAP));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($VCAP));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $VCAP0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $VCAP1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $VCAP2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $VCAP3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}   

if(strpos($row['COA'], $VEIA) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($VEIA));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($VEIA));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($VEIA));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($VEIA));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $VEIA0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $VEIA1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $VEIA2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $VEIA3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $XTRA) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($XTRA));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($XTRA));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($XTRA));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($XTRA));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $XTRA0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $XTRA1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $XTRA2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $XTRA3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      } 
} 

if(strpos($row['COA'], $GBAS) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($GBAS));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($GBAS));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($GBAS));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($GBAS));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $GBAS0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $GBAS1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $GBAS2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $GBAS3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $GDWS) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($GDWS));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($GDWS));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($GDWS));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($GDWS));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $GDWS0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $GDWS1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $GDWS2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $GDWS3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $HFFO) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($HFFO));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($HFFO));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($HFFO));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($HFFO));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $HFFO0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $HFFO1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $HFFO2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $HFFO3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $VIAU) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($VIAU));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($VIAU));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($VIAU));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($VIAU));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $VIAU0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $VIAU1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $VIAU2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $VIAU3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}  

if(strpos($row['COA'], $ERDW) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($ERDW));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($ERDW));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($ERDW));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($ERDW));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $ERDW0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $ERDW1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $ERDW2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $ERDW3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $ERES) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($ERES));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($ERES));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($ERES));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($ERES));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $ERES0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $ERES1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $ERES2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $ERES3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $ELIT) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($ELIT));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($ELIT));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($ELIT));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($ELIT));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $ELIT0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $ELIT1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $ELIT2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $ELIT3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $EIAU) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($EIAU));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($EIAU));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($EIAU));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($EIAU));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $EIAU0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $EIAU1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $EIAU2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $EIAU3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $EIAS) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($EIAS));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($EIAS));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($EIAS));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($EIAS));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $EIAS0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $EIAS1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $EIAS2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $EIAS3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $EGLA) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($EGLA));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($EGLA));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($EGLA));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($EGLA));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $EGLA0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $EGLA1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $EGLA2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $EGLA3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $EUIE) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($EUIE));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($EUIE));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($EUIE));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($EUIE));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $EUIE0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $EUIE1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $EUIE2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $EUIE3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $NGLA) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($NGLA));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($NGLA));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($NGLA));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($NGLA));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $NGLA0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $NGLA1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $NGLA2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $NGLA3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $NUII) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($NUII));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($NUII));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($NUII));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($NUII));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $NUII0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $NUII1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $NUII2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $NUII3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $NRES) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($NRES));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($NRES));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($NRES));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($NRES));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $NRES0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $NRES1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $NRES2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $NRES3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $NLIT) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($NLIT));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($NLIT));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($NLIT));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($NLIT));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $NLIT0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $NLIT1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $NLIT2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $NLIT3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $NUIE) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($NUIE));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($NUIE));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($NUIE));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($NUIE));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $NUIE0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $NUIE1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $NUIE2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $NUIE3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $NAMA) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($NAMA));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($NAMA));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($NAMA));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($NAMA));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $NAMA0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $NAMA1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $NAMA2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $NAMA3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $VAMA) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($VAMA));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($VAMA));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($VAMA));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($VAMA));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $VAMA0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $VAMA1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $VAMA2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $VAMA3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $VGLA) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($VGLA));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($VGLA));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($VGLA));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($VGLA));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $VGLA0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $VGLA1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $VGLA2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $VGLA3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $VIAS) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($VIAS));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($VIAS));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($VIAS));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($VIAS));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $VIAS0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $VIAS1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $VIAS2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $VIAS3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $VIAU) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($VIAU));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($VIAU));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($VIAU));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($VIAU));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $VIAU0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $VIAU1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $VIAU2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $VIAU3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $VLIT) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($VLIT));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($VLIT));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($VLIT));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($VLIT));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $VLIT0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $VLIT1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $VLIT2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $VLIT3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $VRDW) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($VRDW));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($VRDW));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($VRDW));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($VRDW));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $VRDW0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $VRDW1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $VRDW2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $VRDW3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $VRES) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($VRES));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($VRES));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($VRES));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($VRES));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $VRES0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $VRES1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $VRES2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $VRES3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $VUIE) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($VUIE));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($VUIE));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($VUIE));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($VUIE));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $VUIE0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $VUIE1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $VUIE2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $VUIE3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $VRAD) !== false)
{
      $HelperValues00 = LTRIM(RTRIM($HelperValues0)) . LTRIM(RTRIM($VRAD));
      $HelperValues11 = LTRIM(RTRIM($HelperValues1)) . LTRIM(RTRIM($VRAD));
      $HelperValues22 = LTRIM(RTRIM($HelperValues2)) . LTRIM(RTRIM($VRAD));
      $HelperValues33 = LTRIM(RTRIM($HelperValues3)) . LTRIM(RTRIM($VRAD));

      if(strpos($row['HelperValues'], $HelperValues00) !== false)
      {
            $VRAD0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $VRAD1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $VRAD2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $VRAD3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}


////////////   BALANCE SHEET
$ACAE = 'ACAE';
$ASTI = 'ASTI';
$AACR = 'AACR'; ///sum
$ASTR = 'ASTR';
$APDA = 'APDA';
$AAMT = 'AAMT';
$ADEP = 'ADEP';
$ATOT = 'ATOT';
$LAPB = 'LAPB';
$LSTD = 'LSTD';
$LCLD = 'LCLD';
$LLTD = 'LLTD';
$LCLO = 'LCLO';
$LTLL = 'LTLL';
$LMNR = 'LMNR';
$QTLE = 'QTLE';
$QTEL = 'QTEL';
$QCSO1 = 'QCSO1';
$QCSO2 = 'QCSO2';
$QTSN1 = 'QTSN1';
$QTSN2 = 'QTSN2';
$QTCO = 'QTCO';
$VFSS = 'VFSS';
$METL = 'METL';
$MNOS = 'MNOS';
$VRUQ = 'VRUQ';

if(strpos($row['COA'], $ACAE) !== false)
{
      $HelperValues00BAL = LTRIM(RTRIM($HelperValues0BAL)) . LTRIM(RTRIM($ACAE));
      $HelperValues11BAL = LTRIM(RTRIM($HelperValues1BAL)) . LTRIM(RTRIM($ACAE));
      $HelperValues22BAL = LTRIM(RTRIM($HelperValues2BAL)) . LTRIM(RTRIM($ACAE));
      $HelperValues33BAL = LTRIM(RTRIM($HelperValues3BAL)) . LTRIM(RTRIM($ACAE));

      if(strpos($row['HelperValues'], $HelperValues00BAL) !== false)
      {
            $ACAE0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BAL) !== false)
      {
            $ACAE1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BAL) !== false)
      {
            $ACAE2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BAL) !== false)
      {
            $ACAE3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $ASTI) !== false)
{
      $HelperValues00BAL = LTRIM(RTRIM($HelperValues0BAL)) . LTRIM(RTRIM($ASTI));
      $HelperValues11BAL = LTRIM(RTRIM($HelperValues1BAL)) . LTRIM(RTRIM($ASTI));
      $HelperValues22BAL = LTRIM(RTRIM($HelperValues2BAL)) . LTRIM(RTRIM($ASTI));
      $HelperValues33BAL = LTRIM(RTRIM($HelperValues3BAL)) . LTRIM(RTRIM($ASTI));

      if(strpos($row['HelperValues'], $HelperValues00BAL) !== false)
      {
            $ASTI0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BAL) !== false)
      {
            $ASTI1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BAL) !== false)
      {
            $ASTI2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BAL) !== false)
      {
            $ASTI3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $AACR) !== false)
{
      $HelperValues00BAL = LTRIM(RTRIM($HelperValues0BAL)) . LTRIM(RTRIM($AACR));
      $HelperValues11BAL = LTRIM(RTRIM($HelperValues1BAL)) . LTRIM(RTRIM($AACR));
      $HelperValues22BAL = LTRIM(RTRIM($HelperValues2BAL)) . LTRIM(RTRIM($AACR));
      $HelperValues33BAL = LTRIM(RTRIM($HelperValues3BAL)) . LTRIM(RTRIM($AACR));

      if(strpos($row['HelperValues'], $HelperValues00BAL) !== false)
      {
            $AACR0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BAL) !== false)
      {
            $AACR1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BAL) !== false)
      {
            $AACR2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BAL) !== false)
      {
            $AACR3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $ASTR) !== false)
{
      $HelperValues00BAL = LTRIM(RTRIM($HelperValues0BAL)) . LTRIM(RTRIM($ASTR));
      $HelperValues11BAL = LTRIM(RTRIM($HelperValues1BAL)) . LTRIM(RTRIM($ASTR));
      $HelperValues22BAL = LTRIM(RTRIM($HelperValues2BAL)) . LTRIM(RTRIM($ASTR));
      $HelperValues33BAL = LTRIM(RTRIM($HelperValues3BAL)) . LTRIM(RTRIM($ASTR));

      if(strpos($row['HelperValues'], $HelperValues00BAL) !== false)
      {
            $ASTR0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BAL) !== false)
      {
            $ASTR1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BAL) !== false)
      {
            $ASTR2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BAL) !== false)
      {
            $ASTR3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $APDA) !== false)
{
      $HelperValues00BAL = LTRIM(RTRIM($HelperValues0BAL)) . LTRIM(RTRIM($APDA));
      $HelperValues11BAL = LTRIM(RTRIM($HelperValues1BAL)) . LTRIM(RTRIM($APDA));
      $HelperValues22BAL = LTRIM(RTRIM($HelperValues2BAL)) . LTRIM(RTRIM($APDA));
      $HelperValues33BAL = LTRIM(RTRIM($HelperValues3BAL)) . LTRIM(RTRIM($APDA));

      if(strpos($row['HelperValues'], $HelperValues00BAL) !== false)
      {
            $APDA0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BAL) !== false)
      {
            $APDA1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BAL) !== false)
      {
            $APDA2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BAL) !== false)
      {
            $APDA3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $AAMT) !== false)
{
      $HelperValues00BAL = LTRIM(RTRIM($HelperValues0BAL)) . LTRIM(RTRIM($AAMT));
      $HelperValues11BAL = LTRIM(RTRIM($HelperValues1BAL)) . LTRIM(RTRIM($AAMT));
      $HelperValues22BAL = LTRIM(RTRIM($HelperValues2BAL)) . LTRIM(RTRIM($AAMT));
      $HelperValues33BAL = LTRIM(RTRIM($HelperValues3BAL)) . LTRIM(RTRIM($AAMT));

      if(strpos($row['HelperValues'], $HelperValues00BAL) !== false)
      {
            $AAMT0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BAL) !== false)
      {
            $AAMT1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BAL) !== false)
      {
            $AAMT2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BAL) !== false)
      {
            $AAMT3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $ADEP) !== false)
{
      $HelperValues00BAL = LTRIM(RTRIM($HelperValues0BAL)) . LTRIM(RTRIM($ADEP));
      $HelperValues11BAL = LTRIM(RTRIM($HelperValues1BAL)) . LTRIM(RTRIM($ADEP));
      $HelperValues22BAL = LTRIM(RTRIM($HelperValues2BAL)) . LTRIM(RTRIM($ADEP));
      $HelperValues33BAL = LTRIM(RTRIM($HelperValues3BAL)) . LTRIM(RTRIM($ADEP));

      if(strpos($row['HelperValues'], $HelperValues00BAL) !== false)
      {
            $ADEP0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BAL) !== false)
      {
            $ADEP1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BAL) !== false)
      {
            $ADEP2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BAL) !== false)
      {
            $ADEP3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $ATOT) !== false)
{
      $HelperValues00BAL = LTRIM(RTRIM($HelperValues0BAL)) . LTRIM(RTRIM($ATOT));
      $HelperValues11BAL = LTRIM(RTRIM($HelperValues1BAL)) . LTRIM(RTRIM($ATOT));
      $HelperValues22BAL = LTRIM(RTRIM($HelperValues2BAL)) . LTRIM(RTRIM($ATOT));
      $HelperValues33BAL = LTRIM(RTRIM($HelperValues3BAL)) . LTRIM(RTRIM($ATOT));
      
      if(strpos($row['HelperValues'], $HelperValues00BAL) !== false)
      {
            $ATOT0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }  
      if(strpos($row['HelperValues'], $HelperValues11BAL) !== false)
      {
            $ATOT1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BAL) !== false)
      {
            if($StatementDate3BAL==NULL)
            {
                $ATOT2[] = "";  
            }
            else
            {
               $ATOT2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);   
            }
            
      }
      if(strpos($row['HelperValues'], $HelperValues33BAL) !== false)
      {
            $ATOT3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $LAPB) !== false)
{
      $HelperValues00BAL = LTRIM(RTRIM($HelperValues0BAL)) . LTRIM(RTRIM($LAPB));
      $HelperValues11BAL = LTRIM(RTRIM($HelperValues1BAL)) . LTRIM(RTRIM($LAPB));
      $HelperValues22BAL = LTRIM(RTRIM($HelperValues2BAL)) . LTRIM(RTRIM($LAPB));
      $HelperValues33BAL = LTRIM(RTRIM($HelperValues3BAL)) . LTRIM(RTRIM($LAPB));

      if(strpos($row['HelperValues'], $HelperValues00BAL) !== false)
      {
            $LAPB0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BAL) !== false)
      {
            $LAPB1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BAL) !== false)
      {
            $LAPB2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BAL) !== false)
      {
            $LAPB3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $LSTD) !== false)
{
      $HelperValues00BAL = LTRIM(RTRIM($HelperValues0BAL)) . LTRIM(RTRIM($LSTD));
      $HelperValues11BAL = LTRIM(RTRIM($HelperValues1BAL)) . LTRIM(RTRIM($LSTD));
      $HelperValues22BAL = LTRIM(RTRIM($HelperValues2BAL)) . LTRIM(RTRIM($LSTD));
      $HelperValues33BAL = LTRIM(RTRIM($HelperValues3BAL)) . LTRIM(RTRIM($LSTD));

      if(strpos($row['HelperValues'], $HelperValues00BAL) !== false)
      {
            $LSTD0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BAL) !== false)
      {
            $LSTD1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BAL) !== false)
      {
            $LSTD2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BAL) !== false)
      {
            $LSTD3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $LCLD) !== false)
{
      $HelperValues00BAL = LTRIM(RTRIM($HelperValues0BAL)) . LTRIM(RTRIM($LCLD));
      $HelperValues11BAL = LTRIM(RTRIM($HelperValues1BAL)) . LTRIM(RTRIM($LCLD));
      $HelperValues22BAL = LTRIM(RTRIM($HelperValues2BAL)) . LTRIM(RTRIM($LCLD));
      $HelperValues33BAL = LTRIM(RTRIM($HelperValues3BAL)) . LTRIM(RTRIM($LCLD));

      if(strpos($row['HelperValues'], $HelperValues00BAL) !== false)
      {
            $LCLD0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BAL) !== false)
      {
            $LCLD1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BAL) !== false)
      {
            $LCLD2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BAL) !== false)
      {
            $LCLD3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $LLTD) !== false)
{
      $HelperValues00BAL = LTRIM(RTRIM($HelperValues0BAL)) . LTRIM(RTRIM($LLTD));
      $HelperValues11BAL = LTRIM(RTRIM($HelperValues1BAL)) . LTRIM(RTRIM($LLTD));
      $HelperValues22BAL = LTRIM(RTRIM($HelperValues2BAL)) . LTRIM(RTRIM($LLTD));
      $HelperValues33BAL = LTRIM(RTRIM($HelperValues3BAL)) . LTRIM(RTRIM($LLTD));

      if(strpos($row['HelperValues'], $HelperValues00BAL) !== false)
      {
            $LLTD0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BAL) !== false)
      {
            $LLTD1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BAL) !== false)
      {
            $LLTD2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BAL) !== false)
      {
            $LLTD3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $LCLO) !== false)
{
      $HelperValues00BAL = LTRIM(RTRIM($HelperValues0BAL)) . LTRIM(RTRIM($LCLO));
      $HelperValues11BAL = LTRIM(RTRIM($HelperValues1BAL)) . LTRIM(RTRIM($LCLO));
      $HelperValues22BAL = LTRIM(RTRIM($HelperValues2BAL)) . LTRIM(RTRIM($LCLO));
      $HelperValues33BAL = LTRIM(RTRIM($HelperValues3BAL)) . LTRIM(RTRIM($LCLO));

      if(strpos($row['HelperValues'], $HelperValues00BAL) !== false)
      {
            $LCLO0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BAL) !== false)
      {
            $LCLO1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BAL) !== false)
      {
            $LCLO2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BAL) !== false)
      {
            $LCLO3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $LTLL) !== false)
{
      $HelperValues00BAL = LTRIM(RTRIM($HelperValues0BAL)) . LTRIM(RTRIM($LTLL));
      $HelperValues11BAL = LTRIM(RTRIM($HelperValues1BAL)) . LTRIM(RTRIM($LTLL));
      $HelperValues22BAL = LTRIM(RTRIM($HelperValues2BAL)) . LTRIM(RTRIM($LTLL));
      $HelperValues33BAL = LTRIM(RTRIM($HelperValues3BAL)) . LTRIM(RTRIM($LTLL));

      if(strpos($row['HelperValues'], $HelperValues00BAL) !== false)
      {
            $LTLL0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BAL) !== false)
      {
            $LTLL1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BAL) !== false)
      {
            $LTLL2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BAL) !== false)
      {
            $LTLL3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $LMNR) !== false)
{
      $HelperValues00BAL = LTRIM(RTRIM($HelperValues0BAL)) . LTRIM(RTRIM($LMNR));
      $HelperValues11BAL = LTRIM(RTRIM($HelperValues1BAL)) . LTRIM(RTRIM($LMNR));
      $HelperValues22BAL = LTRIM(RTRIM($HelperValues2BAL)) . LTRIM(RTRIM($LMNR));
      $HelperValues33BAL = LTRIM(RTRIM($HelperValues3BAL)) . LTRIM(RTRIM($LMNR));

      if(strpos($row['HelperValues'], $HelperValues00BAL) !== false)
      {
            $LMNR0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BAL) !== false)
      {
            $LMNR1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BAL) !== false)
      {
            $LMNR2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BAL) !== false)
      {
            $LMNR3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $QTLE) !== false)
{
      $HelperValues00BAL = LTRIM(RTRIM($HelperValues0BAL)) . LTRIM(RTRIM($QTLE));
      $HelperValues11BAL = LTRIM(RTRIM($HelperValues1BAL)) . LTRIM(RTRIM($QTLE));
      $HelperValues22BAL = LTRIM(RTRIM($HelperValues2BAL)) . LTRIM(RTRIM($QTLE));
      $HelperValues33BAL = LTRIM(RTRIM($HelperValues3BAL)) . LTRIM(RTRIM($QTLE));

      if(strpos($row['HelperValues'], $HelperValues00BAL) !== false)
      {
            $QTLE0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BAL) !== false)
      {
            $QTLE1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BAL) !== false)
      {
            $QTLE2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BAL) !== false)
      {
            $QTLE3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $QTEL) !== false)
{
      $HelperValues00BAL = LTRIM(RTRIM($HelperValues0BAL)) . LTRIM(RTRIM($QTEL));
      $HelperValues11BAL = LTRIM(RTRIM($HelperValues1BAL)) . LTRIM(RTRIM($QTEL));
      $HelperValues22BAL = LTRIM(RTRIM($HelperValues2BAL)) . LTRIM(RTRIM($QTEL));
      $HelperValues33BAL = LTRIM(RTRIM($HelperValues3BAL)) . LTRIM(RTRIM($QTEL));

      if(strpos($row['HelperValues'], $HelperValues00BAL) !== false)
      {
            $QTEL0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BAL) !== false)
      {
            $QTEL1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BAL) !== false)
      {
            $QTEL2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BAL) !== false)
      {
            $QTEL3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $QCSO1) !== false)
{
      $HelperValues00BAL = LTRIM(RTRIM($HelperValues0BAL)) . LTRIM(RTRIM($QCSO1));
      $HelperValues11BAL = LTRIM(RTRIM($HelperValues1BAL)) . LTRIM(RTRIM($QCSO1));
      $HelperValues22BAL = LTRIM(RTRIM($HelperValues2BAL)) . LTRIM(RTRIM($QCSO1));
      $HelperValues33BAL = LTRIM(RTRIM($HelperValues3BAL)) . LTRIM(RTRIM($QCSO1));

      if(strpos($row['HelperValues'], $HelperValues00BAL) !== false)
      {
            $QCSO10[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BAL) !== false)
      {
            $QCSO11[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BAL) !== false)
      {
            $QCSO12[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BAL) !== false)
      {
            $QCSO13[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $QCSO2) !== false)
{
      $HelperValues00BAL = LTRIM(RTRIM($HelperValues0BAL)) . LTRIM(RTRIM($QCSO2));
      $HelperValues11BAL = LTRIM(RTRIM($HelperValues1BAL)) . LTRIM(RTRIM($QCSO2));
      $HelperValues22BAL = LTRIM(RTRIM($HelperValues2BAL)) . LTRIM(RTRIM($QCSO2));
      $HelperValues33BAL = LTRIM(RTRIM($HelperValues3BAL)) . LTRIM(RTRIM($QCSO2));

      if(strpos($row['HelperValues'], $HelperValues00BAL) !== false)
      {
            $QCSO20[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BAL) !== false)
      {
            $QCSO21[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BAL) !== false)
      {
            $QCSO22[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BAL) !== false)
      {
            $QCSO23[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $QTSN1) !== false)
{
      $HelperValues00BAL = LTRIM(RTRIM($HelperValues0BAL)) . LTRIM(RTRIM($QTSN1));
      $HelperValues11BAL = LTRIM(RTRIM($HelperValues1BAL)) . LTRIM(RTRIM($QTSN1));
      $HelperValues22BAL = LTRIM(RTRIM($HelperValues2BAL)) . LTRIM(RTRIM($QTSN1));
      $HelperValues33BAL = LTRIM(RTRIM($HelperValues3BAL)) . LTRIM(RTRIM($QTSN1));

      if(strpos($row['HelperValues'], $HelperValues00BAL) !== false)
      {
            $QTSN10[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BAL) !== false)
      {
            $QTSN11[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BAL) !== false)
      {
            $QTSN12[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BAL) !== false)
      {
            $QTSN13[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $QTSN2) !== false)
{
      $HelperValues00BAL = LTRIM(RTRIM($HelperValues0BAL)) . LTRIM(RTRIM($QTSN2));
      $HelperValues11BAL = LTRIM(RTRIM($HelperValues1BAL)) . LTRIM(RTRIM($QTSN2));
      $HelperValues22BAL = LTRIM(RTRIM($HelperValues2BAL)) . LTRIM(RTRIM($QTSN2));
      $HelperValues33BAL = LTRIM(RTRIM($HelperValues3BAL)) . LTRIM(RTRIM($QTSN2));

      if(strpos($row['HelperValues'], $HelperValues00BAL) !== false)
      {
            $QTSN20[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BAL) !== false)
      {
            $QTSN21[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BAL) !== false)
      {
            $QTSN22[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BAL) !== false)
      {
            $QTSN23[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $QTCO) !== false)
{
      $HelperValues00BAL = LTRIM(RTRIM($HelperValues0BAL)) . LTRIM(RTRIM($QTCO));
      $HelperValues11BAL = LTRIM(RTRIM($HelperValues1BAL)) . LTRIM(RTRIM($QTCO));
      $HelperValues22BAL = LTRIM(RTRIM($HelperValues2BAL)) . LTRIM(RTRIM($QTCO));
      $HelperValues33BAL = LTRIM(RTRIM($HelperValues3BAL)) . LTRIM(RTRIM($QTCO));

      if(strpos($row['HelperValues'], $HelperValues00BAL) !== false)
      {
            $QTCO0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BAL) !== false)
      {
            $QTCO1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BAL) !== false)
      {
            $QTCO2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BAL) !== false)
      {
            $QTCO3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $VFSS) !== false)
{
      $HelperValues00BAL = LTRIM(RTRIM($HelperValues0BAL)) . LTRIM(RTRIM($VFSS));
      $HelperValues11BAL = LTRIM(RTRIM($HelperValues1BAL)) . LTRIM(RTRIM($VFSS));
      $HelperValues22BAL = LTRIM(RTRIM($HelperValues2BAL)) . LTRIM(RTRIM($VFSS));
      $HelperValues33BAL = LTRIM(RTRIM($HelperValues3BAL)) . LTRIM(RTRIM($VFSS));

      if(strpos($row['HelperValues'], $HelperValues00BAL) !== false)
      {
            $VFSS0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BAL) !== false)
      {
            $VFSS1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BAL) !== false)
      {
            $VFSS2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BAL) !== false)
      {
            $VFSS3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $METL) !== false)
{
      $HelperValues00BAL = LTRIM(RTRIM($HelperValues0BAL)) . LTRIM(RTRIM($METL));
      $HelperValues11BAL = LTRIM(RTRIM($HelperValues1BAL)) . LTRIM(RTRIM($METL));
      $HelperValues22BAL = LTRIM(RTRIM($HelperValues2BAL)) . LTRIM(RTRIM($METL));
      $HelperValues33BAL = LTRIM(RTRIM($HelperValues3BAL)) . LTRIM(RTRIM($METL));

      if(strpos($row['HelperValues'], $HelperValues00BAL) !== false)
      {
            $METL0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BAL) !== false)
      {
            $METL1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BAL) !== false)
      {
            $METL2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BAL) !== false)
      {
            $METL3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $MNOS) !== false)
{
      $HelperValues00BAL = LTRIM(RTRIM($HelperValues0BAL)) . LTRIM(RTRIM($MNOS));
      $HelperValues11BAL = LTRIM(RTRIM($HelperValues1BAL)) . LTRIM(RTRIM($MNOS));
      $HelperValues22BAL = LTRIM(RTRIM($HelperValues2BAL)) . LTRIM(RTRIM($MNOS));
      $HelperValues33BAL = LTRIM(RTRIM($HelperValues3BAL)) . LTRIM(RTRIM($MNOS));

      if(strpos($row['HelperValues'], $HelperValues00BAL) !== false)
      {
            $MNOS0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BAL) !== false)
      {
            $MNOS1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BAL) !== false)
      {
            $MNOS2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BAL) !== false)
      {
            $MNOS3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $VRUQ) !== false)
{
      $HelperValues00BAL = LTRIM(RTRIM($HelperValues0BAL)) . LTRIM(RTRIM($VRUQ));
      $HelperValues11BAL = LTRIM(RTRIM($HelperValues1BAL)) . LTRIM(RTRIM($VRUQ));
      $HelperValues22BAL = LTRIM(RTRIM($HelperValues2BAL)) . LTRIM(RTRIM($VRUQ));
      $HelperValues33BAL = LTRIM(RTRIM($HelperValues3BAL)) . LTRIM(RTRIM($VRUQ));

      if(strpos($row['HelperValues'], $HelperValues00BAL) !== false)
      {
            $VRUQ0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BAL) !== false)
      {
            $VRUQ1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BAL) !== false)
      {
            $VRUQ2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BAL) !== false)
      {
            $VRUQ3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}


///////    CASH FLOW STATEMENT
$ONET = 'ONET';
$SDEP = 'SDEP';
$OAMI = 'OAMI';
$OTLO = 'OTLO';
$IBAQ = 'IBAQ';
$ICEX = 'ICEX';
$ITLI = 'ITLI';
$FLDN = 'FLDN';
$FSDN = 'FSDN';
$FLDI = 'FLDI';
$FSDI = 'FSDI';
$FLDR = 'FLDR';
$FSDR = 'FSDR';
$FTLF = 'FTLF';
$SFEE = 'SFEE';
$SNCC = 'SNCC';
$SNCB = 'SNCB';
$SNCE = 'SNCE';
$SCIP = 'SCIP';
$SCTP = 'SCTP';
$IINS = 'IINS';
$IINP = 'IINP';
$ISFA = 'ISFA';
$ISOI = 'ISOI';
$IIAQ = 'IIAQ';
$ISOB = 'ISOB';
$IIAQ = 'IIAQ';
$FSIC = 'FSIC';
$FRRC = 'FRRC';
$FSIP = 'FSIP';
$FRRP = 'FRRP';
$FDPC = 'FDPC';
$FDPP = 'FDPP';
$FRCP = 'FRCP';

if(strpos($row['COA'], $ONET) !== false)
{
      $HelperValues00CAS = LTRIM(RTRIM($HelperValues0CAS)) . LTRIM(RTRIM($ONET));
      $HelperValues11CAS = LTRIM(RTRIM($HelperValues1CAS)) . LTRIM(RTRIM($ONET));
      $HelperValues22CAS = LTRIM(RTRIM($HelperValues2CAS)) . LTRIM(RTRIM($ONET));
      $HelperValues33CAS = LTRIM(RTRIM($HelperValues3CAS)) . LTRIM(RTRIM($ONET));

      if(strpos($row['HelperValues'], $HelperValues00CAS) !== false)
      {
            $ONET0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CAS) !== false)
      {
            $ONET1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CAS) !== false)
      {
            $ONET2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CAS) !== false)
      {
            $ONET3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $SDEP) !== false)
{
      $HelperValues00CAS = LTRIM(RTRIM($HelperValues0CAS)) . LTRIM(RTRIM($SDEP));
      $HelperValues11CAS = LTRIM(RTRIM($HelperValues1CAS)) . LTRIM(RTRIM($SDEP));
      $HelperValues22CAS = LTRIM(RTRIM($HelperValues2CAS)) . LTRIM(RTRIM($SDEP));
      $HelperValues33CAS = LTRIM(RTRIM($HelperValues3CAS)) . LTRIM(RTRIM($SDEP));

      if(strpos($row['HelperValues'], $HelperValues00CAS) !== false)
      {
            $SDEP0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CAS) !== false)
      {
            $SDEP1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CAS) !== false)
      {
            $SDEP2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CAS) !== false)
      {
            $SDEP3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $OAMI) !== false)
{
      $HelperValues00CAS = LTRIM(RTRIM($HelperValues0CAS)) . LTRIM(RTRIM($OAMI));
      $HelperValues11CAS = LTRIM(RTRIM($HelperValues1CAS)) . LTRIM(RTRIM($OAMI));
      $HelperValues22CAS = LTRIM(RTRIM($HelperValues2CAS)) . LTRIM(RTRIM($OAMI));
      $HelperValues33CAS = LTRIM(RTRIM($HelperValues3CAS)) . LTRIM(RTRIM($OAMI));

      if(strpos($row['HelperValues'], $HelperValues00CAS) !== false)
      {
            $OAMI0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CAS) !== false)
      {
            $OAMI1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CAS) !== false)
      {
            $OAMI2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CAS) !== false)
      {
            $OAMI3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $OTLO) !== false)
{
      $HelperValues00CAS = LTRIM(RTRIM($HelperValues0CAS)) . LTRIM(RTRIM($OTLO));
      $HelperValues11CAS = LTRIM(RTRIM($HelperValues1CAS)) . LTRIM(RTRIM($OTLO));
      $HelperValues22CAS = LTRIM(RTRIM($HelperValues2CAS)) . LTRIM(RTRIM($OTLO));
      $HelperValues33CAS = LTRIM(RTRIM($HelperValues3CAS)) . LTRIM(RTRIM($OTLO));

      if(strpos($row['HelperValues'], $HelperValues00CAS) !== false)
      {
            $OTLO0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CAS) !== false)
      {
            $OTLO1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CAS) !== false)
      {
            $OTLO2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CAS) !== false)
      {
            $OTLO3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $IBAQ) !== false)
{
      $HelperValues00CAS = LTRIM(RTRIM($HelperValues0CAS)) . LTRIM(RTRIM($IBAQ));
      $HelperValues11CAS = LTRIM(RTRIM($HelperValues1CAS)) . LTRIM(RTRIM($IBAQ));
      $HelperValues22CAS = LTRIM(RTRIM($HelperValues2CAS)) . LTRIM(RTRIM($IBAQ));
      $HelperValues33CAS = LTRIM(RTRIM($HelperValues3CAS)) . LTRIM(RTRIM($IBAQ));

      if(strpos($row['HelperValues'], $HelperValues00CAS) !== false)
      {
            $IBAQ0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CAS) !== false)
      {
            $IBAQ1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CAS) !== false)
      {
            $IBAQ2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CAS) !== false)
      {
            $IBAQ3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $ICEX) !== false)
{
      $HelperValues00CAS = LTRIM(RTRIM($HelperValues0CAS)) . LTRIM(RTRIM($ICEX));
      $HelperValues11CAS = LTRIM(RTRIM($HelperValues1CAS)) . LTRIM(RTRIM($ICEX));
      $HelperValues22CAS = LTRIM(RTRIM($HelperValues2CAS)) . LTRIM(RTRIM($ICEX));
      $HelperValues33CAS = LTRIM(RTRIM($HelperValues3CAS)) . LTRIM(RTRIM($ICEX));

      if(strpos($row['HelperValues'], $HelperValues00CAS) !== false)
      {
            $ICEX0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CAS) !== false)
      {
            $ICEX1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CAS) !== false)
      {
            $ICEX2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CAS) !== false)
      {
            $ICEX3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $ITLI) !== false)
{
      $HelperValues00CAS = LTRIM(RTRIM($HelperValues0CAS)) . LTRIM(RTRIM($ITLI));
      $HelperValues11CAS = LTRIM(RTRIM($HelperValues1CAS)) . LTRIM(RTRIM($ITLI));
      $HelperValues22CAS = LTRIM(RTRIM($HelperValues2CAS)) . LTRIM(RTRIM($ITLI));
      $HelperValues33CAS = LTRIM(RTRIM($HelperValues3CAS)) . LTRIM(RTRIM($ITLI));

      if(strpos($row['HelperValues'], $HelperValues00CAS) !== false)
      {
            $ITLI0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CAS) !== false)
      {
            $ITLI1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CAS) !== false)
      {
            $ITLI2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CAS) !== false)
      {
            $ITLI3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $FLDN) !== false)
{
      $HelperValues00CAS = LTRIM(RTRIM($HelperValues0CAS)) . LTRIM(RTRIM($FLDN));
      $HelperValues11CAS = LTRIM(RTRIM($HelperValues1CAS)) . LTRIM(RTRIM($FLDN));
      $HelperValues22CAS = LTRIM(RTRIM($HelperValues2CAS)) . LTRIM(RTRIM($FLDN));
      $HelperValues33CAS = LTRIM(RTRIM($HelperValues3CAS)) . LTRIM(RTRIM($FLDN));

      if(strpos($row['HelperValues'], $HelperValues00CAS) !== false)
      {
            $FLDN0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CAS) !== false)
      {
            $FLDN1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CAS) !== false)
      {
            $FLDN2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CAS) !== false)
      {
            $FLDN3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $FSDN) !== false)
{
      $HelperValues00CAS = LTRIM(RTRIM($HelperValues0CAS)) . LTRIM(RTRIM($FSDN));
      $HelperValues11CAS = LTRIM(RTRIM($HelperValues1CAS)) . LTRIM(RTRIM($FSDN));
      $HelperValues22CAS = LTRIM(RTRIM($HelperValues2CAS)) . LTRIM(RTRIM($FSDN));
      $HelperValues33CAS = LTRIM(RTRIM($HelperValues3CAS)) . LTRIM(RTRIM($FSDN));

      if(strpos($row['HelperValues'], $HelperValues00CAS) !== false)
      {
            $FSDN0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CAS) !== false)
      {
            $FSDN1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CAS) !== false)
      {
            $FSDN2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CAS) !== false)
      {
            $FSDN3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $FLDI) !== false)
{
      $HelperValues00CAS = LTRIM(RTRIM($HelperValues0CAS)) . LTRIM(RTRIM($FLDI));
      $HelperValues11CAS = LTRIM(RTRIM($HelperValues1CAS)) . LTRIM(RTRIM($FLDI));
      $HelperValues22CAS = LTRIM(RTRIM($HelperValues2CAS)) . LTRIM(RTRIM($FLDI));
      $HelperValues33CAS = LTRIM(RTRIM($HelperValues3CAS)) . LTRIM(RTRIM($FLDI));

      if(strpos($row['HelperValues'], $HelperValues00CAS) !== false)
      {
            $FLDI0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CAS) !== false)
      {
            $FLDI1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CAS) !== false)
      {
            $FLDI2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CAS) !== false)
      {
            $FLDI3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $FSDI) !== false)
{
      $HelperValues00CAS = LTRIM(RTRIM($HelperValues0CAS)) . LTRIM(RTRIM($FSDI));
      $HelperValues11CAS = LTRIM(RTRIM($HelperValues1CAS)) . LTRIM(RTRIM($FSDI));
      $HelperValues22CAS = LTRIM(RTRIM($HelperValues2CAS)) . LTRIM(RTRIM($FSDI));
      $HelperValues33CAS = LTRIM(RTRIM($HelperValues3CAS)) . LTRIM(RTRIM($FSDI));

      if(strpos($row['HelperValues'], $HelperValues00CAS) !== false)
      {
            $FSDI0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CAS) !== false)
      {
            $FSDI1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CAS) !== false)
      {
            $FSDI2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CAS) !== false)
      {
            $FSDI3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $FLDR) !== false)
{
      $HelperValues00CAS = LTRIM(RTRIM($HelperValues0CAS)) . LTRIM(RTRIM($FLDR));
      $HelperValues11CAS = LTRIM(RTRIM($HelperValues1CAS)) . LTRIM(RTRIM($FLDR));
      $HelperValues22CAS = LTRIM(RTRIM($HelperValues2CAS)) . LTRIM(RTRIM($FLDR));
      $HelperValues33CAS = LTRIM(RTRIM($HelperValues3CAS)) . LTRIM(RTRIM($FLDR));

      if(strpos($row['HelperValues'], $HelperValues00CAS) !== false)
      {
            $FLDR0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CAS) !== false)
      {
            $FLDR1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CAS) !== false)
      {
            $FLDR2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CAS) !== false)
      {
            $FLDR3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $FSDR) !== false)
{
      $HelperValues00CAS = LTRIM(RTRIM($HelperValues0CAS)) . LTRIM(RTRIM($FSDR));
      $HelperValues11CAS = LTRIM(RTRIM($HelperValues1CAS)) . LTRIM(RTRIM($FSDR));
      $HelperValues22CAS = LTRIM(RTRIM($HelperValues2CAS)) . LTRIM(RTRIM($FSDR));
      $HelperValues33CAS = LTRIM(RTRIM($HelperValues3CAS)) . LTRIM(RTRIM($FSDR));

      if(strpos($row['HelperValues'], $HelperValues00CAS) !== false)
      {
            $FSDR0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CAS) !== false)
      {
            $FSDR1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CAS) !== false)
      {
            $FSDR2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CAS) !== false)
      {
            $FSDR3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $FTLF) !== false)
{
      $HelperValues00CAS = LTRIM(RTRIM($HelperValues0CAS)) . LTRIM(RTRIM($FTLF));
      $HelperValues11CAS = LTRIM(RTRIM($HelperValues1CAS)) . LTRIM(RTRIM($FTLF));
      $HelperValues22CAS = LTRIM(RTRIM($HelperValues2CAS)) . LTRIM(RTRIM($FTLF));
      $HelperValues33CAS = LTRIM(RTRIM($HelperValues3CAS)) . LTRIM(RTRIM($FTLF));

      if(strpos($row['HelperValues'], $HelperValues00CAS) !== false)
      {
            $FTLF0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CAS) !== false)
      {
            $FTLF1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CAS) !== false)
      {
            $FTLF2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CAS) !== false)
      {
            $FTLF3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $SFEE) !== false)
{
      $HelperValues00CAS = LTRIM(RTRIM($HelperValues0CAS)) . LTRIM(RTRIM($SFEE));
      $HelperValues11CAS = LTRIM(RTRIM($HelperValues1CAS)) . LTRIM(RTRIM($SFEE));
      $HelperValues22CAS = LTRIM(RTRIM($HelperValues2CAS)) . LTRIM(RTRIM($SFEE));
      $HelperValues33CAS = LTRIM(RTRIM($HelperValues3CAS)) . LTRIM(RTRIM($SFEE));

      if(strpos($row['HelperValues'], $HelperValues00CAS) !== false)
      {
            $SFEE0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CAS) !== false)
      {
            $SFEE1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CAS) !== false)
      {
            $SFEE2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CAS) !== false)
      {
            $SFEE3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $SNCC) !== false)
{
      $HelperValues00CAS = LTRIM(RTRIM($HelperValues0CAS)) . LTRIM(RTRIM($SNCC));
      $HelperValues11CAS = LTRIM(RTRIM($HelperValues1CAS)) . LTRIM(RTRIM($SNCC));
      $HelperValues22CAS = LTRIM(RTRIM($HelperValues2CAS)) . LTRIM(RTRIM($SNCC));
      $HelperValues33CAS = LTRIM(RTRIM($HelperValues3CAS)) . LTRIM(RTRIM($SNCC));

      if(strpos($row['HelperValues'], $HelperValues00CAS) !== false)
      {
            $SNCC0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CAS) !== false)
      {
            $SNCC1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CAS) !== false)
      {
            $SNCC2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CAS) !== false)
      {
            $SNCC3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $SNCB) !== false)
{
      $HelperValues00CAS = LTRIM(RTRIM($HelperValues0CAS)) . LTRIM(RTRIM($SNCB));
      $HelperValues11CAS = LTRIM(RTRIM($HelperValues1CAS)) . LTRIM(RTRIM($SNCB));
      $HelperValues22CAS = LTRIM(RTRIM($HelperValues2CAS)) . LTRIM(RTRIM($SNCB));
      $HelperValues33CAS = LTRIM(RTRIM($HelperValues3CAS)) . LTRIM(RTRIM($SNCB));

      if(strpos($row['HelperValues'], $HelperValues00CAS) !== false)
      {
            $SNCB0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CAS) !== false)
      {
            $SNCB1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CAS) !== false)
      {
            $SNCB2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CAS) !== false)
      {
            $SNCB3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $SNCE) !== false)
{
      $HelperValues00CAS = LTRIM(RTRIM($HelperValues0CAS)) . LTRIM(RTRIM($SNCE));
      $HelperValues11CAS = LTRIM(RTRIM($HelperValues1CAS)) . LTRIM(RTRIM($SNCE));
      $HelperValues22CAS = LTRIM(RTRIM($HelperValues2CAS)) . LTRIM(RTRIM($SNCE));
      $HelperValues33CAS = LTRIM(RTRIM($HelperValues3CAS)) . LTRIM(RTRIM($SNCE));

      if(strpos($row['HelperValues'], $HelperValues00CAS) !== false)
      {
            $SNCE0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CAS) !== false)
      {
            $SNCE1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CAS) !== false)
      {
            $SNCE2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CAS) !== false)
      {
            $SNCE3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $SCIP) !== false)
{
      $HelperValues00CAS = LTRIM(RTRIM($HelperValues0CAS)) . LTRIM(RTRIM($SCIP));
      $HelperValues11CAS = LTRIM(RTRIM($HelperValues1CAS)) . LTRIM(RTRIM($SCIP));
      $HelperValues22CAS = LTRIM(RTRIM($HelperValues2CAS)) . LTRIM(RTRIM($SCIP));
      $HelperValues33CAS = LTRIM(RTRIM($HelperValues3CAS)) . LTRIM(RTRIM($SCIP));

      if(strpos($row['HelperValues'], $HelperValues00CAS) !== false)
      {
            $SCIP0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CAS) !== false)
      {
            $SCIP1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CAS) !== false)
      {
            $SCIP2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CAS) !== false)
      {
            $SCIP3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $SCTP) !== false)
{
      $HelperValues00CAS = LTRIM(RTRIM($HelperValues0CAS)) . LTRIM(RTRIM($SCTP));
      $HelperValues11CAS = LTRIM(RTRIM($HelperValues1CAS)) . LTRIM(RTRIM($SCTP));
      $HelperValues22CAS = LTRIM(RTRIM($HelperValues2CAS)) . LTRIM(RTRIM($SCTP));
      $HelperValues33CAS = LTRIM(RTRIM($HelperValues3CAS)) . LTRIM(RTRIM($SCTP));

      if(strpos($row['HelperValues'], $HelperValues00CAS) !== false)
      {
            $SCTP0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CAS) !== false)
      {
            $SCTP1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CAS) !== false)
      {
            $SCTP2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CAS) !== false)
      {
            $SCTP3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $IINS) !== false)
{
      $HelperValues00CAS = LTRIM(RTRIM($HelperValues0CAS)) . LTRIM(RTRIM($IINS));
      $HelperValues11CAS = LTRIM(RTRIM($HelperValues1CAS)) . LTRIM(RTRIM($IINS));
      $HelperValues22CAS = LTRIM(RTRIM($HelperValues2CAS)) . LTRIM(RTRIM($IINS));
      $HelperValues33CAS = LTRIM(RTRIM($HelperValues3CAS)) . LTRIM(RTRIM($IINS));

      if(strpos($row['HelperValues'], $HelperValues00CAS) !== false)
      {
            $IINS0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CAS) !== false)
      {
            $IINS1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CAS) !== false)
      {
            $IINS2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CAS) !== false)
      {
            $IINS3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $IINP) !== false)
{
      $HelperValues00CAS = LTRIM(RTRIM($HelperValues0CAS)) . LTRIM(RTRIM($IINP));
      $HelperValues11CAS = LTRIM(RTRIM($HelperValues1CAS)) . LTRIM(RTRIM($IINP));
      $HelperValues22CAS = LTRIM(RTRIM($HelperValues2CAS)) . LTRIM(RTRIM($IINP));
      $HelperValues33CAS = LTRIM(RTRIM($HelperValues3CAS)) . LTRIM(RTRIM($IINP));

      if(strpos($row['HelperValues'], $HelperValues00CAS) !== false)
      {
            $IINP0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CAS) !== false)
      {
            $IINP1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CAS) !== false)
      {
            $IINP2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CAS) !== false)
      {
            $IINP3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $ISFA) !== false)
{
      $HelperValues00CAS = LTRIM(RTRIM($HelperValues0CAS)) . LTRIM(RTRIM($ISFA));
      $HelperValues11CAS = LTRIM(RTRIM($HelperValues1CAS)) . LTRIM(RTRIM($ISFA));
      $HelperValues22CAS = LTRIM(RTRIM($HelperValues2CAS)) . LTRIM(RTRIM($ISFA));
      $HelperValues33CAS = LTRIM(RTRIM($HelperValues3CAS)) . LTRIM(RTRIM($ISFA));

      if(strpos($row['HelperValues'], $HelperValues00CAS) !== false)
      {
            $ISFA0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CAS) !== false)
      {
            $ISFA1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CAS) !== false)
      {
            $ISFA2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CAS) !== false)
      {
            $ISFA3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $ISOI) !== false)
{
      $HelperValues00CAS = LTRIM(RTRIM($HelperValues0CAS)) . LTRIM(RTRIM($ISOI));
      $HelperValues11CAS = LTRIM(RTRIM($HelperValues1CAS)) . LTRIM(RTRIM($ISOI));
      $HelperValues22CAS = LTRIM(RTRIM($HelperValues2CAS)) . LTRIM(RTRIM($ISOI));
      $HelperValues33CAS = LTRIM(RTRIM($HelperValues3CAS)) . LTRIM(RTRIM($ISOI));

      if(strpos($row['HelperValues'], $HelperValues00CAS) !== false)
      {
            $ISOI0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CAS) !== false)
      {
            $ISOI1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CAS) !== false)
      {
            $ISOI2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CAS) !== false)
      {
            $ISOI3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $IIAQ) !== false)
{
      $HelperValues00CAS = LTRIM(RTRIM($HelperValues0CAS)) . LTRIM(RTRIM($IIAQ));
      $HelperValues11CAS = LTRIM(RTRIM($HelperValues1CAS)) . LTRIM(RTRIM($IIAQ));
      $HelperValues22CAS = LTRIM(RTRIM($HelperValues2CAS)) . LTRIM(RTRIM($IIAQ));
      $HelperValues33CAS = LTRIM(RTRIM($HelperValues3CAS)) . LTRIM(RTRIM($IIAQ));

      if(strpos($row['HelperValues'], $HelperValues00CAS) !== false)
      {
            $IIAQ0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CAS) !== false)
      {
            $IIAQ1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CAS) !== false)
      {
            $IIAQ2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CAS) !== false)
      {
            $IIAQ3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $ISOB) !== false)
{
      $HelperValues00CAS = LTRIM(RTRIM($HelperValues0CAS)) . LTRIM(RTRIM($ISOB));
      $HelperValues11CAS = LTRIM(RTRIM($HelperValues1CAS)) . LTRIM(RTRIM($ISOB));
      $HelperValues22CAS = LTRIM(RTRIM($HelperValues2CAS)) . LTRIM(RTRIM($ISOB));
      $HelperValues33CAS = LTRIM(RTRIM($HelperValues3CAS)) . LTRIM(RTRIM($ISOB));

      if(strpos($row['HelperValues'], $HelperValues00CAS) !== false)
      {
            $ISOB0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CAS) !== false)
      {
            $ISOB1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CAS) !== false)
      {
            $ISOB2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CAS) !== false)
      {
            $ISOB3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $FSIC) !== false)
{
      $HelperValues00CAS = LTRIM(RTRIM($HelperValues0CAS)) . LTRIM(RTRIM($FSIC));
      $HelperValues11CAS = LTRIM(RTRIM($HelperValues1CAS)) . LTRIM(RTRIM($FSIC));
      $HelperValues22CAS = LTRIM(RTRIM($HelperValues2CAS)) . LTRIM(RTRIM($FSIC));
      $HelperValues33CAS = LTRIM(RTRIM($HelperValues3CAS)) . LTRIM(RTRIM($FSIC));

      if(strpos($row['HelperValues'], $HelperValues00CAS) !== false)
      {
            $FSIC0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CAS) !== false)
      {
            $FSIC1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CAS) !== false)
      {
            $FSIC2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CAS) !== false)
      {
            $FSIC3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $FRRC) !== false)
{
      $HelperValues00CAS = LTRIM(RTRIM($HelperValues0CAS)) . LTRIM(RTRIM($FRRC));
      $HelperValues11CAS = LTRIM(RTRIM($HelperValues1CAS)) . LTRIM(RTRIM($FRRC));
      $HelperValues22CAS = LTRIM(RTRIM($HelperValues2CAS)) . LTRIM(RTRIM($FRRC));
      $HelperValues33CAS = LTRIM(RTRIM($HelperValues3CAS)) . LTRIM(RTRIM($FRRC));

      if(strpos($row['HelperValues'], $HelperValues00CAS) !== false)
      {
            $FRRC0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CAS) !== false)
      {
            $FRRC1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CAS) !== false)
      {
            $FRRC2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CAS) !== false)
      {
            $FRRC3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $FSIP) !== false)
{
      $HelperValues00CAS = LTRIM(RTRIM($HelperValues0CAS)) . LTRIM(RTRIM($FSIP));
      $HelperValues11CAS = LTRIM(RTRIM($HelperValues1CAS)) . LTRIM(RTRIM($FSIP));
      $HelperValues22CAS = LTRIM(RTRIM($HelperValues2CAS)) . LTRIM(RTRIM($FSIP));
      $HelperValues33CAS = LTRIM(RTRIM($HelperValues3CAS)) . LTRIM(RTRIM($FSIP));

      if(strpos($row['HelperValues'], $HelperValues00CAS) !== false)
      {
            $FSIP0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CAS) !== false)
      {
            $FSIP1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CAS) !== false)
      {
            $FSIP2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CAS) !== false)
      {
            $FSIP3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $FRRP) !== false)
{
      $HelperValues00CAS = LTRIM(RTRIM($HelperValues0CAS)) . LTRIM(RTRIM($FRRP));
      $HelperValues11CAS = LTRIM(RTRIM($HelperValues1CAS)) . LTRIM(RTRIM($FRRP));
      $HelperValues22CAS = LTRIM(RTRIM($HelperValues2CAS)) . LTRIM(RTRIM($FRRP));
      $HelperValues33CAS = LTRIM(RTRIM($HelperValues3CAS)) . LTRIM(RTRIM($FRRP));

      if(strpos($row['HelperValues'], $HelperValues00CAS) !== false)
      {
            $FRRP0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CAS) !== false)
      {
            $FRRP1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CAS) !== false)
      {
            $FRRP2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CAS) !== false)
      {
            $FRRP3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $FDPC) !== false)
{
      $HelperValues00CAS = LTRIM(RTRIM($HelperValues0CAS)) . LTRIM(RTRIM($FDPC));
      $HelperValues11CAS = LTRIM(RTRIM($HelperValues1CAS)) . LTRIM(RTRIM($FDPC));
      $HelperValues22CAS = LTRIM(RTRIM($HelperValues2CAS)) . LTRIM(RTRIM($FDPC));
      $HelperValues33CAS = LTRIM(RTRIM($HelperValues3CAS)) . LTRIM(RTRIM($FDPC));

      if(strpos($row['HelperValues'], $HelperValues00CAS) !== false)
      {
            $FDPC0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CAS) !== false)
      {
            $FDPC1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CAS) !== false)
      {
            $FDPC2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CAS) !== false)
      {
            $FDPC3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $FDPP) !== false)
{
      $HelperValues00CAS = LTRIM(RTRIM($HelperValues0CAS)) . LTRIM(RTRIM($FDPP));
      $HelperValues11CAS = LTRIM(RTRIM($HelperValues1CAS)) . LTRIM(RTRIM($FDPP));
      $HelperValues22CAS = LTRIM(RTRIM($HelperValues2CAS)) . LTRIM(RTRIM($FDPP));
      $HelperValues33CAS = LTRIM(RTRIM($HelperValues3CAS)) . LTRIM(RTRIM($FDPP));

      if(strpos($row['HelperValues'], $HelperValues00CAS) !== false)
      {
            $FDPP0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CAS) !== false)
      {
            $FDPP1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CAS) !== false)
      {
            $FDPP2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CAS) !== false)
      {
            $FDPP3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $FRCP) !== false)
{
      $HelperValues00CAS = LTRIM(RTRIM($HelperValues0CAS)) . LTRIM(RTRIM($FRCP));
      $HelperValues11CAS = LTRIM(RTRIM($HelperValues1CAS)) . LTRIM(RTRIM($FRCP));
      $HelperValues22CAS = LTRIM(RTRIM($HelperValues2CAS)) . LTRIM(RTRIM($FRCP));
      $HelperValues33CAS = LTRIM(RTRIM($HelperValues3CAS)) . LTRIM(RTRIM($FRCP));

      if(strpos($row['HelperValues'], $HelperValues00CAS) !== false)
      {
            $FRCP0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CAS) !== false)
      {
            $FRCP1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CAS) !== false)
      {
            $FRCP2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CAS) !== false)
      {
            $FRCP3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}


$REXRbs = "REXR";
$RINRbs = "RINR";
$EIBTbs = "EIBT";
$TTAXbs = "TTAX";
$TIATbs = "TIAT";
$CEIAbs = "CEIA";
$EUIEbs = "EUIE";
$ATOTbs = "ATOT";
$LTLLbs = "LTLL";


if(strpos($row['COA'], $REXRbs) !== false)
{
      $HelperValues00BS = LTRIM(RTRIM($HelperValues0BS)) . LTRIM(RTRIM($REXRbs));
      $HelperValues11BS = LTRIM(RTRIM($HelperValues1BS)) . LTRIM(RTRIM($REXRbs));
      $HelperValues22BS = LTRIM(RTRIM($HelperValues2BS)) . LTRIM(RTRIM($REXRbs));
      $HelperValues33BS = LTRIM(RTRIM($HelperValues3BS)) . LTRIM(RTRIM($REXRbs));

      if(strpos($row['HelperValues'], $HelperValues00BS) !== false)
      {
            $REXRbs0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling0BS, FILTER_SANITIZE_NUMBER_INT); 
      }
      if(strpos($row['HelperValues'], $HelperValues11BS) !== false)
      {
            $REXRbs1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling1BS, FILTER_SANITIZE_NUMBER_INT);   
      }
      if(strpos($row['HelperValues'], $HelperValues22BS) !== false)
      {
            $REXRbs2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling2BS, FILTER_SANITIZE_NUMBER_INT);   
      }
      if(strpos($row['HelperValues'], $HelperValues33BS) !== false)
      {
            $REXRbs3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling3BS, FILTER_SANITIZE_NUMBER_INT);
            
      }
      
}

if(strpos($row['COA'], $RINRbs) !== false)
{
      $HelperValues00BS = LTRIM(RTRIM($HelperValues0BS)) . LTRIM(RTRIM($RINRbs));
      $HelperValues11BS = LTRIM(RTRIM($HelperValues1BS)) . LTRIM(RTRIM($RINRbs));
      $HelperValues22BS = LTRIM(RTRIM($HelperValues2BS)) . LTRIM(RTRIM($RINRbs));
      $HelperValues33BS = LTRIM(RTRIM($HelperValues3BS)) . LTRIM(RTRIM($RINRbs));

      if(strpos($row['HelperValues'], $HelperValues00BS) !== false)
      {
            $RINRbs0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling0BS, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BS) !== false)
      {
            $RINRbs1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling1BS, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BS) !== false)
      {
            $RINRbs2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling2BS, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BS) !== false)
      {
            $RINRbs3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling3BS, FILTER_SANITIZE_NUMBER_INT);;
      }
}

if(strpos($row['COA'], $EIBTbs) !== false)
{
      $HelperValues00BS = LTRIM(RTRIM($HelperValues0BS)) . LTRIM(RTRIM($EIBTbs));
      $HelperValues11BS = LTRIM(RTRIM($HelperValues1BS)) . LTRIM(RTRIM($EIBTbs));
      $HelperValues22BS = LTRIM(RTRIM($HelperValues2BS)) . LTRIM(RTRIM($EIBTbs));
      $HelperValues33BS = LTRIM(RTRIM($HelperValues3BS)) . LTRIM(RTRIM($EIBTbs));

      if(strpos($row['HelperValues'], $HelperValues00BS) !== false)
      {
            $EIBTbs0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling0BS, FILTER_SANITIZE_NUMBER_INT);
            
      }
      if(strpos($row['HelperValues'], $HelperValues11BS) !== false)
      {
            $EIBTbs1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling1BS, FILTER_SANITIZE_NUMBER_INT);
            
      }
      if(strpos($row['HelperValues'], $HelperValues22BS) !== false)
      {
            $EIBTbs2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling2BS, FILTER_SANITIZE_NUMBER_INT);
            
      }
      if(strpos($row['HelperValues'], $HelperValues33BS) !== false)
      {
            $EIBTbs3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling3BS, FILTER_SANITIZE_NUMBER_INT);
           
      }
}

if(strpos($row['COA'], $TTAXbs) !== false)
{
      $HelperValues00BS = LTRIM(RTRIM($HelperValues0BS)) . LTRIM(RTRIM($TTAXbs));
      $HelperValues11BS = LTRIM(RTRIM($HelperValues1BS)) . LTRIM(RTRIM($TTAXbs));
      $HelperValues22BS = LTRIM(RTRIM($HelperValues2BS)) . LTRIM(RTRIM($TTAXbs));
      $HelperValues33BS = LTRIM(RTRIM($HelperValues3BS)) . LTRIM(RTRIM($TTAXbs));

      if(strpos($row['HelperValues'], $HelperValues00BS) !== false)
      {
            $TTAXbs0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling0BS, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BS) !== false)
      {
            $TTAXbs1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling1BS, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BS) !== false)
      {
            $TTAXbs2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling2BS, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BS) !== false)
      {
            $TTAXbs3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling3BS, FILTER_SANITIZE_NUMBER_INT);;
      }
}

if(strpos($row['COA'], $TIATbs) !== false)
{
      $HelperValues00BS = LTRIM(RTRIM($HelperValues0BS)) . LTRIM(RTRIM($TIATbs));
      $HelperValues11BS = LTRIM(RTRIM($HelperValues1BS)) . LTRIM(RTRIM($TIATbs));
      $HelperValues22BS = LTRIM(RTRIM($HelperValues2BS)) . LTRIM(RTRIM($TIATbs));
      $HelperValues33BS = LTRIM(RTRIM($HelperValues3BS)) . LTRIM(RTRIM($TIATbs));

      if(strpos($row['HelperValues'], $HelperValues00BS) !== false)
      {
            $TIATbs0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling0BS, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BS) !== false)
      {
            $TIATbs1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling1BS, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BS) !== false)
      {
            $TIATbs2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling2BS, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BS) !== false)
      {
            $TIATbs3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling3BS, FILTER_SANITIZE_NUMBER_INT);;
      }
}

if(strpos($row['COA'], $CEIAbs) !== false)
{
      $HelperValues00BS = LTRIM(RTRIM($HelperValues0BS)) . LTRIM(RTRIM($CEIAbs));
      $HelperValues11BS = LTRIM(RTRIM($HelperValues1BS)) . LTRIM(RTRIM($CEIAbs));
      $HelperValues22BS = LTRIM(RTRIM($HelperValues2BS)) . LTRIM(RTRIM($CEIAbs));
      $HelperValues33BS = LTRIM(RTRIM($HelperValues3BS)) . LTRIM(RTRIM($CEIAbs));

      if(strpos($row['HelperValues'], $HelperValues00BS) !== false)
      {
            $CEIAbs0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling0BS, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BS) !== false)
      {
            $CEIAbs1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling1BS, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BS) !== false)
      {
            $CEIAbs2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling2BS, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BS) !== false)
      {
            $CEIAbs3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling3BS, FILTER_SANITIZE_NUMBER_INT);;
      }
}

if(strpos($row['COA'], $EUIEbs) !== false)
{
      $HelperValues00BS = LTRIM(RTRIM($HelperValues0BS)) . LTRIM(RTRIM($EUIEbs));
      $HelperValues11BS = LTRIM(RTRIM($HelperValues1BS)) . LTRIM(RTRIM($EUIEbs));
      $HelperValues22BS = LTRIM(RTRIM($HelperValues2BS)) . LTRIM(RTRIM($EUIEbs));
      $HelperValues33BS = LTRIM(RTRIM($HelperValues3BS)) . LTRIM(RTRIM($EUIEbs));

      if(strpos($row['HelperValues'], $HelperValues00BS) !== false)
      {
            $EUIEbs0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling0BS, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BS) !== false)
      {
            $EUIEbs1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling1BS, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BS) !== false)
      {
            $EUIEbs2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling2BS, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BS) !== false)
      {
            $EUIEbs3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling3BS, FILTER_SANITIZE_NUMBER_INT);;
      }
}

if(strpos($row['COA'], $ATOTbs) !== false)
{
      $HelperValues00BS = LTRIM(RTRIM($HelperValues0BS)) . LTRIM(RTRIM($ATOTbs));
      $HelperValues11BS = LTRIM(RTRIM($HelperValues1BS)) . LTRIM(RTRIM($ATOTbs));
      $HelperValues22BS = LTRIM(RTRIM($HelperValues2BS)) . LTRIM(RTRIM($ATOTbs));
      $HelperValues33BS = LTRIM(RTRIM($HelperValues3BS)) . LTRIM(RTRIM($ATOTbs));

      if(strpos($row['HelperValues'], $HelperValues00BS) !== false)
      {
            $ATOTbs0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling0BS, FILTER_SANITIZE_NUMBER_INT);
            
      }
      if(strpos($row['HelperValues'], $HelperValues11BS) !== false)
      {
            $ATOTbs1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling1BS, FILTER_SANITIZE_NUMBER_INT);
            if($ATOTbs1==null)
            {
                  $ATOTbsdiff1 = "-";
            }
            else
            {
                  $ATOTbsdiff1 = filter_var($ATOT1, FILTER_SANITIZE_NUMBER_INT) - filter_var($ATOTbs1, FILTER_SANITIZE_NUMBER_INT);    
            }
      }
      if(strpos($row['HelperValues'], $HelperValues22BS) !== false)
      {
            $ATOTbs2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling2BS, FILTER_SANITIZE_NUMBER_INT);
            if($ATOTbs2==null)
            {
                  $ATOTbsdiff2 = "-";
            }
            else
            {
                  $ATOTbsdiff2 = filter_var($ATOT2, FILTER_SANITIZE_NUMBER_INT) - filter_var($ATOTbs2, FILTER_SANITIZE_NUMBER_INT);    
            }
      }
      if(strpos($row['HelperValues'], $HelperValues33BS) !== false)
      {
            $ATOTbs3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling3BS, FILTER_SANITIZE_NUMBER_INT);
            if($ATOTbs3==null)
            {
                  $ATOTbsdiff3 = "-";
            }
            else
            {
                  $ATOTbsdiff3 = filter_var($ATOT3, FILTER_SANITIZE_NUMBER_INT) - filter_var($ATOTbs3, FILTER_SANITIZE_NUMBER_INT);    
            }
      }
}

if(strpos($row['COA'], $LTLLbs) !== false)
{
      $HelperValues00BS = LTRIM(RTRIM($HelperValues0BS)) . LTRIM(RTRIM($LTLLbs));
      $HelperValues11BS = LTRIM(RTRIM($HelperValues1BS)) . LTRIM(RTRIM($LTLLbs));
      $HelperValues22BS = LTRIM(RTRIM($HelperValues2BS)) . LTRIM(RTRIM($LTLLbs));
      $HelperValues33BS = LTRIM(RTRIM($HelperValues3BS)) . LTRIM(RTRIM($LTLLbs));

      if(strpos($row['HelperValues'], $HelperValues00BS) !== false)
      {
            $LTLLbs0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling0BS, FILTER_SANITIZE_NUMBER_INT);
            if($LTLLbs0==null)
            {
                  $LTLLbs0bsdiff0 = "-";
            }
            else
            {
                  $LTLLbsdiff0 = filter_var($LTLL0, FILTER_SANITIZE_NUMBER_INT) - filter_var($LMNR0, FILTER_SANITIZE_NUMBER_INT) - filter_var(array_sum($LTLLbs0), FILTER_SANITIZE_NUMBER_INT);   
            }
      }
      if(strpos($row['HelperValues'], $HelperValues11BS) !== false)
      {
            $LTLLbs1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling1BS, FILTER_SANITIZE_NUMBER_INT);
            
      }
      if(strpos($row['HelperValues'], $HelperValues22BS) !== false)
      {
            $LTLLbs2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling2BS, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BS) !== false)
      {
            $LTLLbs3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling3BS, FILTER_SANITIZE_NUMBER_INT);;
      }
}


$REXRgs = "REXR";
$RINRgs = "RINR";
$EIBTgs = "EIBT";
$TTAXgs = "TTAX";
$TIATgs = "TIAT";
$CEIAgs = "CEIA";
$EUIEgs = "EUIE";
$ATOTgs = "ATOT";
$LTLLgs = "LTLL";


if(strpos($row['COA'], $REXRgs) !== false)
{
      $HelperValues00GS = LTRIM(RTRIM($HelperValues0GS)) . LTRIM(RTRIM($REXRgs));
      $HelperValues11GS = LTRIM(RTRIM($HelperValues1GS)) . LTRIM(RTRIM($REXRgs));
      $HelperValues22GS = LTRIM(RTRIM($HelperValues2GS)) . LTRIM(RTRIM($REXRgs));
      $HelperValues33GS = LTRIM(RTRIM($HelperValues3GS)) . LTRIM(RTRIM($REXRgs));

      if(strpos($row['HelperValues'], $HelperValues00GS) !== false)
      {
            $REXRgs0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling0GS, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11GS) !== false)
      {
            $REXRgs1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling1GS, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22GS) !== false)
      {
            $REXRgs2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling2GS, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33GS) !== false)
      {
            $REXRgs3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling3GS, FILTER_SANITIZE_NUMBER_INT);;
      }
}

if(strpos($row['COA'], $RINRgs) !== false)
{
      $HelperValues00GS = LTRIM(RTRIM($HelperValues0GS)) . LTRIM(RTRIM($RINRgs));
      $HelperValues11GS = LTRIM(RTRIM($HelperValues1GS)) . LTRIM(RTRIM($RINRgs));
      $HelperValues22GS = LTRIM(RTRIM($HelperValues2GS)) . LTRIM(RTRIM($RINRgs));
      $HelperValues33GS = LTRIM(RTRIM($HelperValues3GS)) . LTRIM(RTRIM($RINRgs));

      if(strpos($row['HelperValues'], $HelperValues00GS) !== false)
      {
            $RINRgs0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling0GS, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11GS) !== false)
      {
            $RINRgs1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling1GS, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22GS) !== false)
      {
            $RINRgs2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling2GS, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33GS) !== false)
      {
            $RINRgs3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling3GS, FILTER_SANITIZE_NUMBER_INT);;
      }
}

if(strpos($row['COA'], $EIBTgs) !== false)
{
      $HelperValues00GS = LTRIM(RTRIM($HelperValues0GS)) . LTRIM(RTRIM($EIBTgs));
      $HelperValues11GS = LTRIM(RTRIM($HelperValues1GS)) . LTRIM(RTRIM($EIBTgs));
      $HelperValues22GS = LTRIM(RTRIM($HelperValues2GS)) . LTRIM(RTRIM($EIBTgs));
      $HelperValues33GS = LTRIM(RTRIM($HelperValues3GS)) . LTRIM(RTRIM($EIBTgs));

      if(strpos($row['HelperValues'], $HelperValues00GS) !== false)
      {
            $EIBTgs0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling0GS, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11GS) !== false)
      {
            $EIBTgs1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling1GS, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22GS) !== false)
      {
            $EIBTgs2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling2GS, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33GS) !== false)
      {
            $EIBTgs3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling3GS, FILTER_SANITIZE_NUMBER_INT);;
      }
}

if(strpos($row['COA'], $TTAXgs) !== false)
{
      $HelperValues00GS = LTRIM(RTRIM($HelperValues0GS)) . LTRIM(RTRIM($TTAXgs));
      $HelperValues11GS = LTRIM(RTRIM($HelperValues1GS)) . LTRIM(RTRIM($TTAXgs));
      $HelperValues22GS = LTRIM(RTRIM($HelperValues2GS)) . LTRIM(RTRIM($TTAXgs));
      $HelperValues33GS = LTRIM(RTRIM($HelperValues3GS)) . LTRIM(RTRIM($TTAXgs));

      if(strpos($row['HelperValues'], $HelperValues00GS) !== false)
      {
            $TTAXgs0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling0GS, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11GS) !== false)
      {
            $TTAXgs1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling1GS, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22GS) !== false)
      {
            $TTAXgs2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling2GS, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33GS) !== false)
      {
            $TTAXgs3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling3GS, FILTER_SANITIZE_NUMBER_INT);;
      }
}

if(strpos($row['COA'], $TIATgs) !== false)
{
      $HelperValues00GS = LTRIM(RTRIM($HelperValues0GS)) . LTRIM(RTRIM($TIATgs));
      $HelperValues11GS = LTRIM(RTRIM($HelperValues1GS)) . LTRIM(RTRIM($TIATgs));
      $HelperValues22GS = LTRIM(RTRIM($HelperValues2GS)) . LTRIM(RTRIM($TIATgs));
      $HelperValues33GS = LTRIM(RTRIM($HelperValues3GS)) . LTRIM(RTRIM($TIATgs));

      if(strpos($row['HelperValues'], $HelperValues00GS) !== false)
      {
            $TIATgs0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling0GS, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11GS) !== false)
      {
            $TIATgs1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling1GS, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22GS) !== false)
      {
            $TIATgs2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling2GS, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33GS) !== false)
      {
            $TIATgs3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling3GS, FILTER_SANITIZE_NUMBER_INT);;
      }
}

if(strpos($row['COA'], $CEIAgs) !== false)
{
      $HelperValues00GS = LTRIM(RTRIM($HelperValues0GS)) . LTRIM(RTRIM($CEIAgs));
      $HelperValues11GS = LTRIM(RTRIM($HelperValues1GS)) . LTRIM(RTRIM($CEIAgs));
      $HelperValues22GS = LTRIM(RTRIM($HelperValues2GS)) . LTRIM(RTRIM($CEIAgs));
      $HelperValues33GS = LTRIM(RTRIM($HelperValues3GS)) . LTRIM(RTRIM($CEIAgs));

      if(strpos($row['HelperValues'], $HelperValues00GS) !== false)
      {
            $CEIAgs0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling0GS, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11GS) !== false)
      {
            $CEIAgs1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling1GS, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22GS) !== false)
      {
            $CEIAgs2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling2GS, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33GS) !== false)
      {
            $CEIAgs3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling3GS, FILTER_SANITIZE_NUMBER_INT);;
      }
}

if(strpos($row['COA'], $EUIEgs) !== false)
{
      $HelperValues00GS = LTRIM(RTRIM($HelperValues0GS)) . LTRIM(RTRIM($EUIEgs));
      $HelperValues11GS = LTRIM(RTRIM($HelperValues1GS)) . LTRIM(RTRIM($EUIEgs));
      $HelperValues22GS = LTRIM(RTRIM($HelperValues2GS)) . LTRIM(RTRIM($EUIEgs));
      $HelperValues33GS = LTRIM(RTRIM($HelperValues3GS)) . LTRIM(RTRIM($EUIEgs));

      if(strpos($row['HelperValues'], $HelperValues00GS) !== false)
      {
            $EUIEgs0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling0GS, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11GS) !== false)
      {
            $EUIEgs1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling1GS, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22GS) !== false)
      {
            $EUIEgs2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling2GS, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33GS) !== false)
      {
            $EUIEgs3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling3GS, FILTER_SANITIZE_NUMBER_INT);;
      }
}

if(strpos($row['COA'], $ATOTgs) !== false)
{
      $HelperValues00GS = LTRIM(RTRIM($HelperValues0GS)) . LTRIM(RTRIM($ATOTgs));
      $HelperValues11GS = LTRIM(RTRIM($HelperValues1GS)) . LTRIM(RTRIM($ATOTgs));
      $HelperValues22GS = LTRIM(RTRIM($HelperValues2GS)) . LTRIM(RTRIM($ATOTgs));
      $HelperValues33GS = LTRIM(RTRIM($HelperValues3GS)) . LTRIM(RTRIM($ATOTgs));

      if(strpos($row['HelperValues'], $HelperValues00GS) !== false)
      {
            $ATOTgs0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling0GS, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11GS) !== false)
      {
            $ATOTgs1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling1GS, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22GS) !== false)
      {
            $ATOTgs2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling2GS, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33GS) !== false)
      {
            $ATOTgs3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling3GS, FILTER_SANITIZE_NUMBER_INT);;
      }
}

if(strpos($row['COA'], $LTLLgs) !== false)
{
      $HelperValues00GS = LTRIM(RTRIM($HelperValues0GS)) . LTRIM(RTRIM($LTLLgs));
      $HelperValues11GS = LTRIM(RTRIM($HelperValues1GS)) . LTRIM(RTRIM($LTLLgs));
      $HelperValues22GS = LTRIM(RTRIM($HelperValues2GS)) . LTRIM(RTRIM($LTLLgs));
      $HelperValues33GS = LTRIM(RTRIM($HelperValues3GS)) . LTRIM(RTRIM($LTLLgs));

      if(strpos($row['HelperValues'], $HelperValues00GS) !== false)
      {
            $LTLLgs0[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling0GS, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11GS) !== false)
      {
            $LTLLgs1[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling1GS, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22GS) !== false)
      {
            $LTLLgs2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling2GS, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33GS) !== false)
      {
            $LTLLgs3[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling3GS, FILTER_SANITIZE_NUMBER_INT);;
      }
}





///prior year
////////////   INCOME STATEMENT
if(strpos($row['COA'], $RTLR) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($RTLR));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($RTLR));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($RTLR));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($RTLR));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $RTLR0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $RTLR1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $RTLR2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $RTLR3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }


} 

if(strpos($row['COA'], $ECOR) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($ECOR));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($ECOR));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($ECOR));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($ECOR));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $ECOR0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $ECOR1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $ECOR2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $ECOR3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $ESGA) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($ESGA));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($ESGA));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($ESGA));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($ESGA));
      
      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $ESGA0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $ESGA1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $ESGA2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $ESGA3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}  

if(strpos($row['COA'], $ETOE) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($ETOE));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($ETOE));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($ETOE));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($ETOE));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $ETOE0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $ETOE1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $ETOE2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $ETOE3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}  

if(strpos($row['COA'], $EIBT) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($EIBT));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($EIBT));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($EIBT));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($EIBT));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $EIBT0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $EIBT1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $EIBT2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $EIBT3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $TTAX) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($TTAX));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($TTAX));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($TTAX));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($TTAX));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $TTAX0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $TTAX1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $TTAX2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $TTAX3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);           
      }
      
} 


if(strpos($row['COA'], $TIAT) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($TIAT));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($TIAT));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($TIAT));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($TIAT));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $TIAT0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $TIAT1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $TIAT2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $TIAT3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 


if(strpos($row['COA'], $CIAC) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($CIAC));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($CIAC));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($CIAC));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($CIAC));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $CIAC0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $CIAC1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $CIAC2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $CIAC3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 


if(strpos($row['COA'], $XNIC) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($XNIC));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($XNIC));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($XNIC));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($XNIC));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $XNIC0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $XNIC1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $XNIC2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $XNIC3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 


if(strpos($row['COA'], $XNIA) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($XNIA));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($XNIA));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($XNIA));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($XNIA));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $XNIA0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $XNIA1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $XNIA2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $XNIA3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 


if(strpos($row['COA'], $STSI) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($STSI));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($STSI));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($STSI));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($STSI));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $STSI0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $STSI1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $STSI2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $STSI3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 


if(strpos($row['COA'], $VDEP) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($VDEP));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($VDEP));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($VDEP));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($VDEP));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $VDEP0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $VDEP1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $VDEP2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $VDEP3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 


if(strpos($row['COA'], $VAMI) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($VAMI));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($VAMI));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($VAMI));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($VAMI));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $VAMI0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $VAMI1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $VAMI2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $VAMI3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 


if(strpos($row['COA'], $VAMA) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($VAMA));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($VAMA));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($VAMA));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($VAMA));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $VAMA0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $VAMA1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $VAMA2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $VAMA3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $DCGD) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($DCGD));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($DCGD));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($DCGD));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($DCGD));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $DCGD0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $DCGD1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $DCGD2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $DCGD3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $DDPS1) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($DDPS1));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($DDPS1));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($DDPS1));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($DDPS1));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $DDPS10p[] = filter_var($row['LineItemValue'], FILTER_VALIDATE_FLOAT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $DDPS11p[] = filter_var($row['LineItemValue'], FILTER_VALIDATE_FLOAT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $DDPS12p[] = filter_var($row['LineItemValue'], FILTER_VALIDATE_FLOAT);
      }

      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $DDPS13p[] = filter_var($row['LineItemValue'], FILTER_VALIDATE_FLOAT);
      }
}

if(strpos($row['COA'], $DDPS2) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($DDPS2));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($DDPS2));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($DDPS2));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($DDPS2));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $DDPS20[] = $row['LineItemValue'];
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $DDPS21[] = $row['LineItemValue'];
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $DDPS22[] = $row['LineItemValue'];
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $DDPS23[] = $row['LineItemValue'];
      }
}

if(strpos($row['COA'], $DSPS1) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($DSPS1));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($DSPS1));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($DSPS1));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($DSPS1));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $DSPS10p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $DSPS11p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $DSPS12p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $DSPS13p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $VITT) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($VITT));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($VITT));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($VITT));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($VITT));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $VITT0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $VITT1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $VITT2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $VITT3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $EDEP) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($EDEP));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($EDEP));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($EDEP));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($EDEP));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $EDEP0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $EDEP1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $EDEP2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $EDEP3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $EAMI) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($EAMI));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($EAMI));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($EAMI));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($EAMI));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $EAMI0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $EAMI1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $EAMI2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $EAMI3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $ERXP) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($ERXP));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($ERXP));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($ERXP));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($ERXP));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $ERXP0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $ERXP1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $ERXP2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $ERXP3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $VRXP) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($VRXP));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($VRXP));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($VRXP));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($VRXP));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $VRXP0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $VRXP1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $VRXP2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $VRXP3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $EIIN) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($EIIN));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($EIIN));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($EIIN));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($EIIN));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $EIIN0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $EIIN1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $EIIN2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $EIIN3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $EIEX) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($EIEX));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($EIEX));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($EIEX));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($EIEX));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $EIEX0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $EIEX1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $EIEX2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $EIEX3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      
} 

if(strpos($row['COA'], $NIEN) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($NIEN));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($NIEN));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($NIEN));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($NIEN));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $NIEN0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $NIEN1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $NIEN2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $NIEN3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $VIEX) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($VIEX));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($VIEX));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($VIEX));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($VIEX));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $VIEX0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $VIEX1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $VIEX2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $VIEX3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $VCAP) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($VCAP));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($VCAP));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($VCAP));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($VCAP));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $VCAP0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $VCAP1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $VCAP2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $VCAP3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}   

if(strpos($row['COA'], $VEIA) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($VEIA));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($VEIA));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($VEIA));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($VEIA));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $VEIA0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $VEIA1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $VEIA2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $VEIA3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $XTRA) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($XTRA));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($XTRA));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($XTRA));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($XTRA));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $XTRA0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $XTRA1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $XTRA2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $XTRA3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      } 
} 

if(strpos($row['COA'], $GBAS) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($GBAS));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($GBAS));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($GBAS));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($GBAS));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $GBAS0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $GBAS1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $GBAS2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $GBAS3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $GDWS) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($GDWS));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($GDWS));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($GDWS));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($GDWS));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $GDWS0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $GDWS1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $GDWS2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $GDWS3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $HFFO) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($HFFO));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($HFFO));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($HFFO));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($HFFO));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $HFFO0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $HFFO1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $HFFO2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $HFFO3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $VIAU) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($VIAU));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($VIAU));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($VIAU));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($VIAU));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $VIAU0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $VIAU1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $VIAU2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $VIAU3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}  

if(strpos($row['COA'], $ERDW) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($ERDW));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($ERDW));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($ERDW));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($ERDW));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $ERDW0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $ERDW1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $ERDW2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $ERDW3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $ERES) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($ERES));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($ERES));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($ERES));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($ERES));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $ERES0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $ERES1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $ERES2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $ERES3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $ELIT) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($ELIT));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($ELIT));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($ELIT));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($ELIT));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $ELIT0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $ELIT1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $ELIT2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $ELIT3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $EIAU) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($EIAU));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($EIAU));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($EIAU));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($EIAU));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $EIAU0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $EIAU1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $EIAU2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $EIAU3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $EIAS) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($EIAS));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($EIAS));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($EIAS));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($EIAS));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $EIAS0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $EIAS1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $EIAS2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $EIAS3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $EGLA) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($EGLA));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($EGLA));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($EGLA));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($EGLA));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $EGLA0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $EGLA1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $EGLA2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $EGLA3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $EUIE) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($EUIE));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($EUIE));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($EUIE));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($EUIE));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $EUIE0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $EUIE1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $EUIE2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $EUIE3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $NGLA) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($NGLA));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($NGLA));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($NGLA));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($NGLA));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $NGLA0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $NGLA1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $NGLA2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $NGLA3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $NUII) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($NUII));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($NUII));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($NUII));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($NUII));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $NUII0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $NUII1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $NUII2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $NUII3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $NRES) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($NRES));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($NRES));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($NRES));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($NRES));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $NRES0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $NRES1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $NRES2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $NRES3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $NLIT) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($NLIT));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($NLIT));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($NLIT));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($NLIT));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $NLIT0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $NLIT1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $NLIT2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $NLIT3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $NUIE) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($NUIE));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($NUIE));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($NUIE));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($NUIE));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $NUIE0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $NUIE1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $NUIE2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $NUIE3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $NAMA) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($NAMA));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($NAMA));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($NAMA));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($NAMA));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $NAMA0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $NAMA1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $NAMA2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $NAMA3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $VAMA) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($VAMA));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($VAMA));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($VAMA));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($VAMA));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $VAMA0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $VAMA1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $VAMA2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $VAMA3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $VGLA) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($VGLA));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($VGLA));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($VGLA));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($VGLA));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $VGLA0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $VGLA1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $VGLA2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $VGLA3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $VIAS) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($VIAS));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($VIAS));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($VIAS));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($VIAS));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $VIAS0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $VIAS1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $VIAS2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $VIAS3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $VIAU) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($VIAU));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($VIAU));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($VIAU));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($VIAU));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $VIAU0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $VIAU1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $VIAU2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $VIAU3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $VLIT) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($VLIT));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($VLIT));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($VLIT));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($VLIT));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $VLIT0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $VLIT1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $VLIT2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $VLIT3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $VRDW) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($VRDW));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($VRDW));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($VRDW));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($VRDW));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $VRDW0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $VRDW1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $VRDW2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $VRDW3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $VRES) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($VRES));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($VRES));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($VRES));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($VRES));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $VRES0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $VRES1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $VRES2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $VRES3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $VUIE) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($VUIE));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($VUIE));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($VUIE));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($VUIE));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $VUIE0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $VUIE1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $VUIE2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $VUIE3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
} 

if(strpos($row['COA'], $VRAD) !== false)
{
      $HelperValues00p = LTRIM(RTRIM($HelperValues0p)) . LTRIM(RTRIM($VRAD));
      $HelperValues11p = LTRIM(RTRIM($HelperValues1p)) . LTRIM(RTRIM($VRAD));
      $HelperValues22p = LTRIM(RTRIM($HelperValues2p)) . LTRIM(RTRIM($VRAD));
      $HelperValues33p = LTRIM(RTRIM($HelperValues3p)) . LTRIM(RTRIM($VRAD));

      if(strpos($row['HelperValues'], $HelperValues00p) !== false)
      {
            $VRAD0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11p) !== false)
      {
            $VRAD1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22p) !== false)
      {
            $VRAD2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33p) !== false)
      {
            $VRAD3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

////////////   BALANCE SHEET

if(strpos($row['COA'], $ACAE) !== false)
{
      $HelperValues00BALp = LTRIM(RTRIM($HelperValues0BALp)) . LTRIM(RTRIM($ACAE));
      $HelperValues11BALp = LTRIM(RTRIM($HelperValues1BALp)) . LTRIM(RTRIM($ACAE));
      $HelperValues22BALp = LTRIM(RTRIM($HelperValues2BALp)) . LTRIM(RTRIM($ACAE));
      $HelperValues33BALp = LTRIM(RTRIM($HelperValues3BALp)) . LTRIM(RTRIM($ACAE));

      if(strpos($row['HelperValues'], $HelperValues00BALp) !== false)
      {
            $ACAE0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BALp) !== false)
      {
            $ACAE1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BALp) !== false)
      {
            $ACAE2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BALp) !== false)
      {
            $ACAE3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $ASTI) !== false)
{
      $HelperValues00BALp = LTRIM(RTRIM($HelperValues0BALp)) . LTRIM(RTRIM($ASTI));
      $HelperValues11BALp = LTRIM(RTRIM($HelperValues1BALp)) . LTRIM(RTRIM($ASTI));
      $HelperValues22BALp = LTRIM(RTRIM($HelperValues2BALp)) . LTRIM(RTRIM($ASTI));
      $HelperValues33BALp = LTRIM(RTRIM($HelperValues3BALp)) . LTRIM(RTRIM($ASTI));

      if(strpos($row['HelperValues'], $HelperValues00BALp) !== false)
      {
            $ASTI0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BALp) !== false)
      {
            $ASTI1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BALp) !== false)
      {
            $ASTI2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BALp) !== false)
      {
            $ASTI3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $AACR) !== false)
{
      $HelperValues00BALp = LTRIM(RTRIM($HelperValues0BALp)) . LTRIM(RTRIM($AACR));
      $HelperValues11BALp = LTRIM(RTRIM($HelperValues1BALp)) . LTRIM(RTRIM($AACR));
      $HelperValues22BALp = LTRIM(RTRIM($HelperValues2BALp)) . LTRIM(RTRIM($AACR));
      $HelperValues33BALp = LTRIM(RTRIM($HelperValues3BALp)) . LTRIM(RTRIM($AACR));

      if(strpos($row['HelperValues'], $HelperValues00BALp) !== false)
      {
            $AACR0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BALp) !== false)
      {
            $AACR1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BALp) !== false)
      {
            $AACR2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BALp) !== false)
      {
            $AACR3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $ASTR) !== false)
{
      $HelperValues00BALp = LTRIM(RTRIM($HelperValues0BALp)) . LTRIM(RTRIM($ASTR));
      $HelperValues11BALp = LTRIM(RTRIM($HelperValues1BALp)) . LTRIM(RTRIM($ASTR));
      $HelperValues22BALp = LTRIM(RTRIM($HelperValues2BALp)) . LTRIM(RTRIM($ASTR));
      $HelperValues33BALp = LTRIM(RTRIM($HelperValues3BALp)) . LTRIM(RTRIM($ASTR));

      if(strpos($row['HelperValues'], $HelperValues00BALp) !== false)
      {
            $ASTR0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BALp) !== false)
      {
            $ASTR1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BALp) !== false)
      {
            $ASTR2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BALp) !== false)
      {
            $ASTR3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $APDA) !== false)
{
      $HelperValues00BALp = LTRIM(RTRIM($HelperValues0BALp)) . LTRIM(RTRIM($APDA));
      $HelperValues11BALp = LTRIM(RTRIM($HelperValues1BALp)) . LTRIM(RTRIM($APDA));
      $HelperValues22BALp = LTRIM(RTRIM($HelperValues2BALp)) . LTRIM(RTRIM($APDA));
      $HelperValues33BALp = LTRIM(RTRIM($HelperValues3BALp)) . LTRIM(RTRIM($APDA));

      if(strpos($row['HelperValues'], $HelperValues00BALp) !== false)
      {
            $APDA0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BALp) !== false)
      {
            $APDA1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BALp) !== false)
      {
            $APDA2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BALp) !== false)
      {
            $APDA3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $AAMT) !== false)
{
      $HelperValues00BALp = LTRIM(RTRIM($HelperValues0BALp)) . LTRIM(RTRIM($AAMT));
      $HelperValues11BALp = LTRIM(RTRIM($HelperValues1BALp)) . LTRIM(RTRIM($AAMT));
      $HelperValues22BALp = LTRIM(RTRIM($HelperValues2BALp)) . LTRIM(RTRIM($AAMT));
      $HelperValues33BALp = LTRIM(RTRIM($HelperValues3BALp)) . LTRIM(RTRIM($AAMT));

      if(strpos($row['HelperValues'], $HelperValues00BALp) !== false)
      {
            $AAMT0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BALp) !== false)
      {
            $AAMT1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BALp) !== false)
      {
            $AAMT2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BALp) !== false)
      {
            $AAMT3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $ADEP) !== false)
{
      $HelperValues00BALp = LTRIM(RTRIM($HelperValues0BALp)) . LTRIM(RTRIM($ADEP));
      $HelperValues11BALp = LTRIM(RTRIM($HelperValues1BALp)) . LTRIM(RTRIM($ADEP));
      $HelperValues22BALp = LTRIM(RTRIM($HelperValues2BALp)) . LTRIM(RTRIM($ADEP));
      $HelperValues33BALp = LTRIM(RTRIM($HelperValues3BALp)) . LTRIM(RTRIM($ADEP));

      if(strpos($row['HelperValues'], $HelperValues00BALp) !== false)
      {
            $ADEP0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BALp) !== false)
      {
            $ADEP1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BALp) !== false)
      {
            $ADEP2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BALp) !== false)
      {
            $ADEP3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $ATOT) !== false)
{
      $HelperValues00BALp = LTRIM(RTRIM($HelperValues0BALp)) . LTRIM(RTRIM($ATOT));
      $HelperValues11BALp = LTRIM(RTRIM($HelperValues1BALp)) . LTRIM(RTRIM($ATOT));
      $HelperValues22BALp = LTRIM(RTRIM($HelperValues2BALp)) . LTRIM(RTRIM($ATOT));
      $HelperValues33BALp = LTRIM(RTRIM($HelperValues3BALp)) . LTRIM(RTRIM($ATOT));
      
      if(strpos($row['HelperValues'], $HelperValues00BALp) !== false)
      {
            $ATOT0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }  
      if(strpos($row['HelperValues'], $HelperValues11BALp) !== false)
      {
            $ATOT1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BALp) !== false)
      {
            if($StatementDate3BAL==NULL)
            {
                $ATOT2[] = "";  
            }
            else
            {
               $ATOT2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);   
            }
            
      }
      if(strpos($row['HelperValues'], $HelperValues33BALp) !== false)
      {
            $ATOT3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $LAPB) !== false)
{
      $HelperValues00BALp = LTRIM(RTRIM($HelperValues0BALp)) . LTRIM(RTRIM($LAPB));
      $HelperValues11BALp = LTRIM(RTRIM($HelperValues1BALp)) . LTRIM(RTRIM($LAPB));
      $HelperValues22BALp = LTRIM(RTRIM($HelperValues2BALp)) . LTRIM(RTRIM($LAPB));
      $HelperValues33BALp = LTRIM(RTRIM($HelperValues3BALp)) . LTRIM(RTRIM($LAPB));

      if(strpos($row['HelperValues'], $HelperValues00BALp) !== false)
      {
            $LAPB0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BALp) !== false)
      {
            $LAPB1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BALp) !== false)
      {
            $LAPB2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BALp) !== false)
      {
            $LAPB3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $LSTD) !== false)
{
      $HelperValues00BALp = LTRIM(RTRIM($HelperValues0BALp)) . LTRIM(RTRIM($LSTD));
      $HelperValues11BALp = LTRIM(RTRIM($HelperValues1BALp)) . LTRIM(RTRIM($LSTD));
      $HelperValues22BALp = LTRIM(RTRIM($HelperValues2BALp)) . LTRIM(RTRIM($LSTD));
      $HelperValues33BALp = LTRIM(RTRIM($HelperValues3BALp)) . LTRIM(RTRIM($LSTD));

      if(strpos($row['HelperValues'], $HelperValues00BALp) !== false)
      {
            $LSTD0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BALp) !== false)
      {
            $LSTD1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BALp) !== false)
      {
            $LSTD2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BALp) !== false)
      {
            $LSTD3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $LCLD) !== false)
{
      $HelperValues00BALp = LTRIM(RTRIM($HelperValues0BALp)) . LTRIM(RTRIM($LCLD));
      $HelperValues11BALp = LTRIM(RTRIM($HelperValues1BALp)) . LTRIM(RTRIM($LCLD));
      $HelperValues22BALp = LTRIM(RTRIM($HelperValues2BALp)) . LTRIM(RTRIM($LCLD));
      $HelperValues33BALp = LTRIM(RTRIM($HelperValues3BALp)) . LTRIM(RTRIM($LCLD));

      if(strpos($row['HelperValues'], $HelperValues00BALp) !== false)
      {
            $LCLD0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BALp) !== false)
      {
            $LCLD1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BALp) !== false)
      {
            $LCLD2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BALp) !== false)
      {
            $LCLD3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $LLTD) !== false)
{
      $HelperValues00BALp = LTRIM(RTRIM($HelperValues0BALp)) . LTRIM(RTRIM($LLTD));
      $HelperValues11BALp = LTRIM(RTRIM($HelperValues1BALp)) . LTRIM(RTRIM($LLTD));
      $HelperValues22BALp = LTRIM(RTRIM($HelperValues2BALp)) . LTRIM(RTRIM($LLTD));
      $HelperValues33BALp = LTRIM(RTRIM($HelperValues3BALp)) . LTRIM(RTRIM($LLTD));

      if(strpos($row['HelperValues'], $HelperValues00BALp) !== false)
      {
            $LLTD0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BALp) !== false)
      {
            $LLTD1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BALp) !== false)
      {
            $LLTD2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BALp) !== false)
      {
            $LLTD3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $LCLO) !== false)
{
      $HelperValues00BALp = LTRIM(RTRIM($HelperValues0BALp)) . LTRIM(RTRIM($LCLO));
      $HelperValues11BALp = LTRIM(RTRIM($HelperValues1BALp)) . LTRIM(RTRIM($LCLO));
      $HelperValues22BALp = LTRIM(RTRIM($HelperValues2BALp)) . LTRIM(RTRIM($LCLO));
      $HelperValues33BALp = LTRIM(RTRIM($HelperValues3BALp)) . LTRIM(RTRIM($LCLO));

      if(strpos($row['HelperValues'], $HelperValues00BALp) !== false)
      {
            $LCLO0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BALp) !== false)
      {
            $LCLO1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BALp) !== false)
      {
            $LCLO2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BALp) !== false)
      {
            $LCLO3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $LTLL) !== false)
{
      $HelperValues00BALp = LTRIM(RTRIM($HelperValues0BALp)) . LTRIM(RTRIM($LTLL));
      $HelperValues11BALp = LTRIM(RTRIM($HelperValues1BALp)) . LTRIM(RTRIM($LTLL));
      $HelperValues22BALp = LTRIM(RTRIM($HelperValues2BALp)) . LTRIM(RTRIM($LTLL));
      $HelperValues33BALp = LTRIM(RTRIM($HelperValues3BALp)) . LTRIM(RTRIM($LTLL));

      if(strpos($row['HelperValues'], $HelperValues00BALp) !== false)
      {
            $LTLL0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BALp) !== false)
      {
            $LTLL1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BALp) !== false)
      {
            $LTLL2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BALp) !== false)
      {
            $LTLL3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $LMNR) !== false)
{
      $HelperValues00BALp = LTRIM(RTRIM($HelperValues0BALp)) . LTRIM(RTRIM($LMNR));
      $HelperValues11BALp = LTRIM(RTRIM($HelperValues1BALp)) . LTRIM(RTRIM($LMNR));
      $HelperValues22BALp = LTRIM(RTRIM($HelperValues2BALp)) . LTRIM(RTRIM($LMNR));
      $HelperValues33BALp = LTRIM(RTRIM($HelperValues3BALp)) . LTRIM(RTRIM($LMNR));

      if(strpos($row['HelperValues'], $HelperValues00BALp) !== false)
      {
            $LMNR0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BALp) !== false)
      {
            $LMNR1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BALp) !== false)
      {
            $LMNR2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BALp) !== false)
      {
            $LMNR3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $QTLE) !== false)
{
      $HelperValues00BALp = LTRIM(RTRIM($HelperValues0BALp)) . LTRIM(RTRIM($QTLE));
      $HelperValues11BALp = LTRIM(RTRIM($HelperValues1BALp)) . LTRIM(RTRIM($QTLE));
      $HelperValues22BALp = LTRIM(RTRIM($HelperValues2BALp)) . LTRIM(RTRIM($QTLE));
      $HelperValues33BALp = LTRIM(RTRIM($HelperValues3BALp)) . LTRIM(RTRIM($QTLE));

      if(strpos($row['HelperValues'], $HelperValues00BALp) !== false)
      {
            $QTLE0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BALp) !== false)
      {
            $QTLE1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BALp) !== false)
      {
            $QTLE2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BALp) !== false)
      {
            $QTLE3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $QTEL) !== false)
{
      $HelperValues00BALp = LTRIM(RTRIM($HelperValues0BALp)) . LTRIM(RTRIM($QTEL));
      $HelperValues11BALp = LTRIM(RTRIM($HelperValues1BALp)) . LTRIM(RTRIM($QTEL));
      $HelperValues22BALp = LTRIM(RTRIM($HelperValues2BALp)) . LTRIM(RTRIM($QTEL));
      $HelperValues33BALp = LTRIM(RTRIM($HelperValues3BALp)) . LTRIM(RTRIM($QTEL));

      if(strpos($row['HelperValues'], $HelperValues00BALp) !== false)
      {
            $QTEL0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BALp) !== false)
      {
            $QTEL1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BALp) !== false)
      {
            $QTEL2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BALp) !== false)
      {
            $QTEL3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $QCSO1) !== false)
{
      $HelperValues00BALp = LTRIM(RTRIM($HelperValues0BALp)) . LTRIM(RTRIM($QCSO1));
      $HelperValues11BALp = LTRIM(RTRIM($HelperValues1BALp)) . LTRIM(RTRIM($QCSO1));
      $HelperValues22BALp = LTRIM(RTRIM($HelperValues2BALp)) . LTRIM(RTRIM($QCSO1));
      $HelperValues33BALp = LTRIM(RTRIM($HelperValues3BALp)) . LTRIM(RTRIM($QCSO1));

      if(strpos($row['HelperValues'], $HelperValues00BALp) !== false)
      {
            $QCSO10p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BALp) !== false)
      {
            $QCSO11p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BALp) !== false)
      {
            $QCSO12p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BALp) !== false)
      {
            $QCSO13p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $QCSO2) !== false)
{
      $HelperValues00BALp = LTRIM(RTRIM($HelperValues0BALp)) . LTRIM(RTRIM($QCSO2));
      $HelperValues11BALp = LTRIM(RTRIM($HelperValues1BALp)) . LTRIM(RTRIM($QCSO2));
      $HelperValues22BALp = LTRIM(RTRIM($HelperValues2BALp)) . LTRIM(RTRIM($QCSO2));
      $HelperValues33BALp = LTRIM(RTRIM($HelperValues3BALp)) . LTRIM(RTRIM($QCSO2));

      if(strpos($row['HelperValues'], $HelperValues00BALp) !== false)
      {
            $QCSO20p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BALp) !== false)
      {
            $QCSO21p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BALp) !== false)
      {
            $QCSO22p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BALp) !== false)
      {
            $QCSO23p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $QTSN1) !== false)
{
      $HelperValues00BALp = LTRIM(RTRIM($HelperValues0BALp)) . LTRIM(RTRIM($QTSN1));
      $HelperValues11BALp = LTRIM(RTRIM($HelperValues1BALp)) . LTRIM(RTRIM($QTSN1));
      $HelperValues22BALp = LTRIM(RTRIM($HelperValues2BALp)) . LTRIM(RTRIM($QTSN1));
      $HelperValues33BALp = LTRIM(RTRIM($HelperValues3BALp)) . LTRIM(RTRIM($QTSN1));

      if(strpos($row['HelperValues'], $HelperValues00BALp) !== false)
      {
            $QTSN10p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BALp) !== false)
      {
            $QTSN11p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BALp) !== false)
      {
            $QTSN12p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BALp) !== false)
      {
            $QTSN13p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $QTSN2) !== false)
{
      $HelperValues00BALp = LTRIM(RTRIM($HelperValues0BALp)) . LTRIM(RTRIM($QTSN2));
      $HelperValues11BALp = LTRIM(RTRIM($HelperValues1BALp)) . LTRIM(RTRIM($QTSN2));
      $HelperValues22BALp = LTRIM(RTRIM($HelperValues2BALp)) . LTRIM(RTRIM($QTSN2));
      $HelperValues33BALp = LTRIM(RTRIM($HelperValues3BALp)) . LTRIM(RTRIM($QTSN2));

      if(strpos($row['HelperValues'], $HelperValues00BALp) !== false)
      {
            $QTSN20p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BALp) !== false)
      {
            $QTSN21p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BALp) !== false)
      {
            $QTSN22p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BALp) !== false)
      {
            $QTSN23p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $QTCO) !== false)
{
      $HelperValues00BALp = LTRIM(RTRIM($HelperValues0BALp)) . LTRIM(RTRIM($QTCO));
      $HelperValues11BALp = LTRIM(RTRIM($HelperValues1BALp)) . LTRIM(RTRIM($QTCO));
      $HelperValues22BALp = LTRIM(RTRIM($HelperValues2BALp)) . LTRIM(RTRIM($QTCO));
      $HelperValues33BALp = LTRIM(RTRIM($HelperValues3BALp)) . LTRIM(RTRIM($QTCO));

      if(strpos($row['HelperValues'], $HelperValues00BALp) !== false)
      {
            $QTCO0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BALp) !== false)
      {
            $QTCO1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BALp) !== false)
      {
            $QTCO2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BALp) !== false)
      {
            $QTCO3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $VFSS) !== false)
{
      $HelperValues00BALp = LTRIM(RTRIM($HelperValues0BALp)) . LTRIM(RTRIM($VFSS));
      $HelperValues11BALp = LTRIM(RTRIM($HelperValues1BALp)) . LTRIM(RTRIM($VFSS));
      $HelperValues22BALp = LTRIM(RTRIM($HelperValues2BALp)) . LTRIM(RTRIM($VFSS));
      $HelperValues33BALp = LTRIM(RTRIM($HelperValues3BALp)) . LTRIM(RTRIM($VFSS));

      if(strpos($row['HelperValues'], $HelperValues00BALp) !== false)
      {
            $VFSS0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BALp) !== false)
      {
            $VFSS1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BALp) !== false)
      {
            $VFSS2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BALp) !== false)
      {
            $VFSS3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $METL) !== false)
{
      $HelperValues00BALp = LTRIM(RTRIM($HelperValues0BALp)) . LTRIM(RTRIM($METL));
      $HelperValues11BALp = LTRIM(RTRIM($HelperValues1BALp)) . LTRIM(RTRIM($METL));
      $HelperValues22BALp = LTRIM(RTRIM($HelperValues2BALp)) . LTRIM(RTRIM($METL));
      $HelperValues33BALp = LTRIM(RTRIM($HelperValues3BALp)) . LTRIM(RTRIM($METL));

      if(strpos($row['HelperValues'], $HelperValues00BALp) !== false)
      {
            $METL0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BALp) !== false)
      {
            $METL1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BALp) !== false)
      {
            $METL2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BALp) !== false)
      {
            $METL3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $MNOS) !== false)
{
      $HelperValues00BALp = LTRIM(RTRIM($HelperValues0BALp)) . LTRIM(RTRIM($MNOS));
      $HelperValues11BALp = LTRIM(RTRIM($HelperValues1BALp)) . LTRIM(RTRIM($MNOS));
      $HelperValues22BALp = LTRIM(RTRIM($HelperValues2BALp)) . LTRIM(RTRIM($MNOS));
      $HelperValues33BALp = LTRIM(RTRIM($HelperValues3BALp)) . LTRIM(RTRIM($MNOS));

      if(strpos($row['HelperValues'], $HelperValues00BALp) !== false)
      {
            $MNOS0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BALp) !== false)
      {
            $MNOS1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BALp) !== false)
      {
            $MNOS2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BALp) !== false)
      {
            $MNOS3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $VRUQ) !== false)
{
      $HelperValues00BALp = LTRIM(RTRIM($HelperValues0BALp)) . LTRIM(RTRIM($VRUQ));
      $HelperValues11BALp = LTRIM(RTRIM($HelperValues1BALp)) . LTRIM(RTRIM($VRUQ));
      $HelperValues22BALp = LTRIM(RTRIM($HelperValues2BALp)) . LTRIM(RTRIM($VRUQ));
      $HelperValues33BALp = LTRIM(RTRIM($HelperValues3BALp)) . LTRIM(RTRIM($VRUQ));

      if(strpos($row['HelperValues'], $HelperValues00BALp) !== false)
      {
            $VRUQ0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BALp) !== false)
      {
            $VRUQ1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BALp) !== false)
      {
            $VRUQ2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BALp) !== false)
      {
            $VRUQ3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}


///////    CASH FLOW STATEMENT

if(strpos($row['COA'], $ONET) !== false)
{
      $HelperValues00CASp = LTRIM(RTRIM($HelperValues0CASp)) . LTRIM(RTRIM($ONET));
      $HelperValues11CASp = LTRIM(RTRIM($HelperValues1CASp)) . LTRIM(RTRIM($ONET));
      $HelperValues22CASp = LTRIM(RTRIM($HelperValues2CASp)) . LTRIM(RTRIM($ONET));
      $HelperValues33CASp = LTRIM(RTRIM($HelperValues3CASp)) . LTRIM(RTRIM($ONET));

      if(strpos($row['HelperValues'], $HelperValues00CASp) !== false)
      {
            $ONET0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CASp) !== false)
      {
            $ONET1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CASp) !== false)
      {
            $ONET2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CASp) !== false)
      {
            $ONET3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $SDEP) !== false)
{
      $HelperValues00CASp = LTRIM(RTRIM($HelperValues0CASp)) . LTRIM(RTRIM($SDEP));
      $HelperValues11CASp = LTRIM(RTRIM($HelperValues1CASp)) . LTRIM(RTRIM($SDEP));
      $HelperValues22CASp = LTRIM(RTRIM($HelperValues2CASp)) . LTRIM(RTRIM($SDEP));
      $HelperValues33CASp = LTRIM(RTRIM($HelperValues3CASp)) . LTRIM(RTRIM($SDEP));

      if(strpos($row['HelperValues'], $HelperValues00CASp) !== false)
      {
            $SDEP0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CASp) !== false)
      {
            $SDEP1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CASp) !== false)
      {
            $SDEP2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CASp) !== false)
      {
            $SDEP3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $OAMI) !== false)
{
      $HelperValues00CASp = LTRIM(RTRIM($HelperValues0CASp)) . LTRIM(RTRIM($OAMI));
      $HelperValues11CASp = LTRIM(RTRIM($HelperValues1CASp)) . LTRIM(RTRIM($OAMI));
      $HelperValues22CASp = LTRIM(RTRIM($HelperValues2CASp)) . LTRIM(RTRIM($OAMI));
      $HelperValues33CASp = LTRIM(RTRIM($HelperValues3CASp)) . LTRIM(RTRIM($OAMI));

      if(strpos($row['HelperValues'], $HelperValues00CASp) !== false)
      {
            $OAMI0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CASp) !== false)
      {
            $OAMI1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CASp) !== false)
      {
            $OAMI2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CASp) !== false)
      {
            $OAMI3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $OTLO) !== false)
{
      $HelperValues00CASp = LTRIM(RTRIM($HelperValues0CASp)) . LTRIM(RTRIM($OTLO));
      $HelperValues11CASp = LTRIM(RTRIM($HelperValues1CASp)) . LTRIM(RTRIM($OTLO));
      $HelperValues22CASp = LTRIM(RTRIM($HelperValues2CASp)) . LTRIM(RTRIM($OTLO));
      $HelperValues33CASp = LTRIM(RTRIM($HelperValues3CASp)) . LTRIM(RTRIM($OTLO));

      if(strpos($row['HelperValues'], $HelperValues00CASp) !== false)
      {
            $OTLO0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CASp) !== false)
      {
            $OTLO1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CASp) !== false)
      {
            $OTLO2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CASp) !== false)
      {
            $OTLO3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $IBAQ) !== false)
{
      $HelperValues00CASp = LTRIM(RTRIM($HelperValues0CASp)) . LTRIM(RTRIM($IBAQ));
      $HelperValues11CASp = LTRIM(RTRIM($HelperValues1CASp)) . LTRIM(RTRIM($IBAQ));
      $HelperValues22CASp = LTRIM(RTRIM($HelperValues2CASp)) . LTRIM(RTRIM($IBAQ));
      $HelperValues33CASp = LTRIM(RTRIM($HelperValues3CASp)) . LTRIM(RTRIM($IBAQ));

      if(strpos($row['HelperValues'], $HelperValues00CASp) !== false)
      {
            $IBAQ0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CASp) !== false)
      {
            $IBAQ1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CASp) !== false)
      {
            $IBAQ2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CASp) !== false)
      {
            $IBAQ3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $ICEX) !== false)
{
      $HelperValues00CASp = LTRIM(RTRIM($HelperValues0CASp)) . LTRIM(RTRIM($ICEX));
      $HelperValues11CASp = LTRIM(RTRIM($HelperValues1CASp)) . LTRIM(RTRIM($ICEX));
      $HelperValues22CASp = LTRIM(RTRIM($HelperValues2CASp)) . LTRIM(RTRIM($ICEX));
      $HelperValues33CASp = LTRIM(RTRIM($HelperValues3CASp)) . LTRIM(RTRIM($ICEX));

      if(strpos($row['HelperValues'], $HelperValues00CASp) !== false)
      {
            $ICEX0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CASp) !== false)
      {
            $ICEX1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CASp) !== false)
      {
            $ICEX2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CASp) !== false)
      {
            $ICEX3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $ITLI) !== false)
{
      $HelperValues00CASp = LTRIM(RTRIM($HelperValues0CASp)) . LTRIM(RTRIM($ITLI));
      $HelperValues11CASp = LTRIM(RTRIM($HelperValues1CASp)) . LTRIM(RTRIM($ITLI));
      $HelperValues22CASp = LTRIM(RTRIM($HelperValues2CASp)) . LTRIM(RTRIM($ITLI));
      $HelperValues33CASp = LTRIM(RTRIM($HelperValues3CASp)) . LTRIM(RTRIM($ITLI));

      if(strpos($row['HelperValues'], $HelperValues00CASp) !== false)
      {
            $ITLI0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CASp) !== false)
      {
            $ITLI1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CASp) !== false)
      {
            $ITLI2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CASp) !== false)
      {
            $ITLI3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $FLDN) !== false)
{
      $HelperValues00CASp = LTRIM(RTRIM($HelperValues0CASp)) . LTRIM(RTRIM($FLDN));
      $HelperValues11CASp = LTRIM(RTRIM($HelperValues1CASp)) . LTRIM(RTRIM($FLDN));
      $HelperValues22CASp = LTRIM(RTRIM($HelperValues2CASp)) . LTRIM(RTRIM($FLDN));
      $HelperValues33CASp = LTRIM(RTRIM($HelperValues3CASp)) . LTRIM(RTRIM($FLDN));

      if(strpos($row['HelperValues'], $HelperValues00CASp) !== false)
      {
            $FLDN0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CASp) !== false)
      {
            $FLDN1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CASp) !== false)
      {
            $FLDN2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CASp) !== false)
      {
            $FLDN3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $FSDN) !== false)
{
      $HelperValues00CASp = LTRIM(RTRIM($HelperValues0CASp)) . LTRIM(RTRIM($FSDN));
      $HelperValues11CASp = LTRIM(RTRIM($HelperValues1CASp)) . LTRIM(RTRIM($FSDN));
      $HelperValues22CASp = LTRIM(RTRIM($HelperValues2CASp)) . LTRIM(RTRIM($FSDN));
      $HelperValues33CASp = LTRIM(RTRIM($HelperValues3CASp)) . LTRIM(RTRIM($FSDN));

      if(strpos($row['HelperValues'], $HelperValues00CASp) !== false)
      {
            $FSDN0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CASp) !== false)
      {
            $FSDN1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CASp) !== false)
      {
            $FSDN2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CASp) !== false)
      {
            $FSDN3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $FLDI) !== false)
{
      $HelperValues00CASp = LTRIM(RTRIM($HelperValues0CASp)) . LTRIM(RTRIM($FLDI));
      $HelperValues11CASp = LTRIM(RTRIM($HelperValues1CASp)) . LTRIM(RTRIM($FLDI));
      $HelperValues22CASp = LTRIM(RTRIM($HelperValues2CASp)) . LTRIM(RTRIM($FLDI));
      $HelperValues33CASp = LTRIM(RTRIM($HelperValues3CASp)) . LTRIM(RTRIM($FLDI));

      if(strpos($row['HelperValues'], $HelperValues00CASp) !== false)
      {
            $FLDI0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CASp) !== false)
      {
            $FLDI1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CASp) !== false)
      {
            $FLDI2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CASp) !== false)
      {
            $FLDI3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $FSDI) !== false)
{
      $HelperValues00CASp = LTRIM(RTRIM($HelperValues0CASp)) . LTRIM(RTRIM($FSDI));
      $HelperValues11CASp = LTRIM(RTRIM($HelperValues1CASp)) . LTRIM(RTRIM($FSDI));
      $HelperValues22CASp = LTRIM(RTRIM($HelperValues2CASp)) . LTRIM(RTRIM($FSDI));
      $HelperValues33CASp = LTRIM(RTRIM($HelperValues3CASp)) . LTRIM(RTRIM($FSDI));

      if(strpos($row['HelperValues'], $HelperValues00CASp) !== false)
      {
            $FSDI0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CASp) !== false)
      {
            $FSDI1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CASp) !== false)
      {
            $FSDI2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CASp) !== false)
      {
            $FSDI3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $FLDR) !== false)
{
      $HelperValues00CASp = LTRIM(RTRIM($HelperValues0CASp)) . LTRIM(RTRIM($FLDR));
      $HelperValues11CASp = LTRIM(RTRIM($HelperValues1CASp)) . LTRIM(RTRIM($FLDR));
      $HelperValues22CASp = LTRIM(RTRIM($HelperValues2CASp)) . LTRIM(RTRIM($FLDR));
      $HelperValues33CASp = LTRIM(RTRIM($HelperValues3CASp)) . LTRIM(RTRIM($FLDR));

      if(strpos($row['HelperValues'], $HelperValues00CASp) !== false)
      {
            $FLDR0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CASp) !== false)
      {
            $FLDR1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CASp) !== false)
      {
            $FLDR2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CASp) !== false)
      {
            $FLDR3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $FSDR) !== false)
{
      $HelperValues00CASp = LTRIM(RTRIM($HelperValues0CASp)) . LTRIM(RTRIM($FSDR));
      $HelperValues11CASp = LTRIM(RTRIM($HelperValues1CASp)) . LTRIM(RTRIM($FSDR));
      $HelperValues22CASp = LTRIM(RTRIM($HelperValues2CASp)) . LTRIM(RTRIM($FSDR));
      $HelperValues33CASp = LTRIM(RTRIM($HelperValues3CASp)) . LTRIM(RTRIM($FSDR));

      if(strpos($row['HelperValues'], $HelperValues00CASp) !== false)
      {
            $FSDR0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CASp) !== false)
      {
            $FSDR1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CASp) !== false)
      {
            $FSDR2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CASp) !== false)
      {
            $FSDR3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $FTLF) !== false)
{
      $HelperValues00CASp = LTRIM(RTRIM($HelperValues0CASp)) . LTRIM(RTRIM($FTLF));
      $HelperValues11CASp = LTRIM(RTRIM($HelperValues1CASp)) . LTRIM(RTRIM($FTLF));
      $HelperValues22CASp = LTRIM(RTRIM($HelperValues2CASp)) . LTRIM(RTRIM($FTLF));
      $HelperValues33CASp = LTRIM(RTRIM($HelperValues3CASp)) . LTRIM(RTRIM($FTLF));

      if(strpos($row['HelperValues'], $HelperValues00CASp) !== false)
      {
            $FTLF0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CASp) !== false)
      {
            $FTLF1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CASp) !== false)
      {
            $FTLF2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CASp) !== false)
      {
            $FTLF3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $SFEE) !== false)
{
      $HelperValues00CASp = LTRIM(RTRIM($HelperValues0CASp)) . LTRIM(RTRIM($SFEE));
      $HelperValues11CASp = LTRIM(RTRIM($HelperValues1CASp)) . LTRIM(RTRIM($SFEE));
      $HelperValues22CASp = LTRIM(RTRIM($HelperValues2CASp)) . LTRIM(RTRIM($SFEE));
      $HelperValues33CASp = LTRIM(RTRIM($HelperValues3CASp)) . LTRIM(RTRIM($SFEE));

      if(strpos($row['HelperValues'], $HelperValues00CASp) !== false)
      {
            $SFEE0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CASp) !== false)
      {
            $SFEE1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CASp) !== false)
      {
            $SFEE2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CASp) !== false)
      {
            $SFEE3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $SNCC) !== false)
{
      $HelperValues00CASp = LTRIM(RTRIM($HelperValues0CASp)) . LTRIM(RTRIM($SNCC));
      $HelperValues11CASp = LTRIM(RTRIM($HelperValues1CASp)) . LTRIM(RTRIM($SNCC));
      $HelperValues22CASp = LTRIM(RTRIM($HelperValues2CASp)) . LTRIM(RTRIM($SNCC));
      $HelperValues33CASp = LTRIM(RTRIM($HelperValues3CASp)) . LTRIM(RTRIM($SNCC));

      if(strpos($row['HelperValues'], $HelperValues00CASp) !== false)
      {
            $SNCC0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CASp) !== false)
      {
            $SNCC1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CASp) !== false)
      {
            $SNCC2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CASp) !== false)
      {
            $SNCC3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $SNCB) !== false)
{
      $HelperValues00CASp = LTRIM(RTRIM($HelperValues0CASp)) . LTRIM(RTRIM($SNCB));
      $HelperValues11CASp = LTRIM(RTRIM($HelperValues1CASp)) . LTRIM(RTRIM($SNCB));
      $HelperValues22CASp = LTRIM(RTRIM($HelperValues2CASp)) . LTRIM(RTRIM($SNCB));
      $HelperValues33CASp = LTRIM(RTRIM($HelperValues3CASp)) . LTRIM(RTRIM($SNCB));

      if(strpos($row['HelperValues'], $HelperValues00CASp) !== false)
      {
            $SNCB0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CASp) !== false)
      {
            $SNCB1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CASp) !== false)
      {
            $SNCB2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CASp) !== false)
      {
            $SNCB3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $SNCE) !== false)
{
      $HelperValues00CASp = LTRIM(RTRIM($HelperValues0CASp)) . LTRIM(RTRIM($SNCE));
      $HelperValues11CASp = LTRIM(RTRIM($HelperValues1CASp)) . LTRIM(RTRIM($SNCE));
      $HelperValues22CASp = LTRIM(RTRIM($HelperValues2CASp)) . LTRIM(RTRIM($SNCE));
      $HelperValues33CASp = LTRIM(RTRIM($HelperValues3CASp)) . LTRIM(RTRIM($SNCE));

      if(strpos($row['HelperValues'], $HelperValues00CASp) !== false)
      {
            $SNCE0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CASp) !== false)
      {
            $SNCE1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CASp) !== false)
      {
            $SNCE2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CASp) !== false)
      {
            $SNCE3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $SCIP) !== false)
{
      $HelperValues00CASp = LTRIM(RTRIM($HelperValues0CASp)) . LTRIM(RTRIM($SCIP));
      $HelperValues11CASp = LTRIM(RTRIM($HelperValues1CASp)) . LTRIM(RTRIM($SCIP));
      $HelperValues22CASp = LTRIM(RTRIM($HelperValues2CASp)) . LTRIM(RTRIM($SCIP));
      $HelperValues33CASp = LTRIM(RTRIM($HelperValues3CASp)) . LTRIM(RTRIM($SCIP));

      if(strpos($row['HelperValues'], $HelperValues00CASp) !== false)
      {
            $SCIP0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CASp) !== false)
      {
            $SCIP1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CASp) !== false)
      {
            $SCIP2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CASp) !== false)
      {
            $SCIP3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $SCTP) !== false)
{
      $HelperValues00CASp = LTRIM(RTRIM($HelperValues0CASp)) . LTRIM(RTRIM($SCTP));
      $HelperValues11CASp = LTRIM(RTRIM($HelperValues1CASp)) . LTRIM(RTRIM($SCTP));
      $HelperValues22CASp = LTRIM(RTRIM($HelperValues2CASp)) . LTRIM(RTRIM($SCTP));
      $HelperValues33CASp = LTRIM(RTRIM($HelperValues3CASp)) . LTRIM(RTRIM($SCTP));

      if(strpos($row['HelperValues'], $HelperValues00CASp) !== false)
      {
            $SCTP0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CASp) !== false)
      {
            $SCTP1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CASp) !== false)
      {
            $SCTP2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CASp) !== false)
      {
            $SCTP3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $IINS) !== false)
{
      $HelperValues00CASp = LTRIM(RTRIM($HelperValues0CASp)) . LTRIM(RTRIM($IINS));
      $HelperValues11CASp = LTRIM(RTRIM($HelperValues1CASp)) . LTRIM(RTRIM($IINS));
      $HelperValues22CASp = LTRIM(RTRIM($HelperValues2CASp)) . LTRIM(RTRIM($IINS));
      $HelperValues33CASp = LTRIM(RTRIM($HelperValues3CASp)) . LTRIM(RTRIM($IINS));

      if(strpos($row['HelperValues'], $HelperValues00CASp) !== false)
      {
            $IINS0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CASp) !== false)
      {
            $IINS1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CASp) !== false)
      {
            $IINS2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CASp) !== false)
      {
            $IINS3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $IINP) !== false)
{
      $HelperValues00CASp = LTRIM(RTRIM($HelperValues0CASp)) . LTRIM(RTRIM($IINP));
      $HelperValues11CASp = LTRIM(RTRIM($HelperValues1CASp)) . LTRIM(RTRIM($IINP));
      $HelperValues22CASp = LTRIM(RTRIM($HelperValues2CASp)) . LTRIM(RTRIM($IINP));
      $HelperValues33CASp = LTRIM(RTRIM($HelperValues3CASp)) . LTRIM(RTRIM($IINP));

      if(strpos($row['HelperValues'], $HelperValues00CASp) !== false)
      {
            $IINP0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CASp) !== false)
      {
            $IINP1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CASp) !== false)
      {
            $IINP2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CASp) !== false)
      {
            $IINP3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $ISFA) !== false)
{
      $HelperValues00CASp = LTRIM(RTRIM($HelperValues0CASp)) . LTRIM(RTRIM($ISFA));
      $HelperValues11CASp = LTRIM(RTRIM($HelperValues1CASp)) . LTRIM(RTRIM($ISFA));
      $HelperValues22CASp = LTRIM(RTRIM($HelperValues2CASp)) . LTRIM(RTRIM($ISFA));
      $HelperValues33CASp = LTRIM(RTRIM($HelperValues3CASp)) . LTRIM(RTRIM($ISFA));

      if(strpos($row['HelperValues'], $HelperValues00CASp) !== false)
      {
            $ISFA0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CASp) !== false)
      {
            $ISFA1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CASp) !== false)
      {
            $ISFA2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CASp) !== false)
      {
            $ISFA3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $ISOI) !== false)
{
      $HelperValues00CASp = LTRIM(RTRIM($HelperValues0CASp)) . LTRIM(RTRIM($ISOI));
      $HelperValues11CASp = LTRIM(RTRIM($HelperValues1CASp)) . LTRIM(RTRIM($ISOI));
      $HelperValues22CASp = LTRIM(RTRIM($HelperValues2CASp)) . LTRIM(RTRIM($ISOI));
      $HelperValues33CASp = LTRIM(RTRIM($HelperValues3CASp)) . LTRIM(RTRIM($ISOI));

      if(strpos($row['HelperValues'], $HelperValues00CASp) !== false)
      {
            $ISOI0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CASp) !== false)
      {
            $ISOI1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CASp) !== false)
      {
            $ISOI2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CASp) !== false)
      {
            $ISOI3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $IIAQ) !== false)
{
      $HelperValues00CASp = LTRIM(RTRIM($HelperValues0CASp)) . LTRIM(RTRIM($IIAQ));
      $HelperValues11CASp = LTRIM(RTRIM($HelperValues1CASp)) . LTRIM(RTRIM($IIAQ));
      $HelperValues22CASp = LTRIM(RTRIM($HelperValues2CASp)) . LTRIM(RTRIM($IIAQ));
      $HelperValues33CASp = LTRIM(RTRIM($HelperValues3CASp)) . LTRIM(RTRIM($IIAQ));

      if(strpos($row['HelperValues'], $HelperValues00CASp) !== false)
      {
            $IIAQ0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CASp) !== false)
      {
            $IIAQ1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CASp) !== false)
      {
            $IIAQ2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CASp) !== false)
      {
            $IIAQ3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $ISOB) !== false)
{
      $HelperValues00CASp = LTRIM(RTRIM($HelperValues0CASp)) . LTRIM(RTRIM($ISOB));
      $HelperValues11CASp = LTRIM(RTRIM($HelperValues1CASp)) . LTRIM(RTRIM($ISOB));
      $HelperValues22CASp = LTRIM(RTRIM($HelperValues2CASp)) . LTRIM(RTRIM($ISOB));
      $HelperValues33CASp = LTRIM(RTRIM($HelperValues3CASp)) . LTRIM(RTRIM($ISOB));

      if(strpos($row['HelperValues'], $HelperValues00CASp) !== false)
      {
            $ISOB0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CASp) !== false)
      {
            $ISOB1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CASp) !== false)
      {
            $ISOB2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CASp) !== false)
      {
            $ISOB3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $FSIC) !== false)
{
      $HelperValues00CASp = LTRIM(RTRIM($HelperValues0CASp)) . LTRIM(RTRIM($FSIC));
      $HelperValues11CASp = LTRIM(RTRIM($HelperValues1CASp)) . LTRIM(RTRIM($FSIC));
      $HelperValues22CASp = LTRIM(RTRIM($HelperValues2CASp)) . LTRIM(RTRIM($FSIC));
      $HelperValues33CASp = LTRIM(RTRIM($HelperValues3CASp)) . LTRIM(RTRIM($FSIC));

      if(strpos($row['HelperValues'], $HelperValues00CASp) !== false)
      {
            $FSIC0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CASp) !== false)
      {
            $FSIC1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CASp) !== false)
      {
            $FSIC2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CASp) !== false)
      {
            $FSIC3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $FRRC) !== false)
{
      $HelperValues00CASp = LTRIM(RTRIM($HelperValues0CASp)) . LTRIM(RTRIM($FRRC));
      $HelperValues11CASp = LTRIM(RTRIM($HelperValues1CASp)) . LTRIM(RTRIM($FRRC));
      $HelperValues22CASp = LTRIM(RTRIM($HelperValues2CASp)) . LTRIM(RTRIM($FRRC));
      $HelperValues33CASp = LTRIM(RTRIM($HelperValues3CASp)) . LTRIM(RTRIM($FRRC));

      if(strpos($row['HelperValues'], $HelperValues00CASp) !== false)
      {
            $FRRC0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CASp) !== false)
      {
            $FRRC1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CASp) !== false)
      {
            $FRRC2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CASp) !== false)
      {
            $FRRC3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $FSIP) !== false)
{
      $HelperValues00CASp = LTRIM(RTRIM($HelperValues0CASp)) . LTRIM(RTRIM($FSIP));
      $HelperValues11CASp = LTRIM(RTRIM($HelperValues1CASp)) . LTRIM(RTRIM($FSIP));
      $HelperValues22CASp = LTRIM(RTRIM($HelperValues2CASp)) . LTRIM(RTRIM($FSIP));
      $HelperValues33CASp = LTRIM(RTRIM($HelperValues3CASp)) . LTRIM(RTRIM($FSIP));

      if(strpos($row['HelperValues'], $HelperValues00CASp) !== false)
      {
            $FSIP0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CASp) !== false)
      {
            $FSIP1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CASp) !== false)
      {
            $FSIP2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CASp) !== false)
      {
            $FSIP3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $FRRP) !== false)
{
      $HelperValues00CASp = LTRIM(RTRIM($HelperValues0CASp)) . LTRIM(RTRIM($FRRP));
      $HelperValues11CASp = LTRIM(RTRIM($HelperValues1CASp)) . LTRIM(RTRIM($FRRP));
      $HelperValues22CASp = LTRIM(RTRIM($HelperValues2CASp)) . LTRIM(RTRIM($FRRP));
      $HelperValues33CASp = LTRIM(RTRIM($HelperValues3CASp)) . LTRIM(RTRIM($FRRP));

      if(strpos($row['HelperValues'], $HelperValues00CASp) !== false)
      {
            $FRRP0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CASp) !== false)
      {
            $FRRP1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CASp) !== false)
      {
            $FRRP2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CASp) !== false)
      {
            $FRRP3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $FDPC) !== false)
{
      $HelperValues00CASp = LTRIM(RTRIM($HelperValues0CASp)) . LTRIM(RTRIM($FDPC));
      $HelperValues11CASp = LTRIM(RTRIM($HelperValues1CASp)) . LTRIM(RTRIM($FDPC));
      $HelperValues22CASp = LTRIM(RTRIM($HelperValues2CASp)) . LTRIM(RTRIM($FDPC));
      $HelperValues33CASp = LTRIM(RTRIM($HelperValues3CASp)) . LTRIM(RTRIM($FDPC));

      if(strpos($row['HelperValues'], $HelperValues00CASp) !== false)
      {
            $FDPC0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CASp) !== false)
      {
            $FDPC1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CASp) !== false)
      {
            $FDPC2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CASp) !== false)
      {
            $FDPC3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $FDPP) !== false)
{
      $HelperValues00CASp = LTRIM(RTRIM($HelperValues0CASp)) . LTRIM(RTRIM($FDPP));
      $HelperValues11CASp = LTRIM(RTRIM($HelperValues1CASp)) . LTRIM(RTRIM($FDPP));
      $HelperValues22CASp = LTRIM(RTRIM($HelperValues2CASp)) . LTRIM(RTRIM($FDPP));
      $HelperValues33CASp = LTRIM(RTRIM($HelperValues3CASp)) . LTRIM(RTRIM($FDPP));

      if(strpos($row['HelperValues'], $HelperValues00CASp) !== false)
      {
            $FDPP0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CASp) !== false)
      {
            $FDPP1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CASp) !== false)
      {
            $FDPP2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CASp) !== false)
      {
            $FDPP3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}

if(strpos($row['COA'], $FRCP) !== false)
{
      $HelperValues00CASp = LTRIM(RTRIM($HelperValues0CASp)) . LTRIM(RTRIM($FRCP));
      $HelperValues11CASp = LTRIM(RTRIM($HelperValues1CASp)) . LTRIM(RTRIM($FRCP));
      $HelperValues22CASp = LTRIM(RTRIM($HelperValues2CASp)) . LTRIM(RTRIM($FRCP));
      $HelperValues33CASp = LTRIM(RTRIM($HelperValues3CASp)) . LTRIM(RTRIM($FRCP));

      if(strpos($row['HelperValues'], $HelperValues00CASp) !== false)
      {
            $FRCP0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11CASp) !== false)
      {
            $FRCP1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22CASp) !== false)
      {
            $FRCP2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33CASp) !== false)
      {
            $FRCP3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
}



if(strpos($row['COA'], $REXRbs) !== false)
{
      $HelperValues00BSp = LTRIM(RTRIM($HelperValues0BSp)) . LTRIM(RTRIM($REXRbs));
      $HelperValues11BSp = LTRIM(RTRIM($HelperValues1BSp)) . LTRIM(RTRIM($REXRbs));
      $HelperValues22BSp = LTRIM(RTRIM($HelperValues2BSp)) . LTRIM(RTRIM($REXRbs));
      $HelperValues33BSp = LTRIM(RTRIM($HelperValues3BSp)) . LTRIM(RTRIM($REXRbs));

      if(strpos($row['HelperValues'], $HelperValues00BSp) !== false)
      {
            $REXRbs0p[] =filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling0BSp, FILTER_SANITIZE_NUMBER_INT);        
      }
      if(strpos($row['HelperValues'], $HelperValues11BSp) !== false)
      {
            $REXRbs1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling1BSp, FILTER_SANITIZE_NUMBER_INT);   
      }
      if(strpos($row['HelperValues'], $HelperValues22BSp) !== false)
      {
            $REXRbs2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling2BSp, FILTER_SANITIZE_NUMBER_INT);   
      }
      if(strpos($row['HelperValues'], $HelperValues33BSp) !== false)
      {
            $REXRbs3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling3BSp, FILTER_SANITIZE_NUMBER_INT);
            
      }
      
}

if(strpos($row['COA'], $RINRbs) !== false)
{
      $HelperValues00BSp = LTRIM(RTRIM($HelperValues0BSp)) . LTRIM(RTRIM($RINRbs));
      $HelperValues11BSp = LTRIM(RTRIM($HelperValues1BSp)) . LTRIM(RTRIM($RINRbs));
      $HelperValues22BSp = LTRIM(RTRIM($HelperValues2BSp)) . LTRIM(RTRIM($RINRbs));
      $HelperValues33BSp = LTRIM(RTRIM($HelperValues3BSp)) . LTRIM(RTRIM($RINRbs));

      if(strpos($row['HelperValues'], $HelperValues00BSp) !== false)
      {
            $RINRbs0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling0BSp, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BSp) !== false)
      {
            $RINRbs1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling1BSp, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BSp) !== false)
      {
            $RINRbs2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling2BSp, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BSp) !== false)
      {
            $RINRbs3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling3BSp, FILTER_SANITIZE_NUMBER_INT);;
      }
}

if(strpos($row['COA'], $EIBTbs) !== false)
{
      $HelperValues00BSp = LTRIM(RTRIM($HelperValues0BSp)) . LTRIM(RTRIM($EIBTbs));
      $HelperValues11BSp = LTRIM(RTRIM($HelperValues1BSp)) . LTRIM(RTRIM($EIBTbs));
      $HelperValues22BSp = LTRIM(RTRIM($HelperValues2BSp)) . LTRIM(RTRIM($EIBTbs));
      $HelperValues33BSp = LTRIM(RTRIM($HelperValues3BSp)) . LTRIM(RTRIM($EIBTbs));

      if(strpos($row['HelperValues'], $HelperValues00BSp) !== false)
      {
            $EIBTbs0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling0BSp, FILTER_SANITIZE_NUMBER_INT);
            
      }
      if(strpos($row['HelperValues'], $HelperValues11BSp) !== false)
      {
            $EIBTbs1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling1BSp, FILTER_SANITIZE_NUMBER_INT);
            
      }
      if(strpos($row['HelperValues'], $HelperValues22BSp) !== false)
      {
            $EIBTbs2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling2BSp, FILTER_SANITIZE_NUMBER_INT);
            
      }
      if(strpos($row['HelperValues'], $HelperValues33BSp) !== false)
      {
            $EIBTbs3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling3BSp, FILTER_SANITIZE_NUMBER_INT);
           
      }
}

if(strpos($row['COA'], $TTAXbs) !== false)
{
      $HelperValues00BSp = LTRIM(RTRIM($HelperValues0BSp)) . LTRIM(RTRIM($TTAXbs));
      $HelperValues11BSp = LTRIM(RTRIM($HelperValues1BSp)) . LTRIM(RTRIM($TTAXbs));
      $HelperValues22BSp = LTRIM(RTRIM($HelperValues2BSp)) . LTRIM(RTRIM($TTAXbs));
      $HelperValues33BSp = LTRIM(RTRIM($HelperValues3BSp)) . LTRIM(RTRIM($TTAXbs));

      if(strpos($row['HelperValues'], $HelperValues00BSp) !== false)
      {
            $TTAXbs0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling0BSp, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BSp) !== false)
      {
            $TTAXbs1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling1BSp, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BSp) !== false)
      {
            $TTAXbs2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling2BSp, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BSp) !== false)
      {
            $TTAXbs3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling3BSp, FILTER_SANITIZE_NUMBER_INT);;
      }
}

if(strpos($row['COA'], $TIATbs) !== false)
{
      $HelperValues00BSp = LTRIM(RTRIM($HelperValues0BSp)) . LTRIM(RTRIM($TIATbs));
      $HelperValues11BSp = LTRIM(RTRIM($HelperValues1BSp)) . LTRIM(RTRIM($TIATbs));
      $HelperValues22BSp = LTRIM(RTRIM($HelperValues2BSp)) . LTRIM(RTRIM($TIATbs));
      $HelperValues33BSp = LTRIM(RTRIM($HelperValues3BSp)) . LTRIM(RTRIM($TIATbs));

      if(strpos($row['HelperValues'], $HelperValues00BSp) !== false)
      {
            $TIATbs0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling0BSp, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BSp) !== false)
      {
            $TIATbs1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling1BSp, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BSp) !== false)
      {
            $TIATbs2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling2BSp, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BSp) !== false)
      {
            $TIATbs3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling3BSp, FILTER_SANITIZE_NUMBER_INT);;
      }
}

if(strpos($row['COA'], $CEIAbs) !== false)
{
      $HelperValues00BSp = LTRIM(RTRIM($HelperValues0BSp)) . LTRIM(RTRIM($CEIAbs));
      $HelperValues11BSp = LTRIM(RTRIM($HelperValues1BSp)) . LTRIM(RTRIM($CEIAbs));
      $HelperValues22BSp = LTRIM(RTRIM($HelperValues2BSp)) . LTRIM(RTRIM($CEIAbs));
      $HelperValues33BSp = LTRIM(RTRIM($HelperValues3BSp)) . LTRIM(RTRIM($CEIAbs));

      if(strpos($row['HelperValues'], $HelperValues00BSp) !== false)
      {
            $CEIAbs0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling0BSp, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BSp) !== false)
      {
            $CEIAbs1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling1BSp, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BSp) !== false)
      {
            $CEIAbs2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling2BSp, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BSp) !== false)
      {
            $CEIAbs3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling3BSp, FILTER_SANITIZE_NUMBER_INT);;
      }
}

if(strpos($row['COA'], $EUIEbs) !== false)
{
      $HelperValues00BSp = LTRIM(RTRIM($HelperValues0BSp)) . LTRIM(RTRIM($EUIEbs));
      $HelperValues11BSp = LTRIM(RTRIM($HelperValues1BSp)) . LTRIM(RTRIM($EUIEbs));
      $HelperValues22BSp = LTRIM(RTRIM($HelperValues2BSp)) . LTRIM(RTRIM($EUIEbs));
      $HelperValues33BSp = LTRIM(RTRIM($HelperValues3BSp)) . LTRIM(RTRIM($EUIEbs));

      if(strpos($row['HelperValues'], $HelperValues00BSp) !== false)
      {
            $EUIEbs0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling0BSp, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11BSp) !== false)
      {
            $EUIEbs1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling1BSp, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22BSp) !== false)
      {
            $EUIEbs2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling2BSp, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BSp) !== false)
      {
            $EUIEbs3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling3BSp, FILTER_SANITIZE_NUMBER_INT);;
      }
}

if(strpos($row['COA'], $ATOTbs) !== false)
{
      $HelperValues00BSp = LTRIM(RTRIM($HelperValues0BSp)) . LTRIM(RTRIM($ATOTbs));
      $HelperValues11BSp = LTRIM(RTRIM($HelperValues1BSp)) . LTRIM(RTRIM($ATOTbs));
      $HelperValues22BSp = LTRIM(RTRIM($HelperValues2BSp)) . LTRIM(RTRIM($ATOTbs));
      $HelperValues33BSp = LTRIM(RTRIM($HelperValues3BSp)) . LTRIM(RTRIM($ATOTbs));

      if(strpos($row['HelperValues'], $HelperValues00BSp) !== false)
      {
            $ATOTbs0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling0BSp, FILTER_SANITIZE_NUMBER_INT);
            
      }
      if(strpos($row['HelperValues'], $HelperValues11BSp) !== false)
      {
            $ATOTbs1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling1BSp, FILTER_SANITIZE_NUMBER_INT);
            if($ATOTbs1==null)
            {
                  $ATOTbsdiff1p = "-";
            }
            else
            {
                  $ATOTbsdiff1p = filter_var($ATOT1p, FILTER_SANITIZE_NUMBER_INT) - filter_var($ATOTbs1p, FILTER_SANITIZE_NUMBER_INT);    
            }
      }
      if(strpos($row['HelperValues'], $HelperValues22BSp) !== false)
      {
            $ATOTbs2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling2BSp, FILTER_SANITIZE_NUMBER_INT);
            if($ATOTbs2==null)
            {
                  $ATOTbsdiff2p = "-";
            }
            else
            {
                  $ATOTbsdiff2p = filter_var($ATOT2p, FILTER_SANITIZE_NUMBER_INT) - filter_var($ATOTbs2p, FILTER_SANITIZE_NUMBER_INT);    
            }
      }
      if(strpos($row['HelperValues'], $HelperValues33BSp) !== false)
      {
            $ATOTbs3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling3BSp, FILTER_SANITIZE_NUMBER_INT);
            if($ATOTbs3==null)
            {
                  $ATOTbsdiff3p = "-";
            }
            else
            {
                  $ATOTbsdiff3p = filter_var($ATOT3p, FILTER_SANITIZE_NUMBER_INT) - filter_var($ATOTbs3p, FILTER_SANITIZE_NUMBER_INT);    
            }
      }
}

if(strpos($row['COA'], $LTLLbs) !== false)
{
      $HelperValues00BSp = LTRIM(RTRIM($HelperValues0BSp)) . LTRIM(RTRIM($LTLLbs));
      $HelperValues11BSp = LTRIM(RTRIM($HelperValues1BSp)) . LTRIM(RTRIM($LTLLbs));
      $HelperValues22BSp = LTRIM(RTRIM($HelperValues2BSp)) . LTRIM(RTRIM($LTLLbs));
      $HelperValues33BSp = LTRIM(RTRIM($HelperValues3BSp)) . LTRIM(RTRIM($LTLLbs));

      if(strpos($row['HelperValues'], $HelperValues00BSp) !== false)
      {
            $LTLLbs0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling0BSp, FILTER_SANITIZE_NUMBER_INT);
            if($LTLLbs0==null)
            {
                  $LTLLbs0bsdiff0p = "-";
            }
            else
            {
                  $LTLLbsdiff0p = filter_var($LTLL0p, FILTER_SANITIZE_NUMBER_INT) - filter_var($LMNR0p, FILTER_SANITIZE_NUMBER_INT) - filter_var(array_sum($LTLLbs0p), FILTER_SANITIZE_NUMBER_INT);   
            }
      }
      if(strpos($row['HelperValues'], $HelperValues11BSp) !== false)
      {
            $LTLLbs1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling1BSp, FILTER_SANITIZE_NUMBER_INT);
            
      }
      if(strpos($row['HelperValues'], $HelperValues22BSp) !== false)
      {
            $LTLLbs2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling2BSp, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33BSp) !== false)
      {
            $LTLLbs3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling3BSp, FILTER_SANITIZE_NUMBER_INT);;
      }
}



if(strpos($row['COA'], $REXRgs) !== false)
{
      $HelperValues00GSp = LTRIM(RTRIM($HelperValues0GSp)) . LTRIM(RTRIM($REXRgs));
      $HelperValues11GSp = LTRIM(RTRIM($HelperValues1GSp)) . LTRIM(RTRIM($REXRgs));
      $HelperValues22GSp = LTRIM(RTRIM($HelperValues2GSp)) . LTRIM(RTRIM($REXRgs));
      $HelperValues33GSp = LTRIM(RTRIM($HelperValues3GSp)) . LTRIM(RTRIM($REXRgs));

      if(strpos($row['HelperValues'], $HelperValues00GSp) !== false)
      {
            $REXRgs0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling0GSp, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11GSp) !== false)
      {
            $REXRgs1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling1GSp, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22GSp) !== false)
      {
            $REXRgs2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling2GSp, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33GSp) !== false)
      {
            $REXRgs3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling3GSp, FILTER_SANITIZE_NUMBER_INT);;
      }
}

if(strpos($row['COA'], $RINRgs) !== false)
{
      $HelperValues00GSp = LTRIM(RTRIM($HelperValues0GSp)) . LTRIM(RTRIM($RINRgs));
      $HelperValues11GSp = LTRIM(RTRIM($HelperValues1GSp)) . LTRIM(RTRIM($RINRgs));
      $HelperValues22GSp = LTRIM(RTRIM($HelperValues2GSp)) . LTRIM(RTRIM($RINRgs));
      $HelperValues33GSp = LTRIM(RTRIM($HelperValues3GSp)) . LTRIM(RTRIM($RINRgs));

      if(strpos($row['HelperValues'], $HelperValues00GSp) !== false)
      {
            $RINRgs0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling0GSp, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11GSp) !== false)
      {
            $RINRgs1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling1GSp, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22GSp) !== false)
      {
            $RINRgs2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling2GSp, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33GSp) !== false)
      {
            $RINRgs3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling3GSp, FILTER_SANITIZE_NUMBER_INT);;
      }
}

if(strpos($row['COA'], $EIBTgs) !== false)
{
      $HelperValues00GSp = LTRIM(RTRIM($HelperValues0GSp)) . LTRIM(RTRIM($EIBTgs));
      $HelperValues11GSp = LTRIM(RTRIM($HelperValues1GSp)) . LTRIM(RTRIM($EIBTgs));
      $HelperValues22GSp = LTRIM(RTRIM($HelperValues2GSp)) . LTRIM(RTRIM($EIBTgs));
      $HelperValues33GSp = LTRIM(RTRIM($HelperValues3GSp)) . LTRIM(RTRIM($EIBTgs));

      if(strpos($row['HelperValues'], $HelperValues00GSp) !== false)
      {
            $EIBTgs0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling0GSp, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11GSp) !== false)
      {
            $EIBTgs1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling1GSp, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22GSp) !== false)
      {
            $EIBTgs2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling2GSp, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33GSp) !== false)
      {
            $EIBTgs3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling3GSp, FILTER_SANITIZE_NUMBER_INT);;
      }
}

if(strpos($row['COA'], $TTAXgs) !== false)
{
      $HelperValues00GSp = LTRIM(RTRIM($HelperValues0GSp)) . LTRIM(RTRIM($TTAXgs));
      $HelperValues11GSp = LTRIM(RTRIM($HelperValues1GSp)) . LTRIM(RTRIM($TTAXgs));
      $HelperValues22GSp = LTRIM(RTRIM($HelperValues2GSp)) . LTRIM(RTRIM($TTAXgs));
      $HelperValues33GSp = LTRIM(RTRIM($HelperValues3GSp)) . LTRIM(RTRIM($TTAXgs));

      if(strpos($row['HelperValues'], $HelperValues00GSp) !== false)
      {
            $TTAXgs0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling0GSp, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11GSp) !== false)
      {
            $TTAXgs1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling1GSp, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22GSp) !== false)
      {
            $TTAXgs2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling2GSp, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33GSp) !== false)
      {
            $TTAXgs3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling3GSp, FILTER_SANITIZE_NUMBER_INT);;
      }
}

if(strpos($row['COA'], $TIATgs) !== false)
{
      $HelperValues00GSp = LTRIM(RTRIM($HelperValues0GSp)) . LTRIM(RTRIM($TIATgs));
      $HelperValues11GSp = LTRIM(RTRIM($HelperValues1GSp)) . LTRIM(RTRIM($TIATgs));
      $HelperValues22GSp = LTRIM(RTRIM($HelperValues2GSp)) . LTRIM(RTRIM($TIATgs));
      $HelperValues33GSp = LTRIM(RTRIM($HelperValues3GSp)) . LTRIM(RTRIM($TIATgs));

      if(strpos($row['HelperValues'], $HelperValues00GSp) !== false)
      {
            $TIATgs0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling0GSp, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11GSp) !== false)
      {
            $TIATgs1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling1GSp, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22GSp) !== false)
      {
            $TIATgs2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling2GSp, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33GSp) !== false)
      {
            $TIATgs3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling3GSp, FILTER_SANITIZE_NUMBER_INT);;
      }
}

if(strpos($row['COA'], $CEIAgs) !== false)
{
      $HelperValues00GSp = LTRIM(RTRIM($HelperValues0GSp)) . LTRIM(RTRIM($CEIAgs));
      $HelperValues11GSp = LTRIM(RTRIM($HelperValues1GSp)) . LTRIM(RTRIM($CEIAgs));
      $HelperValues22GSp = LTRIM(RTRIM($HelperValues2GSp)) . LTRIM(RTRIM($CEIAgs));
      $HelperValues33GSp = LTRIM(RTRIM($HelperValues3GSp)) . LTRIM(RTRIM($CEIAgs));

      if(strpos($row['HelperValues'], $HelperValues00GSp) !== false)
      {
            $CEIAgs0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling0GSp, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11GSp) !== false)
      {
            $CEIAgs1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling1GSp, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22GSp) !== false)
      {
            $CEIAgs2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling2GSp, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33GSp) !== false)
      {
            $CEIAgs3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling3GSp, FILTER_SANITIZE_NUMBER_INT);;
      }
}

if(strpos($row['COA'], $EUIEgs) !== false)
{
      $HelperValues00GSp = LTRIM(RTRIM($HelperValues0GSp)) . LTRIM(RTRIM($EUIEgs));
      $HelperValues11GSp = LTRIM(RTRIM($HelperValues1GSp)) . LTRIM(RTRIM($EUIEgs));
      $HelperValues22GSp = LTRIM(RTRIM($HelperValues2GSp)) . LTRIM(RTRIM($EUIEgs));
      $HelperValues33GSp = LTRIM(RTRIM($HelperValues3GSp)) . LTRIM(RTRIM($EUIEgs));

      if(strpos($row['HelperValues'], $HelperValues00GSp) !== false)
      {
            $EUIEgs0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling0GSp, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11GSp) !== false)
      {
            $EUIEgs1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling1GSp, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22GSp) !== false)
      {
            $EUIEgs2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling2GSp, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33GSp) !== false)
      {
            $EUIEgs3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling3GSp, FILTER_SANITIZE_NUMBER_INT);;
      }
}

if(strpos($row['COA'], $ATOTgs) !== false)
{
      $HelperValues00GSp = LTRIM(RTRIM($HelperValues0GSp)) . LTRIM(RTRIM($ATOTgs));
      $HelperValues11GSp = LTRIM(RTRIM($HelperValues1GSp)) . LTRIM(RTRIM($ATOTgs));
      $HelperValues22GSp = LTRIM(RTRIM($HelperValues2GSp)) . LTRIM(RTRIM($ATOTgs));
      $HelperValues33GSp = LTRIM(RTRIM($HelperValues3GSp)) . LTRIM(RTRIM($ATOTgs));

      if(strpos($row['HelperValues'], $HelperValues00GSp) !== false)
      {
            $ATOTgs0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling0GSp, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11GSp) !== false)
      {
            $ATOTgs1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling1GSp, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22GSp) !== false)
      {
            $ATOTgs2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling2GSp, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33GSp) !== false)
      {
            $ATOTgs3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling3GSp, FILTER_SANITIZE_NUMBER_INT);;
      }
}

if(strpos($row['COA'], $LTLLgs) !== false)
{
      $HelperValues00GSp = LTRIM(RTRIM($HelperValues0GSp)) . LTRIM(RTRIM($LTLLgs));
      $HelperValues11GSp = LTRIM(RTRIM($HelperValues1GSp)) . LTRIM(RTRIM($LTLLgs));
      $HelperValues22GSp = LTRIM(RTRIM($HelperValues2GSp)) . LTRIM(RTRIM($LTLLgs));
      $HelperValues33GSp = LTRIM(RTRIM($HelperValues3GSp)) . LTRIM(RTRIM($LTLLgs));

      if(strpos($row['HelperValues'], $HelperValues00GSp) !== false)
      {
            $LTLLgs0p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling0GSp, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11GSp) !== false)
      {
            $LTLLgs1p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling1GSp, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22GSp) !== false)
      {
            $LTLLgs2p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling2GSp, FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33GSp) !== false)
      {
            $LTLLgs3p[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling3GSp, FILTER_SANITIZE_NUMBER_INT);;
      }
}



?>


