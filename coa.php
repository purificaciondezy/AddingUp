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
            $DDPS10[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_FLOAT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $DDPS11[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_FLOAT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $DDPS12[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_FLOAT);
      }

      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $DDPS13[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_FLOAT);
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
            $DDPS20[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues11) !== false)
      {
            $DDPS21[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues22) !== false)
      {
            $DDPS22[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
      }
      if(strpos($row['HelperValues'], $HelperValues33) !== false)
      {
            $DDPS23[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
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
            $ATOT2[] = filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT);
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
            $REXRbs0[] =filter_var($row['LineItemValue'], FILTER_SANITIZE_NUMBER_INT)* (int)filter_var($Scaling0BS, FILTER_SANITIZE_NUMBER_INT);        
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
?>

