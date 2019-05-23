<?php
//////////////////////////////////////////////////////CURRENT FISCAL YEAR VARIABLES
    $OrgID = "";
    $RepoNo = "";
    $Type = "";
    $IssuerName = "";    
    $FY = 0;
    $PFY = 0;
    $FinStmtType[] = "";
    $FinStmtTypeINC = 'INC';
    $FinStmtTypeBAL = 'BAL';
    $FinStmtTypeCAS = 'CAS';
    $FinStmtTypeBS = 'BS';
    $FinStmtTypeGS = 'GS';

    $EndDate[] = "";
    $LineItemValue[]  = "";

    $true = 'TRUE';
    $false = 'FALSE';
    $blank = '-';

    $EndDate0 = "";
    $EndDate1 = "";
    $EndDate2 = "";
    $EndDate3 = "";

    $Interim0 = "";
    $Interim1 = "";
    $Interim2 = "";
    $Interim3 = "";

    $DateLength0 = "";
    $DateLength1 = "";
    $DateLength2 = "";
    $DateLength3 = "";

    $StatementDate0 = "";
    $StatementDate1 = "";
    $StatementDate2 = "";
    $StatementDate3 = "";

    $FilingDate0 = "";
    $FilingDate1 = "";
    $FilingDate2 = "";
    $FilingDate3 = "";

    $SubmissionType0 = "";
    $SubmissionType1 = "";
    $SubmissionType2 = "";
    $SubmissionType3 = "";

    $Scaling0 = "";
    $Scaling1 = "";
    $Scaling2 = "";
    $Scaling3 = "";

    $UpdateType0 = "";
    $UpdateType1 = "";
    $UpdateType2 = "";
    $UpdateType3 = "";

    $InterimType0 = "";
    $InterimType1 = "";
    $InterimType2 = "";
    $InterimType3 = "";

    $HelperInconsistentFPDFlag0 = "";
    $HelperInconsistentFPDFlag1 = "";
    $HelperInconsistentFPDFlag2 = "";
    $HelperInconsistentFPDFlag3 = "";

    $HelperValues0 = "";
    $HelperValues1 = "";
    $HelperValues2 = "";
    $HelperValues3 = "";

    $HelperValues00 = "";
    $HelperValues11 = "";
    $HelperValues22 = "";
    $HelperValues33 = "";

    $RTLR0[] = $RTLR1[] = $RTLR2[] = $RTLR3[] = "";
    $ECOR0[] = $ECOR1[] = $ECOR2[] = $ECOR3[] = ""; 
    $ESGA0[] = $ESGA1[] = $ESGA2[] = $ESGA3[] = "";
    $ETOE0[] = $ETOE1[] = $ETOE2[] = $ETOE3[] = "";
    $EIBT0[] = $EIBT1[] = $EIBT2[] = $EIBT3[] = "";
    $TTAX0[] = $TTAX1[] = $TTAX2[] = $TTAX3[] = "";
    $TIAT0[] = $TIAT1[] = $TIAT2[] = $TIAT3[] = "";
    $CIAC0[] = $CIAC1[] = $CIAC2[] = $CIAC3[] = "";
    $XNIC0[] = $XNIC1[] = $XNIC2[] = $XNIC3[] = "";
    $XNIA0[] = $XNIA1[] = $XNIA2[] = $XNIA3[] = "";
    $STSI0[] = $STSI1[] = $STSI2[] = $STSI3[] = ""; 
    $totalSTSI0[] = $totalSTSI1[] = $totalSTSI2[] = $totalSTSI3[] = "";
    $VDEP0[] = $VDEP1[] = $VDEP2[] = $VDEP3[] = ""; 
    $VAMI0[] = $VAMI1[] = $VAMI2[] = $VAMI3[] = ""; 
    $totalVdepVami0[] = $totalVdepVami1[] = $totalVdepVami2[] = $totalVdepVami3[] = "";
    $VAMA0[] = $VAMA1[] = $VAMA2[] = $VAMA3[] = ""; 
    $DCGD0[] = $DCGD1[] = $DCGD2[] = $DCGD3[]  = "";
    $DDPS10[] = $DDPS11[] = $DDPS12[] = $DDPS13[]  = "";
    $DDPS20[] = $DDPS21[] = $DDPS22[] = $DDPS23[]  = "";
    $DSPS10[] = $DSPS11[] = $DSPS12[] = $DSPS13[]  = "";
    $VITT0[] = $VITT1[] = $VITT2[] = $VITT3[]  = "";
    $EDEP0[] = $EDEP1[] = $EDEP2[] = $EDEP3[]  = "";
    $EAMI0[] = $EAMI1[] = $EAMI2[] = $EAMI3[]  = "";
    $ERXP0[] = $ERXP1[] = $ERXP2[] = $ERXP3[]  = "";
    $VRXP0[] = $VRXP1[] = $VRXP2[] = $VRXP3[]  = "";
    $EIIN0[] = $EIIN1[] = $EIIN2[] = $EIIN3[]  = "";
    $EIEX0[] = $EIEX1[] = $EIEX2[] = $EIEX3[]  = "";
    $NIIN0[] = $NIIN1[] = $NIIN2[] = $NIIN3[]  = "";
    $NIEN0[] = $NIEN1[] = $NIEN2[] = $NIEN3[]  = "";
    $VIEX0[] = $VIEX1[] = $VIEX2[] = $VIEX3[]  = "";
    $VCAP0[] = $VCAP1[] = $VCAP2[] = $VCAP3[]  = "";
    $VEIA0[] = $VEIA1[] = $VEIA2[] = $VEIA3[]  = "";
    $XTRA0[] = $XTRA1[] = $XTRA2[] = $XTRA3[]  = "";
    $GBAS0[] = $GBAS1[] = $GBAS2[] = $GBAS3[]  = "";
    $GDWS0[] = $GDWS1[] = $GDWS2[] = $GDWS3[]  = "";
    $HFFO0[] = $HFFO1[] = $HFFO2[] = $HFFO3[]  = "";
    $VIAU0[] = $VIAU1[] = $VIAU2[] = $VIAU3[]  = "";
    $ERDW0[] = $ERDW1[] = $ERDW2[] = $ERDW3[]  = "";
    $ERES0[] = $ERES1[] = $ERES2[] = $ERES3[]  = "";
    $ELIT0[] = $ELIT1[] = $ELIT2[] = $ELIT3[]  = "";
    $EIAU0[] = $EIAU1[] = $EIAU2[] = $EIAU3[]  = "";
    $EIAS0[] = $EIAS1[] = $EIAS2[] = $EIAS3[]  = "";
    $EGLA0[] = $EGLA1[] = $EGLA2[] = $EGLA3[]  = "";
    $EUIE0[] = $EUIE1[] = $EUIE2[] = $EUIE3[]  = "";
    $NGLA0[] = $NGLA1[] = $NGLA2[] = $NGLA3[]  = "";
    $NUII0[] = $NUII1[] = $NUII2[] = $NUII3[]  = "";
    $NRES0[] = $NRES1[] = $NRES2[] = $NRES3[]  = "";
    $NLIT0[] = $NLIT1[] = $NLIT2[] = $NLIT3[]  = "";
    $NUIE0[] = $NUIE1[] = $NUIE2[] = $NUIE3[]  = "";
    $NAMA0[] = $NAMA1[] = $NAMA2[] = $NAMA3[]  = "";
    $VAMA0[] = $VAMA1[] = $VAMA2[] = $VAMA3[]  = "";
    $VGLA0[] = $VGLA1[] = $VGLA2[] = $VGLA3[]  = "";
    $VIAS0[] = $VIAS1[] = $VIAS2[] = $VIAS3[]  = "";
    $VIAU0[] = $VIAU1[] = $VIAU2[] = $VIAU3[]  = "";
    $VLIT0[] = $VLIT1[] = $VLIT2[] = $VLIT3[]  = "";
    $VRDW0[] = $VRDW1[] = $VRDW2[] = $VRDW3[]  = "";
    $VRES0[] = $VRES1[] = $VRES2[] = $VRES3[]  = "";
    $VUIE0[] = $VUIE1[] = $VUIE2[] = $VUIE3[]  = "";
    $VRAD0[] = $VRAD1[] = $VRAD2[] = $VRAD3[]  = "";


//////   BALANCE SHEET
    $StatementDate0BAL = "";
    $StatementDate1BAL = "";
    $StatementDate2BAL = "";
    $StatementDate3BAL = "";

    $SubmissionType0BAL = "";
    $SubmissionType1BAL = "";
    $SubmissionType2BAL = "";
    $SubmissionType3BAL = "";

    $UpdateType0BAL = "";
    $UpdateType1BAL = "";
    $UpdateType2BAL = "";
    $UpdateType3BAL = "";

    $HelperInconsistentFPDFlag0BAL = "";
    $HelperInconsistentFPDFlag1BAL = "";
    $HelperInconsistentFPDFlag2BAL = "";
    $HelperInconsistentFPDFlag3BAL = "";

    $HelperValues0BAL = "";
    $HelperValues1BAL = "";
    $HelperValues2BAL = "";
    $HelperValues3BAL = "";

    $HelperValues00BAL = "";
    $HelperValues11BAL = "";
    $HelperValues22BAL = "";
    $HelperValues33BAL = "";

    $ACAE0[] = $ACAE1[] = $ACAE2[] = $ACAE3[] = "";
    $ASTI0[] = $ASTI1[] = $ASTI2[] = $ASTI3[] = "";
    $AACR0[] = $AACR1[] = $AACR2[] = $AACR3[] = "";
    $ASTR0[] = $ASTR1[] = $ASTR2[] = $ASTR3[] = "";
    $APDA0[] = $APDA1[] = $APDA2[] = $APDA3[] = "";
    $AAMT0[] = $AAMT1[] = $AAMT2[] = $AAMT3[] = "";
    $ADEP0[] = $ADEP1[] = $ADEP2[] = $ADEP3[] = "";
    $ATOT0[] = $ATOT1[] = $ATOT2[] = $ATOT3[] = "";
    $LAPB0[] = $LAPB1[] = $LAPB2[] = $LAPB3[] = "";
    $LSTD0[] = $LSTD1[] = $LSTD2[] = $LSTD3[] = "";
    $LCLD0[] = $LCLD1[] = $LCLD2[] = $LCLD3[] = "";
    $LLTD0[] = $LLTD1[] = $LLTD2[] = $LLTD3[] = "";
    $LCLO0[] = $LCLO1[] = $LCLO2[] = $LCLO3[] = "";
    $LTLL0[] = $LTLL1[] = $LTLL2[] = $LTLL3[] = "";
    $LMNR0[] = $LMNR1[] = $LMNR2[] = $LMNR3[] = "";
    $QTLE0[] = $QTLE1[] = $QTLE2[] = $QTLE3[] = "";
    $QTEL0[] = $QTEL1[] = $QTEL2[] = $QTEL3[] = "";
    $QCSO10[] = $QCSO11[] = $QCSO12[] = $QCSO13[] = "";
    $QCSO20[] = $QCSO21[] = $QCSO22[] = $QCSO23[] = "";
    $QTSN10[] = $QTSN11[] = $QTSN12[] = $QTSN13[] = "";
    $QTSN20[] = $QTSN21[] = $QTSN22[] = $QTSN23[] = "";
    $QTCO0[] = $QTCO1[] = $QTCO2[] = $QTCO3[] = "";
    $VFSS0[] = $VFSS1[] = $VFSS2[] = $VFSS3[] = "";
    $METL0[] = $METL1[] = $METL2[] = $METL3[] = "";
    $MNOS0[] = $MNOS1[] = $MNOS2[] = $MNOS3[] = "";
    $VRUQ0[] = $VRUQ1[] = $VRUQ2[] = $VRUQ3[] = "";

//////    CASH FLOW STATEMENT
    $StatementDate0CAS = "";
    $StatementDate1CAS = "";
    $StatementDate2CAS = "";
    $StatementDate3CAS = "";

    $SubmissionType0CAS = "";
    $SubmissionType1CAS = "";
    $SubmissionType2CAS = "";
    $SubmissionType3CAS = "";

    $UpdateType0CAS = "";
    $UpdateType1CAS = "";
    $UpdateType2CAS = "";
    $UpdateType3CAS = "";

    $HelperInconsistentFPDFlag0CAS = "";
    $HelperInconsistentFPDFlag1CAS = "";
    $HelperInconsistentFPDFlag2CAS = "";
    $HelperInconsistentFPDFlag3CAS = "";

    $HelperValues0CAS = "";
    $HelperValues1CAS = "";
    $HelperValues2CAS = "";
    $HelperValues3CAS = "";

    $HelperValues00CAS = "";
    $HelperValues11CAS = "";
    $HelperValues22CAS = "";
    $HelperValues33CAS = "";
    
    $ONET0[] = $ONET1[] = $ONET2[] = $ONET3[] = "";  
    $SDEP0[] = $SDEP1[] = $SDEP2[] = $SDEP3[] = "";  
    $OAMI0[] = $OAMI1[] = $OAMI2[] = $OAMI3[] = "";  
    $OTLO0[] = $OTLO1[] = $OTLO2[] = $OTLO3[] = "";  
    $IBAQ0[] = $IBAQ1[] = $IBAQ2[] = $IBAQ3[] = "";  
    $ICEX0[] = $ICEX1[] = $ICEX2[] = $ICEX3[] = "";  
    $ITLI0[] = $ITLI1[] = $ITLI2[] = $ITLI3[] = "";  
    $FLDN0[] = $FLDN1[] = $FLDN2[] = $FLDN3[] = "";  
    $FSDN0[] = $FSDN1[] = $FSDN2[] = $FSDN3[] = "";  
    $FLDI0[] = $FLDI1[] = $FLDI2[] = $FLDI3[] = "";  
    $FSDI0[] = $FSDI1[] = $FSDI2[] = $FSDI3[] = "";  
    $FLDR0[] = $FLDR1[] = $FLDR2[] = $FLDR3[] = "";  
    $FSDR0[] = $FSDR1[] = $FSDR2[] = $FSDR3[] = "";  
    $FTLF0[] = $FTLF1[] = $FTLF2[] = $FTLF3[] = "";  
    $SFEE0[] = $SFEE1[] = $SFEE2[] = $SFEE3[] = "";  
    $SNCC0[] = $SNCC1[] = $SNCC2[] = $SNCC3[] = "";  
    $SNCB0[] = $SNCB1[] = $SNCB2[] = $SNCB3[] = "";  
    $SNCE0[] = $SNCE1[] = $SNCE2[] = $SNCE3[] = "";  
    $SCIP0[] = $SCIP1[] = $SCIP2[] = $SCIP3[] = "";  
    $SCTP0[] = $SCTP1[] = $SCTP2[] = $SCTP3[] = "";  
    $IINS0[] = $IINS1[] = $IINS2[] = $IINS3[] = "";  
    $IINP0[] = $IINP1[] = $IINP2[] = $IINP3[] = "";  
    $ISFA0[] = $ISFA1[] = $ISFA2[] = $ISFA3[] = "";  
    $ICEX0[] = $ICEX1[] = $ICEX2[] = $ICEX3[] = "";  
    $ISOI0[] = $ISOI1[] = $ISOI2[] = $ISOI3[] = "";  
    $IIAQ0[] = $IIAQ1[] = $IIAQ2[] = $IIAQ3[] = "";  
    $ISOB0[] = $ISOB1[] = $ISOB2[] = $ISOB3[] = "";  
    $IIAQ0[] = $IIAQ1[] = $IIAQ2[] = $IIAQ3[] = "";  
    $FSIC0[] = $FSIC1[] = $FSIC2[] = $FSIC3[] = "";  
    $FRRC0[] = $FRRC1[] = $FRRC2[] = $FRRC3[] = "";  
    $FSIP0[] = $FSIP1[] = $FSIP2[] = $FSIP3[] = "";  
    $FRRP0[] = $FRRP1[] = $FRRP2[] = $FRRP3[] = "";  
    $FDPC0[] = $FDPC1[] = $FDPC2[] = $FDPC3[] = "";  
    $FDPP0[] = $FDPP1[] = $FDPP2[] = $FDPP3[] = "";  
    $FRCP0[] = $FRCP1[] = $FRCP2[] = $FRCP3[] = "";  

//////    BUSINESS SEGMENT
    $StatementDate0BS = "";
    $StatementDate1BS = "";
    $StatementDate2BS = "";
    $StatementDate3BS = "";

    $SubmissionType0BS = "";
    $SubmissionType1BS = "";
    $SubmissionType2BS = "";
    $SubmissionType3BS = "";

    $Scaling0BS = "";
    $Scaling1BS = "";
    $Scaling2BS = "";
    $Scaling3BS = "";

    $UpdateType0BS = "";
    $UpdateType1BS = "";
    $UpdateType2BS = "";
    $UpdateType3BS = "";

    $HelperInconsistentFPDFlag0BS = "";
    $HelperInconsistentFPDFlag1BS = "";
    $HelperInconsistentFPDFlag2BS = "";
    $HelperInconsistentFPDFlag3BS = "";

    $HelperValues0BS = "";
    $HelperValues1BS = "";
    $HelperValues2BS = "";
    $HelperValues3BS = "";

    $HelperValues00BS = "";
    $HelperValues11BS = "";
    $HelperValues22BS = "";
    $HelperValues33BS = "";

    $InterimType0BS = "";
    $InterimType1BS = "";
    $InterimType2BS = "";
    $InterimType3BS = "";

    $DateLength0BS = "" ;
    $DateLength1BS = "" ;
    $DateLength2BS = "" ;
    $DateLength3BS = "" ;


    $REXRbs0[] = $REXRbs1[] = $REXRbs2[] = $REXRbs3[] = ""; 
    $RINRbs0[] = $RINRbs1[] = $RINRbs2[] = $RINRbs3[] = ""; 
    $EIBTbs0[] = $EIBTbs1[] = $EIBTbs2[] = $EIBTbs3[] = ""; 
    $TTAXbs0[] = $TTAXbs1[] = $TTAXbs2[] = $TTAXbs3[] = ""; 
    $TIATbs0[] = $TIATbs1[] = $TIATbs2[] = $TIATbs3[] = ""; 
    $CEIAbs0[] = $CEIAbs1[] = $CEIAbs2[] = $CEIAbs3[] = ""; 
    $EUIEbs0[] = $EUIEbs1[] = $EUIEbs2[] = $EUIEbs3[] = ""; 
    $ATOTbs0[] = $ATOTbs1[] = $ATOTbs2[] = $ATOTbs3[] = ""; 
    $LTLLbs0[] = $LTLLbs1[] = $LTLLbs2[] = $LTLLbs3[] = ""; 


//////    GEOGRAPHIC SEGMENT
    $StatementDate0GS = "";
    $StatementDate1GS = "";
    $StatementDate2GS = "";
    $StatementDate3GS = "";

    $SubmissionType0GS = "";
    $SubmissionType1GS = "";
    $SubmissionType2GS = "";
    $SubmissionType3GS = "";

    $Scaling0GS = "";
    $Scaling1GS = "";
    $Scaling2GS = "";
    $Scaling3GS = "";

    $UpdateType0GS = "";
    $UpdateType1GS = "";
    $UpdateType2GS = "";
    $UpdateType3GS = "";

    $HelperInconsistentFPDFlag0GS = "";
    $HelperInconsistentFPDFlag1GS = "";
    $HelperInconsistentFPDFlag2GS = "";
    $HelperInconsistentFPDFlag3GS = "";

    $HelperValues0GS = "";
    $HelperValues1GS = "";
    $HelperValues2GS = "";
    $HelperValues3GS = "";

    $HelperValues00GS = "";
    $HelperValues11GS = "";
    $HelperValues22GS = "";
    $HelperValues33GS = "";

    $InterimType0GS = "";
    $InterimType1GS = "";
    $InterimType2GS = "";
    $InterimType3GS = "";

    $DateLength0GS = "" ;
    $DateLength1GS = "" ;
    $DateLength2GS = "" ;
    $DateLength3GS = "" ;

    $REXRgs0[] = $REXRgs1[] = $REXRgs2[] = $REXRgs3[] = ""; 
    $RINRgs0[] = $RINRgs1[] = $RINRgs2[] = $RINRgs3[] = ""; 
    $EIBTgs0[] = $EIBTgs1[] = $EIBTgs2[] = $EIBTgs3[] = ""; 
    $TTAXgs0[] = $TTAXgs1[] = $TTAXgs2[] = $TTAXgs3[] = ""; 
    $TIATgs0[] = $TIATgs1[] = $TIATgs2[] = $TIATgs3[] = ""; 
    $CEIAgs0[] = $CEIAgs1[] = $CEIAgs2[] = $CEIAgs3[] = ""; 
    $EUIEgs0[] = $EUIEgs1[] = $EUIEgs2[] = $EUIEgs3[] = ""; 
    $ATOTgs0[] = $ATOTgs1[] = $ATOTgs2[] = $ATOTgs3[] = ""; 
    $LTLLgs0[] = $LTLLgs1[] = $LTLLgs2[] = $LTLLgs3[] = ""; 

    ///////    ADDING UP (INCOME STATEMENT)
    $RTLRdiff1[] = $RTLRdiff2[] = "";
    $ETOEdiff1 = $ETOEdiff2 = "";
    $TIATdiff1 = $TIATdiff2 = "";
    $XTRAdiff1 = $XTRAdiff2 = "";
    $CIACdiff1 = $CIACdiff2 = "";
    $XNICdiff1 = $XNICdiff2 = "";
    $STSIdiff1 = $STSIdiff2 = "";
    $VIEXdiff1[] = $VIEXdiff2[] = "";
    $VDEPdiff1 = $VDEPdiff2 = "";
    $VAMIdiff1 = $VAMIdiff2 = "";
    $VAMAdiff1 = $VAMAdiff2 = "";
    $DCGDdiff1 = $DCGDdiff2 = "";
    $DDPS1diff1[] = $DDPS1diff2[] ="";
    $DDPS2diff1 = $DDPS2diff2 = "";
    $DSPS1diff1 = $DSPS1diff2 = "";
    $VRXPdiff1 = $VRXPdiff2 = "";
    $VITTdiff1 = $VITTdiff2 = "";

    ///////    BAL/INC VS SEGMENTS (BUSINESS SEGMENT)
    $REXRdiffBS0[] = $REXRdiffBS1[] = $REXRdiffBS2[] = $REXRdiffBS3[] = "";
    $RINRdiffBS0[] = $RINRdiffBS1[] = $RINRdiffBS2[] = $RINRdiffBS3[] = "";
    $EIBTdiffBS0[] = $EIBTdiffBS1[] = $EIBTdiffBS2[] = $EIBTdiffBS3[] = "";
    $TTAXdiffBS0[] = $TTAXdiffBS1[] = $TTAXdiffBS2[] = $TTAXdiffBS3[] = "";
    $TIATdiffBS0[] = $TIATdiffBS1[] = $TIATdiffBS2[] = $TIATdiffBS3[] = "";
    $CEIAdiffBS0[] = $CEIAdiffBS1[] = $CEIAdiffBS2[] = $CEIAdiffBS3[] = "";
    $EUIEdiffBS0[] = $EUIEdiffBS1[] = $EUIEdiffBS2[] = $EUIEdiffBS3[] = "";
    $ATOTdiffBS0[] = $ATOTdiffBS1[] = $ATOTdiffBS2[] = $ATOTdiffBS3[] = "";
    $LTLLdiffBS0[] = $LTLLdiffBS1[] = $LTLLdiffBS2[] = $LTLLdiffBS3[] = "";

    ///////    BAL/INC VS SEGMENTS (GEOGRAPHICAL SEGMENT)
    $REXRdiffGS0[] = $REXRdiffGS1[] = $REXRdiffGS2[] = $REXRdiffGS3[] = "";
    $RINRdiffGS0[] = $RINRdiffGS1[] = $RINRdiffGS2[] = $RINRdiffGS3[] = "";
    $EIBTdiffGS0[] = $EIBTdiffGS1[] = $EIBTdiffGS2[] = $EIBTdiffGS3[] = "";
    $TTAXdiffGS0[] = $TTAXdiffGS1[] = $TTAXdiffGS2[] = $TTAXdiffGS3[] = "";
    $TIATdiffGS0[] = $TIATdiffGS1[] = $TIATdiffGS2[] = $TIATdiffGS3[] = "";
    $CEIAdiffGS0[] = $CEIAdiffGS1[] = $CEIAdiffGS2[] = $CEIAdiffGS3[] = "";
    $EUIEdiffGS0[] = $EUIEdiffGS1[] = $EUIEdiffGS2[] = $EUIEdiffGS3[] = "";
    $ATOTdiffGS0[] = $ATOTdiffGS1[] = $ATOTdiffGS2[] = $ATOTdiffGS3[] = "";
    $LTLLdiffGS0[] = $LTLLdiffGS1[] = $LTLLdiffGS2[] = $LTLLdiffGS3[] = "";

    $STSIAddingUp1 = "";
    $STSIAddingUp2 = "";
    $STSIsum = "";
    $SNCCsum = "";
    $SNCCdiff = "";




    ////////////////////////////////////////////////////PRIOR FISCAL YEAR
        $EndDatepp[] = "";

    $EndDate0p = "";
    $EndDate1p = "";
    $EndDate2p = "";
    $EndDate3p = "";

    $Interim0p = "";
    $Interim1p = "";
    $Interim2p = "";
    $Interim3p = "";

    $DateLength0p = "";
    $DateLength1p = "";
    $DateLength2p = "";
    $DateLength3p = "";

    $StatementDate0p = "";
    $StatementDate1p = "";
    $StatementDate2p = "";
    $StatementDate3p = "";

    $FilingDate0p = "";
    $FilingDate1p = "";
    $FilingDate2p = "";
    $FilingDate3p = "";

    $SubmissionType0p = "";
    $SubmissionType1p = "";
    $SubmissionType2p = "";
    $SubmissionType3p = "";

    $Scaling0p = "";
    $Scaling1p = "";
    $Scaling2p = "";
    $Scaling3p = "";

    $UpdateType0p = "";
    $UpdateType1p = "";
    $UpdateType2p = "";
    $UpdateType3p = "";

    $InterimType0p = "";
    $InterimType1p = "";
    $InterimType2p = "";
    $InterimType3p = "";

    $HelperInconsistentFPDFlag0p = "";
    $HelperInconsistentFPDFlag1p = "";
    $HelperInconsistentFPDFlag2p = "";
    $HelperInconsistentFPDFlag3p = "";

    $HelperValues0p = "";
    $HelperValues1p = "";
    $HelperValues2p = "";
    $HelperValues3p = "";

    $HelperValues00p = "";
    $HelperValues11p = "";
    $HelperValues22p = "";
    $HelperValues33p = "";

    $RTLR0p[] = $RTLR1p[] = $RTLR2p[] = $RTLR3p[] = "";
    $ECOR0p[] = $ECOR1p[] = $ECOR2p[] = $ECOR3p[] = ""; 
    $ESGA0p[] = $ESGA1p[] = $ESGA2p[] = $ESGA3p[] = "";
    $ETOE0p[] = $ETOE1p[] = $ETOE2p[] = $ETOE3p[] = "";
    $EIBT0p[] = $EIBT1p[] = $EIBT2p[] = $EIBT3p[] = "";
    $TTAX0p[] = $TTAX1p[] = $TTAX2p[] = $TTAX3p[] = "";
    $TIAT0p[] = $TIAT1p[] = $TIAT2p[] = $TIAT3p[] = "";
    $CIAC0p[] = $CIAC1p[] = $CIAC2p[] = $CIAC3p[] = "";
    $XNIC0p[] = $XNIC1p[] = $XNIC2p[] = $XNIC3p[] = "";
    $XNIA0p[] = $XNIA1p[] = $XNIA2p[] = $XNIA3p[] = "";
    $STSI0p[] = $STSI1p[] = $STSI2p[] = $STSI3p[] = ""; 
    $totalSTSI0p[] = $totalSTSI1p[] = $totalSTSI2p[] = $totalSTSI3p[] = "";
    $VDEP0p[] = $VDEP1p[] = $VDEP2p[] = $VDEP3p[] = ""; 
    $VAMI0p[] = $VAMI1p[] = $VAMI2p[] = $VAMI3p[] = ""; 
    $totalVdepVami0p[] = $totalVdepVami1p[] = $totalVdepVami2p[] = $totalVdepVami3p[] = "";
    $VAMA0p[] = $VAMA1p[] = $VAMA2p[] = $VAMA3p[] = ""; 
    $DCGD0p[] = $DCGD1p[] = $DCGD2p[] = $DCGD3p[]  = "";
    $DDPS10p[] = $DDPS11p[] = $DDPS12p[] = $DDPS13p[]  = "";
    $DDPS20p[] = $DDPS21p[] = $DDPS22p[] = $DDPS23p[]  = "";
    $DSPS10p[] = $DSPS11p[] = $DSPS12p[] = $DSPS13p[]  = "";
    $VITT0p[] = $VITT1p[] = $VITT2p[] = $VITT3p[]  = "";
    $EDEP0p[] = $EDEP1p[] = $EDEP2p[] = $EDEP3p[]  = "";
    $EAMI0p[] = $EAMI1p[] = $EAMI2p[] = $EAMI3p[]  = "";
    $ERXP0p[] = $ERXP1p[] = $ERXP2p[] = $ERXP3p[]  = "";
    $VRXP0p[] = $VRXP1p[] = $VRXP2p[] = $VRXP3p[]  = "";
    $EIIN0p[] = $EIIN1p[] = $EIIN2p[] = $EIIN3p[]  = "";
    $EIEX0p[] = $EIEX1p[] = $EIEX2p[] = $EIEX3p[]  = "";
    $NIIN0p[] = $NIIN1p[] = $NIIN2p[] = $NIIN3p[]  = "";
    $NIEN0p[] = $NIEN1p[] = $NIEN2p[] = $NIEN3p[]  = "";
    $VIEX0p[] = $VIEX1p[] = $VIEX2p[] = $VIEX3p[]  = "";
    $VCAP0p[] = $VCAP1p[] = $VCAP2p[] = $VCAP3p[]  = "";
    $VEIA0p[] = $VEIA1p[] = $VEIA2p[] = $VEIA3p[]  = "";
    $XTRA0p[] = $XTRA1p[] = $XTRA2p[] = $XTRA3p[]  = "";
    $GBAS0p[] = $GBAS1p[] = $GBAS2p[] = $GBAS3p[]  = "";
    $GDWS0p[] = $GDWS1p[] = $GDWS2p[] = $GDWS3p[]  = "";
    $HFFO0p[] = $HFFO1p[] = $HFFO2p[] = $HFFO3p[]  = "";
    $VIAU0p[] = $VIAU1p[] = $VIAU2p[] = $VIAU3p[]  = "";
    $ERDW0p[] = $ERDW1p[] = $ERDW2p[] = $ERDW3p[]  = "";
    $ERES0p[] = $ERES1p[] = $ERES2p[] = $ERES3p[]  = "";
    $ELIT0p[] = $ELIT1p[] = $ELIT2p[] = $ELIT3p[]  = "";
    $EIAU0p[] = $EIAU1p[] = $EIAU2p[] = $EIAU3p[]  = "";
    $EIAS0p[] = $EIAS1p[] = $EIAS2p[] = $EIAS3p[]  = "";
    $EGLA0p[] = $EGLA1p[] = $EGLA2p[] = $EGLA3p[]  = "";
    $EUIE0p[] = $EUIE1p[] = $EUIE2p[] = $EUIE3p[]  = "";
    $NGLA0p[] = $NGLA1p[] = $NGLA2p[] = $NGLA3p[]  = "";
    $NUII0p[] = $NUII1p[] = $NUII2p[] = $NUII3p[]  = "";
    $NRES0p[] = $NRES1p[] = $NRES2p[] = $NRES3p[]  = "";
    $NLIT0p[] = $NLIT1p[] = $NLIT2p[] = $NLIT3p[]  = "";
    $NUIE0p[] = $NUIE1p[] = $NUIE2p[] = $NUIE3p[]  = "";
    $NAMA0p[] = $NAMA1p[] = $NAMA2p[] = $NAMA3p[]  = "";
    $VAMA0p[] = $VAMA1p[] = $VAMA2p[] = $VAMA3p[]  = "";
    $VGLA0p[] = $VGLA1p[] = $VGLA2p[] = $VGLA3p[]  = "";
    $VIAS0p[] = $VIAS1p[] = $VIAS2p[] = $VIAS3p[]  = "";
    $VIAU0p[] = $VIAU1p[] = $VIAU2p[] = $VIAU3p[]  = "";
    $VLIT0p[] = $VLIT1p[] = $VLIT2p[] = $VLIT3p[]  = "";
    $VRDW0p[] = $VRDW1p[] = $VRDW2p[] = $VRDW3p[]  = "";
    $VRES0p[] = $VRES1p[] = $VRES2p[] = $VRES3p[]  = "";
    $VUIE0p[] = $VUIE1p[] = $VUIE2p[] = $VUIE3p[]  = "";
    $VRAD0p[] = $VRAD1p[] = $VRAD2p[] = $VRAD3p[]  = "";


//////   BALANCE SHEET
    $StatementDate0BALp = "";
    $StatementDate1BALp = "";
    $StatementDate2BALp = "";
    $StatementDate3BALp = "";

    $SubmissionType0BALp = "";
    $SubmissionType1BALp = "";
    $SubmissionType2BALp = "";
    $SubmissionType3BALp = "";

    $UpdateType0BALp = "";
    $UpdateType1BALp = "";
    $UpdateType2BALp = "";
    $UpdateType3BALp = "";

    $HelperInconsistentFPDFlag0BALp = "";
    $HelperInconsistentFPDFlag1BALp = "";
    $HelperInconsistentFPDFlag2BALp = "";
    $HelperInconsistentFPDFlag3BALp = "";

    $HelperValues0BALp = "";
    $HelperValues1BALp = "";
    $HelperValues2BALp = "";
    $HelperValues3BALp = "";

    $HelperValues00BALp = "";
    $HelperValues11BALp = "";
    $HelperValues22BALp = "";
    $HelperValues33BALp = "";

    $ACAE0p[] = $ACAE1p[] = $ACAE2p[] = $ACAE3p[] = "";
    $ASTI0p[] = $ASTI1p[] = $ASTI2p[] = $ASTI3p[] = "";
    $AACR0p[] = $AACR1p[] = $AACR2p[] = $AACR3p[] = "";
    $ASTR0p[] = $ASTR1p[] = $ASTR2p[] = $ASTR3p[] = "";
    $APDA0p[] = $APDA1p[] = $APDA2p[] = $APDA3p[] = "";
    $AAMT0p[] = $AAMT1p[] = $AAMT2p[] = $AAMT3p[] = "";
    $ADEP0p[] = $ADEP1p[] = $ADEP2p[] = $ADEP3p[] = "";
    $ATOT0p[] = $ATOT1p[] = $ATOT2p[] = $ATOT3p[] = "";
    $LAPB0p[] = $LAPB1p[] = $LAPB2p[] = $LAPB3p[] = "";
    $LSTD0p[] = $LSTD1p[] = $LSTD2p[] = $LSTD3p[] = "";
    $LCLD0p[] = $LCLD1p[] = $LCLD2p[] = $LCLD3p[] = "";
    $LLTD0p[] = $LLTD1p[] = $LLTD2p[] = $LLTD3p[] = "";
    $LCLO0p[] = $LCLO1p[] = $LCLO2p[] = $LCLO3p[] = "";
    $LTLL0p[] = $LTLL1p[] = $LTLL2p[] = $LTLL3p[] = "";
    $LMNR0p[] = $LMNR1p[] = $LMNR2p[] = $LMNR3p[] = "";
    $QTLE0p[] = $QTLE1p[] = $QTLE2p[] = $QTLE3p[] = "";
    $QTEL0p[] = $QTEL1p[] = $QTEL2p[] = $QTEL3p[] = "";
    $QCSO10p[] = $QCSO11p[] = $QCSO12p[] = $QCSO13p[] = "";
    $QCSO20p[] = $QCSO21p[] = $QCSO22p[] = $QCSO23p[] = "";
    $QTSN10p[] = $QTSN11p[] = $QTSN12p[] = $QTSN13p[] = "";
    $QTSN20p[] = $QTSN21p[] = $QTSN22p[] = $QTSN23p[] = "";
    $QTCO0p[] = $QTCO1p[] = $QTCO2p[] = $QTCO3p[] = "";
    $VFSS0p[] = $VFSS1p[] = $VFSS2p[] = $VFSS3p[] = "";
    $METL0p[] = $METL1p[] = $METL2p[] = $METL3p[] = "";
    $MNOS0p[] = $MNOS1p[] = $MNOS2p[] = $MNOS3p[] = "";
    $VRUQ0p[] = $VRUQ1p[] = $VRUQ2p[] = $VRUQ3p[] = "";

//////    CASH FLOW STATEMENT
    $StatementDate0CASp = "";
    $StatementDate1CASp = "";
    $StatementDate2CASp = "";
    $StatementDate3CASp = "";

    $SubmissionType0CASp = "";
    $SubmissionType1CASp = "";
    $SubmissionType2CASp = "";
    $SubmissionType3CASp = "";

    $UpdateType0CASp = "";
    $UpdateType1CASp = "";
    $UpdateType2CASp = "";
    $UpdateType3CASp = "";

    $HelperInconsistentFPDFlag0CASp = "";
    $HelperInconsistentFPDFlag1CASp = "";
    $HelperInconsistentFPDFlag2CASp = "";
    $HelperInconsistentFPDFlag3CASp = "";

    $HelperValues0CASp = "";
    $HelperValues1CASp = "";
    $HelperValues2CASp = "";
    $HelperValues3CASp = "";

    $HelperValues00CASp = "";
    $HelperValues11CASp = "";
    $HelperValues22CASp = "";
    $HelperValues33CASp = "";
    
    $ONET0p[] = $ONET1p[] = $ONET2p[] = $ONET3p[] = "";  
    $SDEP0p[] = $SDEP1p[] = $SDEP2p[] = $SDEP3p[] = "";  
    $OAMI0p[] = $OAMI1p[] = $OAMI2p[] = $OAMI3p[] = "";  
    $OTLO0p[] = $OTLO1p[] = $OTLO2p[] = $OTLO3p[] = "";  
    $IBAQ0p[] = $IBAQ1p[] = $IBAQ2p[] = $IBAQ3p[] = "";  
    $ICEX0p[] = $ICEX1p[] = $ICEX2p[] = $ICEX3p[] = "";  
    $ITLI0p[] = $ITLI1p[] = $ITLI2p[] = $ITLI3p[] = "";  
    $FLDN0p[] = $FLDN1p[] = $FLDN2p[] = $FLDN3p[] = "";  
    $FSDN0p[] = $FSDN1p[] = $FSDN2p[] = $FSDN3p[] = "";  
    $FLDI0p[] = $FLDI1p[] = $FLDI2p[] = $FLDI3p[] = "";  
    $FSDI0p[] = $FSDI1p[] = $FSDI2p[] = $FSDI3p[] = "";  
    $FLDR0p[] = $FLDR1p[] = $FLDR2p[] = $FLDR3p[] = "";  
    $FSDR0p[] = $FSDR1p[] = $FSDR2p[] = $FSDR3p[] = "";  
    $FTLF0p[] = $FTLF1p[] = $FTLF2p[] = $FTLF3p[] = "";  
    $SFEE0p[] = $SFEE1p[] = $SFEE2p[] = $SFEE3p[] = "";  
    $SNCC0p[] = $SNCC1p[] = $SNCC2p[] = $SNCC3p[] = "";  
    $SNCB0p[] = $SNCB1p[] = $SNCB2p[] = $SNCB3p[] = "";  
    $SNCE0p[] = $SNCE1p[] = $SNCE2p[] = $SNCE3p[] = "";  
    $SCIP0p[] = $SCIP1p[] = $SCIP2p[] = $SCIP3p[] = "";  
    $SCTP0p[] = $SCTP1p[] = $SCTP2p[] = $SCTP3p[] = "";  
    $IINS0p[] = $IINS1p[] = $IINS2p[] = $IINS3p[] = "";  
    $IINP0p[] = $IINP1p[] = $IINP2p[] = $IINP3p[] = "";  
    $ISFA0p[] = $ISFA1p[] = $ISFA2p[] = $ISFA3p[] = "";  
    $ICEX0p[] = $ICEX1p[] = $ICEX2p[] = $ICEX3p[] = "";  
    $ISOI0p[] = $ISOI1p[] = $ISOI2p[] = $ISOI3p[] = "";  
    $IIAQ0p[] = $IIAQ1p[] = $IIAQ2p[] = $IIAQ3p[] = "";  
    $ISOB0p[] = $ISOB1p[] = $ISOB2p[] = $ISOB3p[] = "";  
    $IIAQ0p[] = $IIAQ1p[] = $IIAQ2p[] = $IIAQ3p[] = "";  
    $FSIC0p[] = $FSIC1p[] = $FSIC2p[] = $FSIC3p[] = "";  
    $FRRC0p[] = $FRRC1p[] = $FRRC2p[] = $FRRC3p[] = "";  
    $FSIP0p[] = $FSIP1p[] = $FSIP2p[] = $FSIP3p[] = "";  
    $FRRP0p[] = $FRRP1p[] = $FRRP2p[] = $FRRP3p[] = "";  
    $FDPC0p[] = $FDPC1p[] = $FDPC2p[] = $FDPC3p[] = "";  
    $FDPP0p[] = $FDPP1p[] = $FDPP2p[] = $FDPP3p[] = "";  
    $FRCP0p[] = $FRCP1p[] = $FRCP2p[] = $FRCP3p[] = "";  

//////    BUSINESS SEGMENT
    $StatementDate0BSp = "";
    $StatementDate1BSp = "";
    $StatementDate2BSp = "";
    $StatementDate3BSp = "";

    $SubmissionType0BSp = "";
    $SubmissionType1BSp = "";
    $SubmissionType2BSp = "";
    $SubmissionType3BSp = "";

    $Scaling0BSp = "";
    $Scaling1BSp = "";
    $Scaling2BSp = "";
    $Scaling3BSp = "";

    $UpdateType0BSp = "";
    $UpdateType1BSp = "";
    $UpdateType2BSp = "";
    $UpdateType3BSp = "";

    $HelperInconsistentFPDFlag0BSp = "";
    $HelperInconsistentFPDFlag1BSp = "";
    $HelperInconsistentFPDFlag2BSp = "";
    $HelperInconsistentFPDFlag3BSp = "";

    $HelperValues0BSp = "";
    $HelperValues1BSp = "";
    $HelperValues2BSp = "";
    $HelperValues3BSp = "";

    $HelperValues00BSp = "";
    $HelperValues11BSp = "";
    $HelperValues22BSp = "";
    $HelperValues33BSp = "";

    $InterimType0BSp = "";
    $InterimType1BSp = "";
    $InterimType2BSp = "";
    $InterimType3BSp = "";

    $DateLength0BSp = "";
    $DateLength1BSp = "";
    $DateLength2BSp = "";
    $DateLength3BSp = "";


    $REXRbs0p[] = $REXRbs1p[] = $REXRbs2p[] = $REXRbs3p[] = ""; 
    $RINRbs0p[] = $RINRbs1p[] = $RINRbs2p[] = $RINRbs3p[] = ""; 
    $EIBTbs0p[] = $EIBTbs1p[] = $EIBTbs2p[] = $EIBTbs3p[] = ""; 
    $TTAXbs0p[] = $TTAXbs1p[] = $TTAXbs2p[] = $TTAXbs3p[] = ""; 
    $TIATbs0p[] = $TIATbs1p[] = $TIATbs2p[] = $TIATbs3p[] = ""; 
    $CEIAbs0p[] = $CEIAbs1p[] = $CEIAbs2p[] = $CEIAbs3p[] = ""; 
    $EUIEbs0p[] = $EUIEbs1p[] = $EUIEbs2p[] = $EUIEbs3p[] = ""; 
    $ATOTbs0p[] = $ATOTbs1p[] = $ATOTbs2p[] = $ATOTbs3p[] = ""; 
    $LTLLbs0p[] = $LTLLbs1p[] = $LTLLbs2p[] = $LTLLbs3p[] = ""; 


//////    GEOGRAPHIC SEGMENT
    $StatementDate0GSp = "";
    $StatementDate1GSp = "";
    $StatementDate2GSp = "";
    $StatementDate3GSp = "";

    $SubmissionType0GSp = "";
    $SubmissionType1GSp = "";
    $SubmissionType2GSp = "";
    $SubmissionType3GSp = "";

    $Scaling0GSp = "";
    $Scaling1GSp = "";
    $Scaling2GSp = "";
    $Scaling3GSp = "";

    $UpdateType0GSp = "";
    $UpdateType1GSp = "";
    $UpdateType2GSp = "";
    $UpdateType3GSp = "";

    $HelperInconsistentFPDFlag0GSp = "";
    $HelperInconsistentFPDFlag1GSp = "";
    $HelperInconsistentFPDFlag2GSp = "";
    $HelperInconsistentFPDFlag3GSp = "";

    $HelperValues0GSp = "";
    $HelperValues1GSp = "";
    $HelperValues2GSp = "";
    $HelperValues3GSp = "";

    $HelperValues00GSp = "";
    $HelperValues11GSp = "";
    $HelperValues22GSp = "";
    $HelperValues33GSp = "";

    $InterimType0GSp = "";
    $InterimType1GSp = "";
    $InterimType2GSp = "";
    $InterimType3GSp = "";

    $DateLength0GSp = "";
    $DateLength1GSp = "";
    $DateLength2GSp = "";
    $DateLength3GSp = "";

    $REXRgs0p[] = $REXRgs1p[] = $REXRgs2p[] = $REXRgs3p[] = ""; 
    $RINRgs0p[] = $RINRgs1p[] = $RINRgs2p[] = $RINRgs3p[] = ""; 
    $EIBTgs0p[] = $EIBTgs1p[] = $EIBTgs2p[] = $EIBTgs3p[] = ""; 
    $TTAXgs0p[] = $TTAXgs1p[] = $TTAXgs2p[] = $TTAXgs3p[] = ""; 
    $TIATgs0p[] = $TIATgs1p[] = $TIATgs2p[] = $TIATgs3p[] = ""; 
    $CEIAgs0p[] = $CEIAgs1p[] = $CEIAgs2p[] = $CEIAgs3p[] = ""; 
    $EUIEgs0p[] = $EUIEgs1p[] = $EUIEgs2p[] = $EUIEgs3p[] = ""; 
    $ATOTgs0p[] = $ATOTgs1p[] = $ATOTgs2p[] = $ATOTgs3p[] = ""; 
    $LTLLgs0p[] = $LTLLgs1p[] = $LTLLgs2p[] = $LTLLgs3p[] = ""; 

    ///////    ADDING UP (INCOME STATEMENT)
    $RTLRdiff1p[] = $RTLRdiff2p[] = "";
    $ETOEdiff1 = $ETOEdiff2p = "";
    $TIATdiff1 = $TIATdiff2p = "";
    $XTRAdiff1 = $XTRAdiff2p = "";
    $CIACdiff1 = $CIACdiff2p = "";
    $XNICdiff1 = $XNICdiff2p = "";
    $STSIdiff1 = $STSIdiff2p = "";
    $VIEXdiff1p[] = $VIEXdiff2p[] = "";
    $VDEPdiff1 = $VDEPdiff2p = "";
    $VAMIdiff1 = $VAMIdiff2p = "";
    $VAMAdiff1 = $VAMAdiff2p = "";
    $DCGDdiff1 = $DCGDdiff2p = "";
    $DDPS1diff1p[] = $DDPS1diff2p[] ="";
    $DDPS2diff1 = $DDPS2diff2p = "";
    $DSPS1diff1 = $DSPS1diff2p = "";
    $VRXPdiff1 = $VRXPdiff2p = "";
    $VITTdiff1 = $VITTdiff2p = "";

    ///////    BAL/INC VS SEGMENTS (BUSINESS SEGMENT)
    $REXRdiffBS0p[] = $REXRdiffBS1p[] = $REXRdiffBS2p[] = $REXRdiffBS3p[] = "";
    $RINRdiffBS0p[] = $RINRdiffBS1p[] = $RINRdiffBS2p[] = $RINRdiffBS3p[] = "";
    $EIBTdiffBS0p[] = $EIBTdiffBS1p[] = $EIBTdiffBS2p[] = $EIBTdiffBS3p[] = "";
    $TTAXdiffBS0p[] = $TTAXdiffBS1p[] = $TTAXdiffBS2p[] = $TTAXdiffBS3p[] = "";
    $TIATdiffBS0p[] = $TIATdiffBS1p[] = $TIATdiffBS2p[] = $TIATdiffBS3p[] = "";
    $CEIAdiffBS0p[] = $CEIAdiffBS1p[] = $CEIAdiffBS2p[] = $CEIAdiffBS3p[] = "";
    $EUIEdiffBS0p[] = $EUIEdiffBS1p[] = $EUIEdiffBS2p[] = $EUIEdiffBS3p[] = "";
    $ATOTdiffBS0p[] = $ATOTdiffBS1p[] = $ATOTdiffBS2p[] = $ATOTdiffBS3p[] = "";
    $LTLLdiffBS0p[] = $LTLLdiffBS1p[] = $LTLLdiffBS2p[] = $LTLLdiffBS3p[] = "";

    ///////    BAL/INC VS SEGMENTS (GEOGRAPHICAL SEGMENT)
    $REXRdiffGS0p[] = $REXRdiffGS1p[] = $REXRdiffGS2p[] = $REXRdiffGS3p[] = "";
    $RINRdiffGS0p[] = $RINRdiffGS1p[] = $RINRdiffGS2p[] = $RINRdiffGS3p[] = "";
    $EIBTdiffGS0p[] = $EIBTdiffGS1p[] = $EIBTdiffGS2p[] = $EIBTdiffGS3p[] = "";
    $TTAXdiffGS0p[] = $TTAXdiffGS1p[] = $TTAXdiffGS2p[] = $TTAXdiffGS3p[] = "";
    $TIATdiffGS0p[] = $TIATdiffGS1p[] = $TIATdiffGS2p[] = $TIATdiffGS3p[] = "";
    $CEIAdiffGS0p[] = $CEIAdiffGS1p[] = $CEIAdiffGS2p[] = $CEIAdiffGS3p[] = "";
    $EUIEdiffGS0p[] = $EUIEdiffGS1p[] = $EUIEdiffGS2p[] = $EUIEdiffGS3p[] = "";
    $ATOTdiffGS0p[] = $ATOTdiffGS1p[] = $ATOTdiffGS2p[] = $ATOTdiffGS3p[] = "";
    $LTLLdiffGS0p[] = $LTLLdiffGS1p[] = $LTLLdiffGS2p[] = $LTLLdiffGS3p[] = "";

    $STSIAddingUp1p = "";
    $STSIAddingUp2p = "";
    $STSIsump = "";
    $SNCCsump = "";
    $SNCCdiffp = "";
?>