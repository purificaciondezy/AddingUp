<?php

    if(isset($_POST['fundbpro']))
    {
        $RepoNo = $_POST['RepoNo'];
        $FY = $_POST['FY'];
        $Type = $_POST['radioButton'];
        $PFY = $FY-1;
       

        if($Type == "SemiAnnual")
        {
            $query = "SELECT distinct 
            i.RepoNo, i.IssuerName, p.FY, d.OrgID
            from fundbpro..FunCompanyInfo i (nolock)
            join fundbpro..Periodid p (nolock) ON i.IssuerID = p.IssuerID 
            join cds..Filing d (nolock) on d.IssuerID=i.IssuerID
            where i.RepoNo = :RepoNo and p.FY= :FY";

            $pdoResult = $conn->prepare($query);
            $pdoExec = $pdoResult->execute(array(":RepoNo"=>$RepoNo, ":FY"=>$FY)); 

            if($pdoExec)
            {
                if($pdoResult->rowCount()==0)
                {
                    echo 'No Data With This RepoNo';  
                }
            
                else
                {
                    foreach($pdoResult as $row)
                    {
                        $OrgID = $row['OrgID'];
                        $RepoNo = $row['RepoNo'];
                        $IssuerName = $row['IssuerName'];   
                        $FY = $row['FY'];
                        
                    }
                }
            }
        }

        else
        {
            echo 'INVALID INPUT';
        }
    }

?>