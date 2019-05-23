<?php
session_start();
    require 'connect.php';
    require 'variables.php';
    require 'formSearch.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding Up & DPS</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean navbar border-bottom border-dark" style="font-size:12px;">
        <div class="container"><a class="navbar-brand" href="#"><img src="assets/img/refinitiv-logo.png" style="width:127px;"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto nav-pills">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Adding Up</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="dps.html">DPS</a></li>
                    <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Sample, Name</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">Change Password</a><a class="dropdown-item" role="presentation" href="#">Logout</a></div>
                    </li>
                </ul>
        </div>
        </div>
    </nav>

    <div></div>
    <form id="search" action="index.php" method="post">
        <div id="form" class="form-group grayLightest" style="color:rgb(33,37,41);padding:10px 52px;font-size:11px;">
            <div class="container">
                <div class="row">
                    <div class="col"><label class="col-form-label">Company Name</label></div>
                </div>
                <div class="row">
                    <div class="col"><input type="text" readonly placeholder="Company Name" name="IssuerName" id="IssuerName" class="form-control" style="width:406px;font-size:12px;" value="<?php echo $IssuerName;?>"></div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col"><label class="col-form-label">NDA Org ID</label></div>
                        </div>
                        <div class="row">
                            <div class="col"><input type="text" readonly placeholder="NDA Org ID" name="OrgID" id="OrgID" class="form-control" style="font-size:12px;" value="<?php echo $OrgID;?>"></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col"><label class="col-form-label">Repno</label></div>
                        </div>
                        <div class="row">
                            <div class="col"><input type="text" placeholder="Repno" name="RepoNo" id="RepoNo" class="form-control" style="font-size:12px;" value="<?php echo $RepoNo;?>"></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col"><label class="col-form-label">Fiscal Year</label></div>
                        </div>
                        <div class="row">
                            <div class="col"><input type="text" required="" placeholder="Fiscal Year" maxlength="4" name="FY" id="FY" class="form-control" style="font-size:12px;" value="<?php echo $FY;?>"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 offset-0" style="padding:5px 30px;">
                        <div></div>
                        <div class="form-check"><input disabled class="form-check-input" type="radio" name="radioButton" id="Quarter" value="Quarter"><label class="form-check-label" for="formCheck-1">Quarter</label></div>
                        <div class="form-check"><input class="form-check-input" type="radio" name="radioButton" id="SemiAnnual" value="SemiAnnual" required  <?php if (isset($_POST['radioButton']) && $_POST['radioButton']=="SemiAnnual") echo 'checked="checked"';?><label class="form-check-label" for="formCheck-2" >Semi-Annual</label></div>
                        <div class="form-check"><input disabled class="form-check-input" type="radio" name="radioButton" id="Hybrid" value="Hybrid"><label class="form-check-label" for="formCheck-3">Hybrid</label></div>
                        <div></div>
                    </div></div>
                        <div></div>
                    <div class="col-md-4 col-lg-7 offset-lg-2 offset-xl-0" style="width:910px;">
                        <div class="row">
                            <div class="col-xl-11 offset-xl-0">
                                <button class="btn btn-primary" type="submit" id="fundbpro" style="margin:4px;background-color:#001eff;height:50px;width:100px;font-size:12px;" name="fundbpro"><strong>PRODUCT</strong><br>FundbPRO</button>
                                <button disabled class="btn btn-primary" type="button" id="btnDoPlus" style="margin:5px;background-color:#666666;border-color:#666666;height:50px;width:100px;padding:1px;font-size:12px;" name="btnDoPlus"><strong>DO PLUS</strong><br>Fundb<br></button>
                                <button class="btn btn-primary" type="reset" id="clear" style="margin:2px;background-color:#8c8c8c;border-color:#8c8c8c;height:50px;width:100px;font-size:12px;padding:7px 7px;" name="clear"><strong>Clear</strong><br></button></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
                    <div class="col-md-4 col-lg-7 offset-lg-2 offset-xl-0" style="width:910px;">
                        <div class="row">
                            <div class="col float-right">
                                    <button class="btn btn-primary" type="button" style="height:30px;padding:-9px;font-size:12px;background-color:#001eff;" onclick="showHide();">RAW</button>
                                    <button class="btn btn-outline-primary" type="button" style="height:30px;padding:-9px;font-size:12px;"><a href="#priorYearTable"> PRIOR FISCAL YEAR</button></a>
                                    </div>
                        </div>
                    </div>
<!---------------RAW TABLE START------------------------------------------------------------------------------------------------->  
    <div style="padding:0px;width:1177px 1177px;">
        <div class="container" style="padding:0px 0px;margin:0px 20px;width:3000px;">
            <div  class="table-responsive table-sm table-bordered" style="font-size:10px;">
                <table id="rawTable" class="table" style="display: none">
                    <thead>
                        <tr>
                        <?php
                            require 'raw.php';
                        ?>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
<!---------------RAW TABLE END--------------------------------------------------------------------------------------------------> 

    <div style="padding:0px;width:1177px 1177px;">
        <div class="container" style="padding:0px 0px;margin:0px 20px;width:3000px;">
            <div class="table-responsive table-sm table-bordered" style="font-size:10px;">
                <table id="currentYearTable" class="table">
<!---------------INCOME STATEMENT START----------------------------------------------------------------------------------------->
                    <thead>
                        <tr>
                            <th style="font-size:15px;">INCOME STATEMENT</th>                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td width="30%"><strong>Period End Date</strong></td>
                            <?php echo '<td class="bgGray" width="15%">'.$EndDate0.'</td>
                            <td class="bgGray" width="15%"></td>
                            <td class="bgGray" width="15%">'.$EndDate1.'</td>
                            <td class="bgGray" width="15%">'.$EndDate2.'</td>
                            <td class="bgGray" width="15%">'.$EndDate3.'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Interim Number</strong></td>
                            <?php echo '<td class="bgGray" width="15%">'.$Interim0.'</td>
                            <td class="bgGray" width="15%"></td>
                            <td class="bgGray" width="15%">'.$Interim1.'</td>
                            <td class="bgGray" width="15%">'.$Interim2.'</td>
                            <td class="bgGray" width="15%">'.$Interim3.'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Statement Date</strong></td>
                            <?php echo '<td class="bgGray" width="15%">'.$StatementDate0.'</td>
                            <td class="bgGray" width="15%"></td>
                            <td class="bgGray" width="15%">'.$StatementDate1.'</td>
                            <td class="bgGray" width="15%">'.$StatementDate2.'</td>
                            <td class="bgGray" width="15%">'.$StatementDate3.'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Filing Date</strong></td>
                            <?php echo '<td class="bgGray" width="15%">'.$FilingDate0.'</td>
                            <td class="bgGray" width="15%"></td>
                            <td class="bgGray" width="15%">'.$FilingDate1.'</td>
                            <td class="bgGray" width="15%">'.$FilingDate2.'</td>
                            <td class="bgGray" width="15%">'.$FilingDate3.'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Submission Type</strong></td>
                            <?php echo '<td class="bgGray" width="15%">'.$SubmissionType0.'</td>
                            <td class="bgGray" width="15%"></td>
                            <td class="bgGray" width="15%">'.$SubmissionType1.'</td>
                            <td class="bgGray" width="15%">'.$SubmissionType2.'</td>
                            <td class="bgGray" width="15%">'.$SubmissionType3.'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Scaling</strong></td>
                            <?php echo '<td class="bgGray" width="15%">'.$Scaling0.'</td>
                            <td class="bgGray" width="15%"></td>
                            <td class="bgGray" width="15%">'.$Scaling1.'</td>
                            <td class="bgGray" width="15%">'.$Scaling2.'</td>
                            <td class="bgGray" width="15%">'.$Scaling3.'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Update Type</strong></td>
                            <?php echo '<td class="bgGray" width="15%">'.$UpdateType0.'</td>
                            <td class="bgGray" width="15%"></td>
                            <td class="bgGray" width="15%">'.$UpdateType1.'</td>
                            <td class="bgGray" width="15%">'.$UpdateType2.'</td>
                            <td class="bgGray" width="15%">'.$UpdateType3.'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Interim Type</strong></td>
                            <?php echo '<td class="bgGray" width="15%">'.$InterimType0.'</td>
                            <td class="bgGray" width="15%"></td>
                            <td class="bgGray" width="15%">'.$InterimType1.'</td>
                            <td class="bgGray" width="15%">'.$InterimType2.'</td>
                            <td class="bgGray" width="15%">'.$InterimType3.'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Income Statement Period Length</strong></td>
                            <?php echo '<td class="bgGray" width="15%">'.$DateLength0.'</td>
                            <td class="bgGray" width="15%"></td>
                            <td class="bgGray" width="15%">'.$DateLength1.'</td>
                            <td class="bgGray" width="15%">'.$DateLength2.'</td>
                            <td class="bgGray" width="15%">'.$DateLength3.'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Task(F=Flash,P=Prelim,D=Detailed, ND=Non-detailed)</strong></td>
                            <?php echo '<td class="bgGray" width="15%">'.$HelperInconsistentFPDFlag0.'</td>
                            <td class="bgGray" width="15%"></td>
                            <td class="bgGray" width="15%">'.$HelperInconsistentFPDFlag1.'</td>
                            <td class="bgGray" width="15%">'.$HelperInconsistentFPDFlag2.'</td>
                            <td class="bgGray" width="15%">'.$HelperInconsistentFPDFlag3.'</td>';?>
                        </tr>
                        <tr>
                            <th><br></th>
                        </tr>
                        <tr>
                            <td><strong>Total Revenue</strong></td>
                            <?php 
                                if(array_sum($RTLR0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($RTLR0)).'</td><td></td>';}

                                if(array_sum($RTLR1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($RTLR1)).'</td>';}

                                if(array_sum($RTLR2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($RTLR2)).'</td>';}

                                if(array_sum($RTLR3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($RTLR3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Cost of Revenue</td>
                            <?php 
                                if(array_sum($ECOR0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($ECOR0)).'</td><td></td>';}

                                if(array_sum($ECOR1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ECOR1)).'</td>';}

                                if(array_sum($ECOR2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ECOR2)).'</td>';}

                                if(array_sum($ECOR3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($ECOR3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Selling/General/Administrative Expense</td>
                            <?php 
                                if(array_sum($ESGA0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($ESGA0)).'</td><td></td>';}

                                if(array_sum($ESGA1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ESGA1)).'</td>';}

                                if(array_sum($ESGA2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ESGA2)).'</td>';}

                                if(array_sum($ESGA3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($ESGA3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Interest Expense - Operating</td>
                            <?php 
                                if(array_sum($EIEX0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($EIEX0)).'</td><td></td>';}

                                if(array_sum($EIEX1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($EIEX1)).'</td>';}

                                if(array_sum($EIEX2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($EIEX2)).'</td>';}

                                if(array_sum($EIEX3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($EIEX3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Total Operating Expense</strong></td>
                            <?php 
                                if(array_sum($ETOE0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($ETOE0)).'</td><td></td>';}

                                if(array_sum($ETOE1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ETOE1)).'</td>';}

                                if(array_sum($ETOE2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ETOE2)).'</td>';}

                                if(array_sum($ETOE3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($ETOE3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Interest Expense - Non-Operating</td>
                            <?php 
                                if(array_sum($NIEN0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($NIEN0)).'</td><td></td>';}

                                if(array_sum($NIEN1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($NIEN1)).'</td>';}

                                if(array_sum($NIEN2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($NIEN2)).'</td>';}

                                if(array_sum($NIEN3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($NIEN3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Net Income Before Taxes</strong></td>
                            <?php 
                                if(array_sum($EIBT0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($EIBT0)).'</td><td></td>';}

                                if(array_sum($EIBT1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($EIBT1)).'</td>';}

                                if(array_sum($EIBT2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($EIBT2)).'</td>';}

                                if(array_sum($EIBT3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($EIBT3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Provision for Income Taxes</strong></td>
                            <?php 
                                if(array_sum($TTAX0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($TTAX0)).'</td><td></td>';}

                                if(array_sum($TTAX1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($TTAX1)).'</td>';}

                                if(array_sum($TTAX2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($TTAX2)).'</td>';}

                                if(array_sum($TTAX3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($TTAX3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Net Income After Taxes</strong></td>
                            <?php 
                                if(array_sum($TIAT0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($TIAT0)).'</td><td></td>';}

                                if(array_sum($TIAT1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($TIAT1)).'</td>';}

                                if(array_sum($TIAT2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($TIAT2)).'</td>';}

                                if(array_sum($TIAT3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($TIAT3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Extraordinary Item</strong></td>
                            <?php 
                                if(array_sum($XTRA0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($XTRA0)).'</td><td></td>';}

                                if(array_sum($XTRA1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($XTRA1)).'</td>';}

                                if(array_sum($XTRA2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($XTRA2)).'</td>';}

                                if(array_sum($XTRA3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($XTRA3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Income Available to Common Excl. Extraordinary Items </strong></td>
                            <?php 
                                if(array_sum($CIAC0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($CIAC0)).'</td><td></td>';}

                                if(array_sum($CIAC1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($CIAC1)).'</td>';}

                                if(array_sum($CIAC2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($CIAC2)).'</td>';}

                                if(array_sum($CIAC3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($CIAC3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Net Income Available to Com Incl ExtraOrd</strong></td>
                            <?php 
                                if(array_sum($XNIC0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($XNIC0)).'</td><td></td>';}

                                if(array_sum($XNIC1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($XNIC1)).'</td>';}

                                if(array_sum($XNIC2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($XNIC2)).'</td>';}

                                if(array_sum($XNIC3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($XNIC3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Reported Net Income</strong></td>
                            <?php 
                                if(array_sum($XNIA0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($XNIA0)).'</td><td></td>';}

                                if(array_sum($XNIA1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($XNIA1)).'</td>';}

                                if(array_sum($XNIA2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($XNIA2)).'</td>';}

                                if(array_sum($XNIA3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($XNIA3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <th><br></th>
                        </tr>
                        <tr>
                            <td><strong>Basic Weighted Average Shares</strong></td>
                            <?php 
                                if(array_sum($GBAS0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($GBAS0)).'</td><td></td>';}

                                if(array_sum($GBAS1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($GBAS1)).'</td>';}

                                if(array_sum($GBAS2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($GBAS2)).'</td>';}

                                if(array_sum($GBAS3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($GBAS3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Diluted Weighted Average Shares</strong></td>
                            <?php 
                                if(array_sum($GDWS0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($GDWS0)).'</td><td></td>';}

                                if(array_sum($GDWS1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($GDWS1)).'</td>';}

                                if(array_sum($GDWS2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($GDWS2)).'</td>';}

                                if(array_sum($GDWS3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($GDWS3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <th><br></th>
                        </tr>
                        <tr>
                            <td><a href="#STSI"><strong>Total Special Items</strong></td>
                            <?php 
                                if(array_sum($STSI0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($STSI0)).'</td><td></td>';}

                                if(array_sum($STSI1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($STSI1)).'</td>';}

                                if(array_sum($STSI2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($STSI2)).'</td>';}

                                if(array_sum($STSI3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($STSI3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Interest Expense, Supplemental </strong></td>
                            <?php 
                                if(array_sum($VIEX0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($VIEX0)).'</td><td></td>';}

                                if(array_sum($VIEX1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VIEX1)).'</td>';}

                                if(array_sum($VIEX2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VIEX2)).'</td>';}

                                if(array_sum($VIEX3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($VIEX3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Interest Capitalized, Supplemental </strong></td>
                            <?php 
                                if(array_sum($VCAP0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($VCAP0)).'</td><td></td>';}

                                if(array_sum($VCAP1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VCAP1)).'</td>';}

                                if(array_sum($VCAP2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VCAP2)).'</td>';}

                                if(array_sum($VCAP3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($VCAP3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Equity in Affiliates</strong></td>
                            <?php 
                                if(array_sum($VEIA0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($VEIA0)).'</td><td></td>';}

                                if(array_sum($VEIA1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VEIA1)).'</td>';}

                                if(array_sum($VEIA2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VEIA2)).'</td>';}

                                if(array_sum($VEIA3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($VEIA3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Depreciation</strong></td>
                            <?php 
                                if(array_sum($VDEP0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($VDEP0)).'</td><td></td>';}

                                if(array_sum($VDEP1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VDEP1)).'</td>';}

                                if(array_sum($VDEP2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VDEP2)).'</td>';}

                                if(array_sum($VDEP3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($VDEP3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Amortisation</strong></td>
                            <?php 
                                if(array_sum($VAMI0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($VAMI0)).'</td><td></td>';}

                                if(array_sum($VAMI1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VAMI1)).'</td>';}

                                if(array_sum($VAMI2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VAMI2)).'</td>';}

                                if(array_sum($VAMI3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($VAMI3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Total Depreciation & Amortization(VDEP+VAMI)</strong></td>
                            <?php 
                            $totalVdepVami0[]=array_sum($VDEP0)+array_sum($VAMI0);
                            $totalVdepVami1[]=array_sum($VDEP1)+array_sum($VAMI1);
                            $totalVdepVami2[]=array_sum($VDEP2)+array_sum($VAMI2);
                            $totalVdepVami3[]=array_sum($VDEP3)+array_sum($VAMI3);
                            if(array_sum($totalVdepVami0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($totalVdepVami0)).'</td><td></td>';}

                                if(array_sum($totalVdepVami1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($totalVdepVami1)).'</td>';}

                                if(array_sum($totalVdepVami2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($totalVdepVami2)).'</td>';}

                                if(array_sum($totalVdepVami3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($totalVdepVami3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Amortisation of Goodwill</strong></td>
                            <?php 
                                if(array_sum($VAMA0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($VAMA0)).'</td><td></td>';}

                                if(array_sum($VAMA1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VAMA1)).'</td>';}

                                if(array_sum($VAMA2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VAMA2)).'</td>';}

                                if(array_sum($VAMA3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($VAMA3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Gross Dividends - Common Stock</strong></td>
                            <?php 
                                if(array_sum($DCGD0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($DCGD0)).'</td><td></td>';}

                                if(array_sum($DCGD1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($DCGD1)).'</td>';}

                                if(array_sum($DCGD2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($DCGD2)).'</td>';}

                                if(array_sum($DCGD3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($DCGD3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>DPS - Common Stock Primary Issue 1</strong></td>
                            <?php 
                                if(array_sum($DDPS10)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($DDPS10), 6).'</td><td></td>';}

                                if(array_sum($DDPS11)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($DDPS11), 6).'</td>';}

                                if(array_sum($DDPS12)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($DDPS12), 6).'</td>';}

                                if(array_sum($DDPS13)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($DDPS13), 6).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>DPS - Common Stock Primary Issue 2</strong></td>
                            <?php 
                                if(array_sum($DDPS20)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($DDPS20)).'</td><td></td>';}

                                if(array_sum($DDPS21)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($DDPS21)).'</td>';}

                                if(array_sum($DDPS22)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($DDPS22)).'</td>';}

                                if(array_sum($DDPS23)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($DDPS23)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Special DPS – Common Stock Primary Issue </strong></td>
                            <?php 
                                if(array_sum($DSPS10)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($DSPS10)).'</td><td></td>';}

                                if(array_sum($DSPS11)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($DSPS11)).'</td>';}

                                if(array_sum($DSPS12)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($DSPS12)).'</td>';}

                                if(array_sum($DSPS13)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($DSPS13)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Rental Expense, Supplemental </strong></td>
                            <?php 
                                if(array_sum($VRXP0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($VRXP0)).'</td><td></td>';}

                                if(array_sum($VRXP1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VRXP1)).'</td>';}

                                if(array_sum($VRXP2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VRXP2)).'</td>';}

                                if(array_sum($VRXP3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($VRXP3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Research & Development Expense, Supplemental</strong></td>
                            <?php 
                                if(array_sum($VRAD0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($VRAD0)).'</td><td></td>';}

                                if(array_sum($VRAD1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VRAD1)).'</td>';}

                                if(array_sum($VRAD2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VRAD2)).'</td>';}

                                if(array_sum($VRAD3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($VRAD3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Income Tax – Total</strong></td>
                            <?php 
                                if(array_sum($VITT0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($VITT0)).'</td><td></td>';}

                                if(array_sum($VITT1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VITT1)).'</td>';}

                                if(array_sum($VITT2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VITT2)).'</td>';}

                                if(array_sum($VITT3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($VITT3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Funds From Operations (REIT) </strong></td>
                            <?php 
                                if(array_sum($HFFO0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($HFFO0)).'</td><td></td>';}

                                if(array_sum($HFFO1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($HFFO1)).'</td>';}

                                if(array_sum($HFFO2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($HFFO2)).'</td>';}

                                if(array_sum($HFFO3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($HFFO3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <th><br></th>
                        </tr>
                        <tr>
                            <td><strong>XNIC vs XNIA</strong></td>
                            <?php 
                                if($XNIC0==$XNIA0)
                                {echo '<td class="bgYellow center">'.$true.'</td> <td></td>';}
                                else
                                {echo '<td class="bgYellow center">'.$blank.'</td> <td></td>';}
                                if($XNIC1==$XNIA1)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                if($XNIC2==$XNIA2)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                if($XNIC3==$XNIA3)
                                {echo '<td class="center">'.$true.'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>TTAX vs VITT</strong></td>
                            <?php 
                                if($TTAX0==$VITT0)
                                {echo '<td class="bgYellow center">'.$true.'</td> <td></td>';}
                                else
                                {echo '<td class="bgYellow center">'.$blank.'</td> <td></td>';}
                                if($TTAX1==$VITT1)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                if($TTAX2==$VITT2)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                if($TTAX3==$VITT3)
                                {echo '<td class="center">'.$true.'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Depreciation & Amortization INC vs CAS</strong></td>
                            <?php 
                                if(array_sum($totalVdepVami0)==array_sum($SDEP0)+array_sum($OAMI0) || array_sum($SDEP0)+array_sum($OAMI0)==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgRed center">Dep&Amort INC > CAS</td><td></td>';}

                                if(array_sum($totalVdepVami1)==array_sum($SDEP1)+array_sum($OAMI1) || array_sum($SDEP1)+array_sum($OAMI1)==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgRed center">Dep&Amort INC > CAS</td>';}

                                if(array_sum($totalVdepVami2)==array_sum($SDEP2)+array_sum($OAMI2) || array_sum($SDEP2)+array_sum($OAMI2)==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgRed center">Dep&Amort INC > CAS</td>';}

                                if(array_sum($totalVdepVami3)==array_sum($SDEP3)+array_sum($OAMI3) || array_sum($SDEP3)+array_sum($OAMI3)==0)
                                {echo '<td class="center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgRed center">Dep&Amort INC > CAS</td>';}

                            ?>
                            
                        </tr>
                        <tr>
                            <th><br></th>
                        </tr>
                    <!-------------------------------------ADDING UP START-------------------------------------------->
                        <tr>
                            <td style="font-size:15px;color:#ff0000;"><strong>ADDING UP</strong><br></td>
                            <td class="bgYellow center"><strong>Annual vs Semi-annual</strong></td>
                            <td class="bgYellow center"><strong>Difference</strong></td>
                            <td class="bgGreen center"><strong>S2 YTD = S1 + S2</strong></td>
                            <td class="bgGreen center"><strong>Difference</strong></td>
                        </tr>
                        <?php require 'addingup.php'?>
                        <tr>
                            <th><br></th>
                        </tr>
                    <!-------------------------------------ADDING UP END---------------------------------------------->

                    <!-------------------------------------STSI BREAKDOWN START--------------------------------------------->
                        <tr>
                            <th id="STSI" style="font-size:15px;color:#ff0000;"><strong>STSI BREAKDOWN</strong><br></th>
                        </tr>
                        <tr>
                            <td><strong>Purchased R&D Written-Off</strong></td>
                            <?php 
                                if(array_sum($ERDW0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($ERDW0)).'</td><td></td>';}

                                if(array_sum($ERDW1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ERDW1)).'</td>';}

                                if(array_sum($ERDW2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ERDW2)).'</td>';}

                                if(array_sum($ERDW3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($ERDW3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Restructuring Charge</strong></td>
                            <?php 
                                if(array_sum($ERES0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($ERES0)).'</td><td></td>';}

                                if(array_sum($ERES1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ERES1)).'</td>';}

                                if(array_sum($ERES2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ERES2)).'</td>';}

                                if(array_sum($ERES3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($ERES3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Litigation</strong></td>
                            <?php 
                                if(array_sum($ELIT0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($ELIT0)).'</td><td></td>';}

                                if(array_sum($ELIT1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ELIT1)).'</td>';}

                                if(array_sum($ELIT2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ELIT2)).'</td>';}

                                if(array_sum($ELIT3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($ELIT3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Impairment – Assets Held for Use</strong></td>
                            <?php 
                                if(array_sum($EIAU0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($EIAU0)).'</td><td></td>';}

                                if(array_sum($EIAU1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($EIAU1)).'</td>';}

                                if(array_sum($EIAU2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($EIAU2)).'</td>';}

                                if(array_sum($EIAU3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($EIAU3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Impairment – Assets Held for Sale </strong></td>
                            <?php 
                                if(array_sum($EIAS0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($EIAS0)).'</td><td></td>';}

                                if(array_sum($EIAS1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($EIAS1)).'</td>';}

                                if(array_sum($EIAS2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($EIAS2)).'</td>';}

                                if(array_sum($EIAS3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($EIAS3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>(Gain) Loss on Sale of Fixed Assets, Operating</strong></td>
                            <?php 
                                if(array_sum($EGLA0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($EGLA0)).'</td><td></td>';}

                                if(array_sum($EGLA1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($EGLA1)).'</td>';}

                                if(array_sum($EGLA2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($EGLA2)).'</td>';}

                                if(array_sum($EGLA3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($EGLA3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan"><strong>Other Unusual Expense (Income)</strong></td>
                            <?php 
                                if(array_sum($EUIE0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($EUIE0)).'</td><td></td>';}

                                if(array_sum($EUIE1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($EUIE1)).'</td>';}

                                if(array_sum($EUIE2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($EUIE2)).'</td>';}

                                if(array_sum($EUIE3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($EUIE3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Gain (Loss) on Sale of Assets, Non-Operating</strong></td>
                            <?php 
                                if(array_sum($NGLA0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($NGLA0)).'</td><td></td>';}

                                if(array_sum($NGLA1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($NGLA1)).'</td>';}

                                if(array_sum($NGLA2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($NGLA2)).'</td>';}

                                if(array_sum($NGLA3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($NGLA3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Other Unusual Income </strong></td>
                            <?php 
                                if(array_sum($NUII0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($NUII0)).'</td><td></td>';}

                                if(array_sum($NUII1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($NUII1)).'</td>';}

                                if(array_sum($NUII2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($NUII2)).'</td>';}

                                if(array_sum($NUII3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($NUII3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Restructuring Charge</strong></td>
                            <?php 
                                if(array_sum($NRES0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($NRES0)).'</td><td></td>';}

                                if(array_sum($NRES1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($NRES1)).'</td>';}

                                if(array_sum($NRES2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($NRES2)).'</td>';}

                                if(array_sum($NRES3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($NRES3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Litigation Expense</strong></td>
                            <?php 
                                if(array_sum($NLIT0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($NLIT0)).'</td><td></td>';}

                                if(array_sum($NLIT1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($NLIT1)).'</td>';}

                                if(array_sum($NLIT2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($NLIT2)).'</td>';}

                                if(array_sum($NLIT3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($NLIT3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan"><strong>Other Unusual Expense </strong></td>
                            <?php 
                                if(array_sum($NUIE0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($NUIE0)).'</td><td></td>';}

                                if(array_sum($NUIE1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($NUIE1)).'</td>';}

                                if(array_sum($NUIE2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($NUIE2)).'</td>';}

                                if(array_sum($NUIE3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($NUIE3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Amortization of Acquisition Costs </strong></td>
                            <?php 
                                if(array_sum($NAMA0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($NAMA0)).'</td><td></td>';}

                                if(array_sum($NAMA1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($NAMA1)).'</td>';}

                                if(array_sum($NAMA2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($NAMA2)).'</td>';}

                                if(array_sum($NAMA3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($NAMA3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Amortization of Acquisition Costs, Supplemental</strong></td>
                            <?php 
                                if(array_sum($VAMA0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($VAMA0)).'</td><td></td>';}

                                if(array_sum($VAMA1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VAMA1)).'</td>';}

                                if(array_sum($VAMA2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VAMA2)).'</td>';}

                                if(array_sum($VAMA3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($VAMA3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>(Gain) Loss on Sale of Assets, Supplemental</strong></td>
                            <?php 
                                if(array_sum($VGLA0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($VGLA0)).'</td><td></td>';}

                                if(array_sum($VGLA1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VGLA1)).'</td>';}

                                if(array_sum($VGLA2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VGLA2)).'</td>';}

                                if(array_sum($VGLA3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($VGLA3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Impairment-Assets Held for Sale, Supplemental</strong></td>
                            <?php 
                                if(array_sum($VIAS0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($VIAS0)).'</td><td></td>';}

                                if(array_sum($VIAS1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VIAS1)).'</td>';}

                                if(array_sum($VIAS2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VIAS2)).'</td>';}

                                if(array_sum($VIAS3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($VIAS3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Impairment-Assets Held for Use, Supplemental</strong></td>
                            <?php 
                                if(array_sum($VIAU0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($VIAU0)).'</td><td></td>';}

                                if(array_sum($VIAU1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VIAU1)).'</td>';}

                                if(array_sum($VIAU2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VIAU2)).'</td>';}

                                if(array_sum($VIAU3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($VIAU3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Litigation Charge, Supplemental</strong></td>
                            <?php 
                                if(array_sum($VLIT0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($VLIT0)).'</td><td></td>';}

                                if(array_sum($VLIT1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VLIT1)).'</td>';}

                                if(array_sum($VLIT2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VLIT2)).'</td>';}

                                if(array_sum($VLIT3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($VLIT3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Purchased R&D Written-Off, Supplemental</strong></td>
                            <?php 
                                if(array_sum($VRDW0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($VRDW0)).'</td><td></td>';}

                                if(array_sum($VRDW1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VRDW1)).'</td>';}

                                if(array_sum($VRDW2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VRDW2)).'</td>';}

                                if(array_sum($VRDW3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($VRDW3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Restructuring Charge, Supplemental</strong></td>
                            <?php 
                                if(array_sum($VRES0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($VRES0)).'</td><td></td>';}

                                if(array_sum($VRES1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VRES1)).'</td>';}

                                if(array_sum($VRES2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VRES2)).'</td>';}

                                if(array_sum($VRES3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($VRES3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Other Unusual Expense (Income), Supplemental</strong></td>
                            <?php 
                                if(array_sum($VUIE0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($VUIE0)).'</td><td></td>';}

                                if(array_sum($VUIE1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VUIE1)).'</td>';}

                                if(array_sum($VUIE2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VUIE2)).'</td>';}

                                if(array_sum($VUIE3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($VUIE3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>TOTAL</strong></td>
                            <?php 
                                $totalSTSI0[]=(array_sum($ERDW0)+array_sum($ERES0)+array_sum($ELIT0)+array_sum($EIAU0)+array_sum($EIAS0)+array_sum($EGLA0)+array_sum($EUIE0)+array_sum($VAMA0)+array_sum($VGLA0)+array_sum($VIAS0)+array_sum($VIAU0)+array_sum($VLIT0)+array_sum($VRDW0)+array_sum($VRES0)+array_sum($VUIE0))-(array_sum($NGLA0)+array_sum($NUII0)+array_sum($NRES0)+array_sum($NLIT0)+array_sum($NUIE0)+array_sum($NAMA0));
                                $totalSTSI1[]=(array_sum($ERDW1)+array_sum($ERES1)+array_sum($ELIT1)+array_sum($EIAU1)+array_sum($EIAS1)+array_sum($EGLA1)+array_sum($EUIE1)+array_sum($VAMA1)+array_sum($VGLA1)+array_sum($VIAS1)+array_sum($VIAU1)+array_sum($VLIT1)+array_sum($VRDW1)+array_sum($VRES1)+array_sum($VUIE1))-(array_sum($NGLA1)+array_sum($NUII1)+array_sum($NRES1)+array_sum($NLIT1)+array_sum($NUIE1)+array_sum($NAMA1));
                                $totalSTSI2[]=(array_sum($ERDW2)+array_sum($ERES2)+array_sum($ELIT2)+array_sum($EIAU2)+array_sum($EIAS2)+array_sum($EGLA2)+array_sum($EUIE2)+array_sum($VAMA2)+array_sum($VGLA2)+array_sum($VIAS2)+array_sum($VIAU2)+array_sum($VLIT2)+array_sum($VRDW2)+array_sum($VRES2)+array_sum($VUIE2))-(array_sum($NGLA2)+array_sum($NUII2)+array_sum($NRES2)+array_sum($NLIT2)+array_sum($NUIE2)+array_sum($NAMA2));$totalSTSI3[]=(array_sum($ERDW3)+array_sum($ERES3)+array_sum($ELIT3)+array_sum($EIAU3)+array_sum($EIAS3)+array_sum($EGLA3)+array_sum($EUIE3)+array_sum($VAMA3)+array_sum($VGLA3)+array_sum($VIAS3)+array_sum($VIAU3)+array_sum($VLIT3)+array_sum($VRDW3)+array_sum($VRES3)+array_sum($VUIE3))-(array_sum($NGLA3)+array_sum($NUII3)+array_sum($NRES3)+array_sum($NLIT3)+array_sum($NUIE3)+array_sum($NAMA3));
                                if(array_sum($totalSTSI0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($totalSTSI0)).'</td><td></td>';}

                                if(array_sum($totalSTSI1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($totalSTSI1)).'</td>';}

                                if(array_sum($totalSTSI2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($totalSTSI2)).'</td>';}

                                if(array_sum($totalSTSI3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($totalSTSI3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <th></br></th>
                        </tr>
                        <tr>
                            <td class="bgCyan"><strong>Total Special Items</strong></td>
                            <?php 
                                if(array_sum($STSI0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($STSI0)).'</td><td></td>';}

                                if(array_sum($STSI1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($STSI1)).'</td>';}

                                if(array_sum($STSI2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($STSI2)).'</td>';}

                                if(array_sum($STSI3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($STSI3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Total Special Items - Adding up</strong></td>
                            <?php
                                $STSIsum=array_sum($STSI3)+array_sum($STSI2);
                                if(array_sum($STSI0)==$STSIsum)
                                {echo '<td class="bgYellow center">'.$true.'</td>';} 
                                elseif(array_sum($STSI0)!=$STSIsum)
                                {echo '<td class="bgRed center">'.$false.'</td>';}   
                            
                                $STSIAddingUp1 = array_sum($STSI0) - (array_sum($STSI3) + array_sum($STSI2));
                                    if($STSIAddingUp1==0)
                                    {echo '<td class="bgYellow center">'.$blank.'</td>';} 
                                    else
                                    {echo '<td class="bgYellow right">'.number_format($STSIAddingUp1).'</td>';}

                                if(array_sum($STSI1)==$STSIsum)
                                {echo '<td class="bgGreen center">'.$true.'</td>';} 
                                elseif(array_sum($STSI1)!=$STSIsum)
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                                   
                            
                                $STSIAddingUp2 = array_sum($STSI1) - (array_sum($STSI3) + array_sum($STSI2));
                                    if($STSIAddingUp2==0)
                                    {echo '<td class="bgGreen center">'.$blank.'</td>';} 
                                    else
                                    {echo '<td class="bgGreen right">'.number_format($STSIAddingUp2).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <th></br></th>
                        </tr>
                    <!-------------------------------------STSI BREAKDOWN END----------------------------------------------->

                    <!-------------------------------------NEGATIVE VALUES INC START---------------------------------------->
                        <tr>
                            <th style="font-size:15px;color:#ff0000;"><strong>NEGATIVE VALUES</strong><br></th>
                        </tr>
                        <tr>
                            <td><strong>Cost of Revenue</strong></td>
                            <?php 
                                if(array_sum($ECOR0) < 0)
                                {echo '<td>'.number_format(array_sum($ECOR0)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($ECOR1) < 0)
                                {echo '<td>'.number_format(array_sum($ECOR1)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($ECOR2) < 0)
                                {echo '<td>'.number_format(array_sum($ECOR2)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($ECOR3) < 0)
                                {echo '<td>'.number_format(array_sum($ECOR3)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                            </tr>
                        <tr>
                            <td><strong>Selling/General/Administrative Expense</strong></td>
                            <?php 
                                if(array_sum($ESGA0) < 0)
                                {echo '<td>'.number_format(array_sum($ESGA0)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($ESGA1) < 0)
                                {echo '<td>'.number_format(array_sum($ESGA1)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($ESGA2) < 0)
                                {echo '<td>'.number_format(array_sum($ESGA2)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($ESGA3) < 0)
                                {echo '<td>'.number_format(array_sum($ESGA3)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Depreciation</strong></td>
                            <?php 
                                if(array_sum($EDEP0) < 0)
                                {echo '<td>'.number_format(array_sum($EDEP0)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($EDEP1) < 0)
                                {echo '<td>'.number_format(array_sum($EDEP1)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($EDEP2) < 0)
                                {echo '<td>'.number_format(array_sum($EDEP2)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($EDEP3) < 0)
                                {echo '<td>'.number_format(array_sum($EDEP3)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Amortisation</strong></td>
                            <?php 
                                if(array_sum($EAMI0) < 0)
                                {echo '<td>'.number_format(array_sum($EAMI0)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($EAMI1) < 0)
                                {echo '<td>'.number_format(array_sum($EAMI1)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($EAMI2) < 0)
                                {echo '<td>'.number_format(array_sum($EAMI2)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($EAMI3) < 0)
                                {echo '<td>'.number_format(array_sum($EAMI3)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Rental Expense, Supplemental </strong></td>
                            <?php 
                                if(array_sum($VRXP0) < 0)
                                {echo '<td>'.number_format(array_sum($VRXP0)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($VRXP1) < 0)
                                {echo '<td>'.number_format(array_sum($VRXP1)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($VRXP2) < 0)
                                {echo '<td>'.number_format(array_sum($VRXP2)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($VRXP3) < 0)
                                {echo '<td>'.number_format(array_sum($VRXP3)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Interest Income - Operating </strong></td>
                            <?php 
                                if(array_sum($EIIN0) > 0)
                                {echo '<td>'.number_format(array_sum($EIIN0)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($EIIN1) > 0)
                                {echo '<td>'.number_format(array_sum($EIIN1)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($EIIN2) > 0)
                                {echo '<td>'.number_format(array_sum($EIIN2)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($EIIN3) > 0)
                                {echo '<td>'.number_format(array_sum($EIIN3)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Interest Expense - Operating </strong></td>
                            <?php 
                                if(array_sum($EIEX0) < 0)
                                {echo '<td>'.number_format(array_sum($EIEX0)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($EIEX1) < 0)
                                {echo '<td>'.number_format(array_sum($EIEX1)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($EIEX2) < 0)
                                {echo '<td>'.number_format(array_sum($EIEX2)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($EIEX3) < 0)
                                {echo '<td>'.number_format(array_sum($EIEX3)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Interest Income - Non-Operating </strong></td>
                            <?php 
                                if(array_sum($NIIN0) < 0)
                                {echo '<td>'.number_format(array_sum($NIIN0)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($NIIN1) < 0)
                                {echo '<td>'.number_format(array_sum($NIIN1)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($NIIN2) < 0)
                                {echo '<td>'.number_format(array_sum($NIIN2)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($NIIN3) < 0)
                                {echo '<td>'.number_format(array_sum($NIIN3)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Interest Expense - Non-Operating </strong></td>
                            <?php 
                                if(array_sum($NIEN0) > 0)
                                {echo '<td>'.number_format(array_sum($NIEN0)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($NIEN1) > 0)
                                {echo '<td>'.number_format(array_sum($NIEN1)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($NIEN2) > 0)
                                {echo '<td>'.number_format(array_sum($NIEN2)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($NIEN3) > 0)
                                {echo '<td>'.number_format(array_sum($NIEN3)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Interest Expense, Supplemental </strong></td>
                            <?php 
                                if(array_sum($VIEX0) < 0)
                                {echo '<td>'.number_format(array_sum($VIEX0)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($VIEX1) < 0)
                                {echo '<td>'.number_format(array_sum($VIEX1)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($VIEX2) < 0)
                                {echo '<td>'.number_format(array_sum($VIEX2)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($VIEX3) < 0)
                                {echo '<td>'.number_format(array_sum($VIEX3)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Interest Capitalized, Supplemental </strong></td>
                            <?php 
                                if(array_sum($VCAP0) > 0)
                                {echo '<td>'.number_format(array_sum($VCAP0)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($VCAP1) > 0)
                                {echo '<td>'.number_format(array_sum($VCAP1)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($VCAP2) > 0)
                                {echo '<td>'.number_format(array_sum($VCAP2)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($VCAP3) > 0)
                                {echo '<td>'.number_format(array_sum($VCAP3)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Impairment(description≠"*rever*,*back*,*net*")</strong></td>
                            <?php 
                                if(array_sum($VIAU0) < 0)
                                {echo '<td>'.number_format(array_sum($VIAU0)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($VIAU1) < 0)
                                {echo '<td>'.number_format(array_sum($VIAU1)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($VIAU2) < 0)
                                {echo '<td>'.number_format(array_sum($VIAU2)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($VIAU3) < 0)
                                {echo '<td>'.number_format(array_sum($VIAU3)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <th></br></th>
                        </tr>
                    <!-------------------------------------NEGATIVE VALUES INC END------------------------------------------>
<!---------------INCOME STATEMENT END------------------------------------------------------------------------------------------->

<!---------------BALANCE SHEET START------------------------------------------------------------------------------------------->
                        <tr>
                            <th style="font-size:15px;"><strong>BALANCE SHEET</strong></th>
                        </tr>
                        <tr>
                            <td><strong>Statement Date</strong></td>
                            <?php echo '<td class="bgGray">'.$StatementDate0BAL.'</td>
                            <td class="bgGray"></td>
                            <td class="bgGray">'.$StatementDate1BAL.'</td>
                            <td class="bgGray">'.$StatementDate2BAL.'</td>
                            <td class="bgGray">'.$StatementDate3BAL.'</td>' ?>
                        </tr>
                        <tr>
                            <td><strong>Submission Type</strong><br></td>
                            <?php echo '<td class="bgGray">'.$SubmissionType0BAL.'</td>
                            <td class="bgGray"></td>
                            <td class="bgGray">'.$SubmissionType1BAL.'</td>
                            <td class="bgGray">'.$SubmissionType2BAL.'</td>
                            <td class="bgGray">'.$SubmissionType3BAL.'</td>' ?>
                        </tr>
                        <tr>
                            <td><strong>Update Type</strong></td>
                            <?php echo '<td class="bgGray">'.$UpdateType0BAL.'</td>
                            <td class="bgGray"></td>
                            <td class="bgGray">'.$UpdateType1BAL.'</td>
                            <td class="bgGray">'.$UpdateType2BAL.'</td>
                            <td class="bgGray">'.$UpdateType3BAL.'</td>' ?>
                        </tr>
                        <tr>
                            <td><strong>Task</strong></td>
                            <?php echo '<td class="bgGray">'.$HelperInconsistentFPDFlag0BAL.'</td>
                            <td class="bgGray"></td>
                            <td class="bgGray">'.$HelperInconsistentFPDFlag1BAL.'</td>
                            <td class="bgGray">'.$HelperInconsistentFPDFlag2BAL.'</td>
                            <td class="bgGray">'.$HelperInconsistentFPDFlag3BAL.'</td>' ?>
                        </tr>
                        <tr>
                            <th><br></th>
                        </tr>
                        <tr>
                            <td class="bgCyan">Cash & Equivalents</td>
                            <?php 
                                if(array_sum($ACAE0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($ACAE0)).'</td><td></td>';}

                                if(array_sum($ACAE1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ACAE1)).'</td>';}

                                if(array_sum($ACAE2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ACAE2)).'</td>';}

                                if(array_sum($ACAE3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($ACAE3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Short Term Investments</td>
                            <?php 
                                if(array_sum($ASTI0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($ASTI0)).'</td><td></td>';}

                                if(array_sum($ASTI1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ASTI1)).'</td>';}

                                if(array_sum($ASTI2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ASTI2)).'</td>';}

                                if(array_sum($ASTI3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($ASTI3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Accounts Receivable - Trade, Net</td>
                            <?php 
                                if(array_sum($AACR0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($AACR0)).'</td><td></td>';}

                                if(array_sum($AACR1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($AACR1)).'</td>';}

                                if(array_sum($AACR2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($AACR2)).'</td>';}

                                if(array_sum($AACR3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($AACR3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Notes Receivable - Short Term</td>
                            <?php 
                                if(array_sum($ASTR0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($ASTR0)).'</td><td></td>';}

                                if(array_sum($ASTR1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ASTR1)).'</td>';}

                                if(array_sum($ASTR2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ASTR2)).'</td>';}

                                if(array_sum($ASTR3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($ASTR3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Total Assets</strong></td>
                            <?php 
                                if(array_sum($ATOT0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($ATOT0)).'</td><td></td>';}

                                if(array_sum($ATOT1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ATOT1)).'</td>';}

                                if(array_sum($ATOT2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ATOT2)).'</td>';}

                                if(array_sum($ATOT3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($ATOT3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Accounts Payable</td>
                            <?php 
                                if(array_sum($LAPB0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($LAPB0)).'</td><td></td>';}

                                if(array_sum($LAPB1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($LAPB1)).'</td>';}

                                if(array_sum($LAPB2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($LAPB2)).'</td>';}

                                if(array_sum($LAPB3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($LAPB3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Notes Payable/Short Term Debt</td>
                            <?php 
                                if(array_sum($LSTD0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($LSTD0)).'</td><td></td>';}

                                if(array_sum($LSTD1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($LSTD1)).'</td>';}

                                if(array_sum($LSTD2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($LSTD2)).'</td>';}

                                if(array_sum($LSTD3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($LSTD3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Current Portion of LT Debt/Capital Leases</td>
                            <?php 
                                if(array_sum($LCLD0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($LCLD0)).'</td><td></td>';}

                                if(array_sum($LCLD1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($LCLD1)).'</td>';}

                                if(array_sum($LCLD2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($LCLD2)).'</td>';}

                                if(array_sum($LCLD3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($LCLD3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Long Term Debt</td>
                            <?php 
                                if(array_sum($LLTD0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($LLTD0)).'</td><td></td>';}

                                if(array_sum($LLTD1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($LLTD1)).'</td>';}

                                if(array_sum($LLTD2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($LLTD2)).'</td>';}

                                if(array_sum($LLTD3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($LLTD3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Capital Lease Obligations</td>
                            <?php 
                                if(array_sum($LCLO0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($LCLO0)).'</td><td></td>';}

                                if(array_sum($LCLO1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($LCLO1)).'</td>';}

                                if(array_sum($LCLO2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($LCLO2)).'</td>';}

                                if(array_sum($LCLO3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($LCLO3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Total Liabilities </strong></td>
                            <?php 
                                if(array_sum($LTLL0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($LTLL0)).'</td><td></td>';}

                                if(array_sum($LTLL1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($LTLL1)).'</td>';}

                                if(array_sum($LTLL2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($LTLL2)).'</td>';}

                                if(array_sum($LTLL3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($LTLL3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Minority Interest</strong></td>
                            <?php 
                                if(array_sum($LMNR0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($LMNR0)).'</td><td></td>';}

                                if(array_sum($LMNR1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($LMNR1)).'</td>';}

                                if(array_sum($LMNR2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($LMNR2)).'</td>';}

                                if(array_sum($LMNR3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($LMNR3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Total Equity</strong></td>
                            <?php 
                                if(array_sum($QTLE0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($QTLE0)).'</td><td></td>';}

                                if(array_sum($QTLE1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($QTLE1)).'</td>';}

                                if(array_sum($QTLE2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($QTLE2)).'</td>';}

                                if(array_sum($QTLE3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($QTLE3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Total Liabilities & Shareholders' Equity </strong></td>
                            <?php 
                                if(array_sum($QTEL0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($QTEL0)).'</td><td></td>';}

                                if(array_sum($QTEL1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($QTEL1)).'</td>';}

                                if(array_sum($QTEL2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($QTEL2)).'</td>';}

                                if(array_sum($QTEL3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($QTEL3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Shares Outstanding  - Common Stock Primary Issue </strong></td>
                            <?php 
                                if(array_sum($QCSO10)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($QCSO10)).'</td><td></td>';}

                                if(array_sum($QCSO11)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($QCSO11)).'</td>';}

                                if(array_sum($QCSO12)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($QCSO12)).'</td>';}

                                if(array_sum($QCSO13)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($QCSO13)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Shares Outstanding - Common Issue 2 </strong></td>
                            <?php 
                                if(array_sum($QCSO20)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($QCSO20)).'</td><td></td>';}

                                if(array_sum($QCSO21)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($QCSO21)).'</td>';}

                                if(array_sum($QCSO22)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($QCSO22)).'</td>';}

                                if(array_sum($QCSO23)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($QCSO23)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Treasury Shares - Common Stock Primary Issue </strong></td>
                            <?php 
                                if(array_sum($QTSN10)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($QTSN10)).'</td><td></td>';}

                                if(array_sum($QTSN11)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($QTSN11)).'</td>';}

                                if(array_sum($QTSN12)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($QTSN12)).'</td>';}

                                if(array_sum($QTSN13)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($QTSN13)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Treasury Shares - Common Issue 2 </strong></td>
                            <?php 
                                if(array_sum($QTSN20)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($QTSN20)).'</td><td></td>';}

                                if(array_sum($QTSN21)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($QTSN21)).'</td>';}

                                if(array_sum($QTSN22)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($QTSN22)).'</td>';}

                                if(array_sum($QTSN23)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($QTSN23)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Total Common Shares Outstanding </strong></td>
                            <?php 
                                if(array_sum($QTCO0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($QTCO0)).'</td><td></td>';}

                                if(array_sum($QTCO1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($QTCO1)).'</td>';}

                                if(array_sum($QTCO2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($QTCO2)).'</td>';}

                                if(array_sum($QTCO3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($QTCO3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Total Funded Status </strong></td>
                            <?php 
                                if(array_sum($VFSS0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($VFSS0)).'</td><td></td>';}

                                if(array_sum($VFSS1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VFSS1)).'</td>';}

                                if(array_sum($VFSS2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VFSS2)).'</td>';}

                                if(array_sum($VFSS3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($VFSS3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Employees </strong></td>
                            <?php 
                                if(array_sum($METL0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($METL0)).'</td><td></td>';}

                                if(array_sum($METL1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($METL1)).'</td>';}

                                if(array_sum($METL2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($METL2)).'</td>';}

                                if(array_sum($METL3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($METL3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Number of Common Shareholders </strong></td>
                            <?php 
                                if(array_sum($MNOS0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($MNOS0)).'</td><td></td>';}

                                if(array_sum($MNOS1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($MNOS1)).'</td>';}

                                if(array_sum($MNOS2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($MNOS2)).'</td>';}

                                if(array_sum($MNOS3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($MNOS3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Non-Performing Loans </strong></td>
                            <?php 
                                if(array_sum($VRUQ0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($VRUQ0)).'</td><td></td>';}

                                if(array_sum($VRUQ1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VRUQ1)).'</td>';}

                                if(array_sum($VRUQ2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VRUQ2)).'</td>';}

                                if(array_sum($VRUQ3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($VRUQ3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <th><br></th>
                        </tr>
                    <!-------------------------------------NEGATIVE VALUES BAL START-------------------------------------------->
                        <tr>
                            <th style="font-size:15px;color:#ff0000;"><strong>NEGATIVE VALUES</strong><br></th>
                        </tr>
                        <tr>
                            <td><strong>Provision for Doubtful Accounts</strong></td>
                            <?php 
                                if(array_sum($APDA0) > 0)
                                {echo '<td>'.number_format(array_sum($APDA0)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($APDA1) > 0)
                                {echo '<td>'.number_format(array_sum($APDA1)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($APDA2) > 0)
                                {echo '<td>'.number_format(array_sum($APDA2)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($APDA3) > 0)
                                {echo '<td>'.number_format(array_sum($APDA3)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Accumulated Depreciation</strong></td>
                            <?php 
                                if(array_sum($ADEP0) > 0)
                                {echo '<td>'.number_format(array_sum($ADEP0)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($ADEP1) > 0)
                                {echo '<td>'.number_format(array_sum($ADEP1)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($ADEP2) > 0)
                                {echo '<td>'.number_format(array_sum($ADEP2)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($ADEP3) > 0)
                                {echo '<td>'.number_format(array_sum($ADEP3)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Accumulated Intangible Amortization</strong></td>
                            <?php 
                                if(array_sum($AAMT0) > 0)
                                {echo '<td>'.number_format(array_sum($AAMT0)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($AAMT1) > 0)
                                {echo '<td>'.number_format(array_sum($AAMT1)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($AAMT2) > 0)
                                {echo '<td>'.number_format(array_sum($AAMT2)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($AAMT3) > 0)
                                {echo '<td>'.number_format(array_sum($AAMT3)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Long Term Debt</strong></td>
                            <?php 
                                if(array_sum($LLTD0) < 0)
                                {echo '<td>'.number_format(array_sum($LLTD0)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($LLTD1) < 0)
                                {echo '<td>'.number_format(array_sum($LLTD1)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($LLTD2) < 0)
                                {echo '<td>'.number_format(array_sum($LLTD2)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($LLTD3) < 0)
                                {echo '<td>'.number_format(array_sum($LLTD3)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Capital Lease Obligations </strong></td>
                            <?php 
                                if(array_sum($LCLO0) < 0)
                                {echo '<td>'.number_format(array_sum($LCLO0)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($LCLO1) < 0)
                                {echo '<td>'.number_format(array_sum($LCLO1)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($LCLO2) < 0)
                                {echo '<td>'.number_format(array_sum($LCLO2)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($LCLO3) < 0)
                                {echo '<td>'.number_format(array_sum($LCLO3)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                    <!-------------------------------------NEGATIVE VALUES BAL END-------------------------------------------->
                        <tr>
                            <th></br></th>
                        </tr>
<!---------------BALANCE SHEET END------------------------------------------------------------------------------------>

<!---------------CASH FLOW STATEMENT START------------------------------------------------------------------>
                        <tr>
                            <th style="font-size:15px;"><strong>CASH FLOW STATEMENT</strong></th>
                        </tr>
                        <tr>
                            <td><strong>Statement Date</strong></td>
                            <?php echo '<td class="bgGray">'.$StatementDate0CAS.'</td>
                            <td class="bgGray"></td>
                            <td class="bgGray">'.$StatementDate1CAS.'</td>
                            <td class="bgGray">'.$StatementDate2CAS.'</td>
                            <td class="bgGray">'.$StatementDate3CAS.'</td>' ?>
                        </tr>
                        <tr>
                            <td><strong>Submission Type</strong></td>
                            <?php echo '<td class="bgGray">'.$SubmissionType0CAS.'</td>
                            <td class="bgGray"></td>
                            <td class="bgGray">'.$SubmissionType1CAS.'</td>
                            <td class="bgGray">'.$SubmissionType2CAS.'</td>
                            <td class="bgGray">'.$SubmissionType3CAS.'</td>' ?>
                        </tr>
                        <tr>
                            <td><strong>Update Type</strong></td>
                            <?php echo '<td class="bgGray">'.$UpdateType0CAS.'</td>
                            <td class="bgGray"></td>
                            <td class="bgGray">'.$UpdateType1CAS.'</td>
                            <td class="bgGray">'.$UpdateType2CAS.'</td>
                            <td class="bgGray">'.$UpdateType3CAS.'</td>' ?>
                        </tr>
                        <tr>
                            <td><strong>Task</strong></td>
                            <?php echo '<td class="bgGray">'.$HelperInconsistentFPDFlag0CAS.'</td>
                            <td class="bgGray"></td>
                            <td class="bgGray">'.$HelperInconsistentFPDFlag1CAS.'</td>
                            <td class="bgGray">'.$HelperInconsistentFPDFlag2CAS.'</td>
                            <td class="bgGray">'.$HelperInconsistentFPDFlag3CAS.'</td>' ?>
                        </tr>
                        <tr>
                            <th><br></th>
                        </tr>
                        <tr>
                            <td><strong>Depreciation</strong><br></td>
                            <?php 
                                if(array_sum($SDEP0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($SDEP0)).'</td><td></td>';}

                                if(array_sum($SDEP1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($SDEP1)).'</td>';}

                                if(array_sum($SDEP2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($SDEP2)).'</td>';}

                                if(array_sum($SDEP3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($SDEP3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Amortization</strong><br></td>
                            <?php 
                                if(array_sum($OAMI0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($OAMI0)).'</td><td></td>';}

                                if(array_sum($OAMI1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($OAMI1)).'</td>';}

                                if(array_sum($OAMI2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($OAMI2)).'</td>';}

                                if(array_sum($OAMI3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($OAMI3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Cash from Operating Activities </strong><br></td>
                            <?php 
                                if(array_sum($OTLO0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($OTLO0)).'</td><td></td>';}

                                if(array_sum($OTLO1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($OTLO1)).'</td>';}

                                if(array_sum($OTLO2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($OTLO2)).'</td>';}

                                if(array_sum($OTLO3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($OTLO3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Acquisition of Business<br></td>
                            <?php 
                                if(array_sum($IBAQ0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($IBAQ0)).'</td><td></td>';}

                                if(array_sum($IBAQ1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($IBAQ1)).'</td>';}

                                if(array_sum($IBAQ2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($IBAQ2)).'</td>';}

                                if(array_sum($IBAQ3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($IBAQ3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Purchase of Fixed Assets<br></td>
                            <?php 
                                if(array_sum($ICEX0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($ICEX0)).'</td><td></td>';}

                                if(array_sum($ICEX1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ICEX1)).'</td>';}

                                if(array_sum($ICEX2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ICEX2)).'</td>';}

                                if(array_sum($ICEX3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($ICEX3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Cash from Investing Activities </strong><br></td>
                            <?php 
                                if(array_sum($ITLI0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($ITLI0)).'</td><td></td>';}

                                if(array_sum($ITLI1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ITLI1)).'</td>';}

                                if(array_sum($ITLI2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ITLI2)).'</td>';}

                                if(array_sum($ITLI3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($ITLI3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Long Term Debt, Net<br></td>
                            <?php 
                                if(array_sum($FLDN0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($FLDN0)).'</td><td></td>';}

                                if(array_sum($FLDN1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($FLDN1)).'</td>';}

                                if(array_sum($FLDN2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($FLDN2)).'</td>';}

                                if(array_sum($FLDN3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($FLDN3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Short Term Debt, Net<br></td>
                            <?php 
                                if(array_sum($FSDN0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($FSDN0)).'</td><td></td>';}

                                if(array_sum($FSDN1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($FSDN1)).'</td>';}

                                if(array_sum($FSDN2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($FSDN2)).'</td>';}

                                if(array_sum($FSDN3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($FSDN3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Long Term Debt Issued<br></td>
                            <?php 
                                if(array_sum($FLDI0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($FLDI0)).'</td><td></td>';}

                                if(array_sum($FLDI1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($FLDI1)).'</td>';}

                                if(array_sum($FLDI2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($FLDI2)).'</td>';}

                                if(array_sum($FLDI3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($FLDI3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Short Term Debt Issued<br></td>
                            <?php 
                                if(array_sum($FSDI0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($FSDI0)).'</td><td></td>';}

                                if(array_sum($FSDI1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($FSDI1)).'</td>';}

                                if(array_sum($FSDI2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($FSDI2)).'</td>';}

                                if(array_sum($FSDI3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($FSDI3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Long Term Debt Reduction<br></td>
                            <?php 
                                if(array_sum($FLDR0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($FLDR0)).'</td><td></td>';}

                                if(array_sum($FLDR1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($FLDR1)).'</td>';}

                                if(array_sum($FLDR2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($FLDR2)).'</td>';}

                                if(array_sum($FLDR3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($FLDR3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Short Term Debt Reduction<br></td>
                            <?php 
                                if(array_sum($FSDR0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($FSDR0)).'</td><td></td>';}

                                if(array_sum($FSDR1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($FSDR1)).'</td>';}

                                if(array_sum($FSDR2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($FSDR2)).'</td>';}

                                if(array_sum($FSDR3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($FSDR3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Cash from Financing Activities </strong><br></td>
                            <?php 
                                if(array_sum($FTLF0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($FTLF0)).'</td><td></td>';}

                                if(array_sum($FTLF1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($FTLF1)).'</td>';}

                                if(array_sum($FTLF2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($FTLF2)).'</td>';}

                                if(array_sum($FTLF3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($FTLF3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Foreign Exchange Effects</strong><br></td>
                            <?php 
                                if(array_sum($SFEE0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($SFEE0)).'</td><td></td>';}

                                if(array_sum($SFEE1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($SFEE1)).'</td>';}

                                if(array_sum($SFEE2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($SFEE2)).'</td>';}

                                if(array_sum($SFEE3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($SFEE3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Net Change in Cash</strong><br></td>
                            <?php 
                                if(array_sum($SNCC0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($SNCC0)).'</td><td></td>';}

                                if(array_sum($SNCC1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($SNCC1)).'</td>';}

                                if(array_sum($SNCC2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($SNCC2)).'</td>';}

                                if(array_sum($SNCC3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($SNCC3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Net Cash - Beginning Balance </strong><br></td>
                            <?php 
                                if(array_sum($SNCB0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($SNCB0)).'</td><td></td>';}

                                if(array_sum($SNCB1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($SNCB1)).'</td>';}

                                if(array_sum($SNCB2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($SNCB2)).'</td>';}

                                if(array_sum($SNCB3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($SNCB3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Net Cash - Ending Balance </strong><br></td>
                            <?php 
                                if(array_sum($SNCE0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($SNCE0)).'</td><td></td>';}

                                if(array_sum($SNCE1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($SNCE1)).'</td>';}

                                if(array_sum($SNCE2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($SNCE2)).'</td>';}

                                if(array_sum($SNCE3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($SNCE3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Cash Interest Paid </strong><br></td>
                            <?php 
                                if(array_sum($SCIP0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($SCIP0)).'</td><td></td>';}

                                if(array_sum($SCIP1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($SCIP1)).'</td>';}

                                if(array_sum($SCIP2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($SCIP2)).'</td>';}

                                if(array_sum($SCIP3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($SCIP3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Cash Taxes Paid </strong><br></td>
                            <?php 
                                if(array_sum($SCTP0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($SCTP0)).'</td><td></td>';}

                                if(array_sum($SCTP1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($SCTP1)).'</td>';}

                                if(array_sum($SCTP2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($SCTP2)).'</td>';}

                                if(array_sum($SCTP3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($SCTP3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>SNCC ≠ (OTLO+ITLI+FTLF+SFEE)</strong><br></td>
                            <?php
                                if($SNCC0==0 || $StatementDate0CAS==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                    $SNCCsum = array_sum($OTLO0) + array_sum($ITLI0) + array_sum($FTLF0) + array_sum($SFEE0);
                                    $SNCCdiff = array_sum($SNCC0) - (array_sum($OTLO0) + array_sum($ITLI0) + array_sum($FTLF0) + array_sum($SFEE0));
                                    if(array_sum($SNCC0)==$SNCCsum)
                                    {echo '<td class="bgYellow center">'.$true.'</td><td></td>'; }
                                    else
                                    {echo '<td class="bgRed right">'.number_format($SNCCdiff).'</td><td></td>';}        
                                }

                                if($SNCC1==0 || $StatementDate1CAS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $SNCCsum = array_sum($OTLO1) + array_sum($ITLI1) + array_sum($FTLF1) + array_sum($SFEE1);
                                    $SNCCdiff = array_sum($SNCC1) - (array_sum($OTLO1) + array_sum($ITLI1) + array_sum($FTLF1) + array_sum($SFEE1));
                                    if(array_sum($SNCC1)==$SNCCsum)
                                    {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                    else
                                    {echo '<td class="bgRed right">'.number_format($SNCCdiff).'</td>';}        
                                }

                                if($SNCC2==0 || $StatementDate2CAS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $SNCCsum = array_sum($OTLO2) + array_sum($ITLI2) + array_sum($FTLF2) + array_sum($SFEE2);
                                    $SNCCdiff = array_sum($SNCC2) - (array_sum($OTLO2) + array_sum($ITLI2) + array_sum($FTLF2) + array_sum($SFEE2));
                                    if(array_sum($SNCC2)==$SNCCsum)
                                    {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                    else
                                    {echo '<td class="bgRed right">'.number_format($SNCCdiff).'</td>';}        
                                }

                                if($SNCC3==0 || $StatementDate3CAS==NULL)
                                {echo '<td class="center">'.$blank.'</td>'; }
                                else
                                {
                                    $SNCCsum = array_sum($OTLO3) + array_sum($ITLI3) + array_sum($FTLF3) + array_sum($SFEE3);
                                    $SNCCdiff = array_sum($SNCC3) - (array_sum($OTLO3) + array_sum($ITLI3) + array_sum($FTLF3) + array_sum($SFEE3));
                                    if(array_sum($SNCC3)==$SNCCsum)
                                    {echo '<td class="center">'.$true.'</td>'; }
                                    else
                                    {echo '<td class="bgRed right">'.number_format($SNCCdiff).'</td>';}        
                                }
                            ?>
                        </tr>
                        
                        <tr>
                            <th><br></th>
                        </tr>
                    <!-------------------------------------NEGATIVE VALUES CAS START---------------------------->
                        <tr>
                            <th style="font-size:15px;color:#ff0000;"><strong>NEGATIVE VALUES</strong><br></th>
                        </tr>
                        <tr>
                            <td><strong>Sale/Maturity of Investment</strong></td>
                            <?php 
                                if(array_sum($IINS0) < 0)
                                {echo '<td>'.number_format(array_sum($IINS0)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($IINS1) < 0)
                                {echo '<td>'.number_format(array_sum($IINS1)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($IINS2) < 0)
                                {echo '<td>'.number_format(array_sum($IINS2)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($IINS3) < 0)
                                {echo '<td>'.number_format(array_sum($IINS3)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Purchase of Investments </strong></td>
                            <?php 
                                if(array_sum($IINP0) > 0)
                                {echo '<td>'.number_format(array_sum($IINP0)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($IINP1) > 0)
                                {echo '<td>'.number_format(array_sum($IINP1)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($IINP2) > 0)
                                {echo '<td>'.number_format(array_sum($IINP2)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($IINP3) > 0)
                                {echo '<td>'.number_format(array_sum($IINP3)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Sale of Fixed Assets</strong></td>
                            <?php 
                                if(array_sum($ISFA0) < 0)
                                {echo '<td>'.number_format(array_sum($ISFA0)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($ISFA1) < 0)
                                {echo '<td>'.number_format(array_sum($ISFA1)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($ISFA2) < 0)
                                {echo '<td>'.number_format(array_sum($ISFA2)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($ISFA3) < 0)
                                {echo '<td>'.number_format(array_sum($ISFA3)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Purchase of Fixed Assets</strong></td>
                            <?php 
                                if(array_sum($ICEX0) > 0)
                                {echo '<td>'.number_format(array_sum($ICEX0)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($ICEX1) > 0)
                                {echo '<td>'.number_format(array_sum($ICEX1)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($ICEX2) > 0)
                                {echo '<td>'.number_format(array_sum($ICEX2)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($ICEX3) > 0)
                                {echo '<td>'.number_format(array_sum($ICEX3)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Sale of Intangible Assets </strong></td>
                            <?php 
                                if(array_sum($ISOI0) < 0)
                                {echo '<td>'.number_format(array_sum($ISOI0)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($ISOI1) < 0)
                                {echo '<td>'.number_format(array_sum($ISOI1)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($ISOI2) < 0)
                                {echo '<td>'.number_format(array_sum($ISOI2)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($ISOI3) < 0)
                                {echo '<td>'.number_format(array_sum($ISOI3)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Purchase/Acquisition of Intangibles</strong></td>
                            <?php 
                                if(array_sum($IIAQ0) > 0)
                                {echo '<td>'.number_format(array_sum($IIAQ0)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($IIAQ1) > 0)
                                {echo '<td>'.number_format(array_sum($IIAQ1)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($IIAQ2) > 0)
                                {echo '<td>'.number_format(array_sum($IIAQ2)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($IIAQ3) > 0)
                                {echo '<td>'.number_format(array_sum($IIAQ3)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Sale of Business</strong></td>
                            <?php 
                                if(array_sum($ISOB0) < 0)
                                {echo '<td>'.number_format(array_sum($ISOB0)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($ISOB1) < 0)
                                {echo '<td>'.number_format(array_sum($ISOB1)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($ISOB2) < 0)
                                {echo '<td>'.number_format(array_sum($ISOB2)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($ISOB3) < 0)
                                {echo '<td>'.number_format(array_sum($ISOB3)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Acquisition of Business</strong></td>
                            <?php 
                                if(array_sum($IBAQ0) > 0)
                                {echo '<td>'.number_format(array_sum($IBAQ0)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($IBAQ1) > 0)
                                {echo '<td>'.number_format(array_sum($IBAQ1)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($IBAQ2) > 0)
                                {echo '<td>'.number_format(array_sum($IBAQ2)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($IBAQ3) > 0)
                                {echo '<td>'.number_format(array_sum($IBAQ3)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Sale/Issuance of Common </strong></td>
                            <?php 
                                if(array_sum($FSIC0) < 0)
                                {echo '<td>'.number_format(array_sum($FSIC0)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($FSIC1) < 0)
                                {echo '<td>'.number_format(array_sum($FSIC1)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($FSIC2) < 0)
                                {echo '<td>'.number_format(array_sum($FSIC2)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($FSIC3) < 0)
                                {echo '<td>'.number_format(array_sum($FSIC3)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Repurchase/Retirement of Common </strong></td>
                            <?php 
                                if(array_sum($FRRC0) > 0)
                                {echo '<td>'.number_format(array_sum($FRRC0)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($FRRC1) > 0)
                                {echo '<td>'.number_format(array_sum($FRRC1)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($FRRC2) > 0)
                                {echo '<td>'.number_format(array_sum($FRRC2)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($FRRC3) > 0)
                                {echo '<td>'.number_format(array_sum($FRRC3)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Sale/Issuance of Preferred</strong></td>
                            <?php 
                                if(array_sum($FSIP0) < 0)
                                {echo '<td>'.number_format(array_sum($FSIP0)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($FSIP1) < 0)
                                {echo '<td>'.number_format(array_sum($FSIP1)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($FSIP2) < 0)
                                {echo '<td>'.number_format(array_sum($FSIP2)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($FSIP3) < 0)
                                {echo '<td>'.number_format(array_sum($FSIP3)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Repurchase/Retirement of Preferred</strong></td>
                            <?php 
                                if(array_sum($FRRP0) > 0)
                                {echo '<td>'.number_format(array_sum($FRRP0)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($FRRP1) > 0)
                                {echo '<td>'.number_format(array_sum($FRRP1)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($FRRP2) > 0)
                                {echo '<td>'.number_format(array_sum($FRRP2)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($FRRP3) > 0)
                                {echo '<td>'.number_format(array_sum($FRRP3)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Cash Dividends Paid - Common</strong></td>
                            <?php 
                                if(array_sum($FDPC0) > 0)
                                {echo '<td>'.number_format(array_sum($FDPC0)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($FDPC1) > 0)
                                {echo '<td>'.number_format(array_sum($FDPC1)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($FDPC2) > 0)
                                {echo '<td>'.number_format(array_sum($FDPC2)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($FDPC3) > 0)
                                {echo '<td>'.number_format(array_sum($FDPC3)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Cash Dividends Paid - Preferred</strong></td>
                            <?php 
                                if(array_sum($FDPP0) > 0)
                                {echo '<td>'.number_format(array_sum($FDPP0)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($FDPP1) > 0)
                                {echo '<td>'.number_format(array_sum($FDPP1)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($FDPP2) > 0)
                                {echo '<td>'.number_format(array_sum($FDPP2)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($FDPP3) > 0)
                                {echo '<td>'.number_format(array_sum($FDPP3)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Repurch./Retirement of Common/Preferred</strong></td>
                            <?php 
                                if(array_sum($FRCP0) > 0)
                                {echo '<td>'.number_format(array_sum($FRCP0)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($FRCP1) > 0)
                                {echo '<td>'.number_format(array_sum($FRCP1)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($FRCP2) > 0)
                                {echo '<td>'.number_format(array_sum($FRCP2)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($FRCP3) > 0)
                                {echo '<td>'.number_format(array_sum($FRCP3)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                    <!-------------------------------------NEGATIVE VALUES CAS END---------------------------------------->

                        <tr>
                            <th></br></th>
                        </tr>
<!---------------CASH FLOW STATEMENT END-----------------------------------------------------------------------------> 

<!---------------BUSINESS SEGMENT START------------------------------------------------------------------------------->
                        <tr>
                            <th style="font-size:15px;"><strong>BUSINESS SEGMENT</strong></th>
                        </tr>
                        <tr>
                            <td><strong>Statement Date</strong></td>
                            <?php echo '<td class="bgGray">'.$StatementDate0BS.'</td>
                            <td class="bgGray"></td>
                            <td class="bgGray">'.$StatementDate1BS.'</td>
                            <td class="bgGray">'.$StatementDate2BS.'</td>
                            <td class="bgGray">'.$StatementDate3BS.'</td>' ?>
                        </tr>
                        <tr>
                            <td><strong>Submission Type</strong></td>
                            <?php echo '<td class="bgGray">'.$SubmissionType0BS.'</td>
                            <td class="bgGray"></td>
                            <td class="bgGray">'.$SubmissionType1BS.'</td>
                            <td class="bgGray">'.$SubmissionType2BS.'</td>
                            <td class="bgGray">'.$SubmissionType3BS.'</td>' ?>
                        </tr>
                        <tr>
                            <td><strong>Scaling</strong></td>
                            <?php echo '<td class="bgGray">'.$Scaling0BS.'</td>
                            <td class="bgGray"></td>
                            <td class="bgGray">'.$Scaling1BS.'</td>
                            <td class="bgGray">'.$Scaling2BS.'</td>
                            <td class="bgGray">'.$Scaling3BS.'</td>' ?>
                        </tr>
                        <tr>
                            <td><strong>Update Type</strong></td>
                            <?php echo '<td class="bgGray">'.$UpdateType0BS.'</td>
                            <td class="bgGray"></td>
                            <td class="bgGray">'.$UpdateType1BS.'</td>
                            <td class="bgGray">'.$UpdateType2BS.'</td>
                            <td class="bgGray">'.$UpdateType3BS.'</td>' ?>
                        </tr>
                        <tr>
                            <td><strong>Interim Type</strong></td>
                            <?php echo '<td class="bgGray">'.$InterimType0BS.'</td>
                            <td class="bgGray"></td>
                            <td class="bgGray">'.$InterimType1BS.'</td>
                            <td class="bgGray">'.$InterimType2BS.'</td>
                            <td class="bgGray">'.$InterimType3BS.'</td>' ?>
                        </tr>
                        <tr>
                            <td><strong>Business Segment Period Length</strong></td>
                            <?php echo '<td class="bgGray">'.$DateLength0BS.'</td>
                            <td class="bgGray"></td>
                            <td class="bgGray">'.$DateLength1BS.'</td>
                            <td class="bgGray">'.$DateLength2BS.'</td>
                            <td class="bgGray">'.$DateLength3BS.'</td>' ?>
                        </tr>
                        <tr>
                            <th><br></th>
                        </tr>
                        <tr>
                            <td><strong>Revenue</strong></td>
                            <?php 
                                if(array_sum($REXRbs0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($REXRbs0)).'</td><td></td>';}

                                if(array_sum($REXRbs1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($REXRbs1)).'</td>';}

                                if(array_sum($REXRbs2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($REXRbs2)).'</td>';}

                                if(array_sum($REXRbs3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($REXRbs3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Intersegment Revenue</strong></td>
                            <?php 
                                if(array_sum($RINRbs0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($RINRbs0)).'</td><td></td>';}

                                if(array_sum($RINRbs1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($RINRbs1)).'</td>';}

                                if(array_sum($RINRbs2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($RINRbs2)).'</td>';}

                                if(array_sum($RINRbs3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($RINRbs3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Income Before Tax </strong></td>
                            <?php 
                                if(array_sum($EIBTbs0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($EIBTbs0)).'</td><td></td>';}

                                if(array_sum($EIBTbs1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($EIBTbs1)).'</td>';}

                                if(array_sum($EIBTbs2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($EIBTbs2)).'</td>';}

                                if(array_sum($EIBTbs3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($EIBTbs3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Income Tax</strong></td>
                            <?php 
                                if(array_sum($TTAXbs0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($TTAXbs0)).'</td><td></td>';}

                                if(array_sum($TTAXbs1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($TTAXbs1)).'</td>';}

                                if(array_sum($TTAXbs2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($TTAXbs2)).'</td>';}

                                if(array_sum($TTAXbs3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($TTAXbs3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Income After Tax </strong></td>
                            <?php 
                                if(array_sum($TIATbs0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($TIATbs0)).'</td><td></td>';}

                                if(array_sum($TIATbs1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($TIATbs1)).'</td>';}

                                if(array_sum($TIATbs2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($TIATbs2)).'</td>';}

                                if(array_sum($TIATbs3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($TIATbs3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Equity in Affiliates</strong></td>
                            <?php 
                                if(array_sum($CEIAbs0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($CEIAbs0)).'</td><td></td>';}

                                if(array_sum($CEIAbs1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($CEIAbs1)).'</td>';}

                                if(array_sum($CEIAbs2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($CEIAbs2)).'</td>';}

                                if(array_sum($CEIAbs3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($CEIAbs3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Other Unusual Expense (Income)</strong></td>
                            <?php 
                                if(array_sum($EUIEbs0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($EUIEbs0)).'</td><td></td>';}

                                if(array_sum($EUIEbs1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($EUIEbs1)).'</td>';}

                                if(array_sum($EUIEbs2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($EUIEbs2)).'</td>';}

                                if(array_sum($EUIEbs3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($EUIEbs3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Total Assets</strong></td>
                            <?php 
                                if(array_sum($ATOTbs0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($ATOTbs0)).'</td><td></td>';}

                                if(array_sum($ATOTbs1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ATOTbs1)).'</td>';}

                                if(array_sum($ATOTbs2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ATOTbs2)).'</td>';}

                                if(array_sum($ATOTbs3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($ATOTbs3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Total Liabilities </strong></td>
                            <?php 
                                if(array_sum($LTLLbs0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($LTLLbs0)).'</td><td></td>';}

                                if(array_sum($LTLLbs1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($LTLLbs1)).'</td>';}

                                if(array_sum($LTLLbs2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($LTLLbs2)).'</td>';}

                                if(array_sum($LTLLbs3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($LTLLbs3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <th><br></th>
                        </tr>
                        <tr>
                            <th style="font-size:15px;color:#ff0000;"><strong>BAL/INC vs SEGMENTS</strong></th>
                        </tr>
                        <tr>
                            <td><strong>Revenue</strong></td>
                            <?php 
                                if($StatementDate0BS==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                    $REXRdiffBS0[] = array_sum($RTLR0) - array_sum($REXRbs0) - array_sum($RINRbs0);
                                        if(array_sum($REXRdiffBS0)==array_sum($RTLR0) + array_sum($REXRbs0))
                                        {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }  
                                        else
                                        {
                                            if(array_sum($REXRdiffBS0)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($REXRdiffBS0)).'</td><td></td>';}   
                                            else
                                            {echo '<td class="bgYellow center">'.$true.'</td><td></td>'; }
                                        }
                                }

                                if($StatementDate1BS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $REXRdiffBS1[] = array_sum($RTLR1) - array_sum($REXRbs1) - array_sum($RINRbs1);
                                        if(array_sum($REXRdiffBS1)==array_sum($RTLR1) + array_sum($REXRbs1))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($REXRdiffBS1)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($REXRdiffBS1)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate2BS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $REXRdiffBS2[] = array_sum($RTLR2) - array_sum($REXRbs2) - array_sum($RINRbs2);
                                        if(array_sum($REXRdiffBS2)==array_sum($RTLR2) + array_sum($REXRbs2))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($REXRdiffBS2)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($REXRdiffBS2)).'';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate3BS==NULL)
                                {echo '<td class="center">'.$blank.'</td>'; }
                                else
                                {
                                    $REXRdiffBS3[] = array_sum($RTLR3) - array_sum($REXRbs3) - array_sum($RINRbs3);
                                        if(array_sum($REXRdiffBS3)==array_sum($RTLR3) + array_sum($REXRbs3))
                                        {echo '<td class="center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($REXRdiffBS3)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($REXRdiffBS3)).'';}   
                                            else
                                            {echo '<td class="center">'.$true.'</td>'; }
                                        }
                                }
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Intersegment Revenue</strong></td>
                            <?php 
                                if($StatementDate0BS==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                    if(array_sum($RINRbs0)==array_sum($RTLR0) - array_sum($REXRbs0))
                                    {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }  
                                    else
                                    {
                                        if(array_sum($RINRbs0)!=0)
                                        {echo '<td class="bgRed right">RINR should be zero</td><td></td>';}   
                                        else
                                        {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                    }
                                }
                                if($StatementDate1BS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    if(array_sum($RINRbs1)==array_sum($RTLR1) - array_sum($REXRbs1))
                                    {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                    else
                                    {
                                        if(array_sum($RINRbs1)!=0)
                                        {echo '<td class="bgRed right">RINR should be zero</td>';}   
                                        else
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                    }
                                }
                                if($StatementDate2BS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    if(array_sum($RINRbs2)==array_sum($RTLR2) - array_sum($REXRbs2))
                                    {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                    else
                                    {
                                        if(array_sum($RINRbs2)!=0)
                                        {echo '<td class="bgRed right">RINR should be zero</td>';}   
                                        else
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                    }
                                }
                                if($StatementDate3BS==NULL)
                                {echo '<td class="center">'.$blank.'</td>'; }
                                else
                                {
                                    if(array_sum($RINRbs3)==array_sum($RTLR3) - array_sum($REXRbs3))
                                    {echo '<td class="center">'.$blank.'</td>'; }  
                                    else
                                    {
                                        if(array_sum($RINRbs3)!=0)
                                        {echo '<td class="bgRed right">RINR should be zero</td>';}   
                                        else
                                        {echo '<td class="center">'.$blank.'</td>'; }
                                    }
                                }
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Net Income Before Tax </strong></td>
                            <?php 
                                if($StatementDate0BS==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                    $EIBTdiffBS0[] = array_sum($EIBT0) - array_sum($EIBTbs0);
                                        if($EIBTdiffBS0==$EIBT0)
                                        {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }  
                                        else
                                        {
                                            if(array_sum($EIBTdiffBS0)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($EIBTdiffBS0)).'</td><td></td>';}   
                                            else
                                            {echo '<td class="bgYellow center">'.$true.'</td><td></td>'; }
                                        }
                                }

                                if($StatementDate1BS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.''; }
                                else
                                {
                                    $EIBTdiffBS1[] = array_sum($EIBT1) - array_sum($EIBTbs1);
                                        if(array_sum($EIBTdiffBS1)==array_sum($EIBT1))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($EIBTdiffBS1)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($EIBTdiffBS1)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate2BS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $EIBTdiffBS2[] = array_sum($EIBT2) - array_sum($EIBTbs2);
                                        if(array_sum($EIBTdiffBS2)==array_sum($EIBT2))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($EIBTdiffBS2)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($EIBTdiffBS2)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate3BS==NULL)
                                {echo '<td class="center">'.$blank.'</td>'; }
                                else
                                {
                                    $EIBTdiffBS3[] = array_sum($EIBT3) - array_sum($EIBTbs3);
                                        if(array_sum($EIBTdiffBS3)==array_sum($EIBT3))
                                        {echo '<td class="center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($EIBTdiffBS3)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($EIBTdiffBS3)).'</td>';}   
                                            else
                                            {echo '<td class="center">'.$true.'</td>'; }
                                        }
                                }
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Income Tax </strong></td>
                            <?php 
                                if($StatementDate0BS==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                    $TTAXdiffBS0[] = array_sum($TTAX0) - array_sum($TTAXbs0);
                                        if(array_sum($TTAXdiffBS0)==array_sum($TTAX0))
                                        {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }  
                                        else
                                        {
                                            if(array_sum($TTAXdiffBS0)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($TTAXdiffBS0)).'</td><td></td>';}   
                                            else
                                            {echo '<td class="bgYellow center">'.$true.'</td><td></td>'; }
                                        }
                                }

                                if($StatementDate1BS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $TTAXdiffBS1[] = array_sum($TTAX1) - array_sum($TTAXbs1);
                                        if(array_sum($TTAXdiffBS1)==array_sum($TTAX1))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($TTAXdiffBS1)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($TTAXdiffBS1)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate2BS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $TTAXdiffBS2[] = array_sum($TTAX2) - array_sum($TTAXbs2);
                                        if(array_sum($TTAXdiffBS2)==array_sum($TTAX2))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($TTAXdiffBS2)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($TTAXdiffBS2)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate3BS==NULL)
                                {echo '<td class="center">'.$blank.'</td>'; }
                                else
                                {
                                    $TTAXdiffBS3[] = array_sum($TTAX3) - array_sum($TTAXbs3);
                                        if(array_sum($TTAXdiffBS3)==array_sum($TTAX3))
                                        {echo '<td class="center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($TTAXdiffBS3)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($TTAXdiffBS3)).'</td>';}   
                                            else
                                            {echo '<td class="center">'.$true.'</td>'; }
                                        }
                                }
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Net Income After Tax</strong></td>
                            <?php 
                                if($StatementDate0BS==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                    $TIATdiffBS0[] = array_sum($TIAT0) - array_sum($TIATbs0);
                                        if(array_sum($TIATdiffBS0)==array_sum($TIAT0))
                                        {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }  
                                        else
                                        {
                                            if(array_sum($TIATdiffBS0)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($TIATdiffBS0)).'</td><td></td>';}   
                                            else
                                            {echo '<td class="bgYellow center">'.$true.'</td><td></td>'; }
                                        }
                                }

                                if($StatementDate1BS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $TIATdiffBS1[] = array_sum($TIAT1) - array_sum($TIATbs1);
                                        if(array_sum($TIATdiffBS1)==array_sum($TIAT1))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($TIATdiffBS1)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($TIATdiffBS1)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate2BS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $TIATdiffBS2[] = array_sum($TIAT2) - array_sum($TIATbs2);
                                        if(array_sum($TIATdiffBS2)==array_sum($TIAT2))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($TIATdiffBS2)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($TIATdiffBS2)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate3BS==NULL)
                                {echo '<td class="center">'.$blank.'</td>'; }
                                else
                                {
                                    $TIATdiffBS3[] = array_sum($TIAT3) - array_sum($TIATbs3);
                                        if(array_sum($TIATdiffBS3)==array_sum($TIAT3))
                                        {echo '<td class="center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($TIATdiffBS3)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($TIATdiffBS3)).'</td>';}   
                                            else
                                            {echo '<td class="center">'.$true.'</td>'; }
                                        }
                                }
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Equity in Affiliates</strong></td>
                            <?php 
                                if($StatementDate0BS==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                    if(array_sum($CEIAbs0)==array_sum($VEIA0))
                                    {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }  
                                    else
                                    {
                                        if(array_sum($CEIAbs0)!=0)
                                        {echo '<td class="bgRed right">Check Polarity</td><td></td>';}   
                                        else
                                        {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                    }
                                }
                                if($StatementDate1BS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    if(array_sum($CEIAbs1)==array_sum($VEIA1))
                                    {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                    else
                                    {
                                        if(array_sum($CEIAbs1)!=0)
                                        {echo '<td class="bgRed right">Check Polarity</td>';}   
                                        else
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                    }
                                }
                                if($StatementDate2BS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    if(array_sum($CEIAbs2)==array_sum($VEIA2))
                                    {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                    else
                                    {
                                        if(array_sum($CEIAbs2)!=0)
                                        {echo '<td class="bgRed right">Check Polarity</td>';}   
                                        else
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                    }
                                }
                                if($StatementDate3BS==NULL)
                                {echo '<td class="center">'.$blank.'</td>'; }
                                else
                                {
                                    if(array_sum($CEIAbs3)==array_sum($VEIA3))
                                    {echo '<td class="center">'.$blank.'</td>'; }  
                                    else
                                    {
                                        if(array_sum($CEIAbs3)!=0)
                                        {echo '<td class="bgRed right">Check Polarity</td>';}   
                                        else
                                        {echo '<td class="center">'.$blank.'</td>'; }
                                    }
                                }
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Other Unusual Expense (Income)</strong></td>
                            <?php 
                                if($StatementDate0BS==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                    if(array_sum($EUIEbs0)!=0)
                                    {echo '<td class="bgRed right">Check Polarity</td><td></td>';}   
                                    else
                                    {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                }
                                if($StatementDate1BS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    if(array_sum($EUIEbs1)!=0)
                                    {echo '<td class="bgRed right">Check Polarity</td>';}   
                                    else
                                    {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                }
                                if($StatementDate2BS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    if(array_sum($EUIEbs2)!=0)
                                    {echo '<td class="bgRed right">Check Polarity</td>';}   
                                    else
                                    {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                }
                                if($StatementDate3BS==NULL)
                                {echo '<td class="center">'.$blank.'</td>'; }
                                else
                                {
                                    if(array_sum($EUIEbs3)!=0)
                                    {echo '<td class="bgRed right">Check Polarity</td>';}   
                                    else
                                    {echo '<td class="center">'.$blank.'</td>'; }
                                }
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Total Assets</strong></td>
                            <?php 
                                if($StatementDate0BS==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                    $ATOTdiffBS0[] = array_sum($ATOT0) - array_sum($ATOTbs0);
                                        if(array_sum($ATOTdiffBS0)==array_sum($ATOT0))
                                        {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }  
                                        else
                                        {
                                            if(array_sum($ATOTdiffBS0)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($ATOTdiffBS0)).'</td><td></td>';}   
                                            else
                                            {echo '<td class="bgYellow center">'.$true.'</td><td></td>'; }
                                        }
                                }

                                if($StatementDate1BS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $ATOTdiffBS1[] = array_sum($ATOT1) - array_sum($ATOTbs1);
                                        if(array_sum($ATOTdiffBS1)==array_sum($ATOT1))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($ATOTdiffBS1)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($ATOTdiffBS1)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate2BS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $ATOTdiffBS2[] = array_sum($ATOT2) - array_sum($ATOTbs2);
                                        if(array_sum($ATOTdiffBS2)==array_sum($ATOT2))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($ATOTdiffBS2)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($ATOTdiffBS2)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate3BS==NULL)
                                {echo '<td class="center">'.$blank.'</td>'; }
                                else
                                {
                                    $ATOTdiffBS3[] = array_sum($ATOT3) - array_sum($ATOTbs3);
                                        if(array_sum($ATOTdiffBS3)==array_sum($ATOT3))
                                        {echo '<td class="center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($ATOTdiffBS3)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($ATOTdiffBS3)).'</td>';}   
                                            else
                                            {echo '<td class="center">'.$true.'</td>'; }
                                        }
                                }
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Total Liabilities less LMNR Minority Interest</strong></td>
                            <?php 
                                if($StatementDate0BS==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                    $LMNRdiffBS0[] = array_sum($LTLL0) - array_sum($LMNR0) - array_sum($LTLLbs0);
                                        if(array_sum($LMNRdiffBS0)==array_sum($LTLL0) - array_sum($LMNR0))
                                        {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }  
                                        else
                                        {
                                            if(array_sum($LMNRdiffBS0)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($LMNRdiffBS0)).'</td><td></td>';}   
                                            else
                                            {echo '<td class="bgYellow center">'.$true.'</td><td></td>'; }
                                        }
                                }

                                if($StatementDate1BS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.''; }
                                else
                                {
                                    $LMNRdiffBS1[] = array_sum($LTLL1) - array_sum($LMNR1) - array_sum($LTLLbs1);
                                        if(array_sum($LMNRdiffBS1)==array_sum($LTLL1) - array_sum($LMNR1))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($LMNRdiffBS1)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($LMNRdiffBS1)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate2BS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $LMNRdiffBS2[] = array_sum($LTLL2) - array_sum($LMNR2) - array_sum($LTLLbs2);
                                        if(array_sum($LMNRdiffBS2)==array_sum($LTLL2) - array_sum($LMNR2))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($LMNRdiffBS2)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($LMNRdiffBS2)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate3BS==NULL)
                                {echo '<td class="center">'.$blank.''; }
                                else
                                {
                                    $LMNRdiffBS3[] = array_sum($LTLL3) - array_sum($LMNR3) - array_sum($LTLLbs3);
                                        if(array_sum($LMNRdiffBS3)==array_sum($LTLL3) - array_sum($LMNR3))
                                        {echo '<td class="center">'.$blank.''; }  
                                        else
                                        {
                                            if(array_sum($LMNRdiffBS3)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($LMNRdiffBS3)).'</td>';}   
                                            else
                                            {echo '<td class="center">'.$true.'</td>'; }
                                        }
                                }
                            ?>
                        </tr>
                        <tr>
                            <th><br></th>
                        </tr>
<!---------------BUSINESS SEGMENT END---------------------------------------------------------------------------------->

<!---------------GEOGRAPHIC SEGMENT START------------------------------------------------------------------------------>
                        <tr>
                            <th style="font-size:15px;"><strong>GEOGRAPHIC SEGMENT</strong></th>
                        </tr>
                        <tr>
                            <?php echo '<td><strong>Statement Date</strong><br></td>
                            <td class="bgGray">'.$StatementDate0GS.'</td>
                            <td class="bgGray"></td>
                            <td class="bgGray">'.$StatementDate1GS.'</td>
                            <td class="bgGray">'.$StatementDate2GS.'</td>
                            <td class="bgGray">'.$StatementDate3GS.'</td>' ?>
                        </tr>
                        <tr>
                            <td><strong>Submission Type</strong></td>
                            <?php echo '<td class="bgGray">'.$SubmissionType0GS.'</td>
                            <td class="bgGray"></td>
                            <td class="bgGray">'.$SubmissionType1GS.'</td>
                            <td class="bgGray">'.$SubmissionType2GS.'</td>
                            <td class="bgGray">'.$SubmissionType3GS.'</td>' ?>
                        </tr>
                        <tr>
                            <td><strong>Scaling</strong></td>
                            <?php echo '<td class="bgGray">'.$Scaling0GS.'</td>
                            <td class="bgGray"></td>
                            <td class="bgGray">'.$Scaling1GS.'</td>
                            <td class="bgGray">'.$Scaling2GS.'</td>
                            <td class="bgGray">'.$Scaling3GS.'</td>' ?>
                        </tr>
                        <tr>
                            <td><strong>Update Type</strong></td>
                            <?php echo '<td class="bgGray">'.$UpdateType0GS.'</td>
                            <td class="bgGray"></td>
                            <td class="bgGray">'.$UpdateType1GS.'</td>
                            <td class="bgGray">'.$UpdateType2GS.'</td>
                            <td class="bgGray">'.$UpdateType3GS.'</td>' ?>
                        </tr>
                        <tr>
                            <td><strong>Interim Type</strong></td>
                            <?php echo '<td class="bgGray">'.$InterimType0GS.'</td>
                            <td class="bgGray"></td>
                            <td class="bgGray">'.$InterimType1GS.'</td>
                            <td class="bgGray">'.$InterimType2GS.'</td>
                            <td class="bgGray">'.$InterimType3GS.'</td>' ?>
                        </tr>
                        <tr>
                            <td><strong>Business Segment Period Length</strong></td>
                            <?php echo '<td class="bgGray">'.$DateLength0GS.'</td>
                            <td class="bgGray"></td>
                            <td class="bgGray">'.$DateLength1GS.'</td>
                            <td class="bgGray">'.$DateLength2GS.'</td>
                            <td class="bgGray">'.$DateLength3GS.'</td>' ?>
                        </tr>
                        <tr>
                            <th><br></th>
                        </tr>
                        <tr>
                            <td><strong>Revenue</strong></td>
                            <?php 
                                if(array_sum($REXRgs0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($REXRgs0)).'</td><td></td>';}

                                if(array_sum($REXRgs1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($REXRgs1)).'</td>';}

                                if(array_sum($REXRgs2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($REXRgs2)).'</td>';}

                                if(array_sum($REXRgs3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($REXRgs3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Intersegment Revenue</strong></td>
                            <?php 
                                if(array_sum($RINRgs0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($RINRgs0)).'</td><td></td>';}

                                if(array_sum($RINRgs1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($RINRgs1)).'</td>';}

                                if(array_sum($RINRgs2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($RINRgs2)).'</td>';}

                                if(array_sum($RINRgs3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($RINRgs3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Income Before Tax </strong></td>
                            <?php 
                                if(array_sum($EIBTgs0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($EIBTgs0)).'</td><td></td>';}

                                if(array_sum($EIBTgs1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($EIBTgs1)).'</td>';}

                                if(array_sum($EIBTgs2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($EIBTgs2)).'</td>';}

                                if(array_sum($EIBTgs3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($EIBTgs3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Income Tax</strong></td>
                            <?php 
                                if(array_sum($TTAXgs0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($TTAXgs0)).'</td><td></td>';}

                                if(array_sum($TTAXgs1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($TTAXgs1)).'</td>';}

                                if(array_sum($TTAXgs2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($TTAXgs2)).'</td>';}

                                if(array_sum($TTAXgs3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($TTAXgs3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Income After Tax </strong></td>
                            <?php 
                                if(array_sum($TIATgs0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($TIATgs0)).'</td><td></td>';}

                                if(array_sum($TIATgs1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($TIATgs1)).'</td>';}

                                if(array_sum($TIATgs2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($TIATgs2)).'</td>';}

                                if(array_sum($TIATgs3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($TIATgs3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Equity in Affiliates</strong></td>
                            <?php 
                                if(array_sum($CEIAgs0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($CEIAgs0)).'</td><td></td>';}

                                if(array_sum($CEIAgs1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($CEIAgs1)).'</td>';}

                                if(array_sum($CEIAgs2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($CEIAgs2)).'</td>';}

                                if(array_sum($CEIAgs3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($CEIAgs3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Other Unusual Expense (Income)</strong></td>
                            <?php 
                                if(array_sum($EUIEgs0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($EUIEgs0)).'</td><td></td>';}

                                if(array_sum($EUIEgs1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($EUIEgs1)).'</td>';}

                                if(array_sum($EUIEgs2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($EUIEgs2)).'</td>';}

                                if(array_sum($EUIEgs3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($EUIEgs3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Total Assets</strong></td>
                            <?php 
                                if(array_sum($ATOTgs0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($ATOTgs0)).'</td><td></td>';}

                                if(array_sum($ATOTgs1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ATOTgs1)).'</td>';}

                                if(array_sum($ATOTgs2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ATOTgs2)).'</td>';}

                                if(array_sum($ATOTgs3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($ATOTgs3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Total Liabilities </strong></td>
                            <?php 
                                if(array_sum($LTLLgs0)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($LTLLgs0)).'</td><td></td>';}

                                if(array_sum($LTLLgs1)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($LTLLgs1)).'</td>';}

                                if(array_sum($LTLLgs2)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($LTLLgs2)).'</td>';}

                                if(array_sum($LTLLgs3)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($LTLLgs3)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <th><br></th>
                        </tr>
                        <tr>
                            <th style="font-size:15px;color:#ff0000;"><strong>BAL/INC vs SEGMENTS</strong></th>
                        </tr>
                        <tr>
                            <td><strong>Revenue</strong></td>
                            <?php 
                                if($StatementDate0GS==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                    $REXRdiffGS0[] = array_sum($RTLR0) - array_sum($REXRgs0) - array_sum($RINRgs0);
                                        if(array_sum($REXRdiffGS0)==array_sum($RTLR0) + array_sum($REXRgs0))
                                        {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }  
                                        else
                                        {
                                            if(array_sum($REXRdiffGS0)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($REXRdiffGS0)).'</td><td></td>';}   
                                            else
                                            {echo '<td class="bgYellow center">'.$true.'</td><td></td>'; }
                                        }
                                }

                                if($StatementDate1GS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $REXRdiffGS1[] = array_sum($RTLR1) - array_sum($REXRgs1) - array_sum($RINRgs1);
                                        if(array_sum($REXRdiffGS1)==array_sum($RTLR1) + array_sum($REXRgs1))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($REXRdiffGS1)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($REXRdiffGS1)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate2GS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $REXRdiffGS2[] = array_sum($RTLR2) - array_sum($REXRgs2) - array_sum($RINRgs2);
                                        if(array_sum($REXRdiffGS2)==array_sum($RTLR2) + array_sum($REXRgs2))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($REXRdiffGS2)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($REXRdiffGS2)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate3GS==NULL)
                                {echo '<td class="center">'.$blank.'</td>'; }
                                else
                                {
                                    $REXRdiffGS3[] = array_sum($RTLR3) - array_sum($REXRgs3) - array_sum($RINRgs3);
                                        if(array_sum($REXRdiffGS3)==array_sum($RTLR3) + array_sum($REXRgs3))
                                        {echo '<td class="center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($REXRdiffGS3)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($REXRdiffGS3)).'</td>';}   
                                            else
                                            {echo '<td class="center">'.$true.'</td>'; }
                                        }
                                }
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Intersegment Revenue</strong></td>
                            <?php 
                                if($StatementDate0GS==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                    if(array_sum($RINRgs0)==array_sum($RTLR0) - array_sum($REXRgs0))
                                    {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }  
                                    else
                                    {
                                        if(array_sum($RINRgs0)!=0)
                                        {echo '<td class="bgRed right">RINR should be zero</td><td></td>';}   
                                        else
                                        {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                    }
                                }
                                if($StatementDate1GS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    if(array_sum($RINRgs1)==array_sum($RTLR1) - array_sum($REXRgs1))
                                    {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                    else
                                    {
                                        if(array_sum($RINRgs1)!=0)
                                        {echo '<td class="bgRed right">RINR should be zero</td>';}   
                                        else
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                    }
                                }
                                if($StatementDate2GS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    if(array_sum($RINRgs2)==array_sum($RTLR2) - array_sum($REXRgs2))
                                    {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                    else
                                    {
                                        if(array_sum($RINRgs2)!=0)
                                        {echo '<td class="bgRed right">RINR should be zero</td>';}   
                                        else
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                    }
                                }
                                if($StatementDate3GS==NULL)
                                {echo '<td class="center">'.$blank.'</td>'; }
                                else
                                {
                                    if(array_sum($RINRgs3)==array_sum($RTLR3) - array_sum($REXRgs3))
                                    {echo '<td class="center">'.$blank.'</td>'; }  
                                    else
                                    {
                                        if(array_sum($RINRgs3)!=0)
                                        {echo '<td class="bgRed right">RINR should be zero</td>';}   
                                        else
                                        {echo '<td class="center">'.$blank.'</td>'; }
                                    }
                                }
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Net Income Before Tax </strong></td>
                            <?php 
                                if($StatementDate0GS==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                    $EIBTdiffGS0[] = array_sum($EIBT0) - array_sum($EIBTgs0);
                                        if($EIBTdiffGS0==$EIBT0)
                                        {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }  
                                        else
                                        {
                                            if(array_sum($EIBTdiffGS0)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($EIBTdiffGS0)).'</td><td></td>';}   
                                            else
                                            {echo '<td class="bgYellow center">'.$true.'</td><td></td>'; }
                                        }
                                }

                                if($StatementDate1GS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $EIBTdiffGS1[] = array_sum($EIBT1) - array_sum($EIBTgs1);
                                        if(array_sum($EIBTdiffGS1)==array_sum($EIBT1))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($EIBTdiffGS1)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($EIBTdiffGS1)).'';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate2GS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $EIBTdiffGS2[] = array_sum($EIBT2) - array_sum($EIBTgs2);
                                        if(array_sum($EIBTdiffGS2)==array_sum($EIBT2))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($EIBTdiffGS2)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($EIBTdiffGS2)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate3GS==NULL)
                                {echo '<td class="center">'.$blank.'</td>'; }
                                else
                                {
                                    $EIBTdiffGS3[] = array_sum($EIBT3) - array_sum($EIBTgs3);
                                        if(array_sum($EIBTdiffGS3)==array_sum($EIBT3))
                                        {echo '<td class="center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($EIBTdiffGS3)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($EIBTdiffGS3)).'</td>';}   
                                            else
                                            {echo '<td class="center">'.$true.'</td>'; }
                                        }
                                }
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Income Tax </strong></td>
                            <?php 
                                if($StatementDate0GS==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                    $TTAXdiffGS0[] = array_sum($TTAX0) - array_sum($TTAXgs0);
                                        if(array_sum($TTAXdiffGS0)==array_sum($TTAX0))
                                        {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }  
                                        else
                                        {
                                            if(array_sum($TTAXdiffGS0)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($TTAXdiffGS0)).'</td><td></td>';}   
                                            else
                                            {echo '<td class="bgYellow center">'.$true.'</td><td></td>'; }
                                        }
                                }

                                if($StatementDate1GS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $TTAXdiffGS1[] = array_sum($TTAX1) - array_sum($TTAXgs1);
                                        if(array_sum($TTAXdiffGS1)==array_sum($TTAX1))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($TTAXdiffGS1)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($TTAXdiffGS1)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate2GS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $TTAXdiffGS2[] = array_sum($TTAX2) - array_sum($TTAXgs2);
                                        if(array_sum($TTAXdiffGS2)==array_sum($TTAX2))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($TTAXdiffGS2)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($TTAXdiffGS2)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate3GS==NULL)
                                {echo '<td class="center">'.$blank.'</td>'; }
                                else
                                {
                                    $TTAXdiffGS3[] = array_sum($TTAX3) - array_sum($TTAXgs3);
                                        if(array_sum($TTAXdiffGS3)==array_sum($TTAX3))
                                        {echo '<td class="center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($TTAXdiffGS3)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($TTAXdiffGS3)).'</td>';}   
                                            else
                                            {echo '<td class="center">'.$true.'</td>'; }
                                        }
                                }
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Net Income After Tax</strong></td>
                            <?php 
                                if($StatementDate0GS==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                    $TIATdiffGS0[] = array_sum($TIAT0) - array_sum($TIATgs0);
                                        if(array_sum($TIATdiffGS0)==array_sum($TIAT0))
                                        {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }  
                                        else
                                        {
                                            if(array_sum($TIATdiffGS0)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($TIATdiffGS0)).'</td><td></td>';}   
                                            else
                                            {echo '<td class="bgYellow center">'.$true.'</td><td></td>'; }
                                        }
                                }

                                if($StatementDate1GS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $TIATdiffGS1[] = array_sum($TIAT1) - array_sum($TIATgs1);
                                        if(array_sum($TIATdiffGS1)==array_sum($TIAT1))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($TIATdiffGS1)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($TIATdiffGS1)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate2GS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $TIATdiffGS2[] = array_sum($TIAT2) - array_sum($TIATgs2);
                                        if(array_sum($TIATdiffGS2)==array_sum($TIAT2))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($TIATdiffGS2)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($TIATdiffGS2)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate3GS==NULL)
                                {echo '<td class="center">'.$blank.'</td>'; }
                                else
                                {
                                    $TIATdiffGS3[] = array_sum($TIAT3) - array_sum($TIATgs3);
                                        if(array_sum($TIATdiffGS3)==array_sum($TIAT3))
                                        {echo '<td class="center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($TIATdiffGS3)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($TIATdiffGS3)).'</td>';}   
                                            else
                                            {echo '<td class="center">'.$true.'</td>'; }
                                        }
                                }
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Equity in Affiliates</strong></td>
                            <?php 
                                if($StatementDate0GS==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                    if(array_sum($CEIAgs0)==array_sum($VEIA0))
                                    {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }  
                                    else
                                    {
                                        if(array_sum($CEIAgs0)!=0)
                                        {echo '<td class="bgRed right">Check Polarity</td><td></td>';}   
                                        else
                                        {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                    }
                                }
                                if($StatementDate1GS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    if(array_sum($CEIAgs1)==array_sum($VEIA1))
                                    {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                    else
                                    {
                                        if(array_sum($CEIAgs1)!=0)
                                        {echo '<td class="bgRed right">Check Polarity</td>';}   
                                        else
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                    }
                                }
                                if($StatementDate2GS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    if(array_sum($CEIAgs2)==array_sum($VEIA2))
                                    {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                    else
                                    {
                                        if(array_sum($CEIAgs2)!=0)
                                        {echo '<td class="bgRed right">Check Polarity</td>';}   
                                        else
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                    }
                                }
                                if($StatementDate3GS==NULL)
                                {echo '<td class="center">'.$blank.'</td>'; }
                                else
                                {
                                    if(array_sum($CEIAgs3)==array_sum($VEIA3))
                                    {echo '<td class="center">'.$blank.'</td>'; }  
                                    else
                                    {
                                        if(array_sum($CEIAgs3)!=0)
                                        {echo '<td class="bgRed right">Check Polarity</td>';}   
                                        else
                                        {echo '<td class="center">'.$blank.'</td>'; }
                                    }
                                }
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Other Unusual Expense (Income)</strong></td>
                            <?php 
                                if($StatementDate0GS==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                    if(array_sum($EUIEgs0)!=0)
                                    {echo '<td class="bgRed right">Check Polarity</td><td></td>';}   
                                    else
                                    {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                }
                                if($StatementDate1GS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    if(array_sum($EUIEgs1)!=0)
                                    {echo '<td class="bgRed right">Check Polarity</td>';}   
                                    else
                                    {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                }
                                if($StatementDate2GS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    if(array_sum($EUIEgs2)!=0)
                                    {echo '<td class="bgRed right">Check Polarity</td>';}   
                                    else
                                    {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                }
                                if($StatementDate3GS==NULL)
                                {echo '<td class="center">'.$blank.'</td>'; }
                                else
                                {
                                    if(array_sum($EUIEgs3)!=0)
                                    {echo '<td class="bgRed right">Check Polarity</td>';}   
                                    else
                                    {echo '<td class="center">'.$blank.'</td>'; }
                                }
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Total Assets</strong></td>
                            <?php 
                                if($StatementDate0GS==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                    $ATOTdiffGS0[] = array_sum($ATOT0) - array_sum($ATOTgs0);
                                        if(array_sum($ATOTdiffGS0)==array_sum($ATOT0))
                                        {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }  
                                        else
                                        {
                                            if(array_sum($ATOTdiffGS0)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($ATOTdiffGS0)).'</td><td></td>';}   
                                            else
                                            {echo '<td class="bgYellow center">'.$true.'</td><td></td>'; }
                                        }
                                }

                                if($StatementDate1GS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $ATOTdiffGS1[] = array_sum($ATOT1) - array_sum($ATOTgs1);
                                        if(array_sum($ATOTdiffGS1)==array_sum($ATOT1))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($ATOTdiffGS1)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($ATOTdiffGS1)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate2GS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $ATOTdiffGS2[] = array_sum($ATOT2) - array_sum($ATOTgs2);
                                        if(array_sum($ATOTdiffGS2)==array_sum($ATOT2))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($ATOTdiffGS2)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($ATOTdiffGS2)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate3GS==NULL)
                                {echo '<td class="center">'.$blank.'</td>'; }
                                else
                                {
                                    $ATOTdiffGS3[] = array_sum($ATOT3) - array_sum($ATOTgs3);
                                        if(array_sum($ATOTdiffGS3)==array_sum($ATOT3))
                                        {echo '<td class="center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($ATOTdiffGS3)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($ATOTdiffGS3)).'</td>';}   
                                            else
                                            {echo '<td class="center">'.$true.'</td>'; }
                                        }
                                }
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Total Liabilities less LMNR Minority Interest</strong></td>
                            <?php 
                                if($StatementDate0GS==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                    $LMNRdiffGS0[] = array_sum($LTLL0) - array_sum($LMNR0) - array_sum($LTLLgs0);
                                        if(array_sum($LMNRdiffGS0)==array_sum($LTLL0) - array_sum($LMNR0))
                                        {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }  
                                        else
                                        {
                                            if(array_sum($LMNRdiffGS0)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($LMNRdiffGS0)).'</td><td></td>';}   
                                            else
                                            {echo '<td class="bgYellow center">'.$true.'</td><td></td>'; }
                                        }
                                }

                                if($StatementDate1GS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $LMNRdiffGS1[] = array_sum($LTLL1) - array_sum($LMNR1) - array_sum($LTLLgs1);
                                        if(array_sum($LMNRdiffGS1)==array_sum($LTLL1) - array_sum($LMNR1))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($LMNRdiffGS1)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($LMNRdiffGS1)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate2GS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $LMNRdiffGS2[] = array_sum($LTLL2) - array_sum($LMNR2) - array_sum($LTLLgs2);
                                        if(array_sum($LMNRdiffGS2)==array_sum($LTLL2) - array_sum($LMNR2))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($LMNRdiffGS2)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($LMNRdiffGS2)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate3GS==NULL)
                                {echo '<td class="center">'.$blank.'</td>'; }
                                else
                                {
                                    $LMNRdiffGS3[] = array_sum($LTLL3) - array_sum($LMNR3) - array_sum($LTLLgs3);
                                        if(array_sum($LMNRdiffGS3)==array_sum($LTLL3) - array_sum($LMNR3))
                                        {echo '<td class="center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($LMNRdiffGS3)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($LMNRdiffGS3)).'</td>';}   
                                            else
                                            {echo '<td class="center">'.$true.'</td>'; }
                                        }
                                }
                            ?>
                        </tr>
<!---------------GEOGRAPHIC SEGMENT END-------------------------------------------------------------------------------->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

       <div class="col-md-4 col-lg-7 offset-lg-2 offset-xl-0" style="width:910px;">
        <div class="row">
            <div class="col float-right">
                <button class="btn btn-outline-primary" type="button" style="height:30px;padding:-9px;font-size:12px;"><a href="#currentYearTable">CURRENT FISCAL YEAR</button></a>
            </div>
        </div>
    </div>


<!---------------PRIOR FISCAL YEAR START----------------------------------------------------------------------------------------->
    <div style="padding:0px;width:1177px 1177px;">
        <div class="container" style="padding:0px 0px;margin:0px 20px;width:3000px;">
            <div class="table-responsive table-sm table-bordered" style="font-size:10px;">
                <table id="priorYearTable" class="table">
<!---------------INCOME STATEMENT START----------------------------------------------------------------------------------------->
                    <thead>
                        <tr>
                            <th style="font-size:15px;">INCOME STATEMENT</th>                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td width="30%"><strong>Period End Date</strong></td>
                            <?php echo '<td class="bgGray" width="15%">'.$EndDate0p.'</td>
                            <td class="bgGray" width="15%"></td>
                            <td class="bgGray" width="15%">'.$EndDate1p.'</td>
                            <td class="bgGray" width="15%">'.$EndDate2p.'</td>
                            <td class="bgGray" width="15%">'.$EndDate3p.'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Interim Number</strong></td>
                            <?php echo '<td class="bgGray" width="15%">'.$Interim0p.'</td>
                            <td class="bgGray" width="15%"></td>
                            <td class="bgGray" width="15%">'.$Interim1p.'</td>
                            <td class="bgGray" width="15%">'.$Interim2p.'</td>
                            <td class="bgGray" width="15%">'.$Interim3p.'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Statement Date</strong></td>
                            <?php echo '<td class="bgGray" width="15%">'.$StatementDate0p.'</td>
                            <td class="bgGray" width="15%"></td>
                            <td class="bgGray" width="15%">'.$StatementDate1p.'</td>
                            <td class="bgGray" width="15%">'.$StatementDate2p.'</td>
                            <td class="bgGray" width="15%">'.$StatementDate3p.'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Filing Date</strong></td>
                            <?php echo '<td class="bgGray" width="15%">'.$FilingDate0p.'</td>
                            <td class="bgGray" width="15%"></td>
                            <td class="bgGray" width="15%">'.$FilingDate1p.'</td>
                            <td class="bgGray" width="15%">'.$FilingDate2p.'</td>
                            <td class="bgGray" width="15%">'.$FilingDate3p.'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Submission Type</strong></td>
                            <?php echo '<td class="bgGray" width="15%">'.$SubmissionType0p.'</td>
                            <td class="bgGray" width="15%"></td>
                            <td class="bgGray" width="15%">'.$SubmissionType1p.'</td>
                            <td class="bgGray" width="15%">'.$SubmissionType2p.'</td>
                            <td class="bgGray" width="15%">'.$SubmissionType3p.'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Scaling</strong></td>
                            <?php echo '<td class="bgGray" width="15%">'.$Scaling0p.'</td>
                            <td class="bgGray" width="15%"></td>
                            <td class="bgGray" width="15%">'.$Scaling1p.'</td>
                            <td class="bgGray" width="15%">'.$Scaling2p.'</td>
                            <td class="bgGray" width="15%">'.$Scaling3p.'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Update Type</strong></td>
                            <?php echo '<td class="bgGray" width="15%">'.$UpdateType0p.'</td>
                            <td class="bgGray" width="15%"></td>
                            <td class="bgGray" width="15%">'.$UpdateType1p.'</td>
                            <td class="bgGray" width="15%">'.$UpdateType2p.'</td>
                            <td class="bgGray" width="15%">'.$UpdateType3p.'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Interim Type</strong></td>
                            <?php echo '<td class="bgGray" width="15%">'.$InterimType0p.'</td>
                            <td class="bgGray" width="15%"></td>
                            <td class="bgGray" width="15%">'.$InterimType1p.'</td>
                            <td class="bgGray" width="15%">'.$InterimType2p.'</td>
                            <td class="bgGray" width="15%">'.$InterimType3p.'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Income Statement Period Length</strong></td>
                            <?php echo '<td class="bgGray" width="15%">'.$DateLength0p.'</td>
                            <td class="bgGray" width="15%"></td>
                            <td class="bgGray" width="15%">'.$DateLength1p.'</td>
                            <td class="bgGray" width="15%">'.$DateLength2p.'</td>
                            <td class="bgGray" width="15%">'.$DateLength3p.'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Task(F=Flash,P=Prelim,D=Detailed, ND=Non-detailed)</strong></td>
                            <?php echo '<td class="bgGray" width="15%">'.$HelperInconsistentFPDFlag0p.'</td>
                            <td class="bgGray" width="15%"></td>
                            <td class="bgGray" width="15%">'.$HelperInconsistentFPDFlag1p.'</td>
                            <td class="bgGray" width="15%">'.$HelperInconsistentFPDFlag2p.'</td>
                            <td class="bgGray" width="15%">'.$HelperInconsistentFPDFlag3p.'</td>';?>
                        </tr>
                        <tr>
                            <th><br></th>
                        </tr>
                        <tr>
                            <td><strong>Total Revenue</strong></td>
                            <?php 
                                if(array_sum($RTLR0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($RTLR0p)).'</td><td></td>';}

                                if(array_sum($RTLR1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($RTLR1p)).'</td>';}

                                if(array_sum($RTLR2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($RTLR2p)).'</td>';}

                                if(array_sum($RTLR3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($RTLR3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Cost of Revenue</td>
                            <?php 
                                if(array_sum($ECOR0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($ECOR0p)).'</td><td></td>';}

                                if(array_sum($ECOR1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ECOR1p)).'</td>';}

                                if(array_sum($ECOR2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ECOR2p)).'</td>';}

                                if(array_sum($ECOR3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($ECOR3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Selling/General/Administrative Expense</td>
                            <?php 
                                if(array_sum($ESGA0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($ESGA0p)).'</td><td></td>';}

                                if(array_sum($ESGA1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ESGA1p)).'</td>';}

                                if(array_sum($ESGA2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ESGA2p)).'</td>';}

                                if(array_sum($ESGA3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($ESGA3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Interest Expense - Operating</td>
                            <?php 
                                if(array_sum($EIEX0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($EIEX0p)).'</td><td></td>';}

                                if(array_sum($EIEX1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($EIEX1p)).'</td>';}

                                if(array_sum($EIEX2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($EIEX2p)).'</td>';}

                                if(array_sum($EIEX3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($EIEX3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Total Operating Expense</strong></td>
                            <?php 
                                if(array_sum($ETOE0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($ETOE0p)).'</td><td></td>';}

                                if(array_sum($ETOE1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ETOE1p)).'</td>';}

                                if(array_sum($ETOE2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ETOE2p)).'</td>';}

                                if(array_sum($ETOE3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($ETOE3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Interest Expense - Non-Operating</td>
                            <?php 
                                if(array_sum($NIEN0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($NIEN0p)).'</td><td></td>';}

                                if(array_sum($NIEN1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($NIEN1p)).'</td>';}

                                if(array_sum($NIEN2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($NIEN2p)).'</td>';}

                                if(array_sum($NIEN3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($NIEN3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Net Income Before Taxes</strong></td>
                            <?php 
                                if(array_sum($EIBT0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($EIBT0p)).'</td><td></td>';}

                                if(array_sum($EIBT1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($EIBT1p)).'</td>';}

                                if(array_sum($EIBT2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($EIBT2p)).'</td>';}

                                if(array_sum($EIBT3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($EIBT3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Provision for Income Taxes</strong></td>
                            <?php 
                                if(array_sum($TTAX0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($TTAX0p)).'</td><td></td>';}

                                if(array_sum($TTAX1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($TTAX1p)).'</td>';}

                                if(array_sum($TTAX2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($TTAX2p)).'</td>';}

                                if(array_sum($TTAX3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($TTAX3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Net Income After Taxes</strong></td>
                            <?php 
                                if(array_sum($TIAT0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($TIAT0p)).'</td><td></td>';}

                                if(array_sum($TIAT1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($TIAT1p)).'</td>';}

                                if(array_sum($TIAT2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($TIAT2p)).'</td>';}

                                if(array_sum($TIAT3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($TIAT3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Extraordinary Item</strong></td>
                            <?php 
                                if(array_sum($XTRA0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($XTRA0p)).'</td><td></td>';}

                                if(array_sum($XTRA1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($XTRA1p)).'</td>';}

                                if(array_sum($XTRA2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($XTRA2p)).'</td>';}

                                if(array_sum($XTRA3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($XTRA3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Income Available to Common Excl. Extraordinary Items </strong></td>
                            <?php 
                                if(array_sum($CIAC0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($CIAC0p)).'</td><td></td>';}

                                if(array_sum($CIAC1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($CIAC1p)).'</td>';}

                                if(array_sum($CIAC2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($CIAC2p)).'</td>';}

                                if(array_sum($CIAC3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($CIAC3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Net Income Available to Com Incl ExtraOrd</strong></td>
                            <?php 
                                if(array_sum($XNIC0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($XNIC0p)).'</td><td></td>';}

                                if(array_sum($XNIC1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($XNIC1p)).'</td>';}

                                if(array_sum($XNIC2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($XNIC2p)).'</td>';}

                                if(array_sum($XNIC3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($XNIC3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Reported Net Income</strong></td>
                            <?php 
                                if(array_sum($XNIA0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($XNIA0p)).'</td><td></td>';}

                                if(array_sum($XNIA1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($XNIA1p)).'</td>';}

                                if(array_sum($XNIA2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($XNIA2p)).'</td>';}

                                if(array_sum($XNIA3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($XNIA3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <th><br></th>
                        </tr>
                        <tr>
                            <td><strong>Basic Weighted Average Shares</strong></td>
                            <?php 
                                if(array_sum($GBAS0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($GBAS0p)).'</td><td></td>';}

                                if(array_sum($GBAS1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($GBAS1p)).'</td>';}

                                if(array_sum($GBAS2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($GBAS2p)).'</td>';}

                                if(array_sum($GBAS3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($GBAS3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Diluted Weighted Average Shares</strong></td>
                            <?php 
                                if(array_sum($GDWS0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($GDWS0p)).'</td><td></td>';}

                                if(array_sum($GDWS1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($GDWS1p)).'</td>';}

                                if(array_sum($GDWS2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($GDWS2p)).'</td>';}

                                if(array_sum($GDWS3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($GDWS3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <th><br></th>
                        </tr>
                        <tr>
                            <td><a href="#STSI2"><strong>Total Special Items</strong></td>
                            <?php 
                                if(array_sum($STSI0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($STSI0p)).'</td><td></td>';}

                                if(array_sum($STSI1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($STSI1p)).'</td>';}

                                if(array_sum($STSI2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($STSI2p)).'</td>';}

                                if(array_sum($STSI3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($STSI3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Interest Expense, Suplemental </strong></td>
                            <?php 
                                if(array_sum($VIEX0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($VIEX0p)).'</td><td></td>';}

                                if(array_sum($VIEX1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VIEX1p)).'</td>';}

                                if(array_sum($VIEX2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VIEX2p)).'</td>';}

                                if(array_sum($VIEX3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($VIEX3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Interest Capitalized, Suplemental </strong></td>
                            <?php 
                                if(array_sum($VCAP0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($VCAP0p)).'</td><td></td>';}

                                if(array_sum($VCAP1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VCAP1p)).'</td>';}

                                if(array_sum($VCAP2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VCAP2p)).'</td>';}

                                if(array_sum($VCAP3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($VCAP3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Equity in Affiliates</strong></td>
                            <?php 
                                if(array_sum($VEIA0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($VEIA0p)).'</td><td></td>';}

                                if(array_sum($VEIA1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VEIA1p)).'</td>';}

                                if(array_sum($VEIA2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VEIA2p)).'</td>';}

                                if(array_sum($VEIA3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($VEIA3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Depreciation</strong></td>
                            <?php 
                                if(array_sum($VDEP0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($VDEP0p)).'</td><td></td>';}

                                if(array_sum($VDEP1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VDEP1p)).'</td>';}

                                if(array_sum($VDEP2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VDEP2p)).'</td>';}

                                if(array_sum($VDEP3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($VDEP3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Amortisation</strong></td>
                            <?php 
                                if(array_sum($VAMI0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($VAMI0p)).'</td><td></td>';}

                                if(array_sum($VAMI1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VAMI1p)).'</td>';}

                                if(array_sum($VAMI2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VAMI2p)).'</td>';}

                                if(array_sum($VAMI3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($VAMI3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Total Depreciation & Amortization(VDEP+VAMI)</strong></td>
                            <?php 
                            $totalVdepVami0p[]=array_sum($VDEP0p)+array_sum($VAMI0p);
                            $totalVdepVami1p[]=array_sum($VDEP1p)+array_sum($VAMI1p);
                            $totalVdepVami2p[]=array_sum($VDEP2p)+array_sum($VAMI2p);
                            $totalVdepVami3p[]=array_sum($VDEP3p)+array_sum($VAMI3p);
                            if(array_sum($totalVdepVami0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($totalVdepVami0p)).'</td><td></td>';}

                                if(array_sum($totalVdepVami1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($totalVdepVami1p)).'</td>';}

                                if(array_sum($totalVdepVami2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($totalVdepVami2p)).'</td>';}

                                if(array_sum($totalVdepVami3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($totalVdepVami3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Amortisation of Goodwill</strong></td>
                            <?php 
                                if(array_sum($VAMA0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($VAMA0p)).'</td><td></td>';}

                                if(array_sum($VAMA1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VAMA1p)).'</td>';}

                                if(array_sum($VAMA2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VAMA2p)).'</td>';}

                                if(array_sum($VAMA3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($VAMA3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Gross Dividends - Common Stock</strong></td>
                            <?php 
                                if(array_sum($DCGD0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($DCGD0p)).'</td><td></td>';}

                                if(array_sum($DCGD1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($DCGD1p)).'</td>';}

                                if(array_sum($DCGD2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($DCGD2p)).'</td>';}

                                if(array_sum($DCGD3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($DCGD3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>DPS - Common Stock Primary Issue 1</strong></td>
                            <?php 
                                if(array_sum($DDPS10p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($DDPS10p), 6).'</td><td></td>';}

                                if(array_sum($DDPS11p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($DDPS11p), 6).'</td>';}

                                if(array_sum($DDPS12p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($DDPS12p), 6).'</td>';}

                                if(array_sum($DDPS13p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($DDPS13p), 6).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>DPS - Common Stock Primary Issue 2</strong></td>
                            <?php 
                                if(array_sum($DDPS20p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($DDPS20p)).'</td><td></td>';}

                                if(array_sum($DDPS21p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($DDPS21p)).'</td>';}

                                if(array_sum($DDPS22p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($DDPS22p)).'</td>';}

                                if(array_sum($DDPS23p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($DDPS23p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Special DPS – Common Stock Primary Issue </strong></td>
                            <?php 
                                if(array_sum($DSPS10p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($DSPS10p)).'</td><td></td>';}

                                if(array_sum($DSPS11p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($DSPS11p)).'</td>';}

                                if(array_sum($DSPS12p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($DSPS12p)).'</td>';}

                                if(array_sum($DSPS13p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($DSPS13p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Rental Expense, Suplemental </strong></td>
                            <?php 
                                if(array_sum($VRXP0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($VRXP0p)).'</td><td></td>';}

                                if(array_sum($VRXP1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VRXP1p)).'</td>';}

                                if(array_sum($VRXP2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VRXP2p)).'</td>';}

                                if(array_sum($VRXP3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($VRXP3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Research & Development Expense, Suplemental</strong></td>
                            <?php 
                                if(array_sum($VRAD0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($VRAD0p)).'</td><td></td>';}

                                if(array_sum($VRAD1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VRAD1p)).'</td>';}

                                if(array_sum($VRAD2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VRAD2p)).'</td>';}

                                if(array_sum($VRAD3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($VRAD3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Income Tax – Total</strong></td>
                            <?php 
                                if(array_sum($VITT0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($VITT0p)).'</td><td></td>';}

                                if(array_sum($VITT1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VITT1p)).'</td>';}

                                if(array_sum($VITT2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VITT2p)).'</td>';}

                                if(array_sum($VITT3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($VITT3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Funds From Operations (REIT) </strong></td>
                            <?php 
                                if(array_sum($HFFO0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($HFFO0p)).'</td><td></td>';}

                                if(array_sum($HFFO1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($HFFO1p)).'</td>';}

                                if(array_sum($HFFO2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($HFFO2p)).'</td>';}

                                if(array_sum($HFFO3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($HFFO3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <th><br></th>
                        </tr>
                        <tr>
                            <td><strong>XNIC vs XNIA</strong></td>
                            <?php 
                                if($XNIC0p==$XNIA0p)
                                {echo '<td class="bgYellow center">'.$true.'</td> <td></td>';}
                                else
                                {echo '<td class="bgYellow center">'.$blank.'</td> <td></td>';}
                                if($XNIC1p==$XNIA1p)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                if($XNIC2p==$XNIA2p)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                if($XNIC3p==$XNIA3p)
                                {echo '<td class="center">'.$true.'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>TTAX vs VITT</strong></td>
                            <?php 
                                if($TTAX0p==$VITT0p)
                                {echo '<td class="bgYellow center">'.$true.'</td> <td></td>';}
                                else
                                {echo '<td class="bgYellow center">'.$blank.'</td> <td></td>';}
                                if($TTAX1p==$VITT1p)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                if($TTAX2p==$VITT2p)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                if($TTAX3p==$VITT3p)
                                {echo '<td class="center">'.$true.'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Depreciation & Amortization INC vs CAS</strong></td>
                            <?php 
                                if(array_sum($totalVdepVami0p)==array_sum($SDEP0p)+array_sum($OAMI0p) || array_sum($SDEP0p)+array_sum($OAMI0p)==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgRed center">Dep&Amort INC > CAS</td><td></td>';}

                                if(array_sum($totalVdepVami1p)==array_sum($SDEP1p)+array_sum($OAMI1p) || array_sum($SDEP1p)+array_sum($OAMI1p)==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgRed center">Dep&Amort INC > CAS</td>';}

                                if(array_sum($totalVdepVami2p)==array_sum($SDEP2p)+array_sum($OAMI2p) || array_sum($SDEP2p)+array_sum($OAMI2p)==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgRed center">Dep&Amort INC > CAS</td>';}

                                if(array_sum($totalVdepVami3p)==array_sum($SDEP3p)+array_sum($OAMI3p) || array_sum($SDEP3p)+array_sum($OAMI3p)==0)
                                {echo '<td class="center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgRed center">Dep&Amort INC > CAS</td>';}

                            ?>
                            
                        </tr>
                        <tr>
                            <th><br></th>
                        </tr>
                    <!-------------------------------------ADDING UP START-------------------------------------------->
                        <tr>
                            <td style="font-size:15px;color:#ff0000;"><strong>ADDING UP</strong><br></td>
                            <td class="bgYellow center"><strong>Annual vs Semi-annual</strong></td>
                            <td class="bgYellow center"><strong>Difference</strong></td>
                            <td class="bgGreen center"><strong>S2 YTD = S1 + S2</strong></td>
                            <td class="bgGreen center"><strong>Difference</strong></td>
                        </tr>
                        <?php require 'addingupPrior.php'?>
                        <tr>
                            <th><br></th>
                        </tr>
                    <!-------------------------------------ADDING UP END---------------------------------------------->

                    <!-------------------------------------STSI BREAKDOWN START--------------------------------------------->
                        <tr>
                            <th id="STSI2" style="font-size:15px;color:#ff0000;"><strong>STSI BREAKDOWN</strong><br></th>
                        </tr>
                        <tr>
                            <td><strong>Purchased R&D Written-Off</strong></td>
                            <?php 
                                if(array_sum($ERDW0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($ERDW0p)).'</td><td></td>';}

                                if(array_sum($ERDW1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ERDW1p)).'</td>';}

                                if(array_sum($ERDW2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ERDW2p)).'</td>';}

                                if(array_sum($ERDW3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($ERDW3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Restructuring Charge</strong></td>
                            <?php 
                                if(array_sum($ERES0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($ERES0p)).'</td><td></td>';}

                                if(array_sum($ERES1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ERES1p)).'</td>';}

                                if(array_sum($ERES2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ERES2p)).'</td>';}

                                if(array_sum($ERES3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($ERES3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Litigation</strong></td>
                            <?php 
                                if(array_sum($ELIT0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($ELIT0p)).'</td><td></td>';}

                                if(array_sum($ELIT1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ELIT1p)).'</td>';}

                                if(array_sum($ELIT2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ELIT2p)).'</td>';}

                                if(array_sum($ELIT3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($ELIT3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Impairment – Assets Held for Use</strong></td>
                            <?php 
                                if(array_sum($EIAU0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($EIAU0p)).'</td><td></td>';}

                                if(array_sum($EIAU1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($EIAU1p)).'</td>';}

                                if(array_sum($EIAU2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($EIAU2p)).'</td>';}

                                if(array_sum($EIAU3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($EIAU3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Impairment – Assets Held for Sale </strong></td>
                            <?php 
                                if(array_sum($EIAS0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($EIAS0p)).'</td><td></td>';}

                                if(array_sum($EIAS1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($EIAS1p)).'</td>';}

                                if(array_sum($EIAS2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($EIAS2p)).'</td>';}

                                if(array_sum($EIAS3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($EIAS3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>(Gain) Loss on Sale of Fixed Assets, Operating</strong></td>
                            <?php 
                                if(array_sum($EGLA0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($EGLA0p)).'</td><td></td>';}

                                if(array_sum($EGLA1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($EGLA1p)).'</td>';}

                                if(array_sum($EGLA2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($EGLA2p)).'</td>';}

                                if(array_sum($EGLA3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($EGLA3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan"><strong>Other Unusual Expense (Income)</strong></td>
                            <?php 
                                if(array_sum($EUIE0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($EUIE0p)).'</td><td></td>';}

                                if(array_sum($EUIE1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($EUIE1p)).'</td>';}

                                if(array_sum($EUIE2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($EUIE2p)).'</td>';}

                                if(array_sum($EUIE3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($EUIE3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Gain (Loss) on Sale of Assets, Non-Operating</strong></td>
                            <?php 
                                if(array_sum($NGLA0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($NGLA0p)).'</td><td></td>';}

                                if(array_sum($NGLA1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($NGLA1p)).'</td>';}

                                if(array_sum($NGLA2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($NGLA2p)).'</td>';}

                                if(array_sum($NGLA3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($NGLA3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Other Unusual Income </strong></td>
                            <?php 
                                if(array_sum($NUII0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($NUII0p)).'</td><td></td>';}

                                if(array_sum($NUII1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($NUII1p)).'</td>';}

                                if(array_sum($NUII2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($NUII2p)).'</td>';}

                                if(array_sum($NUII3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($NUII3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Restructuring Charge</strong></td>
                            <?php 
                                if(array_sum($NRES0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($NRES0p)).'</td><td></td>';}

                                if(array_sum($NRES1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($NRES1p)).'</td>';}

                                if(array_sum($NRES2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($NRES2p)).'</td>';}

                                if(array_sum($NRES3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($NRES3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Litigation Expense</strong></td>
                            <?php 
                                if(array_sum($NLIT0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($NLIT0p)).'</td><td></td>';}

                                if(array_sum($NLIT1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($NLIT1p)).'</td>';}

                                if(array_sum($NLIT2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($NLIT2p)).'</td>';}

                                if(array_sum($NLIT3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($NLIT3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan"><strong>Other Unusual Expense </strong></td>
                            <?php 
                                if(array_sum($NUIE0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($NUIE0p)).'</td><td></td>';}

                                if(array_sum($NUIE1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($NUIE1p)).'</td>';}

                                if(array_sum($NUIE2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($NUIE2p)).'</td>';}

                                if(array_sum($NUIE3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($NUIE3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Amortization of Acquisition Costs </strong></td>
                            <?php 
                                if(array_sum($NAMA0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($NAMA0p)).'</td><td></td>';}

                                if(array_sum($NAMA1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($NAMA1p)).'</td>';}

                                if(array_sum($NAMA2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($NAMA2p)).'</td>';}

                                if(array_sum($NAMA3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($NAMA3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Amortization of Acquisition Costs, Suplemental</strong></td>
                            <?php 
                                if(array_sum($VAMA0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($VAMA0p)).'</td><td></td>';}

                                if(array_sum($VAMA1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VAMA1p)).'</td>';}

                                if(array_sum($VAMA2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VAMA2p)).'</td>';}

                                if(array_sum($VAMA3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($VAMA3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>(Gain) Loss on Sale of Assets, Suplemental</strong></td>
                            <?php 
                                if(array_sum($VGLA0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($VGLA0p)).'</td><td></td>';}

                                if(array_sum($VGLA1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VGLA1p)).'</td>';}

                                if(array_sum($VGLA2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VGLA2p)).'</td>';}

                                if(array_sum($VGLA3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($VGLA3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Impairment-Assets Held for Sale, Suplemental</strong></td>
                            <?php 
                                if(array_sum($VIAS0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($VIAS0p)).'</td><td></td>';}

                                if(array_sum($VIAS1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VIAS1p)).'</td>';}

                                if(array_sum($VIAS2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VIAS2p)).'</td>';}

                                if(array_sum($VIAS3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($VIAS3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Impairment-Assets Held for Use, Suplemental</strong></td>
                            <?php 
                                if(array_sum($VIAU0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($VIAU0p)).'</td><td></td>';}

                                if(array_sum($VIAU1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VIAU1p)).'</td>';}

                                if(array_sum($VIAU2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VIAU2p)).'</td>';}

                                if(array_sum($VIAU3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($VIAU3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Litigation Charge, Suplemental</strong></td>
                            <?php 
                                if(array_sum($VLIT0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($VLIT0p)).'</td><td></td>';}

                                if(array_sum($VLIT1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VLIT1p)).'</td>';}

                                if(array_sum($VLIT2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VLIT2p)).'</td>';}

                                if(array_sum($VLIT3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($VLIT3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Purchased R&D Written-Off, Suplemental</strong></td>
                            <?php 
                                if(array_sum($VRDW0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($VRDW0p)).'</td><td></td>';}

                                if(array_sum($VRDW1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VRDW1p)).'</td>';}

                                if(array_sum($VRDW2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VRDW2p)).'</td>';}

                                if(array_sum($VRDW3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($VRDW3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Restructuring Charge, Suplemental</strong></td>
                            <?php 
                                if(array_sum($VRES0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($VRES0p)).'</td><td></td>';}

                                if(array_sum($VRES1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VRES1p)).'</td>';}

                                if(array_sum($VRES2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VRES2p)).'</td>';}

                                if(array_sum($VRES3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($VRES3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Other Unusual Expense (Income), Suplemental</strong></td>
                            <?php 
                                if(array_sum($VUIE0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($VUIE0p)).'</td><td></td>';}

                                if(array_sum($VUIE1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VUIE1p)).'</td>';}

                                if(array_sum($VUIE2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VUIE2p)).'</td>';}

                                if(array_sum($VUIE3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($VUIE3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>TOTAL</strong></td>
                            <?php 
                                $totalSTSI0p[]=(array_sum($ERDW0p)+array_sum($ERES0p)+array_sum($ELIT0p)+array_sum($EIAU0p)+array_sum($EIAS0p)+array_sum($EGLA0p)+array_sum($EUIE0p)+array_sum($VAMA0p)+array_sum($VGLA0p)+array_sum($VIAS0p)+array_sum($VIAU0p)+array_sum($VLIT0p)+array_sum($VRDW0p)+array_sum($VRES0p)+array_sum($VUIE0))-(array_sum($NGLA0p)+array_sum($NUII0p)+array_sum($NRES0p)+array_sum($NLIT0p)+array_sum($NUIE0p)+array_sum($NAMA0p));
                                $totalSTSI1p[]=(array_sum($ERDW1p)+array_sum($ERES1p)+array_sum($ELIT1p)+array_sum($EIAU1p)+array_sum($EIAS1p)+array_sum($EGLA1p)+array_sum($EUIE1p)+array_sum($VAMA1p)+array_sum($VGLA1p)+array_sum($VIAS1p)+array_sum($VIAU1p)+array_sum($VLIT1p)+array_sum($VRDW1p)+array_sum($VRES1p)+array_sum($VUIE1))-(array_sum($NGLA1p)+array_sum($NUII1p)+array_sum($NRES1p)+array_sum($NLIT1p)+array_sum($NUIE1p)+array_sum($NAMA1p));
                                $totalSTSI2p[]=(array_sum($ERDW2p)+array_sum($ERES2p)+array_sum($ELIT2p)+array_sum($EIAU2p)+array_sum($EIAS2p)+array_sum($EGLA2p)+array_sum($EUIE2p)+array_sum($VAMA2p)+array_sum($VGLA2p)+array_sum($VIAS2p)+array_sum($VIAU2p)+array_sum($VLIT2p)+array_sum($VRDW2p)+array_sum($VRES2p)+array_sum($VUIE2))-(array_sum($NGLA2p)+array_sum($NUII2p)+array_sum($NRES2p)+array_sum($NLIT2p)+array_sum($NUIE2p)+array_sum($NAMA2p));
                                $totalSTSI3p[]=(array_sum($ERDW3p)+array_sum($ERES3p)+array_sum($ELIT3p)+array_sum($EIAU3p)+array_sum($EIAS3p)+array_sum($EGLA3p)+array_sum($EUIE3p)+array_sum($VAMA3p)+array_sum($VGLA3p)+array_sum($VIAS3p)+array_sum($VIAU3p)+array_sum($VLIT3p)+array_sum($VRDW3p)+array_sum($VRES3p)+array_sum($VUIE3))-(array_sum($NGLA3p)+array_sum($NUII3p)+array_sum($NRES3p)+array_sum($NLIT3p)+array_sum($NUIE3p)+array_sum($NAMA3p));
                                if(array_sum($totalSTSI0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($totalSTSI0p)).'</td><td></td>';}

                                if(array_sum($totalSTSI1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($totalSTSI1p)).'</td>';}

                                if(array_sum($totalSTSI2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($totalSTSI2p)).'</td>';}

                                if(array_sum($totalSTSI3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($totalSTSI3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <th></br></th>
                        </tr>
                        <tr>
                            <td class="bgCyan"><strong>Total Special Items</strong></td>
                            <?php 
                                if(array_sum($STSI0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($STSI0p)).'</td><td></td>';}

                                if(array_sum($STSI1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($STSI1p)).'</td>';}

                                if(array_sum($STSI2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($STSI2p)).'</td>';}

                                if(array_sum($STSI3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($STSI3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Total Special Items - Adding up</strong></td>
                            <?php
                                $STSIsump=array_sum($STSI3p)+array_sum($STSI2p);
                                if(array_sum($STSI0p)==$STSIsump)
                                {echo '<td class="bgYellow center">'.$true.'</td>';} 
                                elseif(array_sum($STSI0p)!=$STSIsump)
                                {echo '<td class="bgRed center">'.$false.'</td>';}   
                            
                                $STSIAddingUp1p = array_sum($STSI0p) - (array_sum($STSI3p) + array_sum($STSI2p));
                                    if($STSIAddingUp1p==0)
                                    {echo '<td class="bgYellow center">'.$blank.'</td>';} 
                                    else
                                    {echo '<td class="bgYellow right">'.number_format($STSIAddingUp1p).'</td>';}

                                if(array_sum($STSI1p)==$STSIsump)
                                {echo '<td class="bgGreen center">'.$true.'</td>';} 
                                elseif(array_sum($STSI1p)!=$STSIsump)
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                                   
                            
                                $STSIAddingUp2p = array_sum($STSI1p) - (array_sum($STSI3p) + array_sum($STSI2p));
                                    if($STSIAddingUp2p==0)
                                    {echo '<td class="bgGreen center">'.$blank.'</td>';} 
                                    else
                                    {echo '<td class="bgGreen right">'.number_format($STSIAddingUp2p).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <th></br></th>
                        </tr>
                    <!-------------------------------------STSI BREAKDOWN END----------------------------------------------->

                    <!-------------------------------------NEGATIVE VALUES INC START---------------------------------------->
                        <tr>
                            <th style="font-size:15px;color:#ff0000;"><strong>NEGATIVE VALUES</strong><br></th>
                        </tr>
                        <tr>
                            <td><strong>Cost of Revenue</strong></td>
                            <?php 
                                if(array_sum($ECOR0p) < 0)
                                {echo '<td>'.number_format(array_sum($ECOR0p)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($ECOR1p) < 0)
                                {echo '<td>'.number_format(array_sum($ECOR1p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($ECOR2p) < 0)
                                {echo '<td>'.number_format(array_sum($ECOR2p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($ECOR3p) < 0)
                                {echo '<td>'.number_format(array_sum($ECOR3p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                            </tr>
                        <tr>
                            <td><strong>Selling/General/Administrative Expense</strong></td>
                            <?php 
                                if(array_sum($ESGA0p) < 0)
                                {echo '<td>'.number_format(array_sum($ESGA0p)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($ESGA1p) < 0)
                                {echo '<td>'.number_format(array_sum($ESGA1p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($ESGA2p) < 0)
                                {echo '<td>'.number_format(array_sum($ESGA2p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($ESGA3p) < 0)
                                {echo '<td>'.number_format(array_sum($ESGA3p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Depreciation</strong></td>
                            <?php 
                                if(array_sum($EDEP0p) < 0)
                                {echo '<td>'.number_format(array_sum($EDEP0p)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($EDEP1p) < 0)
                                {echo '<td>'.number_format(array_sum($EDEP1p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($EDEP2p) < 0)
                                {echo '<td>'.number_format(array_sum($EDEP2p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($EDEP3p) < 0)
                                {echo '<td>'.number_format(array_sum($EDEP3p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Amortisation</strong></td>
                            <?php 
                                if(array_sum($EAMI0p) < 0)
                                {echo '<td>'.number_format(array_sum($EAMI0p)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($EAMI1p) < 0)
                                {echo '<td>'.number_format(array_sum($EAMI1p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($EAMI2p) < 0)
                                {echo '<td>'.number_format(array_sum($EAMI2p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($EAMI3p) < 0)
                                {echo '<td>'.number_format(array_sum($EAMI3p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Rental Expense, Suplemental </strong></td>
                            <?php 
                                if(array_sum($VRXP0p) < 0)
                                {echo '<td>'.number_format(array_sum($VRXP0p)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($VRXP1p) < 0)
                                {echo '<td>'.number_format(array_sum($VRXP1p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($VRXP2p) < 0)
                                {echo '<td>'.number_format(array_sum($VRXP2p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($VRXP3p) < 0)
                                {echo '<td>'.number_format(array_sum($VRXP3p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Interest Income - Operating </strong></td>
                            <?php 
                                if(array_sum($EIIN0p) > 0)
                                {echo '<td>'.number_format(array_sum($EIIN0p)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($EIIN1p) > 0)
                                {echo '<td>'.number_format(array_sum($EIIN1p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($EIIN2p) > 0)
                                {echo '<td>'.number_format(array_sum($EIIN2p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($EIIN3p) > 0)
                                {echo '<td>'.number_format(array_sum($EIIN3p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Interest Expense - Operating </strong></td>
                            <?php 
                                if(array_sum($EIEX0p) < 0)
                                {echo '<td>'.number_format(array_sum($EIEX0p)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($EIEX1p) < 0)
                                {echo '<td>'.number_format(array_sum($EIEX1p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($EIEX2p) < 0)
                                {echo '<td>'.number_format(array_sum($EIEX2p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($EIEX3p) < 0)
                                {echo '<td>'.number_format(array_sum($EIEX3p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Interest Income - Non-Operating </strong></td>
                            <?php 
                                if(array_sum($NIIN0p) < 0)
                                {echo '<td>'.number_format(array_sum($NIIN0p)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($NIIN1p) < 0)
                                {echo '<td>'.number_format(array_sum($NIIN1p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($NIIN2p) < 0)
                                {echo '<td>'.number_format(array_sum($NIIN2p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($NIIN3p) < 0)
                                {echo '<td>'.number_format(array_sum($NIIN3p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Interest Expense - Non-Operating </strong></td>
                            <?php 
                                if(array_sum($NIEN0p) > 0)
                                {echo '<td>'.number_format(array_sum($NIEN0p)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($NIEN1p) > 0)
                                {echo '<td>'.number_format(array_sum($NIEN1p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($NIEN2p) > 0)
                                {echo '<td>'.number_format(array_sum($NIEN2p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($NIEN3p) > 0)
                                {echo '<td>'.number_format(array_sum($NIEN3p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Interest Expense, Suplemental </strong></td>
                            <?php 
                                if(array_sum($VIEX0p) < 0)
                                {echo '<td>'.number_format(array_sum($VIEX0p)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($VIEX1p) < 0)
                                {echo '<td>'.number_format(array_sum($VIEX1p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($VIEX2p) < 0)
                                {echo '<td>'.number_format(array_sum($VIEX2p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($VIEX3p) < 0)
                                {echo '<td>'.number_format(array_sum($VIEX3p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Interest Capitalized, Suplemental </strong></td>
                            <?php 
                                if(array_sum($VCAP0p) > 0)
                                {echo '<td>'.number_format(array_sum($VCAP0p)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($VCAP1p) > 0)
                                {echo '<td>'.number_format(array_sum($VCAP1p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($VCAP2p) > 0)
                                {echo '<td>'.number_format(array_sum($VCAP2p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($VCAP3p) > 0)
                                {echo '<td>'.number_format(array_sum($VCAP3p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Impairment(description≠"*rever*,*back*,*net*")</strong></td>
                            <?php 
                                if(array_sum($VIAU0p) < 0)
                                {echo '<td>'.number_format(array_sum($VIAU0p)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($VIAU1p) < 0)
                                {echo '<td>'.number_format(array_sum($VIAU1p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($VIAU2p) < 0)
                                {echo '<td>'.number_format(array_sum($VIAU2p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($VIAU3p) < 0)
                                {echo '<td>'.number_format(array_sum($VIAU3p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <th></br></th>
                        </tr>
                    <!-------------------------------------NEGATIVE VALUES INC END------------------------------------------>
<!---------------INCOME STATEMENT END------------------------------------------------------------------------------------------->

<!---------------BALANCE SHEET START------------------------------------------------------------------------------------------->
                        <tr>
                            <th style="font-size:15px;"><strong>BALANCE SHEET</strong></th>
                        </tr>
                        <tr>
                            <td><strong>Statement Date</strong></td>
                            <?php echo '<td class="bgGray">'.$StatementDate0BALp.'</td>
                            <td class="bgGray"></td>
                            <td class="bgGray">'.$StatementDate1BALp.'</td>
                            <td class="bgGray">'.$StatementDate2BALp.'</td>
                            <td class="bgGray">'.$StatementDate3BALp.'</td>' ?>
                        </tr>
                        <tr>
                            <td><strong>Submission Type</strong><br></td>
                            <?php echo '<td class="bgGray">'.$SubmissionType0BALp.'</td>
                            <td class="bgGray"></td>
                            <td class="bgGray">'.$SubmissionType1BALp.'</td>
                            <td class="bgGray">'.$SubmissionType2BALp.'</td>
                            <td class="bgGray">'.$SubmissionType3BALp.'</td>' ?>
                        </tr>
                        <tr>
                            <td><strong>Update Type</strong></td>
                            <?php echo '<td class="bgGray">'.$UpdateType0BALp.'</td>
                            <td class="bgGray"></td>
                            <td class="bgGray">'.$UpdateType1BALp.'</td>
                            <td class="bgGray">'.$UpdateType2BALp.'</td>
                            <td class="bgGray">'.$UpdateType3BALp.'</td>' ?>
                        </tr>
                        <tr>
                            <td><strong>Task</strong></td>
                            <?php echo '<td class="bgGray">'.$HelperInconsistentFPDFlag0BALp.'</td>
                            <td class="bgGray"></td>
                            <td class="bgGray">'.$HelperInconsistentFPDFlag1BALp.'</td>
                            <td class="bgGray">'.$HelperInconsistentFPDFlag2BALp.'</td>
                            <td class="bgGray">'.$HelperInconsistentFPDFlag3BALp.'</td>' ?>
                        </tr>
                        <tr>
                            <th><br></th>
                        </tr>
                        <tr>
                            <td class="bgCyan">Cash & Equivalents</td>
                            <?php 
                                if(array_sum($ACAE0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($ACAE0p)).'</td><td></td>';}

                                if(array_sum($ACAE1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ACAE1p)).'</td>';}

                                if(array_sum($ACAE2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ACAE2p)).'</td>';}

                                if(array_sum($ACAE3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($ACAE3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Short Term Investments</td>
                            <?php 
                                if(array_sum($ASTI0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($ASTI0p)).'</td><td></td>';}

                                if(array_sum($ASTI1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ASTI1p)).'</td>';}

                                if(array_sum($ASTI2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ASTI2p)).'</td>';}

                                if(array_sum($ASTI3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($ASTI3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Accounts Receivable - Trade, Net</td>
                            <?php 
                                if(array_sum($AACR0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($AACR0p)).'</td><td></td>';}

                                if(array_sum($AACR1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($AACR1p)).'</td>';}

                                if(array_sum($AACR2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($AACR2p)).'</td>';}

                                if(array_sum($AACR3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($AACR3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Notes Receivable - Short Term</td>
                            <?php 
                                if(array_sum($ASTR0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($ASTR0p)).'</td><td></td>';}

                                if(array_sum($ASTR1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ASTR1p)).'</td>';}

                                if(array_sum($ASTR2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ASTR2p)).'</td>';}

                                if(array_sum($ASTR3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($ASTR3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Total Assets</strong></td>
                            <?php 
                                if(array_sum($ATOT0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($ATOT0p)).'</td><td></td>';}

                                if(array_sum($ATOT1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ATOT1p)).'</td>';}

                                if(array_sum($ATOT2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ATOT2p)).'</td>';}

                                if(array_sum($ATOT3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($ATOT3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Accounts Payable</td>
                            <?php 
                                if(array_sum($LAPB0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($LAPB0p)).'</td><td></td>';}

                                if(array_sum($LAPB1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($LAPB1p)).'</td>';}

                                if(array_sum($LAPB2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($LAPB2p)).'</td>';}

                                if(array_sum($LAPB3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($LAPB3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Notes Payable/Short Term Debt</td>
                            <?php 
                                if(array_sum($LSTD0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($LSTD0p)).'</td><td></td>';}

                                if(array_sum($LSTD1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($LSTD1p)).'</td>';}

                                if(array_sum($LSTD2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($LSTD2p)).'</td>';}

                                if(array_sum($LSTD3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($LSTD3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Current Portion of LT Debt/Capital Leases</td>
                            <?php 
                                if(array_sum($LCLD0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($LCLD0p)).'</td><td></td>';}

                                if(array_sum($LCLD1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($LCLD1p)).'</td>';}

                                if(array_sum($LCLD2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($LCLD2p)).'</td>';}

                                if(array_sum($LCLD3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($LCLD3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Long Term Debt</td>
                            <?php 
                                if(array_sum($LLTD0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($LLTD0p)).'</td><td></td>';}

                                if(array_sum($LLTD1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($LLTD1p)).'</td>';}

                                if(array_sum($LLTD2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($LLTD2p)).'</td>';}

                                if(array_sum($LLTD3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($LLTD3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Capital Lease Obligations</td>
                            <?php 
                                if(array_sum($LCLO0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($LCLO0p)).'</td><td></td>';}

                                if(array_sum($LCLO1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($LCLO1p)).'</td>';}

                                if(array_sum($LCLO2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($LCLO2p)).'</td>';}

                                if(array_sum($LCLO3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($LCLO3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Total Liabilities </strong></td>
                            <?php 
                                if(array_sum($LTLL0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($LTLL0p)).'</td><td></td>';}

                                if(array_sum($LTLL1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($LTLL1p)).'</td>';}

                                if(array_sum($LTLL2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($LTLL2p)).'</td>';}

                                if(array_sum($LTLL3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($LTLL3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Minority Interest</strong></td>
                            <?php 
                                if(array_sum($LMNR0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($LMNR0p)).'</td><td></td>';}

                                if(array_sum($LMNR1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($LMNR1p)).'</td>';}

                                if(array_sum($LMNR2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($LMNR2p)).'</td>';}

                                if(array_sum($LMNR3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($LMNR3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Total Equity</strong></td>
                            <?php 
                                if(array_sum($QTLE0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($QTLE0p)).'</td><td></td>';}

                                if(array_sum($QTLE1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($QTLE1p)).'</td>';}

                                if(array_sum($QTLE2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($QTLE2p)).'</td>';}

                                if(array_sum($QTLE3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($QTLE3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Total Liabilities & Shareholders' Equity </strong></td>
                            <?php 
                                if(array_sum($QTEL0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($QTEL0p)).'</td><td></td>';}

                                if(array_sum($QTEL1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($QTEL1p)).'</td>';}

                                if(array_sum($QTEL2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($QTEL2p)).'</td>';}

                                if(array_sum($QTEL3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($QTEL3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Shares Outstanding  - Common Stock Primary Issue </strong></td>
                            <?php 
                                if(array_sum($QCSO10p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($QCSO10p)).'</td><td></td>';}

                                if(array_sum($QCSO11p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($QCSO11p)).'</td>';}

                                if(array_sum($QCSO12p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($QCSO12p)).'</td>';}

                                if(array_sum($QCSO13p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($QCSO13p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Shares Outstanding - Common Issue 2 </strong></td>
                            <?php 
                                if(array_sum($QCSO20p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($QCSO20p)).'</td><td></td>';}

                                if(array_sum($QCSO21p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($QCSO21p)).'</td>';}

                                if(array_sum($QCSO22p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($QCSO22p)).'</td>';}

                                if(array_sum($QCSO23p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($QCSO23p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Treasury Shares - Common Stock Primary Issue </strong></td>
                            <?php 
                                if(array_sum($QTSN10p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($QTSN10p)).'</td><td></td>';}

                                if(array_sum($QTSN11p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($QTSN11p)).'</td>';}

                                if(array_sum($QTSN12p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($QTSN12p)).'</td>';}

                                if(array_sum($QTSN13p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($QTSN13p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Treasury Shares - Common Issue 2 </strong></td>
                            <?php 
                                if(array_sum($QTSN20p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($QTSN20p)).'</td><td></td>';}

                                if(array_sum($QTSN21p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($QTSN21p)).'</td>';}

                                if(array_sum($QTSN22p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($QTSN22p)).'</td>';}

                                if(array_sum($QTSN23p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($QTSN23p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Total Common Shares Outstanding </strong></td>
                            <?php 
                                if(array_sum($QTCO0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($QTCO0p)).'</td><td></td>';}

                                if(array_sum($QTCO1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($QTCO1p)).'</td>';}

                                if(array_sum($QTCO2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($QTCO2p)).'</td>';}

                                if(array_sum($QTCO3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($QTCO3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Total Funded Status </strong></td>
                            <?php 
                                if(array_sum($VFSS0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($VFSS0p)).'</td><td></td>';}

                                if(array_sum($VFSS1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VFSS1p)).'</td>';}

                                if(array_sum($VFSS2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VFSS2p)).'</td>';}

                                if(array_sum($VFSS3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($VFSS3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Employees </strong></td>
                            <?php 
                                if(array_sum($METL0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($METL0p)).'</td><td></td>';}

                                if(array_sum($METL1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($METL1p)).'</td>';}

                                if(array_sum($METL2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($METL2p)).'</td>';}

                                if(array_sum($METL3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($METL3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Number of Common Shareholders </strong></td>
                            <?php 
                                if(array_sum($MNOS0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($MNOS0p)).'</td><td></td>';}

                                if(array_sum($MNOS1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($MNOS1p)).'</td>';}

                                if(array_sum($MNOS2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($MNOS2p)).'</td>';}

                                if(array_sum($MNOS3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($MNOS3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Non-Performing Loans </strong></td>
                            <?php 
                                if(array_sum($VRUQ0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($VRUQ0p)).'</td><td></td>';}

                                if(array_sum($VRUQ1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VRUQ1p)).'</td>';}

                                if(array_sum($VRUQ2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($VRUQ2p)).'</td>';}

                                if(array_sum($VRUQ3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($VRUQ3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <th><br></th>
                        </tr>
                    <!-------------------------------------NEGATIVE VALUES BAL START-------------------------------------------->
                        <tr>
                            <th style="font-size:15px;color:#ff0000;"><strong>NEGATIVE VALUES</strong><br></th>
                        </tr>
                        <tr>
                            <td><strong>Provision for Doubtful Accounts</strong></td>
                            <?php 
                                if(array_sum($APDA0p) > 0)
                                {echo '<td>'.number_format(array_sum($APDA0p)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($APDA1p) > 0)
                                {echo '<td>'.number_format(array_sum($APDA1p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($APDA2p) > 0)
                                {echo '<td>'.number_format(array_sum($APDA2p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($APDA3p) > 0)
                                {echo '<td>'.number_format(array_sum($APDA3p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Accumulated Depreciation</strong></td>
                            <?php 
                                if(array_sum($ADEP0p) > 0)
                                {echo '<td>'.number_format(array_sum($ADEP0p)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($ADEP1p) > 0)
                                {echo '<td>'.number_format(array_sum($ADEP1p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($ADEP2p) > 0)
                                {echo '<td>'.number_format(array_sum($ADEP2p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($ADEP3p) > 0)
                                {echo '<td>'.number_format(array_sum($ADEP3p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Accumulated Intangible Amortization</strong></td>
                            <?php 
                                if(array_sum($AAMT0p) > 0)
                                {echo '<td>'.number_format(array_sum($AAMT0p)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($AAMT1p) > 0)
                                {echo '<td>'.number_format(array_sum($AAMT1p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($AAMT2p) > 0)
                                {echo '<td>'.number_format(array_sum($AAMT2p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($AAMT3p) > 0)
                                {echo '<td>'.number_format(array_sum($AAMT3p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Long Term Debt</strong></td>
                            <?php 
                                if(array_sum($LLTD0p) < 0)
                                {echo '<td>'.number_format(array_sum($LLTD0p)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($LLTD1p) < 0)
                                {echo '<td>'.number_format(array_sum($LLTD1p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($LLTD2p) < 0)
                                {echo '<td>'.number_format(array_sum($LLTD2p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($LLTD3p) < 0)
                                {echo '<td>'.number_format(array_sum($LLTD3p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Capital Lease Obligations </strong></td>
                            <?php 
                                if(array_sum($LCLO0p) < 0)
                                {echo '<td>'.number_format(array_sum($LCLO0p)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($LCLO1p) < 0)
                                {echo '<td>'.number_format(array_sum($LCLO1p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($LCLO2p) < 0)
                                {echo '<td>'.number_format(array_sum($LCLO2p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($LCLO3p) < 0)
                                {echo '<td>'.number_format(array_sum($LCLO3p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                    <!-------------------------------------NEGATIVE VALUES BAL END-------------------------------------------->
                        <tr>
                            <th></br></th>
                        </tr>
<!---------------BALANCE SHEET END------------------------------------------------------------------------------------>

<!---------------CASH FLOW STATEMENT START------------------------------------------------------------------>
                        <tr>
                            <th style="font-size:15px;"><strong>CASH FLOW STATEMENT</strong></th>
                        </tr>
                        <tr>
                            <td><strong>Statement Date</strong></td>
                            <?php echo '<td class="bgGray">'.$StatementDate0CASp.'</td>
                            <td class="bgGray"></td>
                            <td class="bgGray">'.$StatementDate1CASp.'</td>
                            <td class="bgGray">'.$StatementDate2CASp.'</td>
                            <td class="bgGray">'.$StatementDate3CASp.'</td>' ?>
                        </tr>
                        <tr>
                            <td><strong>Submission Type</strong></td>
                            <?php echo '<td class="bgGray">'.$SubmissionType0CASp.'</td>
                            <td class="bgGray"></td>
                            <td class="bgGray">'.$SubmissionType1CASp.'</td>
                            <td class="bgGray">'.$SubmissionType2CASp.'</td>
                            <td class="bgGray">'.$SubmissionType3CASp.'</td>' ?>
                        </tr>
                        <tr>
                            <td><strong>Update Type</strong></td>
                            <?php echo '<td class="bgGray">'.$UpdateType0CASp.'</td>
                            <td class="bgGray"></td>
                            <td class="bgGray">'.$UpdateType1CASp.'</td>
                            <td class="bgGray">'.$UpdateType2CASp.'</td>
                            <td class="bgGray">'.$UpdateType3CASp.'</td>' ?>
                        </tr>
                        <tr>
                            <td><strong>Task</strong></td>
                            <?php echo '<td class="bgGray">'.$HelperInconsistentFPDFlag0CASp.'</td>
                            <td class="bgGray"></td>
                            <td class="bgGray">'.$HelperInconsistentFPDFlag1CASp.'</td>
                            <td class="bgGray">'.$HelperInconsistentFPDFlag2CASp.'</td>
                            <td class="bgGray">'.$HelperInconsistentFPDFlag3CASp.'</td>' ?>
                        </tr>
                        <tr>
                            <th><br></th>
                        </tr>
                        <tr>
                            <td><strong>Depreciation</strong><br></td>
                            <?php 
                                if(array_sum($SDEP0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($SDEP0p)).'</td><td></td>';}

                                if(array_sum($SDEP1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($SDEP1p)).'</td>';}

                                if(array_sum($SDEP2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($SDEP2p)).'</td>';}

                                if(array_sum($SDEP3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($SDEP3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Amortization</strong><br></td>
                            <?php 
                                if(array_sum($OAMI0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($OAMI0p)).'</td><td></td>';}

                                if(array_sum($OAMI1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($OAMI1p)).'</td>';}

                                if(array_sum($OAMI2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($OAMI2p)).'</td>';}

                                if(array_sum($OAMI3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($OAMI3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Cash from Operating Activities </strong><br></td>
                            <?php 
                                if(array_sum($OTLO0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($OTLO0p)).'</td><td></td>';}

                                if(array_sum($OTLO1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($OTLO1p)).'</td>';}

                                if(array_sum($OTLO2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($OTLO2p)).'</td>';}

                                if(array_sum($OTLO3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($OTLO3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Acquisition of Business<br></td>
                            <?php 
                                if(array_sum($IBAQ0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($IBAQ0p)).'</td><td></td>';}

                                if(array_sum($IBAQ1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($IBAQ1p)).'</td>';}

                                if(array_sum($IBAQ2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($IBAQ2p)).'</td>';}

                                if(array_sum($IBAQ3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($IBAQ3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Purchase of Fixed Assets<br></td>
                            <?php 
                                if(array_sum($ICEX0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($ICEX0p)).'</td><td></td>';}

                                if(array_sum($ICEX1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ICEX1p)).'</td>';}

                                if(array_sum($ICEX2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ICEX2p)).'</td>';}

                                if(array_sum($ICEX3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($ICEX3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Cash from Investing Activities </strong><br></td>
                            <?php 
                                if(array_sum($ITLI0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($ITLI0p)).'</td><td></td>';}

                                if(array_sum($ITLI1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ITLI1p)).'</td>';}

                                if(array_sum($ITLI2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ITLI2p)).'</td>';}

                                if(array_sum($ITLI3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($ITLI3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Long Term Debt, Net<br></td>
                            <?php 
                                if(array_sum($FLDN0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($FLDN0p)).'</td><td></td>';}

                                if(array_sum($FLDN1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($FLDN1p)).'</td>';}

                                if(array_sum($FLDN2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($FLDN2p)).'</td>';}

                                if(array_sum($FLDN3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($FLDN3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Short Term Debt, Net<br></td>
                            <?php 
                                if(array_sum($FSDN0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($FSDN0p)).'</td><td></td>';}

                                if(array_sum($FSDN1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($FSDN1p)).'</td>';}

                                if(array_sum($FSDN2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($FSDN2p)).'</td>';}

                                if(array_sum($FSDN3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($FSDN3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Long Term Debt Issued<br></td>
                            <?php 
                                if(array_sum($FLDI0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($FLDI0p)).'</td><td></td>';}

                                if(array_sum($FLDI1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($FLDI1p)).'</td>';}

                                if(array_sum($FLDI2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($FLDI2p)).'</td>';}

                                if(array_sum($FLDI3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($FLDI3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Short Term Debt Issued<br></td>
                            <?php 
                                if(array_sum($FSDI0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($FSDI0p)).'</td><td></td>';}

                                if(array_sum($FSDI1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($FSDI1p)).'</td>';}

                                if(array_sum($FSDI2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($FSDI2p)).'</td>';}

                                if(array_sum($FSDI3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($FSDI3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Long Term Debt Reduction<br></td>
                            <?php 
                                if(array_sum($FLDR0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($FLDR0p)).'</td><td></td>';}

                                if(array_sum($FLDR1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($FLDR1p)).'</td>';}

                                if(array_sum($FLDR2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($FLDR2p)).'</td>';}

                                if(array_sum($FLDR3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($FLDR3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Short Term Debt Reduction<br></td>
                            <?php 
                                if(array_sum($FSDR0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($FSDR0p)).'</td><td></td>';}

                                if(array_sum($FSDR1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($FSDR1p)).'</td>';}

                                if(array_sum($FSDR2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($FSDR2p)).'</td>';}

                                if(array_sum($FSDR3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($FSDR3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Cash from Financing Activities </strong><br></td>
                            <?php 
                                if(array_sum($FTLF0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($FTLF0p)).'</td><td></td>';}

                                if(array_sum($FTLF1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($FTLF1p)).'</td>';}

                                if(array_sum($FTLF2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($FTLF2p)).'</td>';}

                                if(array_sum($FTLF3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($FTLF3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Foreign Exchange Effects</strong><br></td>
                            <?php 
                                if(array_sum($SFEE0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($SFEE0p)).'</td><td></td>';}

                                if(array_sum($SFEE1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($SFEE1p)).'</td>';}

                                if(array_sum($SFEE2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($SFEE2p)).'</td>';}

                                if(array_sum($SFEE3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($SFEE3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Net Change in Cash</strong><br></td>
                            <?php 
                                if(array_sum($SNCC0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($SNCC0p)).'</td><td></td>';}

                                if(array_sum($SNCC1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($SNCC1p)).'</td>';}

                                if(array_sum($SNCC2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($SNCC2p)).'</td>';}

                                if(array_sum($SNCC3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($SNCC3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Net Cash - Beginning Balance </strong><br></td>
                            <?php 
                                if(array_sum($SNCB0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($SNCB0p)).'</td><td></td>';}

                                if(array_sum($SNCB1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($SNCB1p)).'</td>';}

                                if(array_sum($SNCB2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($SNCB2p)).'</td>';}

                                if(array_sum($SNCB3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($SNCB3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Net Cash - Ending Balance </strong><br></td>
                            <?php 
                                if(array_sum($SNCE0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($SNCE0p)).'</td><td></td>';}

                                if(array_sum($SNCE1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($SNCE1p)).'</td>';}

                                if(array_sum($SNCE2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($SNCE2p)).'</td>';}

                                if(array_sum($SNCE3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($SNCE3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Cash Interest Paid </strong><br></td>
                            <?php 
                                if(array_sum($SCIP0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($SCIP0p)).'</td><td></td>';}

                                if(array_sum($SCIP1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($SCIP1p)).'</td>';}

                                if(array_sum($SCIP2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($SCIP2p)).'</td>';}

                                if(array_sum($SCIP3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($SCIP3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Cash Taxes Paid </strong><br></td>
                            <?php 
                                if(array_sum($SCTP0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($SCTP0p)).'</td><td></td>';}

                                if(array_sum($SCTP1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($SCTP1p)).'</td>';}

                                if(array_sum($SCTP2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($SCTP2p)).'</td>';}

                                if(array_sum($SCTP3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($SCTP3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>SNCC ≠ (OTLO+ITLI+FTLF+SFEE)</strong><br></td>
                            <?php
                                if($SNCC0p==0 || $StatementDate0CASp==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                    $SNCCsump = array_sum($OTLO0p) + array_sum($ITLI0p) + array_sum($FTLF0p) + array_sum($SFEE0p);
                                    $SNCCdiffp = array_sum($SNCC0p) - (array_sum($OTLO0p) + array_sum($ITLI0p) + array_sum($FTLF0p) + array_sum($SFEE0p));
                                    if(array_sum($SNCC0p)==$SNCCsump)
                                    {echo '<td class="bgYellow center">'.$true.'</td><td></td>'; }
                                    else
                                    {echo '<td class="bgRed right">'.number_format($SNCCdiffp).'</td><td></td>';}        
                                }

                                if($SNCC1p==0 || $StatementDate1CASp==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $SNCCsump = array_sum($OTLO1p) + array_sum($ITLI1p) + array_sum($FTLF1p) + array_sum($SFEE1p);
                                    $SNCCdiffp = array_sum($SNCC1p) - (array_sum($OTLO1p) + array_sum($ITLI1p) + array_sum($FTLF1p) + array_sum($SFEE1p));
                                    if(array_sum($SNCC1p)==$SNCCsump)
                                    {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                    else
                                    {echo '<td class="bgRed right">'.number_format($SNCCdiffp).'</td>';}        
                                }

                                if($SNCC2p==0 || $StatementDate2CASp==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $SNCCsump = array_sum($OTLO2p) + array_sum($ITLI2p) + array_sum($FTLF2p) + array_sum($SFEE2p);
                                    $SNCCdiffp = array_sum($SNCC2p) - (array_sum($OTLO2p) + array_sum($ITLI2p) + array_sum($FTLF2p) + array_sum($SFEE2p));
                                    if(array_sum($SNCC2p)==$SNCCsump)
                                    {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                    else
                                    {echo '<td class="bgRed right">'.number_format($SNCCdiffp).'</td>';}        
                                }

                                if($SNCC3p==0 || $StatementDate3CASp==NULL)
                                {echo '<td class="center">'.$blank.'</td>'; }
                                else
                                {
                                    $SNCCsump = array_sum($OTLO3p) + array_sum($ITLI3p) + array_sum($FTLF3p) + array_sum($SFEE3p);
                                    $SNCCdiffp = array_sum($SNCC3p) - (array_sum($OTLO3p) + array_sum($ITLI3p) + array_sum($FTLF3p) + array_sum($SFEE3p));
                                    if(array_sum($SNCC3p)==$SNCCsump)
                                    {echo '<td class="center">'.$true.'</td>'; }
                                    else
                                    {echo '<td class="bgRed right">'.number_format($SNCCdiffp).'</td>';}        
                                }
                            ?>
                        </tr>
                        
                        <tr>
                            <th><br></th>
                        </tr>
                    <!-------------------------------------NEGATIVE VALUES CAS START---------------------------->
                        <tr>
                            <th style="font-size:15px;color:#ff0000;"><strong>NEGATIVE VALUES</strong><br></th>
                        </tr>
                        <tr>
                            <td><strong>Sale/Maturity of Investment</strong></td>
                            <?php 
                                if(array_sum($IINS0p) < 0)
                                {echo '<td>'.number_format(array_sum($IINS0p)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($IINS1p) < 0)
                                {echo '<td>'.number_format(array_sum($IINS1p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($IINS2p) < 0)
                                {echo '<td>'.number_format(array_sum($IINS2p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($IINS3p) < 0)
                                {echo '<td>'.number_format(array_sum($IINS3p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Purchase of Investments </strong></td>
                            <?php 
                                if(array_sum($IINP0p) > 0)
                                {echo '<td>'.number_format(array_sum($IINP0p)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($IINP1p) > 0)
                                {echo '<td>'.number_format(array_sum($IINP1p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($IINP2p) > 0)
                                {echo '<td>'.number_format(array_sum($IINP2p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($IINP3p) > 0)
                                {echo '<td>'.number_format(array_sum($IINP3p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Sale of Fixed Assets</strong></td>
                            <?php 
                                if(array_sum($ISFA0p) < 0)
                                {echo '<td>'.number_format(array_sum($ISFA0p)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($ISFA1p) < 0)
                                {echo '<td>'.number_format(array_sum($ISFA1p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($ISFA2p) < 0)
                                {echo '<td>'.number_format(array_sum($ISFA2p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($ISFA3p) < 0)
                                {echo '<td>'.number_format(array_sum($ISFA3p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Purchase of Fixed Assets</strong></td>
                            <?php 
                                if(array_sum($ICEX0p) > 0)
                                {echo '<td>'.number_format(array_sum($ICEX0p)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($ICEX1p) > 0)
                                {echo '<td>'.number_format(array_sum($ICEX1p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($ICEX2p) > 0)
                                {echo '<td>'.number_format(array_sum($ICEX2p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($ICEX3p) > 0)
                                {echo '<td>'.number_format(array_sum($ICEX3p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Sale of Intangible Assets </strong></td>
                            <?php 
                                if(array_sum($ISOI0p) < 0)
                                {echo '<td>'.number_format(array_sum($ISOI0p)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($ISOI1p) < 0)
                                {echo '<td>'.number_format(array_sum($ISOI1p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($ISOI2p) < 0)
                                {echo '<td>'.number_format(array_sum($ISOI2p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($ISOI3p) < 0)
                                {echo '<td>'.number_format(array_sum($ISOI3p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Purchase/Acquisition of Intangibles</strong></td>
                            <?php 
                                if(array_sum($IIAQ0p) > 0)
                                {echo '<td>'.number_format(array_sum($IIAQ0p)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($IIAQ1p) > 0)
                                {echo '<td>'.number_format(array_sum($IIAQ1p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($IIAQ2p) > 0)
                                {echo '<td>'.number_format(array_sum($IIAQ2p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($IIAQ3p) > 0)
                                {echo '<td>'.number_format(array_sum($IIAQ3p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Sale of Business</strong></td>
                            <?php 
                                if(array_sum($ISOB0p) < 0)
                                {echo '<td>'.number_format(array_sum($ISOB0p)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($ISOB1p) < 0)
                                {echo '<td>'.number_format(array_sum($ISOB1p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($ISOB2p) < 0)
                                {echo '<td>'.number_format(array_sum($ISOB2p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($ISOB3p) < 0)
                                {echo '<td>'.number_format(array_sum($ISOB3p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Acquisition of Business</strong></td>
                            <?php 
                                if(array_sum($IBAQ0p) > 0)
                                {echo '<td>'.number_format(array_sum($IBAQ0p)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($IBAQ1p) > 0)
                                {echo '<td>'.number_format(array_sum($IBAQ1p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($IBAQ2p) > 0)
                                {echo '<td>'.number_format(array_sum($IBAQ2p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($IBAQ3p) > 0)
                                {echo '<td>'.number_format(array_sum($IBAQ3p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Sale/Issuance of Common </strong></td>
                            <?php 
                                if(array_sum($FSIC0p) < 0)
                                {echo '<td>'.number_format(array_sum($FSIC0p)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($FSIC1p) < 0)
                                {echo '<td>'.number_format(array_sum($FSIC1p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($FSIC2p) < 0)
                                {echo '<td>'.number_format(array_sum($FSIC2p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($FSIC3p) < 0)
                                {echo '<td>'.number_format(array_sum($FSIC3p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Repurchase/Retirement of Common </strong></td>
                            <?php 
                                if(array_sum($FRRC0p) > 0)
                                {echo '<td>'.number_format(array_sum($FRRC0p)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($FRRC1p) > 0)
                                {echo '<td>'.number_format(array_sum($FRRC1p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($FRRC2p) > 0)
                                {echo '<td>'.number_format(array_sum($FRRC2p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($FRRC3p) > 0)
                                {echo '<td>'.number_format(array_sum($FRRC3p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Sale/Issuance of Preferred</strong></td>
                            <?php 
                                if(array_sum($FSIP0p) < 0)
                                {echo '<td>'.number_format(array_sum($FSIP0p)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($FSIP1p) < 0)
                                {echo '<td>'.number_format(array_sum($FSIP1p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($FSIP2p) < 0)
                                {echo '<td>'.number_format(array_sum($FSIP2p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($FSIP3p) < 0)
                                {echo '<td>'.number_format(array_sum($FSIP3p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Repurchase/Retirement of Preferred</strong></td>
                            <?php 
                                if(array_sum($FRRP0p) > 0)
                                {echo '<td>'.number_format(array_sum($FRRP0p)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($FRRP1p) > 0)
                                {echo '<td>'.number_format(array_sum($FRRP1p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($FRRP2p) > 0)
                                {echo '<td>'.number_format(array_sum($FRRP2p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($FRRP3p) > 0)
                                {echo '<td>'.number_format(array_sum($FRRP3p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Cash Dividends Paid - Common</strong></td>
                            <?php 
                                if(array_sum($FDPC0p) > 0)
                                {echo '<td>'.number_format(array_sum($FDPPC0p)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($FDPC1p) > 0)
                                {echo '<td>'.number_format(array_sum($FDPPC1p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($FDPC2p) > 0)
                                {echo '<td>'.number_format(array_sum($FDPPC2p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($FDPC3p) > 0)
                                {echo '<td>'.number_format(array_sum($FDPPC3p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Cash Dividends Paid - Preferred</strong></td>
                            <?php 
                                if(array_sum($FDPP0p) > 0)
                                {echo '<td>'.number_format(array_sum($FDPP0p)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($FDPP1p) > 0)
                                {echo '<td>'.number_format(array_sum($FDPP1p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($FDPP2p) > 0)
                                {echo '<td>'.number_format(array_sum($FDPP2p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($FDPP3p) > 0)
                                {echo '<td>'.number_format(array_sum($FDPP3p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Repurch./Retirement of Common/Preferred</strong></td>
                            <?php 
                                if(array_sum($FRCP0p) > 0)
                                {echo '<td>'.number_format(array_sum($FRCP0p)).'</td><td></td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td><td></td>';}

                                if(array_sum($FRCP1p) > 0)
                                {echo '<td>'.number_format(array_sum($FRCP1p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($FRCP2p) > 0)
                                {echo '<td>'.number_format(array_sum($FRCP2p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}

                                if(array_sum($FRCP3p) > 0)
                                {echo '<td>'.number_format(array_sum($FRCP3p)).'</td>';}
                                else
                                {echo '<td class="center">'.$blank.'</td>';}
                            ?>
                        </tr>
                    <!-------------------------------------NEGATIVE VALUES CAS END---------------------------------------->

                        <tr>
                            <th></br></th>
                        </tr>
<!---------------CASH FLOW STATEMENT END-----------------------------------------------------------------------------> 

<!---------------BUSINESS SEGMENT START------------------------------------------------------------------------------->
                        <tr>
                            <th style="font-size:15px;"><strong>BUSINESS SEGMENT</strong></th>
                        </tr>
                        <tr>
                            <td><strong>Statement Date</strong></td>
                            <?php echo '<td class="bgGray">'.$StatementDate0BSp.'</td>
                            <td class="bgGray"></td>
                            <td class="bgGray">'.$StatementDate1BSp.'</td>
                            <td class="bgGray">'.$StatementDate2BSp.'</td>
                            <td class="bgGray">'.$StatementDate3BSp.'</td>' ?>
                        </tr>
                        <tr>
                            <td><strong>Submission Type</strong></td>
                            <?php echo '<td class="bgGray">'.$SubmissionType0BSp.'</td>
                            <td class="bgGray"></td>
                            <td class="bgGray">'.$SubmissionType1BSp.'</td>
                            <td class="bgGray">'.$SubmissionType2BSp.'</td>
                            <td class="bgGray">'.$SubmissionType3BSp.'</td>' ?>
                        </tr>
                        <tr>
                            <td><strong>Scaling</strong></td>
                            <?php echo '<td class="bgGray">'.$Scaling0BSp.'</td>
                            <td class="bgGray"></td>
                            <td class="bgGray">'.$Scaling1BSp.'</td>
                            <td class="bgGray">'.$Scaling2BSp.'</td>
                            <td class="bgGray">'.$Scaling3BSp.'</td>' ?>
                        </tr>
                        <tr>
                            <td><strong>Update Type</strong></td>
                            <?php echo '<td class="bgGray">'.$UpdateType0BSp.'</td>
                            <td class="bgGray"></td>
                            <td class="bgGray">'.$UpdateType1BSp.'</td>
                            <td class="bgGray">'.$UpdateType2BSp.'</td>
                            <td class="bgGray">'.$UpdateType3BSp.'</td>' ?>
                        </tr>
                        <tr>
                            <td><strong>Interim Type</strong></td>
                            <?php echo '<td class="bgGray">'.$InterimType0BSp.'</td>
                            <td class="bgGray"></td>
                            <td class="bgGray">'.$InterimType1BSp.'</td>
                            <td class="bgGray">'.$InterimType2BSp.'</td>
                            <td class="bgGray">'.$InterimType3BSp.'</td>' ?>
                        </tr>
                        <tr>
                            <td><strong>Business Segment Period Length</strong></td>
                            <?php echo '<td class="bgGray">'.$DateLength0BSp.'</td>
                            <td class="bgGray"></td>
                            <td class="bgGray">'.$DateLength1BSp.'</td>
                            <td class="bgGray">'.$DateLength2BSp.'</td>
                            <td class="bgGray">'.$DateLength3BSp.'</td>' ?>
                        </tr>
                        <tr>
                            <th><br></th>
                        </tr>
                        <tr>
                            <td><strong>Revenue</strong></td>
                            <?php 
                                if(array_sum($REXRbs0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($REXRbs0p)).'</td><td></td>';}

                                if(array_sum($REXRbs1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($REXRbs1p)).'</td>';}

                                if(array_sum($REXRbs2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($REXRbs2p)).'</td>';}

                                if(array_sum($REXRbs3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($REXRbs3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Intersegment Revenue</strong></td>
                            <?php 
                                if(array_sum($RINRbs0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($RINRbs0p)).'</td><td></td>';}

                                if(array_sum($RINRbs1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($RINRbs1p)).'</td>';}

                                if(array_sum($RINRbs2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($RINRbs2p)).'</td>';}

                                if(array_sum($RINRbs3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($RINRbs3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Income Before Tax </strong></td>
                            <?php 
                                if(array_sum($EIBTbs0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($EIBTbs0p)).'</td><td></td>';}

                                if(array_sum($EIBTbs1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($EIBTbs1p)).'</td>';}

                                if(array_sum($EIBTbs2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($EIBTbs2p)).'</td>';}

                                if(array_sum($EIBTbs3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($EIBTbs3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Income Tax</strong></td>
                            <?php 
                                if(array_sum($TTAXbs0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($TTAXbs0p)).'</td><td></td>';}

                                if(array_sum($TTAXbs1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($TTAXbs1p)).'</td>';}

                                if(array_sum($TTAXbs2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($TTAXbs2p)).'</td>';}

                                if(array_sum($TTAXbs3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($TTAXbs3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Income After Tax </strong></td>
                            <?php 
                                if(array_sum($TIATbs0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($TIATbs0p)).'</td><td></td>';}

                                if(array_sum($TIATbs1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($TIATbs1p)).'</td>';}

                                if(array_sum($TIATbs2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($TIATbs2p)).'</td>';}

                                if(array_sum($TIATbs3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($TIATbs3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Equity in Affiliates</strong></td>
                            <?php 
                                if(array_sum($CEIAbs0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($CEIAbs0p)).'</td><td></td>';}

                                if(array_sum($CEIAbs1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($CEIAbs1p)).'</td>';}

                                if(array_sum($CEIAbs2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($CEIAbs2p)).'</td>';}

                                if(array_sum($CEIAbs3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($CEIAbs3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Other Unusual Expense (Income)</strong></td>
                            <?php 
                                if(array_sum($EUIEbs0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($EUIEbs0p)).'</td><td></td>';}

                                if(array_sum($EUIEbs1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($EUIEbs1p)).'</td>';}

                                if(array_sum($EUIEbs2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($EUIEbs2p)).'</td>';}

                                if(array_sum($EUIEbs3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($EUIEbs3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Total Assets</strong></td>
                            <?php 
                                if(array_sum($ATOTbs0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($ATOTbs0p)).'</td><td></td>';}

                                if(array_sum($ATOTbs1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ATOTbs1p)).'</td>';}

                                if(array_sum($ATOTbs2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ATOTbs2p)).'</td>';}

                                if(array_sum($ATOTbs3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($ATOTbs3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Total Liabilities </strong></td>
                            <?php 
                                if(array_sum($LTLLbs0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($LTLLbs0p)).'</td><td></td>';}

                                if(array_sum($LTLLbs1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($LTLLbs1p)).'</td>';}

                                if(array_sum($LTLLbs2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($LTLLbs2p)).'</td>';}

                                if(array_sum($LTLLbs3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($LTLLbs3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <th><br></th>
                        </tr>
                        <tr>
                            <th style="font-size:15px;color:#ff0000;"><strong>BAL/INC vs SEGMENTS</strong></th>
                        </tr>
                        <tr>
                            <td><strong>Revenue</strong></td>
                            <?php 
                                if($StatementDate0BSp==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                    $REXRdiffBS0p[] = array_sum($RTLR0p) - array_sum($REXRbs0p) - array_sum($RINRbs0p);
                                        if(array_sum($REXRdiffBS0p)==array_sum($RTLR0p) + array_sum($REXRbs0p))
                                        {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }  
                                        else
                                        {
                                            if(array_sum($REXRdiffBS0p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($REXRdiffBS0p)).'</td><td></td>';}   
                                            else
                                            {echo '<td class="bgYellow center">'.$true.'</td><td></td>'; }
                                        }
                                }

                                if($StatementDate1BSp==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $REXRdiffBS1p[] = array_sum($RTLR1p) - array_sum($REXRbs1p) - array_sum($RINRbs1p);
                                        if(array_sum($REXRdiffBS1p)==array_sum($RTLR1p) + array_sum($REXRbs1p))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($REXRdiffBS1p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($REXRdiffBS1p)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate2BSp==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $REXRdiffBS2p[] = array_sum($RTLR2p) - array_sum($REXRbs2p) - array_sum($RINRbs2p);
                                        if(array_sum($REXRdiffBS2p)==array_sum($RTLR2p) + array_sum($REXRbs2p))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($REXRdiffBS2p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($REXRdiffBS2)).'';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate3BSp==NULL)
                                {echo '<td class="center">'.$blank.'</td>'; }
                                else
                                {
                                    $REXRdiffBS3p[] = array_sum($RTLR3p) - array_sum($REXRbs3p) - array_sum($RINRbs3p);
                                        if(array_sum($REXRdiffBS3p)==array_sum($RTLR3p) + array_sum($REXRbs3p))
                                        {echo '<td class="center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($REXRdiffBS3p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($REXRdiffBS3p)).'';}   
                                            else
                                            {echo '<td class="center">'.$true.'</td>'; }
                                        }
                                }
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Intersegment Revenue</strong></td>
                            <?php 
                                if($StatementDate0BSp==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                    if(array_sum($RINRbs0p)==array_sum($RTLR0p) - array_sum($REXRbs0p))
                                    {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }  
                                    else
                                    {
                                        if(array_sum($RINRbs0p)!=0)
                                        {echo '<td class="bgRed right">RINR should be zero</td><td></td>';}   
                                        else
                                        {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                    }
                                }
                                if($StatementDate1BSp==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    if(array_sum($RINRbs1p)==array_sum($RTLR1p) - array_sum($REXRbs1p))
                                    {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                    else
                                    {
                                        if(array_sum($RINRbs1p)!=0)
                                        {echo '<td class="bgRed right">RINR should be zero</td>';}   
                                        else
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                    }
                                }
                                if($StatementDate2BSp==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    if(array_sum($RINRbs2p)==array_sum($RTLR2p) - array_sum($REXRbs2p))
                                    {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                    else
                                    {
                                        if(array_sum($RINRbs2p)!=0)
                                        {echo '<td class="bgRed right">RINR should be zero</td>';}   
                                        else
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                    }
                                }
                                if($StatementDate3BSp==NULL)
                                {echo '<td class="center">'.$blank.'</td>'; }
                                else
                                {
                                    if(array_sum($RINRbs3p)==array_sum($RTLR3p) - array_sum($REXRbs3p))
                                    {echo '<td class="center">'.$blank.'</td>'; }  
                                    else
                                    {
                                        if(array_sum($RINRbs3p)!=0)
                                        {echo '<td class="bgRed right">RINR should be zero</td>';}   
                                        else
                                        {echo '<td class="center">'.$blank.'</td>'; }
                                    }
                                }
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Net Income Before Tax </strong></td>
                            <?php 
                                if($StatementDate0BSp==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                    $EIBTdiffBS0p[] = array_sum($EIBT0p) - array_sum($EIBTbs0p);
                                        if($EIBTdiffBS0==$EIBT0)
                                        {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }  
                                        else
                                        {
                                            if(array_sum($EIBTdiffBS0p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($EIBTdiffBS0p)).'</td><td></td>';}   
                                            else
                                            {echo '<td class="bgYellow center">'.$true.'</td><td></td>'; }
                                        }
                                }

                                if($StatementDate1BSp==NULL)
                                {echo '<td class="bgGreen center">'.$blank.''; }
                                else
                                {
                                    $EIBTdiffBS1p[] = array_sum($EIBT1) - array_sum($EIBTbs1);
                                        if(array_sum($EIBTdiffBS1)==array_sum($EIBT1))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($EIBTdiffBS1p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($EIBTdiffBS1p)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate2BSp==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $EIBTdiffBS2p[] = array_sum($EIBT2) - array_sum($EIBTbs2);
                                        if(array_sum($EIBTdiffBS2)==array_sum($EIBT2))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($EIBTdiffBS2p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($EIBTdiffBS2p)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate3BSp==NULL)
                                {echo '<td class="center">'.$blank.'</td>'; }
                                else
                                {
                                    $EIBTdiffBS3p[] = array_sum($EIBT3) - array_sum($EIBTbs3);
                                        if(array_sum($EIBTdiffBS3)==array_sum($EIBT3))
                                        {echo '<td class="center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($EIBTdiffBS3p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($EIBTdiffBS3p)).'</td>';}   
                                            else
                                            {echo '<td class="center">'.$true.'</td>'; }
                                        }
                                }
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Income Tax </strong></td>
                            <?php 
                                if($StatementDate0BSp==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                    $TTAXdiffBS0p[] = array_sum($TTAX0p) - array_sum($TTAXbs0p);
                                        if(array_sum($TTAXdiffBS0p)==array_sum($TTAX0p))
                                        {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }  
                                        else
                                        {
                                            if(array_sum($TTAXdiffBS0p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($TTAXdiffBS0p)).'</td><td></td>';}   
                                            else
                                            {echo '<td class="bgYellow center">'.$true.'</td><td></td>'; }
                                        }
                                }

                                if($StatementDate1BSp==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $TTAXdiffBS1p[] = array_sum($TTAX1p) - array_sum($TTAXbs1p);
                                        if(array_sum($TTAXdiffBS1p)==array_sum($TTAX1p))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($TTAXdiffBS1p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($TTAXdiffBS1p)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate2BSp==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $TTAXdiffBS2p[] = array_sum($TTAX2p) - array_sum($TTAXbs2p);
                                        if(array_sum($TTAXdiffBS2p)==array_sum($TTAX2p))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($TTAXdiffBS2p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($TTAXdiffBS2p)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate3BSp==NULL)
                                {echo '<td class="center">'.$blank.'</td>'; }
                                else
                                {
                                    $TTAXdiffBS3p[] = array_sum($TTAX3p) - array_sum($TTAXbs3p);
                                        if(array_sum($TTAXdiffBS3p)==array_sum($TTAX3p))
                                        {echo '<td class="center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($TTAXdiffBS3p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($TTAXdiffBS3p)).'</td>';}   
                                            else
                                            {echo '<td class="center">'.$true.'</td>'; }
                                        }
                                }
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Net Income After Tax</strong></td>
                            <?php 
                                if($StatementDate0BSp==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                    $TIATdiffBS0p[] = array_sum($TIAT0p) - array_sum($TIATbs0p);
                                        if(array_sum($TIATdiffBS0p)==array_sum($TIAT0p))
                                        {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }  
                                        else
                                        {
                                            if(array_sum($TIATdiffBS0p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($TIATdiffBS0p)).'</td><td></td>';}   
                                            else
                                            {echo '<td class="bgYellow center">'.$true.'</td><td></td>'; }
                                        }
                                }

                                if($StatementDate1BSp==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $TIATdiffBS1p[] = array_sum($TIAT1p) - array_sum($TIATbs1p);
                                        if(array_sum($TIATdiffBS1p)==array_sum($TIAT1p))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($TIATdiffBS1p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($TIATdiffBS1p)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate2BSp==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $TIATdiffBS2p[] = array_sum($TIAT2p) - array_sum($TIATbs2p);
                                        if(array_sum($TIATdiffBS2p)==array_sum($TIAT2p))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($TIATdiffBS2p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($TIATdiffBS2p)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate3BSp==NULL)
                                {echo '<td class="center">'.$blank.'</td>'; }
                                else
                                {
                                    $TIATdiffBS3p[] = array_sum($TIAT3p) - array_sum($TIATbs3p);
                                        if(array_sum($TIATdiffBS3p)==array_sum($TIAT3p))
                                        {echo '<td class="center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($TIATdiffBS3p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($TIATdiffBS3p)).'</td>';}   
                                            else
                                            {echo '<td class="center">'.$true.'</td>'; }
                                        }
                                }
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Equity in Affiliates</strong></td>
                            <?php 
                                if($StatementDate0BSp==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                    if(array_sum($CEIAbs0p)==array_sum($VEIA0p))
                                    {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }  
                                    else
                                    {
                                        if(array_sum($CEIAbs0p)!=0)
                                        {echo '<td class="bgRed right">Check Polarity</td><td></td>';}   
                                        else
                                        {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                    }
                                }
                                if($StatementDate1BSp==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    if(array_sum($CEIAbs1p)==array_sum($VEIA1p))
                                    {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                    else
                                    {
                                        if(array_sum($CEIAbs1p)!=0)
                                        {echo '<td class="bgRed right">Check Polarity</td>';}   
                                        else
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                    }
                                }
                                if($StatementDate2BSp==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    if(array_sum($CEIAbs2p)==array_sum($VEIA2p))
                                    {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                    else
                                    {
                                        if(array_sum($CEIAbs2p)!=0)
                                        {echo '<td class="bgRed right">Check Polarity</td>';}   
                                        else
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                    }
                                }
                                if($StatementDate3BSp==NULL)
                                {echo '<td class="center">'.$blank.'</td>'; }
                                else
                                {
                                    if(array_sum($CEIAbs3p)==array_sum($VEIA3p))
                                    {echo '<td class="center">'.$blank.'</td>'; }  
                                    else
                                    {
                                        if(array_sum($CEIAbs3p)!=0)
                                        {echo '<td class="bgRed right">Check Polarity</td>';}   
                                        else
                                        {echo '<td class="center">'.$blank.'</td>'; }
                                    }
                                }
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Other Unusual Expense (Income)</strong></td>
                            <?php 
                                if($StatementDate0BSp==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                    if(array_sum($EUIEbs0p)!=0)
                                    {echo '<td class="bgRed right">Check Polarity</td><td></td>';}   
                                    else
                                    {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                }
                                if($StatementDate1BSp==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    if(array_sum($EUIEbs1p)!=0)
                                    {echo '<td class="bgRed right">Check Polarity</td>';}   
                                    else
                                    {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                }
                                if($StatementDate2BSp==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    if(array_sum($EUIEbs2p)!=0)
                                    {echo '<td class="bgRed right">Check Polarity</td>';}   
                                    else
                                    {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                }
                                if($StatementDate3BSp==NULL)
                                {echo '<td class="center">'.$blank.'</td>'; }
                                else
                                {
                                    if(array_sum($EUIEbs3p)!=0)
                                    {echo '<td class="bgRed right">Check Polarity</td>';}   
                                    else
                                    {echo '<td class="center">'.$blank.'</td>'; }
                                }
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Total Assets</strong></td>
                            <?php 
                                if($StatementDate0BSp==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                    $ATOTdiffBS0p[] = array_sum($ATOT0p) - array_sum($ATOTbs0p);
                                        if(array_sum($ATOTdiffBS0p)==array_sum($ATOT0p))
                                        {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }  
                                        else
                                        {
                                            if(array_sum($ATOTdiffBS0p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($ATOTdiffBS0p)).'</td><td></td>';}   
                                            else
                                            {echo '<td class="bgYellow center">'.$true.'</td><td></td>'; }
                                        }
                                }

                                if($StatementDate1BSp==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $ATOTdiffBS1p[] = array_sum($ATOT1p) - array_sum($ATOTbs1p);
                                        if(array_sum($ATOTdiffBS1p)==array_sum($ATOT1p))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($ATOTdiffBS1p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($ATOTdiffBS1p)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate2BSp==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $ATOTdiffBS2p[] = array_sum($ATOT2p) - array_sum($ATOTbs2p);
                                        if(array_sum($ATOTdiffBS2p)==array_sum($ATOT2p))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($ATOTdiffBS2p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($ATOTdiffBS2p)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate3BSp==NULL)
                                {echo '<td class="center">'.$blank.'</td>'; }
                                else
                                {
                                    $ATOTdiffBS3p[] = array_sum($ATOT3p) - array_sum($ATOTbs3p);
                                        if(array_sum($ATOTdiffBS3p)==array_sum($ATOT3p))
                                        {echo '<td class="center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($ATOTdiffBS3p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($ATOTdiffBS3p)).'</td>';}   
                                            else
                                            {echo '<td class="center">'.$true.'</td>'; }
                                        }
                                }
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Total Liabilities less LMNR Minority Interest</strong></td>
                            <?php 
                                if($StatementDate0BSp==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                    $LMNRdiffBS0p[] = array_sum($LTLL0p) - array_sum($LMNR0p) - array_sum($LTLLbs0p);
                                        if(array_sum($LMNRdiffBS0p)==array_sum($LTLL0p) - array_sum($LMNR0p))
                                        {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }  
                                        else
                                        {
                                            if(array_sum($LMNRdiffBS0p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($LMNRdiffBS0p)).'</td><td></td>';}   
                                            else
                                            {echo '<td class="bgYellow center">'.$true.'</td><td></td>'; }
                                        }
                                }

                                if($StatementDate1BSp==NULL)
                                {echo '<td class="bgGreen center">'.$blank.''; }
                                else
                                {
                                    $LMNRdiffBS1p[] = array_sum($LTLL1p) - array_sum($LMNR1p) - array_sum($LTLLbs1p);
                                        if(array_sum($LMNRdiffBS1p)==array_sum($LTLL1p) - array_sum($LMNR1p))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($LMNRdiffBS1p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($LMNRdiffBS1p)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate2BSp==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $LMNRdiffBS2p[] = array_sum($LTLL2p) - array_sum($LMNR2p) - array_sum($LTLLbs2p);
                                        if(array_sum($LMNRdiffBS2p)==array_sum($LTLL2p) - array_sum($LMNR2p))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($LMNRdiffBS2p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($LMNRdiffBS2p)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate3BSp==NULL)
                                {echo '<td class="center">'.$blank.''; }
                                else
                                {
                                    $LMNRdiffBS3p[] = array_sum($LTLL3p) - array_sum($LMNR3p) - array_sum($LTLLbs3p);
                                        if(array_sum($LMNRdiffBS3p)==array_sum($LTLL3p) - array_sum($LMNR3p))
                                        {echo '<td class="center">'.$blank.''; }  
                                        else
                                        {
                                            if(array_sum($LMNRdiffBS3p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($LMNRdiffBS3p)).'</td>';}   
                                            else
                                            {echo '<td class="center">'.$true.'</td>'; }
                                        }
                                }
                            ?>
                        </tr>
                        <tr>
                            <th><br></th>
                        </tr>
<!---------------BUSINESS SEGMENT END---------------------------------------------------------------------------------->

<!---------------GEOGRAPHIC SEGMENT START------------------------------------------------------------------------------>
                        <tr>
                            <th style="font-size:15px;"><strong>GEOGRAPHIC SEGMENT</strong></th>
                        </tr>
                        <tr>
                            <?php echo '<td><strong>Statement Date</strong><br></td>
                            <td class="bgGray">'.$StatementDate0GSp.'</td>
                            <td class="bgGray"></td>
                            <td class="bgGray">'.$StatementDate1GSp.'</td>
                            <td class="bgGray">'.$StatementDate2GSp.'</td>
                            <td class="bgGray">'.$StatementDate3GSp.'</td>' ?>
                        </tr>
                        <tr>
                            <td><strong>Submission Type</strong></td>
                            <?php echo '<td class="bgGray">'.$SubmissionType0GSp.'</td>
                            <td class="bgGray"></td>
                            <td class="bgGray">'.$SubmissionType1GSp.'</td>
                            <td class="bgGray">'.$SubmissionType2GSp.'</td>
                            <td class="bgGray">'.$SubmissionType3GSp.'</td>' ?>
                        </tr>
                        <tr>
                            <td><strong>Scaling</strong></td>
                            <?php echo '<td class="bgGray">'.$Scaling0GSp.'</td>
                            <td class="bgGray"></td>
                            <td class="bgGray">'.$Scaling1GSp.'</td>
                            <td class="bgGray">'.$Scaling2GSp.'</td>
                            <td class="bgGray">'.$Scaling3GSp.'</td>' ?>
                        </tr>
                        <tr>
                            <td><strong>Update Type</strong></td>
                            <?php echo '<td class="bgGray">'.$UpdateType0GSp.'</td>
                            <td class="bgGray"></td>
                            <td class="bgGray">'.$UpdateType1GSp.'</td>
                            <td class="bgGray">'.$UpdateType2GSp.'</td>
                            <td class="bgGray">'.$UpdateType3GSp.'</td>' ?>
                        </tr>
                        <tr>
                            <td><strong>Interim Type</strong></td>
                            <?php echo '<td class="bgGray">'.$InterimType0GSp.'</td>
                            <td class="bgGray"></td>
                            <td class="bgGray">'.$InterimType1GSp.'</td>
                            <td class="bgGray">'.$InterimType2GSp.'</td>
                            <td class="bgGray">'.$InterimType3GSp.'</td>' ?>
                        </tr>
                        <tr>
                            <td><strong>Business Segment Period Length</strong></td>
                            <?php echo '<td class="bgGray">'.$DateLength0GSp.'</td>
                            <td class="bgGray"></td>
                            <td class="bgGray">'.$DateLength1GSp.'</td>
                            <td class="bgGray">'.$DateLength2GSp.'</td>
                            <td class="bgGray">'.$DateLength3GSp.'</td>' ?>
                        </tr>
                        <tr>
                            <th><br></th>
                        </tr>
                        <tr>
                            <td><strong>Revenue</strong></td>
                            <?php 
                                if(array_sum($REXRgs0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($REXRgs0p)).'</td><td></td>';}

                                if(array_sum($REXRgs1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($REXRgs1p)).'</td>';}

                                if(array_sum($REXRgs2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($REXRgs2p)).'</td>';}

                                if(array_sum($REXRgs3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($REXRgs3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Intersegment Revenue</strong></td>
                            <?php 
                                if(array_sum($RINRgs0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($RINRgs0p)).'</td><td></td>';}

                                if(array_sum($RINRgs1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($RINRgs1p)).'</td>';}

                                if(array_sum($RINRgs2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($RINRgs2p)).'</td>';}

                                if(array_sum($RINRgs3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($RINRgs3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Income Before Tax </strong></td>
                            <?php 
                                if(array_sum($EIBTgs0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($EIBTgs0p)).'</td><td></td>';}

                                if(array_sum($EIBTgs1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($EIBTgs1p)).'</td>';}

                                if(array_sum($EIBTgs2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($EIBTgs2p)).'</td>';}

                                if(array_sum($EIBTgs3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($EIBTgs3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Income Tax</strong></td>
                            <?php 
                                if(array_sum($TTAXgs0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($TTAXgs0p)).'</td><td></td>';}

                                if(array_sum($TTAXgs1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($TTAXgs1p)).'</td>';}

                                if(array_sum($TTAXgs2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($TTAXgs2p)).'</td>';}

                                if(array_sum($TTAXgs3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($TTAXgs3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Income After Tax </strong></td>
                            <?php 
                                if(array_sum($TIATgs0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($TIATgs0p)).'</td><td></td>';}

                                if(array_sum($TIATgs1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($TIATgs1p)).'</td>';}

                                if(array_sum($TIATgs2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($TIATgs2p)).'</td>';}

                                if(array_sum($TIATgs3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($TIATgs3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Equity in Affiliates</strong></td>
                            <?php 
                                if(array_sum($CEIAgs0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($CEIAgs0p)).'</td><td></td>';}

                                if(array_sum($CEIAgs1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($CEIAgs1p)).'</td>';}

                                if(array_sum($CEIAgs2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($CEIAgs2p)).'</td>';}

                                if(array_sum($CEIAgs3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($CEIAgs3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Other Unusual Expense (Income)</strong></td>
                            <?php 
                                if(array_sum($EUIEgs0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($EUIEgs0p)).'</td><td></td>';}

                                if(array_sum($EUIEgs1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($EUIEgs1p)).'</td>';}

                                if(array_sum($EUIEgs2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($EUIEgs2p)).'</td>';}

                                if(array_sum($EUIEgs3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($EUIEgs3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Total Assets</strong></td>
                            <?php 
                                if(array_sum($ATOTgs0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($ATOTgs0p)).'</td><td></td>';}

                                if(array_sum($ATOTgs1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ATOTgs1p)).'</td>';}

                                if(array_sum($ATOTgs2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($ATOTgs2p)).'</td>';}

                                if(array_sum($ATOTgs3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($ATOTgs3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Total Liabilities </strong></td>
                            <?php 
                                if(array_sum($LTLLgs0p)==0)
                                {echo '<td class="bgYellow right">'.$blank.'</td><td></td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($LTLLgs0p)).'</td><td></td>';}

                                if(array_sum($LTLLgs1p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($LTLLgs1p)).'</td>';}

                                if(array_sum($LTLLgs2p)==0)
                                {echo '<td class="bgGreen right">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($LTLLgs2p)).'</td>';}

                                if(array_sum($LTLLgs3p)==0)
                                {echo '<td class="right">'.$blank.'</td>';}
                                else
                                {echo '<td class="right">'.number_format(array_sum($LTLLgs3p)).'</td>';}
                            ?>
                        </tr>
                        <tr>
                            <th><br></th>
                        </tr>
                        <tr>
                            <th style="font-size:15px;color:#ff0000;"><strong>BAL/INC vs SEGMENTS</strong></th>
                        </tr>
                        <tr>
                            <td><strong>Revenue</strong></td>
                            <?php 
                                if($StatementDate0GSp==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                    $REXRdiffGS0p[] = array_sum($RTLR0p) - array_sum($REXRgs0p) - array_sum($RINRgs0p);
                                        if(array_sum($REXRdiffGS0p)==array_sum($RTLR0p) + array_sum($REXRgs0p))
                                        {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }  
                                        else
                                        {
                                            if(array_sum($REXRdiffGS0p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($REXRdiffGS0p)).'</td><td></td>';}   
                                            else
                                            {echo '<td class="bgYellow center">'.$true.'</td><td></td>'; }
                                        }
                                }

                                if($StatementDate1GSp==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $REXRdiffGS1p[] = array_sum($RTLR1p) - array_sum($REXRgs1p) - array_sum($RINRgs1p);
                                        if(array_sum($REXRdiffGS1p)==array_sum($RTLR1p) + array_sum($REXRgs1p))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($REXRdiffGS1p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($REXRdiffGS1p)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate2GSp==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $REXRdiffGS2p[] = array_sum($RTLR2p) - array_sum($REXRgs2p) - array_sum($RINRgs2p);
                                        if(array_sum($REXRdiffGS2p)==array_sum($RTLR2p) + array_sum($REXRgs2p))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($REXRdiffGS2p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($REXRdiffGS2p)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate3GSp==NULL)
                                {echo '<td class="center">'.$blank.'</td>'; }
                                else
                                {
                                    $REXRdiffGS3p[] = array_sum($RTLR3p) - array_sum($REXRgs3p) - array_sum($RINRgs3p);
                                        if(array_sum($REXRdiffGS3p)==array_sum($RTLR3p) + array_sum($REXRgs3p))
                                        {echo '<td class="center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($REXRdiffGS3p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($REXRdiffGS3p)).'</td>';}   
                                            else
                                            {echo '<td class="center">'.$true.'</td>'; }
                                        }
                                }
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Intersegment Revenue</strong></td>
                            <?php 
                                if($StatementDate0GSp==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                    if(array_sum($RINRgs0p)==array_sum($RTLR0p) - array_sum($REXRgs0p))
                                    {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }  
                                    else
                                    {
                                        if(array_sum($RINRgs0p)!=0)
                                        {echo '<td class="bgRed right">RINR should be zero</td><td></td>';}   
                                        else
                                        {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                    }
                                }
                                if($StatementDate1GSp==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    if(array_sum($RINRgs1p)==array_sum($RTLR1p) - array_sum($REXRgs1p))
                                    {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                    else
                                    {
                                        if(array_sum($RINRgs1p)!=0)
                                        {echo '<td class="bgRed right">RINR should be zero</td>';}   
                                        else
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                    }
                                }
                                if($StatementDate2GSp==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    if(array_sum($RINRgs2p)==array_sum($RTLR2p) - array_sum($REXRgs2p))
                                    {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                    else
                                    {
                                        if(array_sum($RINRgs2p)!=0)
                                        {echo '<td class="bgRed right">RINR should be zero</td>';}   
                                        else
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                    }
                                }
                                if($StatementDate3GSp==NULL)
                                {echo '<td class="center">'.$blank.'</td>'; }
                                else
                                {
                                    if(array_sum($RINRgs3p)==array_sum($RTLR3p) - array_sum($REXRgs3p))
                                    {echo '<td class="center">'.$blank.'</td>'; }  
                                    else
                                    {
                                        if(array_sum($RINRgs3p)!=0)
                                        {echo '<td class="bgRed right">RINR should be zero</td>';}   
                                        else
                                        {echo '<td class="center">'.$blank.'</td>'; }
                                    }
                                }
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Net Income Before Tax </strong></td>
                            <?php 
                                if($StatementDate0GSp==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                    $EIBTdiffGS0p[] = array_sum($EIBT0p) - array_sum($EIBTgs0p);
                                        if($EIBTdiffGS0p==$EIBT0p)
                                        {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }  
                                        else
                                        {
                                            if(array_sum($EIBTdiffGS0p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($EIBTdiffGS0p)).'</td><td></td>';}   
                                            else
                                            {echo '<td class="bgYellow center">'.$true.'</td><td></td>'; }
                                        }
                                }

                                if($StatementDate1GSp==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $EIBTdiffGS1p[] = array_sum($EIBT1p) - array_sum($EIBTgs1p);
                                        if(array_sum($EIBTdiffGS1p)==array_sum($EIBT1p))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($EIBTdiffGS1p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($EIBTdiffGS1p)).'';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate2GSp==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $EIBTdiffGS2p[] = array_sum($EIBT2p) - array_sum($EIBTgs2p);
                                        if(array_sum($EIBTdiffGS2p)==array_sum($EIBT2p))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($EIBTdiffGS2p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($EIBTdiffGS2p)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate3GSp==NULL)
                                {echo '<td class="center">'.$blank.'</td>'; }
                                else
                                {
                                    $EIBTdiffGS3p[] = array_sum($EIBT3p) - array_sum($EIBTgs3p);
                                        if(array_sum($EIBTdiffGS3p)==array_sum($EIBT3p))
                                        {echo '<td class="center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($EIBTdiffGS3p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($EIBTdiffGS3p)).'</td>';}   
                                            else
                                            {echo '<td class="center">'.$true.'</td>'; }
                                        }
                                }
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Income Tax </strong></td>
                            <?php 
                                if($StatementDate0GSp==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                    $TTAXdiffGS0p[] = array_sum($TTAX0p) - array_sum($TTAXgs0p);
                                        if(array_sum($TTAXdiffGS0p)==array_sum($TTAX0p))
                                        {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }  
                                        else
                                        {
                                            if(array_sum($TTAXdiffGS0p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($TTAXdiffGS0p)).'</td><td></td>';}   
                                            else
                                            {echo '<td class="bgYellow center">'.$true.'</td><td></td>'; }
                                        }
                                }

                                if($StatementDate1GSp==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $TTAXdiffGS1p[] = array_sum($TTAX1p) - array_sum($TTAXgs1p);
                                        if(array_sum($TTAXdiffGS1p)==array_sum($TTAX1p))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($TTAXdiffGS1p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($TTAXdiffGS1p)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate2GSp==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $TTAXdiffGS2p[] = array_sum($TTAX2p) - array_sum($TTAXgs2p);
                                        if(array_sum($TTAXdiffGS2p)==array_sum($TTAX2p))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($TTAXdiffGS2p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($TTAXdiffGS2p)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate3GSp==NULL)
                                {echo '<td class="center">'.$blank.'</td>'; }
                                else
                                {
                                    $TTAXdiffGS3p[] = array_sum($TTAX3p) - array_sum($TTAXgs3p);
                                        if(array_sum($TTAXdiffGS3p)==array_sum($TTAX3p))
                                        {echo '<td class="center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($TTAXdiffGS3p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($TTAXdiffGS3p)).'</td>';}   
                                            else
                                            {echo '<td class="center">'.$true.'</td>'; }
                                        }
                                }
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Net Income After Tax</strong></td>
                            <?php 
                                if($StatementDate0GSp==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                    $TIATdiffGS0p[] = array_sum($TIAT0p) - array_sum($TIATgs0);
                                        if(array_sum($TIATdiffGS0p)==array_sum($TIAT0p))
                                        {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }  
                                        else
                                        {
                                            if(array_sum($TIATdiffGS0p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($TIATdiffGS0p)).'</td><td></td>';}   
                                            else
                                            {echo '<td class="bgYellow center">'.$true.'</td><td></td>'; }
                                        }
                                }

                                if($StatementDate1GSp==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $TIATdiffGS1p[] = array_sum($TIAT1p) - array_sum($TIATgs1p);
                                        if(array_sum($TIATdiffGS1p)==array_sum($TIAT1p))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($TIATdiffGS1p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($TIATdiffGS1p)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate2GSp==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $TIATdiffGS2p[] = array_sum($TIAT2p) - array_sum($TIATgs2p);
                                        if(array_sum($TIATdiffGS2p)==array_sum($TIAT2p))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($TIATdiffGS2p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($TIATdiffGS2p)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate3GSp==NULL)
                                {echo '<td class="center">'.$blank.'</td>'; }
                                else
                                {
                                    $TIATdiffGS3p[] = array_sum($TIAT3p) - array_sum($TIATgs3p);
                                        if(array_sum($TIATdiffGS3p)==array_sum($TIAT3p))
                                        {echo '<td class="center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($TIATdiffGS3p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($TIATdiffGS3p)).'</td>';}   
                                            else
                                            {echo '<td class="center">'.$true.'</td>'; }
                                        }
                                }
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Equity in Affiliates</strong></td>
                            <?php 
                                if($StatementDate0GSp==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                    if(array_sum($CEIAgs0p)==array_sum($VEIA0p))
                                    {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }  
                                    else
                                    {
                                        if(array_sum($CEIAgs0p)!=0)
                                        {echo '<td class="bgRed right">Check Polarity</td><td></td>';}   
                                        else
                                        {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                    }
                                }
                                if($StatementDate1GSp==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    if(array_sum($CEIAgs1p)==array_sum($VEIA1p))
                                    {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                    else
                                    {
                                        if(array_sum($CEIAgs1p)!=0)
                                        {echo '<td class="bgRed right">Check Polarity</td>';}   
                                        else
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                    }
                                }
                                if($StatementDate2GSp==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    if(array_sum($CEIAgs2p)==array_sum($VEIA2p))
                                    {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                    else
                                    {
                                        if(array_sum($CEIAgs2p)!=0)
                                        {echo '<td class="bgRed right">Check Polarity</td>';}   
                                        else
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                    }
                                }
                                if($StatementDate3GSp==NULL)
                                {echo '<td class="center">'.$blank.'</td>'; }
                                else
                                {
                                    if(array_sum($CEIAgs3p)==array_sum($VEIA3p))
                                    {echo '<td class="center">'.$blank.'</td>'; }  
                                    else
                                    {
                                        if(array_sum($CEIAgs3p)!=0)
                                        {echo '<td class="bgRed right">Check Polarity</td>';}   
                                        else
                                        {echo '<td class="center">'.$blank.'</td>'; }
                                    }
                                }
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Other Unusual Expense (Income)</strong></td>
                            <?php 
                                if($StatementDate0GSp==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                    if(array_sum($EUIEgs0p)!=0)
                                    {echo '<td class="bgRed right">Check Polarity</td><td></td>';}   
                                    else
                                    {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                }
                                if($StatementDate1GSp==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    if(array_sum($EUIEgs1p)!=0)
                                    {echo '<td class="bgRed right">Check Polarity</td>';}   
                                    else
                                    {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                }
                                if($StatementDate2GSp==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    if(array_sum($EUIEgs2p)!=0)
                                    {echo '<td class="bgRed right">Check Polarity</td>';}   
                                    else
                                    {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                }
                                if($StatementDate3GSp==NULL)
                                {echo '<td class="center">'.$blank.'</td>'; }
                                else
                                {
                                    if(array_sum($EUIEgs3p)!=0)
                                    {echo '<td class="bgRed right">Check Polarity</td>';}   
                                    else
                                    {echo '<td class="center">'.$blank.'</td>'; }
                                }
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Total Assets</strong></td>
                            <?php 
                                if($StatementDate0GSp==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                    $ATOTdiffGS0p[] = array_sum($ATOT0p) - array_sum($ATOTgs0p);
                                        if(array_sum($ATOTdiffGS0p)==array_sum($ATOT0p))
                                        {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }  
                                        else
                                        {
                                            if(array_sum($ATOTdiffGS0p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($ATOTdiffGS0p)).'</td><td></td>';}   
                                            else
                                            {echo '<td class="bgYellow center">'.$true.'</td><td></td>'; }
                                        }
                                }

                                if($StatementDate1GSp==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $ATOTdiffGS1p[] = array_sum($ATOT1p) - array_sum($ATOTgs1p);
                                        if(array_sum($ATOTdiffGS1p)==array_sum($ATOT1p))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($ATOTdiffGS1p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($ATOTdiffGS1p)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate2GSp==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $ATOTdiffGS2p[] = array_sum($ATOT2p) - array_sum($ATOTgs2p);
                                        if(array_sum($ATOTdiffGS2p)==array_sum($ATOT2p))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($ATOTdiffGS2p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($ATOTdiffGS2p)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate3GSp==NULL)
                                {echo '<td class="center">'.$blank.'</td>'; }
                                else
                                {
                                    $ATOTdiffGS3p[] = array_sum($ATOT3p) - array_sum($ATOTgs3p);
                                        if(array_sum($ATOTdiffGS3p)==array_sum($ATOT3p))
                                        {echo '<td class="center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($ATOTdiffGS3p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($ATOTdiffGS3p)).'</td>';}   
                                            else
                                            {echo '<td class="center">'.$true.'</td>'; }
                                        }
                                }
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Total Liabilities less LMNR Minority Interest</strong></td>
                            <?php 
                                if($StatementDate0GSp==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                    $LMNRdiffGS0p[] = array_sum($LTLL0p) - array_sum($LMNR0p) - array_sum($LTLLgs0p);
                                        if(array_sum($LMNRdiffGS0p)==array_sum($LTLL0p) - array_sum($LMNR0p))
                                        {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }  
                                        else
                                        {
                                            if(array_sum($LMNRdiffGS0p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($LMNRdiffGS0p)).'</td><td></td>';}   
                                            else
                                            {echo '<td class="bgYellow center">'.$true.'</td><td></td>'; }
                                        }
                                }

                                if($StatementDate1GSp==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $LMNRdiffGS1p[] = array_sum($LTLL1p) - array_sum($LMNR1p) - array_sum($LTLLgs1p);
                                        if(array_sum($LMNRdiffGS1p)==array_sum($LTLL1p) - array_sum($LMNR1p))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($LMNRdiffGS1p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($LMNRdiffGS1p)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate2GSp==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                    $LMNRdiffGS2p[] = array_sum($LTLL2p) - array_sum($LMNR2p) - array_sum($LTLLgs2p);
                                        if(array_sum($LMNRdiffGS2p)==array_sum($LTLL2p) - array_sum($LMNR2p))
                                        {echo '<td class="bgGreen center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($LMNRdiffGS2p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($LMNRdiffGS2p)).'</td>';}   
                                            else
                                            {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        }
                                }

                                if($StatementDate3GSp==NULL)
                                {echo '<td class="center">'.$blank.'</td>'; }
                                else
                                {
                                    $LMNRdiffGS3p[] = array_sum($LTLL3p) - array_sum($LMNR3p) - array_sum($LTLLgs3p);
                                        if(array_sum($LMNRdiffGS3p)==array_sum($LTLL3p) - array_sum($LMNR3p))
                                        {echo '<td class="center">'.$blank.'</td>'; }  
                                        else
                                        {
                                            if(array_sum($LMNRdiffGS3p)!=0)
                                            {echo '<td class="bgRed right">'.number_format(array_sum($LMNRdiffGS3p)).'</td>';}   
                                            else
                                            {echo '<td class="center">'.$true.'</td>'; }
                                        }
                                }
                            ?>
                        </tr>
<!---------------GEOGRAPHIC SEGMENT END-------------------------------------------------------------------------------->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<!---------------PRIOR FISCAL YEAR END----------------------------------------------------------------------------------------->


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script>
        function showHide() 
        {
          var x = document.getElementById("rawTable");
          if (x.style.display === "none") {
            x.style.display = "block";
          } else {
            x.style.display = "none";
          }
        }

        function reset() {
          var y = document.getElementById("rawTable");
          if (y.style.display === "") {
            y.style.display = "";
          } else {
            y.style.display = "";
          }
        }




    </script>
</body>

</html>