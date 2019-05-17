<?php
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
            <div
                class="collapse navbar-collapse" id="navcol-1">
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
    <form action="index.php" method="post">
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
                        <div class="form-check"><input class="form-check-input" type="radio" name="radioButton" id="SemiAnnual" value="SemiAnnual"><label class="form-check-label" for="formCheck-2">Semi-Annual</label></div>
                        <div class="form-check"><input disabled class="form-check-input" type="radio" name="radioButton" id="Hybrid" value="Hybrid"><label class="form-check-label" for="formCheck-3">Hybrid</label></div>
                        <div></div>
                        <div></div>
                    </div>
                    <div class="col-md-4 col-lg-7 offset-lg-2 offset-xl-0" style="width:910px;">
                        <div class="row">
                            <div class="col-xl-11 offset-xl-0">
                                <button class="btn btn-primary" type="submit" id="fundbpro" style="margin:4px;background-color:#001eff;height:50px;width:100px;font-size:12px;" name="fundbpro"><strong>PRODUCT</strong><br>FundbPRO</button>
                                <button disabled class="btn btn-primary" type="button" id="btnDoPlus" style="margin:5px;background-color:#666666;border-color:#666666;height:50px;width:100px;padding:1px;font-size:12px;" name="btnDoPlus"><strong>DO PLUS</strong><br>Fundb<br></button>
                                <button class="btn btn-primary"type="button" id="fundb" style="margin:2px;background-color:#8c8c8c;border-color:#8c8c8c;height:50px;width:100px;font-size:12px;padding:7px 7px;" name="fundb"><strong>Clear</strong><br></button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

<!---------------RAW TABLE START------------------------------------------------------------------------------------------------->  
    <div style="padding:0px;width:1177px 1177px;">
        <div class="container" style="padding:0px 0px;margin:0px 20pxpx;width:3000px;">
            <div class="table-responsive table-sm table-bordered" style="font-size:10px;">
                <table class="table" style="display: none">
                    <thead>
                        <tr id="RAW">
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
        <div class="container" style="padding:0px 0px;margin:0px 20pxpx;width:3000px;">
            <div class="table-responsive table-sm table-bordered" style="font-size:10px;">
                <table class="table">
<!---------------INCOME STATEMENT START----------------------------------------------------------------------------------------->
                    <thead>
                        <tr>
                            <th style="font-size:15px;">INCOME STATEMENT</th>
                            <th style="font-size:15px;"></th>
                            <th style="font-size:15px;"></th>
                            <th style="font-size:15px;"></th>
                            <th style="font-size:15px;">
                                <div>
                                    <label style="font-size: 12px"> <a href="#RAW">RAW</a></label>
                                </div>
                            </th>
                            <th style="font-size:15px;">
                                <div class="col">
                                    <div class="dropdown"><button class="btn btn-outline-primary dropdown-toggle float-right" data-toggle="dropdown" aria-expanded="false" type="button" style="height:27px;padding:-9px;font-size:12px;">Year</button>

                                        <div class="dropdown-menu"
                                            role="menu"><a class="dropdown-item" role="presentation" href="#" style="font-size:12px;">Fiscal Year</a><a class="dropdown-item" role="presentation" href="#" style="font-size:12px;">Prior Fiscal Year</a></div>
                                    </div>
                                </div>
                            </th>
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
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($RTLR0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($RTLR1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($RTLR2)).'</td>
                            <td class="right">'.number_format(array_sum($RTLR3)).'</td>';?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Cost of Revenue</td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($ECOR0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($ECOR1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($ECOR2)).'</td>
                            <td class="right">'.number_format(array_sum($ECOR3)).'</td>';?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Selling/General/Administrative Expense</td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($ESGA0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($ESGA1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($ESGA2)).'</td>
                            <td class="right">'.number_format(array_sum($ESGA3)).'</td>';?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Interest Expense - Operating</td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($EIEX0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($EIEX1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($EIEX2)).'</td>
                            <td class="right">'.number_format(array_sum($EIEX3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Total Operating Expense</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($ETOE0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($ETOE1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($ETOE2)).'</td>
                            <td class="right">'.number_format(array_sum($ETOE3)).'</td>';?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Interest Expense - Non-Operating</td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($NIEN0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($NIEN1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($NIEN2)).'</td>
                            <td class="right">'.number_format(array_sum($NIEN3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Net Income Before Taxes</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($EIBT0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($EIBT1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($EIBT2)).'</td>
                            <td class="right">'.number_format(array_sum($EIBT3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Provision for Income Taxes</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($TTAX0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($TTAX1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($TTAX2)).'</td>
                            <td class="right">'.number_format(array_sum($TTAX3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Net Income After Taxes</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($TIAT0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($TIAT1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($TIAT2)).'</td>
                            <td class="right">'.number_format(array_sum($TIAT3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Extraordinary Item</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($XTRA0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($XTRA1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($XTRA2)).'</td>
                            <td class="right">'.number_format(array_sum($XTRA3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Income Available to Common Excl. Extraordinary Items </strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($CIAC0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($CIAC1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($CIAC2)).'</td>
                            <td class="right">'.number_format(array_sum($CIAC3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Net Income Available to Com Incl ExtraOrd</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($XNIC0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($XNIC1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($XNIC2)).'</td>
                            <td class="right">'.number_format(array_sum($XNIC3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Reported Net Income</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($XNIA0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($XNIA1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($XNIA2)).'</td>
                            <td class="right">'.number_format(array_sum($XNIA3)).'</td>';?>
                        </tr>
                        <tr>
                            <th><br></th>
                        </tr>
                        <tr>
                            <td><strong>Basic Weighted Average Shares</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($GBAS0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($GBAS1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($GBAS2)).'</td>
                            <td class="right">'.number_format(array_sum($GBAS3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Diluted Weighted Average Shares</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($GDWS0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($GDWS1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($GDWS2)).'</td>
                            <td class="right">'.number_format(array_sum($GDWS3)).'</td>';?>
                        </tr>
                        <tr>
                            <th><br></th>
                        </tr>
                        <tr>
                            <td><a href="#STSI"><strong>Total Special Items</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($STSI0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($STSI1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($STSI2)).'</td>
                            <td class="right">'.number_format(array_sum($STSI3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Interest Expense, Supplemental </strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($VIEX0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($VIEX1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($VIEX2)).'</td>
                            <td class="right">'.number_format(array_sum($VIEX3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Interest Capitalized, Supplemental </strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($VCAP0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($VCAP1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($VCAP2)).'</td>
                            <td class="right">'.number_format(array_sum($VCAP3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Equity in Affiliates</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($VEIA0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($VEIA1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($VEIA2)).'</td>
                            <td class="right">'.number_format(array_sum($VEIA3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Depreciation</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($VDEP0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($VDEP1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($VDEP2)).'</td>
                            <td class="right">'.number_format(array_sum($VDEP3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Amortisation</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($VAMI0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($VAMI1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($VAMI2)).'</td>
                            <td class="right">'.number_format(array_sum($VAMI3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Total Depreciation & Amortization(VDEP+VAMI)</strong></td>
                            <?php 
                            $totalVdepVami0[]=array_sum($VDEP0)+array_sum($VAMI0);
                            $totalVdepVami1[]=array_sum($VDEP1)+array_sum($VAMI1);
                            $totalVdepVami2[]=array_sum($VDEP2)+array_sum($VAMI2);
                            $totalVdepVami3[]=array_sum($VDEP3)+array_sum($VAMI3);
                            echo '<td class="bgYellow right">'.number_format(array_sum($totalVdepVami0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($totalVdepVami1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($totalVdepVami2)).'</td>
                            <td class="right">'.number_format(array_sum($totalVdepVami3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Amortisation of Goodwill</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($VAMA0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($VAMA1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($VAMA2)).'</td>
                            <td class="right">'.number_format(array_sum($VAMA3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Gross Dividends - Common Stock</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($DCGD0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($DCGD1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($DCGD2)).'</td>
                            <td class="right">'.number_format(array_sum($DCGD3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>DPS - Common Stock Primary Issue 1</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($DDPS10)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($DDPS11)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($DDPS12)).'</td>
                            <td class="right">'.number_format(array_sum($DDPS13)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>DPS - Common Stock Primary Issue 2</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($DDPS20)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($DDPS21)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($DDPS22)).'</td>
                            <td class="right">'.number_format(array_sum($DDPS23)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Special DPS – Common Stock Primary Issue </strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($DSPS10)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($DSPS11)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($DSPS12)).'</td>
                            <td class="right">'.number_format(array_sum($DSPS13)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Rental Expense, Supplemental </strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($VRXP0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($VRXP1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($VRXP2)).'</td>
                            <td class="right">'.number_format(array_sum($VRXP3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Research & Development Expense, Supplemental</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($VRAD0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($VRAD1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($VRAD2)).'</td>
                            <td class="right">'.number_format(array_sum($VRAD3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Income Tax – Total</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($VITT0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($VITT1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($VITT2)).'</td>
                            <td class="right">'.number_format(array_sum($VITT3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Funds From Operations (REIT) </strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($HFFO0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($HFFO1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($HFFO2)).'</td>
                            <td class="right">'.number_format(array_sum($HFFO3)).'</td>';?>
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
                            <td class="bgYellow center"></td>
                            <td></td>
                            <td class="bgGreen center"></td>
                            <td class="bgGreen center"></td>
                            <td class="center"></td>
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
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($ERDW0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($ERDW1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($ERDW2)).'</td>
                            <td class="right">'.number_format(array_sum($ERDW3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Restructuring Charge</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($ERES0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($ERES1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($ERES2)).'</td>
                            <td class="right">'.number_format(array_sum($ERES3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Litigation</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($ELIT0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($ELIT1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($ELIT2)).'</td>
                            <td class="right">'.number_format(array_sum($ELIT3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Impairment – Assets Held for Use</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($EIAU0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($EIAU1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($EIAU2)).'</td>
                            <td class="right">'.number_format(array_sum($EIAU3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Impairment – Assets Held for Sale </strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($EIAS0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($EIAS1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($EIAS2)).'</td>
                            <td class="right">'.number_format(array_sum($EIAS3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>(Gain) Loss on Sale of Fixed Assets, Operating</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($EGLA0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($EGLA1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($EGLA2)).'</td>
                            <td class="right">'.number_format(array_sum($EGLA3)).'</td>';?>
                        </tr>
                        <tr>
                            <td class="bgCyan"><strong>Other Unusual Expense (Income)</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($EUIE0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($EUIE1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($EUIE2)).'</td>
                            <td class="right">'.number_format(array_sum($EUIE3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Gain (Loss) on Sale of Assets, Non-Operating</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($NGLA0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($NGLA1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($NGLA2)).'</td>
                            <td class="right">'.number_format(array_sum($NGLA3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Other Unusual Income </strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($NUII0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($NUII1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($NUII2)).'</td>
                            <td class="right">'.number_format(array_sum($NUII3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Restructuring Charge</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($NRES0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($NRES1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($NRES2)).'</td>
                            <td class="right">'.number_format(array_sum($NRES3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Litigation Expense</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($NLIT0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($NLIT1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($NLIT2)).'</td>
                            <td class="right">'.number_format(array_sum($NLIT3)).'</td>';?>
                        </tr>
                        <tr>
                            <td class="bgCyan"><strong>Other Unusual Expense </strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($NUIE0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($NUIE1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($NUIE2)).'</td>
                            <td class="right">'.number_format(array_sum($NUIE3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Amortization of Acquisition Costs </strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($NAMA0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($NAMA1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($NAMA2)).'</td>
                            <td class="right">'.number_format(array_sum($NAMA3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Amortization of Acquisition Costs, Supplemental</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($VAMA0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($VAMA1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($VAMA2)).'</td>
                            <td class="right">'.number_format(array_sum($VAMA3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>(Gain) Loss on Sale of Assets, Supplemental</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($VGLA0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($VGLA1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($VGLA2)).'</td>
                            <td class="right">'.number_format(array_sum($VGLA3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Impairment-Assets Held for Sale, Supplemental</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($VIAS0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($VIAS1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($VIAS2)).'</td>
                            <td class="right">'.number_format(array_sum($VIAS3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Impairment-Assets Held for Use, Supplemental</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($VIAU0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($VIAU1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($VIAU2)).'</td>
                            <td class="right">'.number_format(array_sum($VIAU3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Litigation Charge, Supplemental</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($VLIT0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($VLIT1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($VLIT2)).'</td>
                            <td class="right">'.number_format(array_sum($VLIT3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Purchased R&D Written-Off, Supplemental</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($VRDW0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($VRDW1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($VRDW2)).'</td>
                            <td class="right">'.number_format(array_sum($VRDW3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Restructuring Charge, Supplemental</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($VRES0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($VRES1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($VRES2)).'</td>
                            <td class="right">'.number_format(array_sum($VRES3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Other Unusual Expense (Income), Supplemental</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($VUIE0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($VUIE1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($VUIE2)).'</td>
                            <td class="right">'.number_format(array_sum($VUIE3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>TOTAL</strong></td>
                            <?php 
                            $totalSTSI0[]=(array_sum($ERDW0)+array_sum($ERES0)+array_sum($ELIT0)+array_sum($EIAU0)+array_sum($EIAS0)+array_sum($EGLA0)+array_sum($EUIE0)+array_sum($VAMA0)+array_sum($VGLA0)+array_sum($VIAS0)+array_sum($VIAU0)+array_sum($VLIT0)+array_sum($VRDW0)+array_sum($VRES0)+array_sum($VUIE0))-(array_sum($NGLA0)+array_sum($NUII0)+array_sum($NRES0)+array_sum($NLIT0)+array_sum($NUIE0)+array_sum($NAMA0));
                            $totalSTSI1[]=(array_sum($ERDW1)+array_sum($ERES1)+array_sum($ELIT1)+array_sum($EIAU1)+array_sum($EIAS1)+array_sum($EGLA1)+array_sum($EUIE1)+array_sum($VAMA1)+array_sum($VGLA1)+array_sum($VIAS1)+array_sum($VIAU1)+array_sum($VLIT1)+array_sum($VRDW1)+array_sum($VRES1)+array_sum($VUIE1))-(array_sum($NGLA1)+array_sum($NUII1)+array_sum($NRES1)+array_sum($NLIT1)+array_sum($NUIE1)+array_sum($NAMA1));
                            $totalSTSI2[]=(array_sum($ERDW2)+array_sum($ERES2)+array_sum($ELIT2)+array_sum($EIAU2)+array_sum($EIAS2)+array_sum($EGLA2)+array_sum($EUIE2)+array_sum($VAMA2)+array_sum($VGLA2)+array_sum($VIAS2)+array_sum($VIAU2)+array_sum($VLIT2)+array_sum($VRDW2)+array_sum($VRES2)+array_sum($VUIE2))-(array_sum($NGLA2)+array_sum($NUII2)+array_sum($NRES2)+array_sum($NLIT2)+array_sum($NUIE2)+array_sum($NAMA2));$totalSTSI3[]=(array_sum($ERDW3)+array_sum($ERES3)+array_sum($ELIT3)+array_sum($EIAU3)+array_sum($EIAS3)+array_sum($EGLA3)+array_sum($EUIE3)+array_sum($VAMA3)+array_sum($VGLA3)+array_sum($VIAS3)+array_sum($VIAU3)+array_sum($VLIT3)+array_sum($VRDW3)+array_sum($VRES3)+array_sum($VUIE3))-(array_sum($NGLA3)+array_sum($NUII3)+array_sum($NRES3)+array_sum($NLIT3)+array_sum($NUIE3)+array_sum($NAMA3));
                            echo '<td class="bgYellow right">'.number_format(array_sum($totalSTSI0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($totalSTSI1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($totalSTSI2)).'</td>
                            <td class="right">'.number_format(array_sum($totalSTSI3)).'</td>';?>
                        </tr>
                        <tr>
                            <th></br></th>
                        </tr>
                        <tr>
                            <td class="bgCyan"><strong>Total Special Items</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($STSI0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($STSI1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($STSI2)).'</td>
                            <td class="right">'.number_format(array_sum($STSI3)).'</td>';?>
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
                                {echo '<td class="bgYellow center">'.$true.'</td>';} 
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
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($ACAE0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($ACAE1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($ACAE2)).'</td>
                            <td class="right">'.number_format(array_sum($ACAE3)).'</td>';?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Short Term Investments</td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($ASTI0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($ASTI1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($ASTI2)).'</td>
                            <td class="right">'.number_format(array_sum($ASTI3)).'</td>';?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Accounts Receivable - Trade, Net</td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($AACR0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($AACR1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($AACR2)).'</td>
                            <td class="right">'.number_format(array_sum($AACR3)).'</td>';?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Notes Receivable - Short Term</td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($ASTR0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($ASTR1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($ASTR2)).'</td>
                            <td class="right">'.number_format(array_sum($ASTR3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Total Assets</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($ATOT0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($ATOT1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($ATOT2)).'</td>
                            <td class="right">'.number_format(array_sum($ATOT3)).'</td>';?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Accounts Payable</td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($LAPB0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($LAPB1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($LAPB2)).'</td>
                            <td class="right">'.number_format(array_sum($LAPB3)).'</td>';?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Notes Payable/Short Term Debt</td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($LSTD0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($LSTD1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($LSTD2)).'</td>
                            <td class="right">'.number_format(array_sum($LSTD3)).'</td>';?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Current Portion of LT Debt/Capital Leases</td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($LCLD0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($LCLD1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($LCLD2)).'</td>
                            <td class="right">'.number_format(array_sum($LCLD3)).'</td>';?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Long Term Debt</td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($LLTD0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($LLTD1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($LLTD2)).'</td>
                            <td class="right">'.number_format(array_sum($LLTD3)).'</td>';?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Capital Lease Obligations</td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($LCLO0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($LCLO1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($LCLO2)).'</td>
                            <td class="right">'.number_format(array_sum($LCLO3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Total Liabilities </strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($LTLL0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($LTLL1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($LTLL2)).'</td>
                            <td class="right">'.number_format(array_sum($LTLL3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Minority Interest</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($LMNR0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($LMNR1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($LMNR2)).'</td>
                            <td class="right">'.number_format(array_sum($LMNR3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Total Equity</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($QTLE0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($QTLE1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($QTLE2)).'</td>
                            <td class="right">'.number_format(array_sum($QTLE3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Total Liabilities & Shareholders' Equity </strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($QTEL0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($QTEL1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($QTEL2)).'</td>
                            <td class="right">'.number_format(array_sum($QTEL3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Shares Outstanding  - Common Stock Primary Issue </strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($QCSO10)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($QCSO11)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($QCSO12)).'</td>
                            <td class="right">'.number_format(array_sum($QCSO13)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Shares Outstanding - Common Issue 2 </strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($QCSO20)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($QCSO21)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($QCSO22)).'</td>
                            <td class="right">'.number_format(array_sum($QCSO23)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Treasury Shares - Common Stock Primary Issue </strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($QTSN10)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($QTSN11)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($QTSN12)).'</td>
                            <td class="right">'.number_format(array_sum($QTSN13)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Treasury Shares - Common Issue 2 </strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($QTSN20)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($QTSN21)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($QTSN22)).'</td>
                            <td class="right">'.number_format(array_sum($QTSN23)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Total Common Shares Outstanding </strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($QTCO0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($QTCO1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($QTCO2)).'</td>
                            <td class="right">'.number_format(array_sum($QTCO3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Total Funded Status </strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($VFSS0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($VFSS1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($VFSS2)).'</td>
                            <td class="right">'.number_format(array_sum($VFSS3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Employees </strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($METL0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($METL1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($METL2)).'</td>
                            <td class="right">'.number_format(array_sum($METL3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Number of Common Shareholders </strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($MNOS0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($MNOS1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($MNOS2)).'</td>
                            <td class="right">'.number_format(array_sum($MNOS3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Non-Performing Loans </strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($VRUQ0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($VRUQ1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($VRUQ2)).'</td>
                            <td class="right">'.number_format(array_sum($VRUQ3)).'</td>';?>
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
<!---------------BALANCE SHEET END--------------------------------------------------------------------------------------------->

<!---------------CASH FLOW STATEMENT START--------------------------------------------------------------------------------------->
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
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($SDEP0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($SDEP1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($SDEP2)).'</td>
                            <td class="right">'.number_format(array_sum($SDEP3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Amortization</strong><br></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($OAMI0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($OAMI1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($OAMI2)).'</td>
                            <td class="right">'.number_format(array_sum($OAMI3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Cash from Operating Activities </strong><br></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($OTLO0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($OTLO1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($OTLO2)).'</td>
                            <td class="right">'.number_format(array_sum($OTLO3)).'</td>';?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Acquisition of Business<br></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($IBAQ0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($IBAQ1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($IBAQ2)).'</td>
                            <td class="right">'.number_format(array_sum($IBAQ3)).'</td>';?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Purchase of Fixed Assets<br></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($ICEX0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($ICEX1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($ICEX2)).'</td>
                            <td class="right">'.number_format(array_sum($ICEX3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Cash from Investing Activities </strong><br></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($ITLI0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($ITLI1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($ITLI2)).'</td>
                            <td class="right">'.number_format(array_sum($ITLI3)).'</td>';?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Long Term Debt, Net<br></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($FLDN0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($FLDN1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($FLDN2)).'</td>
                            <td class="right">'.number_format(array_sum($FLDN3)).'</td>';?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Short Term Debt, Net<br></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($FSDN0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($FSDN1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($FSDN2)).'</td>
                            <td class="right">'.number_format(array_sum($FSDN3)).'</td>';?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Long Term Debt Issued<br></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($FLDI0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($FLDI1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($FLDI2)).'</td>
                            <td class="right">'.number_format(array_sum($FLDI3)).'</td>';?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Short Term Debt Issued<br></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($FSDI0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($FSDI1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($FSDI2)).'</td>
                            <td class="right">'.number_format(array_sum($FSDI3)).'</td>';?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Long Term Debt Reduction<br></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($FLDR0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($FLDR1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($FLDR2)).'</td>
                            <td class="right">'.number_format(array_sum($FLDR3)).'</td>';?>
                        </tr>
                        <tr>
                            <td class="bgCyan">Short Term Debt Reduction<br></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($FSDR0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($FSDR1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($FSDR2)).'</td>
                            <td class="right">'.number_format(array_sum($FSDR3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Cash from Financing Activities </strong><br></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($FTLF0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($FTLF1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($FTLF2)).'</td>
                            <td class="right">'.number_format(array_sum($FTLF3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Foreign Exchange Effects</strong><br></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($SFEE0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($SFEE1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($SFEE2)).'</td>
                            <td class="right">'.number_format(array_sum($SFEE3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Net Change in Cash</strong><br></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($SNCC0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($SNCC1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($SNCC2)).'</td>
                            <td class="right">'.number_format(array_sum($SNCC3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Net Cash - Beginning Balance </strong><br></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($SNCB0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($SNCB1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($SNCB2)).'</td>
                            <td class="right">'.number_format(array_sum($SNCB3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Net Cash - Ending Balance </strong><br></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($SNCE0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($SNCE1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($SNCE2)).'</td>
                            <td class="right">'.number_format(array_sum($SNCE3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Cash Interest Paid </strong><br></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($SCIP0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($SCIP1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($SCIP2)).'</td>
                            <td class="right">'.number_format(array_sum($SCIP3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Cash Taxes Paid </strong><br></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($SCTP0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($SCTP1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($SCTP2)).'</td>
                            <td class="right">'.number_format(array_sum($SCTP3)).'</td>';?>
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
                                    {echo '<td class="bgGreen center">'.$true.'</td><'; }
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
                    <!-------------------------------------NEGATIVE VALUES CAS START---------------------------------------->
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
<!---------------CASH FLOW STATEMENT END-----------------------------------------------------------------------------------------> 

<!---------------BUSINESS SEGMENT START------------------------------------------------------------------------------------------>
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
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($REXRbs0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($REXRbs1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($REXRbs2)).'</td>
                            <td class="right">'.number_format(array_sum($REXRbs3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Intersegment Revenue</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($RINRbs0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($RINRbs1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($RINRbs2)).'</td>
                            <td class="right">'.number_format(array_sum($RINRbs3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Income Before Tax </strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($EIBTbs0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($EIBTbs1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($EIBTbs2)).'</td>
                            <td class="right">'.number_format(array_sum($EIBTbs3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Income Tax</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($TTAXbs0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($TTAXbs1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($TTAXbs2)).'</td>
                            <td class="right">'.number_format(array_sum($TTAXbs3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Income After Tax </strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($TIATbs0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($TIATbs1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($TIATbs2)).'</td>
                            <td class="right">'.number_format(array_sum($TIATbs3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Equity in Affiliates</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($CEIAbs0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($CEIAbs1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($CEIAbs2)).'</td>
                            <td class="right">'.number_format(array_sum($CEIAbs3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Other Unusual Expense (Income)</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($EUIEbs0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($EUIEbs1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($EUIEbs2)).'</td>
                            <td class="right">'.number_format(array_sum($EUIEbs3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Total Assets</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($ATOTbs0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($ATOTbs1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($ATOTbs2)).'</td>
                            <td class="right">'.number_format(array_sum($ATOTbs3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Total Liabilities </strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($LTLLbs0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($LTLLbs1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($LTLLbs2)).'</td>
                            <td class="right">'.number_format(array_sum($LTLLbs3)).'</td>';?>
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
                                if($REXRbs0==0 || $StatementDate0BS==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                        $REXRdiffBS0 = array_sum($RTLR0) - array_sum($REXRbs0) - array_sum($RINRbs0);
                                        if($REXRdiffBS0==0)
                                        {echo '<td class="bgYellow center">'.$true.'</td><td></td>'; }
                                        else
                                        {echo '<td class="bgRed right">'.number_format($REXRdiffBS0).'</td><td></td>';}        
                                }

                                if($REXRbs1==0 || $StatementDate1BS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                        $REXRdiffBS1 = array_sum($RTLR1) - array_sum($REXRbs1) - array_sum($RINRbs1);
                                        if($REXRdiffBS1==0)
                                        {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        else
                                        {echo '<td class="bgRed right">'.number_format($REXRdiffBS1).'</td>';}        
                                }

                                if($REXRbs2==0 || $StatementDate2BS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                        $REXRdiffBS2 = array_sum($RTLR2) - array_sum($REXRbs2) - array_sum($RINRbs2);
                                        if($REXRdiffBS2==0)
                                        {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        else
                                        {echo '<td class="bgRed right">'.number_format($REXRdiffBS2).'</td>';}        
                                }

                                if($REXRbs3==0 || $StatementDate2BS==NULL)
                                {echo '<td class="center">'.$blank.'</td>'; }
                                else
                                {
                                        $REXRdiffBS3 = array_sum($RTLR3) - array_sum($REXRbs3) - array_sum($RINRbs3);
                                        if($REXRdiffBS3==0)
                                        {echo '<td class="center">'.$true.'</td>'; }
                                        else
                                        {echo '<td class="bgRed right">'.number_format($REXRdiffBS3).'</td>';}        
                                }
                            ?>
                            
                            
                        </tr>
                        <tr>
                            <td><strong>Intersegment Revenue</strong></td>
                            <?php
                                if($RINRbs0==0 || $StatementDate0BS==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                        if($RINRbs0==0)
                                            {echo '<td class="bgRed right">'.number_format($RINRdiffBS0).'</td><td></td>';}  
                                        else
                                        {
                                            $RINRdiffBS0 = array_sum($RTLR0) - array_sum($RINRbs0);
                                            if($RINRdiffBS0==0)
                                            {echo '<td class="bgYellow center">'.$true.'</td><td></td>'; }
                                            else
                                            {echo '<td class="bgRed right">'.number_format($RINRdiffBS0).'</td><td></td>';}   
                                        }
                                }

                                if($RINRbs1==0 || $StatementDate1BS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                        $RINRdiffBS1 = array_sum($RTLR1) - array_sum($RINRbs1);
                                        if($RINRdiffBS1==0)
                                        {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        else
                                        {echo '<td class="bgRed right">'.number_format($RINRdiffBS1).'</td>';}        
                                }

                                if($RINRbs2==0 || $StatementDate2BS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                        $RINRdiffBS2 = array_sum($RTLR2) - array_sum($RINRbs2);
                                        if($RINRdiffBS2==0)
                                        {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        else
                                        {echo '<td class="bgRed right">'.number_format($RINRdiffBS2).'</td>';}        
                                }

                                if($RINRbs3==0  || $StatementDate3BS==NULL)
                                {echo '<td class="center">'.$blank.'</td>'; }
                                else
                                {
                                        $RINRdiffBS3 = array_sum($RTLR3) - array_sum($RINRbs3);
                                        if($RINRdiffBS3==0)
                                        {echo '<td class="center">'.$true.'</td>'; }
                                        else
                                        {echo '<td class="bgRed right">'.number_format($RINRdiffBS3).'</td>';}        
                                }
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Income Before Tax </strong></td>
                            <?php
                                if($EIBTbs0==0 || $StatementDate0BS==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                        if($EIBTbs0==0)
                                            {echo '<td class="bgRed right">'.number_format($EIBTdiffBS0).'</td><td></td>';}  
                                        else
                                        {
                                            $EIBTdiffBS0 = array_sum($EIBT0) - array_sum($EIBTbs0);
                                            if($EIBTdiffBS0==0)
                                            {echo '<td class="bgYellow center">'.$true.'</td><td></td>'; }
                                            else
                                            {echo '<td class="bgRed right">'.number_format($EIBTdiffBS0).'</td><td></td>';}   
                                        }
                                }

                                if($EIBTbs1==0 || $StatementDate1BS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                        $EIBTdiffBS1 = array_sum($EIBT1) - array_sum($EIBTbs1);
                                        if($EIBTdiffBS1==0)
                                        {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        else
                                        {echo '<td class="bgRed right">'.number_format($EIBTdiffBS1).'</td>';}        
                                }

                                if($EIBTbs2==0 || $StatementDate2BS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                        $EIBTdiffBS2 = array_sum($EIBT2) - array_sum($EIBTbs2);
                                        if($EIBTdiffBS2==0)
                                        {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        else
                                        {echo '<td class="bgRed right">'.number_format($EIBTdiffBS2).'</td>';}        
                                }

                                if($EIBTbs3==0  || $StatementDate3BS==NULL)
                                {echo '<td class="center">'.$blank.'</td>'; }
                                else
                                {
                                        $EIBTdiffBS3 = array_sum($EIBT3) - array_sum($EIBTbs3);
                                        if($EIBTdiffBS3==0)
                                        {echo '<td class="center">'.$true.'</td>'; }
                                        else
                                        {echo '<td class="bgRed right">'.number_format($EIBTdiffBS3).'</td>';}        
                                }
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Income After Tax </strong></td>
                            <?php
                                if($TTAXbs0==0 || $StatementDate0BS==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                        if($TTAXbs0==0)
                                            {echo '<td class="bgRed right">'.number_format($TTAXdiffBS0).'</td><td></td>';}  
                                        else
                                        {
                                            $TTAXdiffBS0 = array_sum($TTAX0) - array_sum($TTAXbs0);
                                            if($TTAXdiffBS0==0)
                                            {echo '<td class="bgYellow center">'.$true.'</td><td></td>'; }
                                            else
                                            {echo '<td class="bgRed right">'.number_format($TTAXdiffBS0).'</td><td></td>';}   
                                        }
                                }

                                if($TTAXbs1==0 || $StatementDate1BS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                        $TTAXdiffBS1 = array_sum($TTAX1) - array_sum($TTAXbs1);
                                        if($TTAXdiffBS1==0)
                                        {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        else
                                        {echo '<td class="bgRed right">'.number_format($TTAXdiffBS1).'</td>';}        
                                }

                                if($TTAXbs2==0 || $StatementDate2BS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                        $TTAXdiffBS2 = array_sum($TTAX2) - array_sum($TTAXbs2);
                                        if($TTAXdiffBS2==0)
                                        {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        else
                                        {echo '<td class="bgRed right">'.number_format($TTAXdiffBS2).'</td>';}        
                                }

                                if($TTAXbs3==0  || $StatementDate3BS==NULL)
                                {echo '<td class="center">'.$blank.'</td>'; }
                                else
                                {
                                        $TTAXdiffBS3 = array_sum($TTAX3) - array_sum($TTAXbs3);
                                        if($TTAXdiffBS3==0)
                                        {echo '<td class="center">'.$true.'</td>'; }
                                        else
                                        {echo '<td class="bgRed right">'.number_format($TTAXdiffBS3).'</td>';}        
                                }
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Equity in Affiliates</strong></td>
                            <td class="bgYellow"></td>
                            <td></td>
                            <td class="bgGreen"></td>
                            <td class="bgGreen"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><strong>Other Unusual Expense (Income)</strong></td>
                            <td class="bgYellow"></td>
                            <td></td>
                            <td class="bgGreen"></td>
                            <td class="bgGreen"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><strong>Total Assets</strong></td>
                            <?php
                                if($ATOTbs0==0 || $StatementDate0BS==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                        if($ATOTbs0==0)
                                            {echo '<td class="bgRed right">'.number_format($ATOTdiffBS0).'</td><td></td>';}  
                                        else
                                        {
                                            $ATOTdiffBS0 = array_sum($ATOT0) - array_sum($ATOTbs0);
                                            if($ATOTdiffBS0==0)
                                            {echo '<td class="bgYellow center">'.$true.'</td><td></td>'; }
                                            else
                                            {echo '<td class="bgRed right">'.number_format($ATOTdiffBS0).'</td><td></td>';}   
                                        }
                                }

                                if($ATOTbs1==0 || $StatementDate1BS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                        $ATOTdiffBS1 = array_sum($ATOT1) - array_sum($ATOTbs1);
                                        if($ATOTdiffBS1==0)
                                        {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        else
                                        {echo '<td class="bgRed right">'.number_format($ATOTdiffBS1).'</td>';}        
                                }

                                if($ATOTbs2==0 || $StatementDate2BS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                        $ATOTdiffBS2 = array_sum($ATOT2) - array_sum($ATOTbs2);
                                        if($ATOTdiffBS2==0)
                                        {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        else
                                        {echo '<td class="bgRed right">'.number_format($ATOTdiffBS2).'</td>';}        
                                }

                                if($ATOTbs3==0  || $StatementDate3BS==NULL)
                                {echo '<td class="center">'.$blank.'</td>'; }
                                else
                                {
                                        $ATOTdiffBS3 = array_sum($ATOT3) - array_sum($ATOTbs3);
                                        if($ATOTdiffBS3==0)
                                        {echo '<td class="center">'.$true.'</td>'; }
                                        else
                                        {echo '<td class="bgRed right">'.number_format($ATOTdiffBS3).'</td>';}        
                                }
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Total Liabilities less LMNR Minority Interest</strong></td>
                            <?php
                                if($LTLLbs0==0 || $StatementDate0BS==NULL)
                                {echo '<td class="bgYellow center">'.$blank.'</td><td></td>'; }
                                else
                                {
                                        if($LTLLbs0==0)
                                            {echo '<td class="bgRed right">'.number_format($LTLLdiffBS0).'</td><td></td>';}  
                                        else
                                        {
                                            $LTLLdiffBS0 = array_sum($LTLL0) - array_sum($LMNR0) - array_sum($LTLLbs0);
                                            if($LTLLdiffBS0==0)
                                            {echo '<td class="bgYellow center">'.$true.'</td><td></td>'; }
                                            else
                                            {echo '<td class="bgRed right">'.number_format($LTLLdiffBS0).'</td><td></td>';}   
                                        }
                                }

                                if($LTLLbs1==0 || $StatementDate1BS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                        $LTLLdiffBS1 = array_sum($LTLL1) - array_sum($LMNR1) - array_sum($LTLLbs0);
                                        if($LTLLdiffBS1==0)
                                        {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        else
                                        {echo '<td class="bgRed right">'.number_format($LTLLdiffBS1).'</td>';}        
                                }

                                if($LTLLbs2==0 || $StatementDate2BS==NULL)
                                {echo '<td class="bgGreen center">'.$blank.'</td>'; }
                                else
                                {
                                        $LTLLdiffBS2 = array_sum($LTLL2) - array_sum($LMNR2) - array_sum($LTLLbs0);
                                        if($LTLLdiffBS2==0)
                                        {echo '<td class="bgGreen center">'.$true.'</td>'; }
                                        else
                                        {echo '<td class="bgRed right">'.number_format($LTLLdiffBS2).'</td>';}        
                                }

                                if($LTLLbs3==0  || $StatementDate3BS==NULL)
                                {echo '<td class="center">'.$blank.'</td>'; }
                                else
                                {
                                        $LTLLdiffBS3 = array_sum($LTLL3) - array_sum($LMNR3) - array_sum($LTLLbs0);
                                        if($LTLLdiffBS3==0)
                                        {echo '<td class="center">'.$true.'</td>'; }
                                        else
                                        {echo '<td class="bgRed right">'.number_format($LTLLdiffBS3).'</td>';}        
                                }
                            ?>
                        </tr>
                        <tr>
                            <th><br></th>
                        </tr>
<!---------------BUSINESS SEGMENT END-------------------------------------------------------------------------------------------->

<!---------------GEOGRAPHIC SEGMENT START------------------------------------------------------------------------------------------>
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
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($REXRgs0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($REXRgs1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($REXRgs2)).'</td>
                            <td class="right">'.number_format(array_sum($REXRgs3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Intersegment Revenue</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($RINRgs0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($RINRgs1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($RINRgs2)).'</td>
                            <td class="right">'.number_format(array_sum($RINRgs3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Income Before Tax </strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($EIBTgs0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($EIBTgs1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($EIBTgs2)).'</td>
                            <td class="right">'.number_format(array_sum($EIBTgs3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Income Tax</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($TTAXgs0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($TTAXgs1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($TTAXgs2)).'</td>
                            <td class="right">'.number_format(array_sum($TTAXgs3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Income After Tax </strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($TIATgs0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($TIATgs1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($TIATgs2)).'</td>
                            <td class="right">'.number_format(array_sum($TIATgs3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Equity in Affiliates</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($CEIAgs0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($CEIAgs1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($CEIAgs2)).'</td>
                            <td class="right">'.number_format(array_sum($CEIAgs3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Other Unusual Expense (Income)</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($EUIEgs0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($EUIEgs1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($EUIEgs2)).'</td>
                            <td class="right">'.number_format(array_sum($EUIEgs3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Total Assets</strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($ATOTgs0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($ATOTgs1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($ATOTgs2)).'</td>
                            <td class="right">'.number_format(array_sum($ATOTgs3)).'</td>';?>
                        </tr>
                        <tr>
                            <td><strong>Total Liabilities </strong></td>
                            <?php echo '<td class="bgYellow right">'.number_format(array_sum($LTLLgs0)).'</td>
                            <td></td>
                            <td class="bgGreen right">'.number_format(array_sum($LTLLgs1)).'</td>
                            <td class="bgGreen right">'.number_format(array_sum($LTLLgs2)).'</td>
                            <td class="right">'.number_format(array_sum($LTLLgs3)).'</td>';?>
                        </tr>
                        <tr>
                            <th><br></th>
                        </tr>
                        <tr>
                            <th style="font-size:15px;color:#ff0000;"><strong>BAL/INC vs SEGMENTS</strong></th>
                        </tr>
                        <tr>
                            <td><strong>Revenue</strong></td>
                            <td class="bgYellow"></td>
                            <td></td>
                            <td class="bgGreen"></td>
                            <td class="bgGreen"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><strong>Intersegment Revenue</strong></td>
                            <td class="bgYellow"></td>
                            <td></td>
                            <td class="bgGreen"></td>
                            <td class="bgGreen"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><strong>Income Before Tax </strong></td>
                            <td class="bgYellow"></td>
                            <td></td>
                            <td class="bgGreen"></td>
                            <td class="bgGreen"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><strong>Income Tax </strong></td>
                            <td class="bgYellow"></td>
                            <td></td>
                            <td class="bgGreen"></td>
                            <td class="bgGreen"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><strong>Income After Tax </strong></td>
                            <td class="bgYellow"></td>
                            <td></td>
                            <td class="bgGreen"></td>
                            <td class="bgGreen"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><strong>Equity in Affiliates</strong></td>
                            <td class="bgYellow"></td>
                            <td></td>
                            <td class="bgGreen"></td>
                            <td class="bgGreen"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><strong>Other Unusual Expense (Income)</strong></td>
                            <td class="bgYellow"></td>
                            <td></td>
                            <td class="bgGreen"></td>
                            <td class="bgGreen"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><strong>Total Assets</strong></td>
                            <td class="bgYellow"></td>
                            <td></td>
                            <td class="bgGreen"></td>
                            <td class="bgGreen"></td>
                            <td></td>


                        </tr>
                        <tr>
                            <td><strong>Total Liabilities less LMNR Minority Interest</strong></td>
                            <td class="bgYellow"></td>
                            <td></td>
                            <td class="bgGreen"></td>
                            <td class="bgGreen"></td>
                            <td></td>
                        </tr>
<!---------------GEOGRAPHIC SEGMENT END------------------------------------------------------------------------------------------>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>