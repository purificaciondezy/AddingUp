<?php


	
	if(stripos($row['FY'], $FY) !== false)
	{
            $EndDate[] = $row['EndDate'];
		$EndDate0 = max($EndDate);
		$EndDate1 = max($EndDate);
		$EndDate2 = max($EndDate);
		$EndDate3 = $row['EndDate'];

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

                  $HelperValues0BS = LTRIM(RTRIM($FinStmtTypeBS)) . LTRIM(RTRIM($EndDate0)) . LTRIM(RTRIM($Interim0)) . LTRIM(RTRIM($StatementDate0BS)) . LTRIM(RTRIM($UpdateType0BS)) . LTRIM(RTRIM($InterimType0)) . LTRIM(RTRIM($DateLength0));
                  $HelperValues1BS = LTRIM(RTRIM($FinStmtTypeBS)) . LTRIM(RTRIM($EndDate1)) . LTRIM(RTRIM($Interim1)) . LTRIM(RTRIM($StatementDate1BS)) . LTRIM(RTRIM($UpdateType1BS)) . LTRIM(RTRIM($InterimType1)) . LTRIM(RTRIM($DateLength1));
                  $HelperValues2BS = LTRIM(RTRIM($FinStmtTypeBS)) . LTRIM(RTRIM($EndDate2)) . LTRIM(RTRIM($Interim2)) . LTRIM(RTRIM($StatementDate2BS)) . LTRIM(RTRIM($UpdateType2BS)) . LTRIM(RTRIM($InterimType2)) . LTRIM(RTRIM($DateLength2));
                  $HelperValues3BS = LTRIM(RTRIM($FinStmtTypeBS)) . LTRIM(RTRIM($EndDate3)) . LTRIM(RTRIM($Interim3)) . LTRIM(RTRIM($StatementDate3BS)) . LTRIM( RTRIM($UpdateType3BS)) . LTRIM(RTRIM($InterimType3)) . LTRIM(RTRIM($DateLength3));
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



            $HelperValues0GS = LTRIM(RTRIM($FinStmtTypeGS)) . LTRIM(RTRIM($EndDate0)) . LTRIM(RTRIM($Interim0)) . LTRIM(RTRIM($StatementDate0GS)) . LTRIM(RTRIM($UpdateType0GS)) . LTRIM(RTRIM($InterimType0)) . LTRIM(RTRIM($DateLength0));
            $HelperValues1GS = LTRIM(RTRIM($FinStmtTypeGS)) . LTRIM(RTRIM($EndDate1)) . LTRIM(RTRIM($Interim1)) . LTRIM(RTRIM($StatementDate1GS)) . LTRIM(RTRIM($UpdateType1GS)) . LTRIM(RTRIM($InterimType1)) . LTRIM(RTRIM($DateLength1));
            $HelperValues2GS = LTRIM(RTRIM($FinStmtTypeGS)) . LTRIM(RTRIM($EndDate2)) . LTRIM(RTRIM($Interim2)) . LTRIM(RTRIM($StatementDate2GS)) . LTRIM(RTRIM($UpdateType2GS)) . LTRIM(RTRIM($InterimType2)) . LTRIM(RTRIM($DateLength2));
            $HelperValues3GS = LTRIM(RTRIM($FinStmtTypeGS)) . LTRIM(RTRIM($EndDate3)) . LTRIM(RTRIM($Interim3)) . LTRIM(RTRIM($StatementDate3GS)) . LTRIM( RTRIM($UpdateType3GS)) . LTRIM(RTRIM($InterimType3)) . LTRIM(RTRIM($DateLength3));
      }

      require 'coa.php';  

	}

?>