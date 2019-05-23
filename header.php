<?php

	if(stripos($row['FY'], strval($FY)) !== false)
	{    
            $EndDate[] = $row['EndDate']; 
		$EndDate0 = max($EndDate); 
		$EndDate1 = max($EndDate);
		$EndDate2 = max($EndDate);

            if(stripos($row['EndDate'], $EndDate0) === false)
            {
		    $EndDate3 = $row['EndDate'];
            }

		/////INCOME STATEMENT---------------------------------
		if($row['FinStmtType'] == $FinStmtTypeINC) 
		{

		    if($EndDate0==$EndDate0 && $row['Interim'] == 0 &&$row['DateLength']==12) 
		    {
                        
		          $Interim0 = $row['Interim'];
		          $DateLength0 = $row['DateLength'];
		          $DateLength1 = $row['DateLength'];
		          $StatementDate0 = $row['StatementDate'];
		          $FilingDate0 = $row['FilingDate'];
		          $SubmissionType0 = $row['SubmissionType'];
		          $Scaling0 = $row['Scaling'];
		          $UpdateType0 = $row['FilingType'];
		          $UpdateType1 = $row['FilingType'];
		          $InterimType0 = $row['InterimTypeDesc'];
		          $HelperInconsistentFPDFlag0 = $row['HelperInconsistentFPDFlag'];    
		    }

		    if($EndDate1==$EndDate1 && $row['Interim'] == 2 &&$row['DateLength']==12) 
		    {
		          $Interim1 = $row['Interim'];
		          $StatementDate1 = $row['StatementDate'];
		          $FilingDate1 = $row['FilingDate'];
		          $SubmissionType1 = $row['SubmissionType'];
		          $Scaling1 = $row['Scaling'];
		          $InterimType1 = $row['InterimTypeDesc']; 
		          $HelperInconsistentFPDFlag1 = $row['HelperInconsistentFPDFlag'];
		    }

		    if($EndDate2==$EndDate2 && $row['Interim'] == 2 &&$row['DateLength']==6) 
		    {
		          $Interim2 = $row['Interim'];
		          $DateLength2 = $row['DateLength'];
		          $StatementDate2 = $row['StatementDate'];
		          $FilingDate2 = $row['FilingDate'];
		          $SubmissionType2 = $row['SubmissionType'];
		          $Scaling2 = $row['Scaling'];
		          $UpdateType2 = $row['FilingType'];
		          $InterimType2 = $row['InterimTypeDesc']; 
		          $HelperInconsistentFPDFlag2 = $row['HelperInconsistentFPDFlag'];
		    }

		    if($EndDate3==$EndDate3 && $row['Interim'] == 1 &&$row['DateLength']==6) 
		    {
		          $Interim3 = $row['Interim'];
		          $DateLength3 = $row['DateLength'];
		          $StatementDate3 = $row['StatementDate'];
		          $FilingDate3 = $row['FilingDate'];
		          $SubmissionType3 = $row['SubmissionType'];
		          $Scaling3 = $row['Scaling'];
		          $UpdateType3 = $row['FilingType'];
		          $InterimType3 = $row['InterimTypeDesc'];
		          $HelperInconsistentFPDFlag3 = $row['HelperInconsistentFPDFlag'];
		    }

		    $HelperValues0 = LTRIM(RTRIM($FinStmtTypeINC)) . LTRIM(RTRIM($EndDate0)) . LTRIM(RTRIM($Interim0)) . LTRIM(RTRIM($StatementDate0)) . LTRIM(RTRIM($UpdateType0)) . LTRIM(RTRIM($InterimType0)) . LTRIM(RTRIM($DateLength0));
		    $HelperValues1 = LTRIM(RTRIM($FinStmtTypeINC)) . LTRIM(RTRIM($EndDate1)) . LTRIM(RTRIM($Interim1)) . LTRIM(RTRIM($StatementDate1)) . LTRIM(RTRIM($UpdateType1)) . LTRIM(RTRIM($InterimType1)) . LTRIM(RTRIM($DateLength1));
		    $HelperValues2 = LTRIM(RTRIM($FinStmtTypeINC)) . LTRIM(RTRIM($EndDate2)) . LTRIM(RTRIM($Interim2)) . LTRIM(RTRIM($StatementDate2)) . LTRIM(RTRIM($UpdateType2)) . LTRIM(RTRIM($InterimType2)) . LTRIM(RTRIM($DateLength2));
		    $HelperValues3 = LTRIM(RTRIM($FinStmtTypeINC)) . LTRIM(RTRIM($EndDate3)) . LTRIM(RTRIM($Interim3)) . LTRIM(RTRIM($StatementDate3)) . LTRIM( RTRIM($UpdateType3)) . LTRIM(RTRIM($InterimType3)) . LTRIM(RTRIM($DateLength3));
		} 


		/////BALANCE SHEET------------------------------------
		if($row['FinStmtType'] == $FinStmtTypeBAL) 
      	{
            if($EndDate0==$EndDate0 && $row['Interim'] == 0 &&$row['DateLength']==12) 
            {
                  $StatementDate0BAL = $row['StatementDate'];
                  $SubmissionType0BAL = $row['SubmissionType'];
                  $UpdateType0BAL = $row['FilingType'];
                  $UpdateType1BAL = $row['FilingType'];
                  $HelperInconsistentFPDFlag0BAL =  $row['HelperInconsistentFPDFlag'];
            }

            if($EndDate1==$EndDate1 && $row['Interim'] == 2 &&$row['DateLength']==12) 
            {
                  $StatementDate1BAL = $row['StatementDate'];
                  $SubmissionType1BAL = $row['SubmissionType'];
                  $HelperInconsistentFPDFlag1BAL =  $row['HelperInconsistentFPDFlag'];
            }

            if($EndDate2==$EndDate2 && $row['Interim'] == 2 &&$row['DateLength']==6) 
            {
                  $StatementDate2BAL = $row['StatementDate'];
                  $SubmissionType2BAL = $row['SubmissionType'];
                  $UpdateType2BAL = $row['FilingType'];
                  $HelperInconsistentFPDFlag2BAL =  $row['HelperInconsistentFPDFlag'];
            }

            if($EndDate3==$EndDate3 && $row['Interim'] == 1 &&$row['DateLength']==6) 
            {
                  $StatementDate3BAL = $row['StatementDate'];
                  $SubmissionType3BAL = $row['SubmissionType'];
                  $UpdateType3BAL = $row['FilingType'];
                  $HelperInconsistentFPDFlag3BAL =  $row['HelperInconsistentFPDFlag'];
            }

            $HelperValues0BAL = LTRIM(RTRIM($FinStmtTypeBAL)) . LTRIM(RTRIM($EndDate0)) . LTRIM(RTRIM($Interim0)) . LTRIM(RTRIM($StatementDate0BAL)) . LTRIM(RTRIM($UpdateType0BAL)) . LTRIM(RTRIM($InterimType0)) . LTRIM(RTRIM($DateLength0));
            $HelperValues1BAL = LTRIM(RTRIM($FinStmtTypeBAL)) . LTRIM(RTRIM($EndDate1)) . LTRIM(RTRIM($Interim1)) . LTRIM(RTRIM($StatementDate1BAL)) . LTRIM(RTRIM($UpdateType1BAL)) . LTRIM(RTRIM($InterimType1)) . LTRIM(RTRIM($DateLength1));
            $HelperValues2BAL = LTRIM(RTRIM($FinStmtTypeBAL)) . LTRIM(RTRIM($EndDate2)) . LTRIM(RTRIM($Interim2)) . LTRIM(RTRIM($StatementDate2BAL)) . LTRIM(RTRIM($UpdateType2BAL)) . LTRIM(RTRIM($InterimType2)) . LTRIM(RTRIM($DateLength2));
            $HelperValues3BAL = LTRIM(RTRIM($FinStmtTypeBAL)) . LTRIM(RTRIM($EndDate3)) . LTRIM(RTRIM($Interim3)) . LTRIM(RTRIM($StatementDate3BAL)) . LTRIM( RTRIM($UpdateType3BAL)) . LTRIM(RTRIM($InterimType3)) . LTRIM(RTRIM($DateLength3));
      	}

      	/////CASH FLOW STATEMENT------------------------------
      	if($row['FinStmtType'] == $FinStmtTypeCAS) 
      	{

            if($EndDate0==$EndDate0 && $row['Interim'] == 0 &&$row['DateLength']==12) 
            {
                  $StatementDate0CAS = $row['StatementDate'];
                  $SubmissionType0CAS = $row['SubmissionType'];
                  $UpdateType0CAS = $row['FilingType'];
                  $UpdateType1CAS = $row['FilingType'];
                  $HelperInconsistentFPDFlag0CAS =  $row['HelperInconsistentFPDFlag'];
            }

            if($EndDate1==$EndDate1 && $row['Interim'] == 2 &&$row['DateLength']==12) 
            {
                  $StatementDate1CAS = $row['StatementDate'];
                  $SubmissionType1CAS = $row['SubmissionType'];
                  $HelperInconsistentFPDFlag1CAS =  $row['HelperInconsistentFPDFlag'];
            }

            if($EndDate2==$EndDate2 && $row['Interim'] == 2 &&$row['DateLength']==6) 
            {
                  $StatementDate2CAS = $row['StatementDate'];
                  $SubmissionType2CAS = $row['SubmissionType'];
                  $UpdateType2CAS = $row['FilingType'];
                  $HelperInconsistentFPDFlag2CAS =  $row['HelperInconsistentFPDFlag'];
            }

            if($EndDate3==$EndDate3 && $row['Interim'] == 1 &&$row['DateLength']==6) 
            {
                  $StatementDate3CAS = $row['StatementDate'];
                  $SubmissionType3CAS = $row['SubmissionType'];
                  $UpdateType3CAS = $row['FilingType'];
                  $HelperInconsistentFPDFlag3CAS =  $row['HelperInconsistentFPDFlag'];
            }
            
            $HelperValues0CAS = LTRIM(RTRIM($FinStmtTypeCAS)) . LTRIM(RTRIM($EndDate0)) . LTRIM(RTRIM($Interim0)) . LTRIM(RTRIM($StatementDate0CAS)) . LTRIM(RTRIM($UpdateType0CAS)) . LTRIM(RTRIM($InterimType0)) . LTRIM(RTRIM($DateLength0));
            $HelperValues1CAS = LTRIM(RTRIM($FinStmtTypeCAS)) . LTRIM(RTRIM($EndDate1)) . LTRIM(RTRIM($Interim1)) . LTRIM(RTRIM($StatementDate1CAS)) . LTRIM(RTRIM($UpdateType1CAS)) . LTRIM(RTRIM($InterimType1)) . LTRIM(RTRIM($DateLength1));
            $HelperValues2CAS = LTRIM(RTRIM($FinStmtTypeCAS)) . LTRIM(RTRIM($EndDate2)) . LTRIM(RTRIM($Interim2)) . LTRIM(RTRIM($StatementDate2CAS)) . LTRIM(RTRIM($UpdateType2CAS)) . LTRIM(RTRIM($InterimType2)) . LTRIM(RTRIM($DateLength2));
            $HelperValues3CAS = LTRIM(RTRIM($FinStmtTypeCAS)) . LTRIM(RTRIM($EndDate3)) . LTRIM(RTRIM($Interim3)) . LTRIM(RTRIM($StatementDate3CAS)) . LTRIM( RTRIM($UpdateType3CAS)) . LTRIM(RTRIM($InterimType3)) . LTRIM(RTRIM($DateLength3));
      	}

      	//////BUSINESS SEGMENT-----------------------------
            if(stripos($row['FinStmtType'], $FinStmtTypeBS) !== false) 
              {
                  if($EndDate0==$EndDate0 && $row['Interim'] == 0 &&$row['DateLength']==12) 
                  {
                        $StatementDate0BS = $row['StatementDate']; 
                        $SubmissionType0BS = $row['SubmissionType'];
                        $UpdateType0BS = $row['FilingType'];
                        $Scaling0BS = $row['Scaling'];
                        $InterimType0BS = $row['InterimTypeDesc'];
                        $DateLength0BS= $row['DateLength'];
                  }
                  if($EndDate1==$EndDate1 && $row['Interim'] == 2 &&$row['DateLength']==12) 
                  {
                        $StatementDate1BS = $row['StatementDate'];
                        $SubmissionType1BS = $row['SubmissionType'];
                        $Scaling1BS = $row['Scaling'];
                        $UpdateType1BS = $row['FilingType'];
                        $InterimType1BS = $row['InterimTypeDesc'];
                        $DateLength1BS = $row['DateLength'];
                  }

                  if($EndDate2==$EndDate2 && $row['Interim'] == 2 &&$row['DateLength']==6) 
                  {
                        $StatementDate2BS = $row['StatementDate'];
                        $SubmissionType2BS = $row['SubmissionType'];
                        $UpdateType2BS = $row['FilingType'];
                        $Scaling2BS = $row['Scaling'];
                        $InterimType2BS = $row['InterimTypeDesc'];
                        $DateLength2BS = $row['DateLength'];
                  }

                  if($EndDate3==$EndDate3 && $row['Interim'] == 1 &&$row['DateLength']==6) 
                  {
                        $StatementDate3BS = $row['StatementDate'];
                        $SubmissionType3BS = $row['SubmissionType'];
                        $UpdateType3BS = $row['FilingType'];
                        $Scaling3BS = $row['Scaling'];
                        $InterimType3BS = $row['InterimTypeDesc'];
                        $DateLength3BS = $row['DateLength'];
            }

                  $HelperValues0BS = LTRIM(RTRIM($FinStmtTypeBS)) . LTRIM(RTRIM($EndDate0)) . LTRIM(RTRIM($Interim0)) . LTRIM(RTRIM($StatementDate0BS)) . LTRIM(RTRIM($UpdateType0BS)) . LTRIM(RTRIM($InterimType0BS)) . LTRIM(RTRIM($DateLength0BS));
                  $HelperValues1BS = LTRIM(RTRIM($FinStmtTypeBS)) . LTRIM(RTRIM($EndDate1)) . LTRIM(RTRIM($Interim1)) . LTRIM(RTRIM($StatementDate1BS)) . LTRIM(RTRIM($UpdateType1BS)) . LTRIM(RTRIM($InterimType1BS)) . LTRIM(RTRIM($DateLength1BS));
                  $HelperValues2BS = LTRIM(RTRIM($FinStmtTypeBS)) . LTRIM(RTRIM($EndDate2)) . LTRIM(RTRIM($Interim2)) . LTRIM(RTRIM($StatementDate2BS)) . LTRIM(RTRIM($UpdateType2BS)) . LTRIM(RTRIM($InterimType2BS)) . LTRIM(RTRIM($DateLength2BS));
                  $HelperValues3BS = LTRIM(RTRIM($FinStmtTypeBS)) . LTRIM(RTRIM($EndDate3)) . LTRIM(RTRIM($Interim3)) . LTRIM(RTRIM($StatementDate3BS)) . LTRIM( RTRIM($UpdateType3BS)) . LTRIM(RTRIM($InterimType3BS)) . LTRIM(RTRIM($DateLength3BS));
            	}

      	//////GEOGRAPHICAL SEGMENT----------------------------
      	if(stripos($row['FinStmtType'], $FinStmtTypeGS) !== false) 
      	{
            if($EndDate0==$EndDate0 && $row['Interim'] == 0 &&$row['DateLength']==12) 
            {
                  $StatementDate0GS = $row['StatementDate']; 
                  $SubmissionType0GS = $row['SubmissionType'];
                  $UpdateType0GS = $row['FilingType'];
                  $Scaling0GS = $row['Scaling'];
                  $InterimType0GS = $row['InterimTypeDesc'];
                  $DateLength0GS = $row['DateLength'];
            }
            if($EndDate1==$EndDate1 && $row['Interim'] == 2 &&$row['DateLength']==12) 
            {
                  $StatementDate1GS = $row['StatementDate'];
                  $SubmissionType1GS = $row['SubmissionType'];
                  $Scaling1GS = $row['Scaling'];
                  $UpdateType1GS = $row['FilingType'];
                  $InterimType1GS = $row['InterimTypeDesc'];
                  $DateLength1GS = $row['DateLength'];
            }

            if($EndDate2==$EndDate2 && $row['Interim'] == 2 &&$row['DateLength']==6) 
            {
                  $StatementDate2GS = $row['StatementDate'];
                  $SubmissionType2GS = $row['SubmissionType'];
                  $UpdateType2GS = $row['FilingType'];
                  $Scaling2GS = $row['Scaling'];
                  $InterimType2GS = $row['InterimTypeDesc'];
                  $DateLength2GS = $row['DateLength'];
            }

            if($EndDate3==$EndDate3 && $row['Interim'] == 1 &&$row['DateLength']==6) 
            {
                  $StatementDate3GS = $row['StatementDate'];
                  $SubmissionType3GS = $row['SubmissionType'];
                  $UpdateType3GS = $row['FilingType'];
                  $Scaling3GS = $row['Scaling'];
                  $InterimType3GS = $row['InterimTypeDesc'];
                  $DateLength3GS = $row['DateLength'];
            }



            $HelperValues0GS = LTRIM(RTRIM($FinStmtTypeGS)) . LTRIM(RTRIM($EndDate0)) . LTRIM(RTRIM($Interim0)) . LTRIM(RTRIM($StatementDate0GS)) . LTRIM(RTRIM($UpdateType0GS)) . LTRIM(RTRIM($InterimType0GS)) . LTRIM(RTRIM($DateLength0GS));
            $HelperValues1GS = LTRIM(RTRIM($FinStmtTypeGS)) . LTRIM(RTRIM($EndDate1)) . LTRIM(RTRIM($Interim1)) . LTRIM(RTRIM($StatementDate1GS)) . LTRIM(RTRIM($UpdateType1GS)) . LTRIM(RTRIM($InterimType1GS)) . LTRIM(RTRIM($DateLength1GS));
            $HelperValues2GS = LTRIM(RTRIM($FinStmtTypeGS)) . LTRIM(RTRIM($EndDate2)) . LTRIM(RTRIM($Interim2)) . LTRIM(RTRIM($StatementDate2GS)) . LTRIM(RTRIM($UpdateType2GS)) . LTRIM(RTRIM($InterimType2GS)) . LTRIM(RTRIM($DateLength2GS));
            $HelperValues3GS = LTRIM(RTRIM($FinStmtTypeGS)) . LTRIM(RTRIM($EndDate3)) . LTRIM(RTRIM($Interim3)) . LTRIM(RTRIM($StatementDate3GS)) . LTRIM( RTRIM($UpdateType3GS)) . LTRIM(RTRIM($InterimType3GS)) . LTRIM(RTRIM($DateLength3GS));
      }

      require 'coa.php';  

	}

      
      ////////////PRIOR YEAR
      if(stripos($row['FY'], strval($PFY)) !== false)
      {    

            $EndDatep[] = $row['EndDate']; 

            $EndDate0p = max($EndDatep);
            $EndDate1p = max($EndDatep);
            $EndDate2p = max($EndDatep);

            if(stripos($row['EndDate'], $EndDate0p) === false)
            {
                $EndDate3p = $row['EndDate'];
            }

            /////INCOME STATEMENT---------------------------------
            if($row['FinStmtType'] == $FinStmtTypeINC) 
            {

                if($EndDate0p==$EndDate0p && $row['Interim'] == 0 &&$row['DateLength']==12) 
                {
                      $Interim0p = $row['Interim'];
                      $DateLength0p = $row['DateLength'];
                      $DateLength1p = $row['DateLength'];
                      $StatementDate0p = $row['StatementDate'];
                      $FilingDate0p = $row['FilingDate'];
                      $SubmissionType0p = $row['SubmissionType'];
                      $Scaling0p = $row['Scaling'];
                      $UpdateType0p = $row['FilingType'];
                      $UpdateType1p = $row['FilingType'];
                      $InterimType0p = $row['InterimTypeDesc'];
                      $HelperInconsistentFPDFlag0p = $row['HelperInconsistentFPDFlag'];    
                }

                if($EndDate1p==$EndDate1p && $row['Interim'] == 2 &&$row['DateLength']==12) 
                {
                      $Interim1p = $row['Interim'];
                      $StatementDate1p = $row['StatementDate'];
                      $FilingDate1p = $row['FilingDate'];
                      $SubmissionType1p = $row['SubmissionType'];
                      $Scaling1p = $row['Scaling'];
                      $InterimType1p = $row['InterimTypeDesc']; 
                      $HelperInconsistentFPDFlag1p = $row['HelperInconsistentFPDFlag'];
                }

                if($EndDate2p==$EndDate2p && $row['Interim'] == 2 &&$row['DateLength']==6) 
                {
                      $Interim2p = $row['Interim'];
                      $DateLength2p = $row['DateLength'];
                      $StatementDate2p = $row['StatementDate'];
                      $FilingDate2p = $row['FilingDate'];
                      $SubmissionType2p = $row['SubmissionType'];
                      $Scaling2p = $row['Scaling'];
                      $UpdateType2p = $row['FilingType'];
                      $InterimType2p = $row['InterimTypeDesc']; 
                      $HelperInconsistentFPDFlag2p = $row['HelperInconsistentFPDFlag'];
                }

                if($EndDate3p==$EndDate3p && $row['Interim'] == 1 &&$row['DateLength']==6) 
                {
                      $Interim3p = $row['Interim'];
                      $DateLength3p = $row['DateLength'];
                      $StatementDate3p = $row['StatementDate'];
                      $FilingDate3p = $row['FilingDate'];
                      $SubmissionType3p = $row['SubmissionType'];
                      $Scaling3p = $row['Scaling'];
                      $UpdateType3p = $row['FilingType'];
                      $InterimType3p = $row['InterimTypeDesc'];
                      $HelperInconsistentFPDFlag3p = $row['HelperInconsistentFPDFlag'];
                }

                $HelperValues0p = LTRIM(RTRIM($FinStmtTypeINC)) . LTRIM(RTRIM($EndDate0p)) . LTRIM(RTRIM($Interim0p)) . LTRIM(RTRIM($StatementDate0p)) . LTRIM(RTRIM($UpdateType0p)) . LTRIM(RTRIM($InterimType0p)) . LTRIM(RTRIM($DateLength0p));
                $HelperValues1p = LTRIM(RTRIM($FinStmtTypeINC)) . LTRIM(RTRIM($EndDate1p)) . LTRIM(RTRIM($Interim1p)) . LTRIM(RTRIM($StatementDate1p)) . LTRIM(RTRIM($UpdateType1p)) . LTRIM(RTRIM($InterimType1p)) . LTRIM(RTRIM($DateLength1p));
                $HelperValues2p = LTRIM(RTRIM($FinStmtTypeINC)) . LTRIM(RTRIM($EndDate2p)) . LTRIM(RTRIM($Interim2p)) . LTRIM(RTRIM($StatementDate2p)) . LTRIM(RTRIM($UpdateType2p)) . LTRIM(RTRIM($InterimType2p)) . LTRIM(RTRIM($DateLength2p));
                $HelperValues3p = LTRIM(RTRIM($FinStmtTypeINC)) . LTRIM(RTRIM($EndDate3p)) . LTRIM(RTRIM($Interim3p)) . LTRIM(RTRIM($StatementDate3p)) . LTRIM( RTRIM($UpdateType3p)) . LTRIM(RTRIM($InterimType3p)) . LTRIM(RTRIM($DateLength3p));
            } 


            /////BALANCE SHEET------------------------------------
            if($row['FinStmtType'] == $FinStmtTypeBAL) 
            {
            if($EndDate0p==$EndDate0p && $row['Interim'] == 0 &&$row['DateLength']==12) 
            {
                  $StatementDate0BALp = $row['StatementDate'];
                  $SubmissionType0BALp = $row['SubmissionType'];
                  $UpdateType0BALp = $row['FilingType'];
                  $UpdateType1BALp = $row['FilingType'];
                  $HelperInconsistentFPDFlag0BALp =  $row['HelperInconsistentFPDFlag'];
            }

            if($EndDate1p==$EndDate1p && $row['Interim'] == 2 &&$row['DateLength']==12) 
            {
                  $StatementDate1BALp = $row['StatementDate'];
                  $SubmissionType1BALp = $row['SubmissionType'];
                  $HelperInconsistentFPDFlag1BALp =  $row['HelperInconsistentFPDFlag'];
            }

            if($EndDate2p==$EndDate2p && $row['Interim'] == 2 &&$row['DateLength']==6) 
            {
                  $StatementDate2BALp = $row['StatementDate'];
                  $SubmissionType2BALp = $row['SubmissionType'];
                  $UpdateType2BALp = $row['FilingType'];
                  $HelperInconsistentFPDFlag2BALp =  $row['HelperInconsistentFPDFlag'];
            }

            if($EndDate3p==$EndDate3p && $row['Interim'] == 1 &&$row['DateLength']==6) 
            {
                  $StatementDate3BALp = $row['StatementDate'];
                  $SubmissionType3BALp = $row['SubmissionType'];
                  $UpdateType3BALp = $row['FilingType'];
                  $HelperInconsistentFPDFlag3BALp =  $row['HelperInconsistentFPDFlag'];
            }

            $HelperValues0BALp = LTRIM(RTRIM($FinStmtTypeBAL)) . LTRIM(RTRIM($EndDate0p)) . LTRIM(RTRIM($Interim0p)) . LTRIM(RTRIM($StatementDate0BALp)) . LTRIM(RTRIM($UpdateType0BALp)) . LTRIM(RTRIM($InterimType0p)) . LTRIM(RTRIM($DateLength0p));
            $HelperValues1BALp = LTRIM(RTRIM($FinStmtTypeBAL)) . LTRIM(RTRIM($EndDate1p)) . LTRIM(RTRIM($Interim1p)) . LTRIM(RTRIM($StatementDate1BALp)) . LTRIM(RTRIM($UpdateType1BALp)) . LTRIM(RTRIM($InterimType1p)) . LTRIM(RTRIM($DateLength1p));
            $HelperValues2BALp = LTRIM(RTRIM($FinStmtTypeBAL)) . LTRIM(RTRIM($EndDate2p)) . LTRIM(RTRIM($Interim2p)) . LTRIM(RTRIM($StatementDate2BALp)) . LTRIM(RTRIM($UpdateType2BALp)) . LTRIM(RTRIM($InterimType2p)) . LTRIM(RTRIM($DateLength2p));
            $HelperValues3BALp = LTRIM(RTRIM($FinStmtTypeBAL)) . LTRIM(RTRIM($EndDate3p)) . LTRIM(RTRIM($Interim3p)) . LTRIM(RTRIM($StatementDate3BALp)) . LTRIM( RTRIM($UpdateType3BALp)) . LTRIM(RTRIM($InterimType3p)) . LTRIM(RTRIM($DateLength3p));
            }

            /////CASH FLOW STATEMENT------------------------------
            if($row['FinStmtType'] == $FinStmtTypeCAS) 
            {

            if($EndDate0p==$EndDate0p && $row['Interim'] == 0 &&$row['DateLength']==12) 
            {
                  $StatementDate0CASp = $row['StatementDate'];
                  $SubmissionType0CASp = $row['SubmissionType'];
                  $UpdateType0CASp = $row['FilingType'];
                  $UpdateType1CASp = $row['FilingType'];
                  $HelperInconsistentFPDFlag0CASp =  $row['HelperInconsistentFPDFlag'];
            }

            if($EndDate1p==$EndDate1p && $row['Interim'] == 2 &&$row['DateLength']==12) 
            {
                  $StatementDate1CASp = $row['StatementDate'];
                  $SubmissionType1CASp = $row['SubmissionType'];
                  $HelperInconsistentFPDFlag1CASp =  $row['HelperInconsistentFPDFlag'];
            }

            if($EndDate2p==$EndDate2p && $row['Interim'] == 2 &&$row['DateLength']==6) 
            {
                  $StatementDate2CASp = $row['StatementDate'];
                  $SubmissionType2CASp = $row['SubmissionType'];
                  $UpdateType2CASp = $row['FilingType'];
                  $HelperInconsistentFPDFlag2CASp =  $row['HelperInconsistentFPDFlag'];
            }

            if($EndDate3p==$EndDate3p && $row['Interim'] == 1 &&$row['DateLength']==6) 
            {
                  $StatementDate3CASp = $row['StatementDate'];
                  $SubmissionType3CASp = $row['SubmissionType'];
                  $UpdateType3CASp = $row['FilingType'];
                  $HelperInconsistentFPDFlag3CASp =  $row['HelperInconsistentFPDFlag'];
            }
            
            $HelperValues0CASp = LTRIM(RTRIM($FinStmtTypeCAS)) . LTRIM(RTRIM($EndDate0p)) . LTRIM(RTRIM($Interim0p)) . LTRIM(RTRIM($StatementDate0CASp)) . LTRIM(RTRIM($UpdateType0CASp)) . LTRIM(RTRIM($InterimType0p)) . LTRIM(RTRIM($DateLength0p));
            $HelperValues1CASp = LTRIM(RTRIM($FinStmtTypeCAS)) . LTRIM(RTRIM($EndDate1p)) . LTRIM(RTRIM($Interim1p)) . LTRIM(RTRIM($StatementDate1CASp)) . LTRIM(RTRIM($UpdateType1CASp)) . LTRIM(RTRIM($InterimType1p)) . LTRIM(RTRIM($DateLength1p));
            $HelperValues2CASp = LTRIM(RTRIM($FinStmtTypeCAS)) . LTRIM(RTRIM($EndDate2p)) . LTRIM(RTRIM($Interim2p)) . LTRIM(RTRIM($StatementDate2CASp)) . LTRIM(RTRIM($UpdateType2CASp)) . LTRIM(RTRIM($InterimType2p)) . LTRIM(RTRIM($DateLength2p));
            $HelperValues3CASp = LTRIM(RTRIM($FinStmtTypeCAS)) . LTRIM(RTRIM($EndDate3p)) . LTRIM(RTRIM($Interim3p)) . LTRIM(RTRIM($StatementDate3CASp)) . LTRIM( RTRIM($UpdateType3CASp)) . LTRIM(RTRIM($InterimType3p)) . LTRIM(RTRIM($DateLength3p));
            }

            //////BUSINESS SEGMENT-----------------------------
            if(stripos($row['FinStmtType'], $FinStmtTypeBS) !== false) 
              {
                  if($EndDate0p==$EndDate0p && $row['Interim'] == 0 &&$row['DateLength']==12) 
                  {
                        $StatementDate0BSp = $row['StatementDate']; 
                        $SubmissionType0BSp = $row['SubmissionType'];
                        $UpdateType0BSp = $row['FilingType'];
                        $Scaling0BSp = $row['Scaling'];
                        $InterimType0BSp = $row['InterimTypeDesc'];
                        $DateLength0BSp = $row['DateLength'];
                  }
                  if($EndDate1p==$EndDate1p && $row['Interim'] == 2 &&$row['DateLength']==12) 
                  {
                        $StatementDate1BSp = $row['StatementDate'];
                        $SubmissionType1BSp = $row['SubmissionType'];
                        $Scaling1BSp = $row['Scaling'];
                        $UpdateType1BSp = $row['FilingType'];
                        $InterimType1BSp = $row['InterimTypeDesc'];
                        $DateLength1BSp = $row['DateLength'];
                  }

                  if($EndDate2p==$EndDate2p && $row['Interim'] == 2 &&$row['DateLength']==6) 
                  {
                        $StatementDate2BSp = $row['StatementDate'];
                        $SubmissionType2BSp = $row['SubmissionType'];
                        $UpdateType2BSp = $row['FilingType'];
                        $Scaling2BSp = $row['Scaling'];
                        $InterimType2BSp = $row['InterimTypeDesc'];
                        $DateLength2BSp = $row['DateLength'];
                  }

                  if($EndDate3p==$EndDate3p && $row['Interim'] == 1 &&$row['DateLength']==6) 
                  {
                        $StatementDate3BSp = $row['StatementDate'];
                        $SubmissionType3BSp = $row['SubmissionType'];
                        $UpdateType3BSp = $row['FilingType'];
                        $Scaling3BSp = $row['Scaling'];
                        $InterimType3BSp = $row['InterimTypeDesc'];
                        $DateLength3BSp = $row['DateLength'];
            }

                  $HelperValues0BSp = LTRIM(RTRIM($FinStmtTypeBS)) . LTRIM(RTRIM($EndDate0p)) . LTRIM(RTRIM($Interim0p)) . LTRIM(RTRIM($StatementDate0BSp)) . LTRIM(RTRIM($UpdateType0BSp)) . LTRIM(RTRIM($InterimType0p)) . LTRIM(RTRIM($DateLength0p));
                  $HelperValues1BSp = LTRIM(RTRIM($FinStmtTypeBS)) . LTRIM(RTRIM($EndDate1p)) . LTRIM(RTRIM($Interim1p)) . LTRIM(RTRIM($StatementDate1BSp)) . LTRIM(RTRIM($UpdateType1BSp)) . LTRIM(RTRIM($InterimType1p)) . LTRIM(RTRIM($DateLength1p));
                  $HelperValues2BSp = LTRIM(RTRIM($FinStmtTypeBS)) . LTRIM(RTRIM($EndDate2p)) . LTRIM(RTRIM($Interim2p)) . LTRIM(RTRIM($StatementDate2BSp)) . LTRIM(RTRIM($UpdateType2BSp)) . LTRIM(RTRIM($InterimType2p)) . LTRIM(RTRIM($DateLength2p));
                  $HelperValues3BSp = LTRIM(RTRIM($FinStmtTypeBS)) . LTRIM(RTRIM($EndDate3p)) . LTRIM(RTRIM($Interim3p)) . LTRIM(RTRIM($StatementDate3BSp)) . LTRIM( RTRIM($UpdateType3BSp)) . LTRIM(RTRIM($InterimType3p)) . LTRIM(RTRIM($DateLength3p));
                  }

            //////GEOGRAPHICAL SEGMENT----------------------------
            if(stripos($row['FinStmtType'], $FinStmtTypeGS) !== false) 
            {
            if($EndDate0p==$EndDate0p && $row['Interim'] == 0 &&$row['DateLength']==12) 
            {
                  $StatementDate0GSp = $row['StatementDate']; 
                  $SubmissionType0GSp = $row['SubmissionType'];
                  $UpdateType0GSp = $row['FilingType'];
                  $Scaling0GSp = $row['Scaling'];
                  $InterimType0GSp = $row['InterimTypeDesc'];
                  $DateLength0GSp = $row['DateLength'];
            }
            if($EndDate1p==$EndDate1p && $row['Interim'] == 2 &&$row['DateLength']==12) 
            {
                  $StatementDate1GSp = $row['StatementDate'];
                  $SubmissionType1GSp = $row['SubmissionType'];
                  $Scaling1GSp = $row['Scaling'];
                  $UpdateType1GSp = $row['FilingType'];
                  $InterimType1GSp = $row['InterimTypeDesc'];
                  $DateLength1GSp = $row['DateLength'];
            }

            if($EndDate2p==$EndDate2p && $row['Interim'] == 2 &&$row['DateLength']==6) 
            {
                  $StatementDate2GSp = $row['StatementDate'];
                  $SubmissionType2GSp = $row['SubmissionType'];
                  $UpdateType2GSp = $row['FilingType'];
                  $Scaling2GSp = $row['Scaling'];
                  $InterimType2GSp = $row['InterimTypeDesc'];
                  $DateLength2GSp = $row['DateLength'];
            }

            if($EndDate3==$EndDate3 && $row['Interim'] == 1 &&$row['DateLength']==6) 
            {
                  $StatementDate3GSp = $row['StatementDate'];
                  $SubmissionType3GSp = $row['SubmissionType'];
                  $UpdateType3GSp = $row['FilingType'];
                  $Scaling3GSp = $row['Scaling'];
                  $InterimType3GSp = $row['InterimTypeDesc'];
                  $DateLength3GSp = $row['DateLength'];
            }



            $HelperValues0GSp = LTRIM(RTRIM($FinStmtTypeGS)) . LTRIM(RTRIM($EndDate0p)) . LTRIM(RTRIM($Interim0p)) . LTRIM(RTRIM($StatementDate0GSp)) . LTRIM(RTRIM($UpdateType0GSp)) . LTRIM(RTRIM($InterimType0p)) . LTRIM(RTRIM($DateLength0p));
            $HelperValues1GSp = LTRIM(RTRIM($FinStmtTypeGS)) . LTRIM(RTRIM($EndDate1p)) . LTRIM(RTRIM($Interim1p)) . LTRIM(RTRIM($StatementDate1GSp)) . LTRIM(RTRIM($UpdateType1GSp)) . LTRIM(RTRIM($InterimType1p)) . LTRIM(RTRIM($DateLength1p));
            $HelperValues2GSp = LTRIM(RTRIM($FinStmtTypeGS)) . LTRIM(RTRIM($EndDate2p)) . LTRIM(RTRIM($Interim2p)) . LTRIM(RTRIM($StatementDate2GSp)) . LTRIM(RTRIM($UpdateType2GSp)) . LTRIM(RTRIM($InterimType2p)) . LTRIM(RTRIM($DateLength2p));
            $HelperValues3GSp = LTRIM(RTRIM($FinStmtTypeGS)) . LTRIM(RTRIM($EndDate3p)) . LTRIM(RTRIM($Interim3p)) . LTRIM(RTRIM($StatementDate3GSp)) . LTRIM( RTRIM($UpdateType3GSp)) . LTRIM(RTRIM($InterimType3p)) . LTRIM(RTRIM($DateLength3p));
      }

      require 'coa.php';  

      }
?>