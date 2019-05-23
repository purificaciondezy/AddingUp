<?php
      if(isset($_POST['fundbpro']))
      {

            $RepoNo = $_POST['RepoNo'];
            $FY = $_POST['FY'];
            $Type = $_POST['radioButton'];

            
                  $query = "SELECT DISTINCT i.IssuerID, i.RepoNo, b.IndType, i.IssuerName, coalesce(i.ExchangeCountryCode, i.CountryCode) Exchange_CountryCode, i.Active,  f.FinStmtType, p.FY,  f.Interim, max(Convert(varchar, p.EndDate,101)) as EndDate,  Convert(varchar, f.StatementDate,101) as StatementDate,  Convert(varchar, f.FilingDate,101) as FilingDate,  f.Flash, f.Preliminary, f.Detailed, f.SubmissionType, REPLACE(CONVERT(VARCHAR(50), (CAST(f.ReportUnit AS money)), 1), '.00', '') as Scaling, f.FilingType, p.PeriodType, c.InterimTypeDesc, f.DateLength, a.LineItemID, l.COA, l.ShortDescription, REPLACE(CONVERT(VARCHAR(50), (CAST(a.LineItemValue AS money)), 1), '.00', '') LineItemValue, a.UpdatedBy, Convert(varchar, a.UpdatedOn,1) as UpdatedOn,

                        --HelperStatementDate(FinStmtType/PeriodEndDate/Interim/DateLength)
                        LTRIM(RTRIM(f.FinStmtType))+ 
                        Convert(Varchar(5),Datediff(DD,'18991230',p.EndDate))+
                        LTRIM(RTRIM(Convert(Char,f.Interim)))+
                        LTRIM(RTRIM(Convert(Char,f.Datelength))) AS HelperStatementDate,

                        --HelperFilingType(FinStmtType/PeriodEndDate/Interim/StatementDate/DateLength)
                        LTRIM(RTRIM(f.FinStmtType))+ 
                        Convert(Varchar(5),Datediff(DD,'18991230',p.EndDate))+
                        LTRIM(RTRIM(Convert(Char,f.Interim)))+
                        Convert(Varchar(5),Datediff(DD,'18991230',f.StatementDate))+
                        LTRIM(RTRIM(Convert(Char,f.Datelength))) AS HelperFilingType,

                        --HelperValues(FinStmtType/PeriodEndDate/Interim/StatementDate/FilingType/InterimTypeDesc/DateLength/COA)
                        LTRIM(RTRIM(f.FinStmtType))+ 
                        Convert(varchar, p.EndDate,101)+
                        LTRIM(RTRIM(Convert(Char,f.Interim)))+
                        Convert(varchar, f.StatementDate,101)+
                        LTRIM(RTRIM(f.FilingType))+
                        LTRIM(RTRIM(c.InterimTypeDesc))+
                        LTRIM(RTRIM(Convert(Char,f.Datelength)))+
                        LTRIM(RTRIM(l.COA)) AS HelperValues,

                        --HelperInterimTypeLength(FinStmtType/PeriodEndDate)
                        LTRIM(RTRIM(f.FinStmtType))+ 
                        Convert(Varchar(5),Datediff(DD,'18991230',p.EndDate)) AS HelperInterimTypeLength,

                        --HelperInconsistentFPDFlag(Flash/Preliminary/Detailed)
                        case when f.flash = 1 then 'F, ' when f.flash = 0 then '' else 'UNDEFINED' end +
                        case when f.Preliminary = 1 then 'P, ' when f.Preliminary = 0 then '' else 'UNDEFINED' end +
                        case when f.Detailed = 1 then 'D ' when f.Detailed = 0 then '' else 'UNDEFINED'
                        end as HelperInconsistentFPDFlag, l.COA, REPLACE(CONVERT(VARCHAR(50), (CAST(a.LineItemValue AS money)), 1), '.00', '') as LineItemValue

                        from fundbpro..FunCompanyInfo i (nolock)
                        join fundbpro..Issuer b (nolock) on b.IssuerID = i.IssuerID
                        join fundbpro..Periodid p (nolock) ON i.IssuerID = p.IssuerID 
                        join fundbpro..Finfiling f (nolock) ON p.IssuerID = f.IssuerID AND p.PeriodID = f.PeriodID
                        join fundbpro..Lineitemid l (nolock) ON f.IssuerID = l.IssuerID AND f.FinStmtType = l.FinStmtType and p.PeriodType=l.PeriodType
                        left join fundbpro..ISLineItem a (nolock) ON a.IssuerID = l.IssuerID AND a.LineItemID = l.LineItemID AND a.PeriodID = p.PeriodID AND a.FilingID = f.FilingID
                        join fundbpro..interimtype c (nolock) ON f.InterimTypeID = c.InterimTypeID
                        where i.RepoNo = :RepoNoINC and p.FY in (:FYINC, :PFYINC)
                        and f.FinStmtType = 'INC'
                        and l.COA in ('RTLR','ECOR','ESGA','ETOE','EIBT','TTAX','TIAT','CIAC','XNIC','XNIA','STSI','VDEP','VAMI','VAMA','DCGD','DDPS1','DDPS2','DSPS1','VITT','EDEP','EAMI','ERXP','VRXP','EIIN','EIEX','NIIN','NIEN','VIEX','VCAP','VEIA','XTRA','GBAS','GDWS','HFFO','VIAU','ERDW','ERES','ELIT','EIAU','EIAS','EGLA','EUIE','NGLA','NUII','NRES','NLIT','NUIE','NAMA','VAMA','VGLA','VIAS','VIAU','VLIT','VRDW','VRES','VUIE','VRAD')
                        and a.UpdatedOn is not null
                        group by i.IssuerID, i.RepoNo, b.IndType, i.IssuerName, i.ExchangeCountryCode, i.CountryCode , i.Active,  f.FinStmtType, p.FY,  f.Interim, p.EndDate, f.StatementDate,  f.FilingDate,  f.Flash, f.Preliminary, f.Detailed, f.SubmissionType, f.ReportUnit, f.FilingType, p.PeriodType, c.InterimTypeDesc, f.DateLength, a.LineitemID, l.COA, l.ShortDescription, a.LineItemValue, a.UpdatedBy, a.UpdatedOn

                        -------------------BALANCE SHEET
                        UNION ALL
                        SELECT DISTINCT i.IssuerID, i.RepoNo, b.IndType, i.IssuerName, coalesce(i.ExchangeCountryCode, i.CountryCode) Exchange_CountryCode, i.Active,  f.FinStmtType, p.FY,  f.Interim, max(Convert(varchar, p.EndDate,101)) as EndDate,  Convert(varchar, f.StatementDate,101) as StatementDate,  Convert(varchar, f.FilingDate,101) as FilingDate,  f.Flash, f.Preliminary, f.Detailed, f.SubmissionType, REPLACE(CONVERT(VARCHAR(50), (CAST(f.ReportUnit AS money)), 1), '.00', '') as Scaling, f.FilingType, p.PeriodType, c.InterimTypeDesc, f.DateLength, a.LineItemID, l.COA, l.ShortDescription, REPLACE(CONVERT(VARCHAR(50), (CAST(a.LineItemValue AS money)), 1), '.00', '') LineItemValue, a.UpdatedBy, Convert(varchar, a.UpdatedOn,1) as UpdatedOn,
                        --HelperStatementDate(FinStmtType/PeriodEndDate/Interim/DateLength)
                        LTRIM(RTRIM(f.FinStmtType))+ 
                        Convert(Varchar(5),Datediff(DD,'18991230',p.EndDate))+
                        LTRIM(RTRIM(Convert(Char,f.Interim)))+
                        LTRIM(RTRIM(Convert(Char,f.Datelength))) AS HelperStatementDate,

                        --HelperFilingType(FinStmtType/PeriodEndDate/Interim/StatementDate/DateLength)
                        LTRIM(RTRIM(f.FinStmtType))+ 
                        Convert(Varchar(5),Datediff(DD,'18991230',p.EndDate))+
                        LTRIM(RTRIM(Convert(Char,f.Interim)))+
                        Convert(Varchar(5),Datediff(DD,'18991230',f.StatementDate))+
                        LTRIM(RTRIM(Convert(Char,f.Datelength))) AS HelperFilingType,

                        --HelperValues(FinStmtType/PeriodEndDate/Interim/StatementDate/FilingType/InterimTypeDesc/DateLength/COA)
                        LTRIM(RTRIM(f.FinStmtType))+ 
                        Convert(varchar, p.EndDate,101)+
                        LTRIM(RTRIM(Convert(Char,f.Interim)))+
                        Convert(varchar, f.StatementDate,101)+
                        LTRIM(RTRIM(f.FilingType))+
                        LTRIM(RTRIM(c.InterimTypeDesc))+
                        LTRIM(RTRIM(Convert(Char,f.Datelength)))+
                        LTRIM(RTRIM(l.COA)) AS HelperValues,

                        --HelperInterimTypeLength(FinStmtType/PeriodEndDate)
                        LTRIM(RTRIM(f.FinStmtType))+ 
                        Convert(Varchar(5),Datediff(DD,'18991230',p.EndDate)) AS HelperInterimTypeLength,

                        --HelperInconsistentFPDFlag(Flash/Preliminary/Detailed)
                        case when f.flash = 1 then 'F, ' when f.flash = 0 then '' else 'UNDEFINED' end +
                        case when f.Preliminary = 1 then 'P, ' when f.Preliminary = 0 then '' else 'UNDEFINED' end +
                        case when f.Detailed = 1 then 'D ' when f.Detailed = 0 then '' else 'UNDEFINED'
                        end as HelperInconsistentFPDFlag, l.COA, REPLACE(CONVERT(VARCHAR(50), (CAST(a.LineItemValue AS money)), 1), '.00', '') as LineItemValue

                        from fundbpro..FunCompanyInfo i (nolock)
                        join fundbpro..Issuer b (nolock) on b.IssuerID = i.IssuerID
                        join fundbpro..Periodid p (nolock) ON i.IssuerID = p.IssuerID 
                        join fundbpro..Finfiling f (nolock) ON p.IssuerID = f.IssuerID AND p.PeriodID = f.PeriodID
                        join fundbpro..Lineitemid l (nolock) ON f.IssuerID = l.IssuerID AND f.FinStmtType = l.FinStmtType and p.PeriodType=l.PeriodType
                        left join fundbpro..BSLineItem a (nolock) ON a.IssuerID = l.IssuerID AND a.LineItemID = l.LineItemID AND a.PeriodID = p.PeriodID AND a.FilingID = f.FilingID
                        join fundbpro..interimtype c (nolock) ON f.InterimTypeID = c.InterimTypeID
                        where i.RepoNo = :RepoNoBAL and p.FY in (:FYBAL, :PFYBAL)
                        and f.FinStmtType = 'BAL'
                        and l.COA in ( 'ACAE','ASTI','AACR','ASTR','APDA','AAMT','ADEP','ATOT','LAPB','LSTD','LCLD','LLTD','LCLO','LTLL','LMNR','QTLE','QTEL','QCSO1','QCSO2','QTSN1','QTSN2','QTCO','VFSS','METL','MNOS','VRUQ')
                        and a.UpdatedOn is not null
                        group by i.IssuerID, i.RepoNo, b.IndType, i.IssuerName, i.ExchangeCountryCode, i.CountryCode , i.Active,  f.FinStmtType, p.FY,  f.Interim, p.EndDate, f.StatementDate,  f.FilingDate,  f.Flash, f.Preliminary, f.Detailed, f.SubmissionType, f.ReportUnit, f.FilingType, p.PeriodType, c.InterimTypeDesc, f.DateLength, a.LineitemID, l.COA, l.ShortDescription, a.LineItemValue, a.UpdatedBy, a.UpdatedOn

                        -------------------CASH FLOW STATEMENT
                        UNION ALL
                        SELECT DISTINCT i.IssuerID, i.RepoNo, b.IndType, i.IssuerName, coalesce(i.ExchangeCountryCode, i.CountryCode) Exchange_CountryCode, i.Active,  f.FinStmtType, p.FY,  f.Interim, max(Convert(varchar, p.EndDate,101)) as EndDate,  Convert(varchar, f.StatementDate,101) as StatementDate,  Convert(varchar, f.FilingDate,101) as FilingDate,  f.Flash, f.Preliminary, f.Detailed, f.SubmissionType, REPLACE(CONVERT(VARCHAR(50), (CAST(f.ReportUnit AS money)), 1), '.00', '') as Scaling, f.FilingType, p.PeriodType, c.InterimTypeDesc, f.DateLength, a.LineItemID, l.COA, l.ShortDescription, REPLACE(CONVERT(VARCHAR(50), (CAST(a.LineItemValue AS money)), 1), '.00', '') LineItemValue, a.UpdatedBy, Convert(varchar, a.UpdatedOn,1) as UpdatedOn,
                        --HelperStatementDate(FinStmtType/PeriodEndDate/Interim/DateLength)
                        LTRIM(RTRIM(f.FinStmtType))+ 
                        Convert(Varchar(5),Datediff(DD,'18991230',p.EndDate))+
                        LTRIM(RTRIM(Convert(Char,f.Interim)))+
                        LTRIM(RTRIM(Convert(Char,f.Datelength))) AS HelperStatementDate,

                        --HelperFilingType(FinStmtType/PeriodEndDate/Interim/StatementDate/DateLength)
                        LTRIM(RTRIM(f.FinStmtType))+ 
                        Convert(Varchar(5),Datediff(DD,'18991230',p.EndDate))+
                        LTRIM(RTRIM(Convert(Char,f.Interim)))+
                        Convert(Varchar(5),Datediff(DD,'18991230',f.StatementDate))+
                        LTRIM(RTRIM(Convert(Char,f.Datelength))) AS HelperFilingType,

                        --HelperValues(FinStmtType/PeriodEndDate/Interim/StatementDate/FilingType/InterimTypeDesc/DateLength/COA)
                        LTRIM(RTRIM(f.FinStmtType))+ 
                        Convert(varchar, p.EndDate,101)+
                        LTRIM(RTRIM(Convert(Char,f.Interim)))+
                        Convert(varchar, f.StatementDate,101)+
                        LTRIM(RTRIM(f.FilingType))+
                        LTRIM(RTRIM(c.InterimTypeDesc))+
                        LTRIM(RTRIM(Convert(Char,f.Datelength)))+
                        LTRIM(RTRIM(l.COA)) AS HelperValues,

                        --HelperInterimTypeLength(FinStmtType/PeriodEndDate)
                        LTRIM(RTRIM(f.FinStmtType))+ 
                        Convert(Varchar(5),Datediff(DD,'18991230',p.EndDate)) AS HelperInterimTypeLength,

                        --HelperInconsistentFPDFlag(Flash/Preliminary/Detailed)
                        case when f.flash = 1 then 'F, ' when f.flash = 0 then '' else 'UNDEFINED' end +
                        case when f.Preliminary = 1 then 'P, ' when f.Preliminary = 0 then '' else 'UNDEFINED' end +
                        case when f.Detailed = 1 then 'D ' when f.Detailed = 0 then '' else 'UNDEFINED'
                        end as HelperInconsistentFPDFlag, l.COA, REPLACE(CONVERT(VARCHAR(50), (CAST(a.LineItemValue AS money)), 1), '.00', '') as LineItemValue

                        from fundbpro..FunCompanyInfo i (nolock)
                        join fundbpro..Issuer b (nolock) on b.IssuerID = i.IssuerID
                        join fundbpro..Periodid p (nolock) ON i.IssuerID = p.IssuerID 
                        join fundbpro..Finfiling f (nolock) ON p.IssuerID = f.IssuerID AND p.PeriodID = f.PeriodID
                        join fundbpro..Lineitemid l (nolock) ON f.IssuerID = l.IssuerID AND f.FinStmtType = l.FinStmtType and p.PeriodType=l.PeriodType
                        left join fundbpro..CFLineItem a (nolock) ON a.IssuerID = l.IssuerID AND a.LineItemID = l.LineItemID AND a.PeriodID = p.PeriodID AND a.FilingID = f.FilingID
                        join fundbpro..interimtype c (nolock) ON f.InterimTypeID = c.InterimTypeID
                        where i.RepoNo = :RepoNoCAS and p.FY in (:FYCAS, :PFYCAS)
                        and f.FinStmtType = 'CAS'
                        and l.COA in ('ONET','SDEP','OAMI','OTLO','IBAQ','ICEX','ITLI','FLDN','FSDN','FLDI','FSDI','FLDR','FSDR','FTLF','SFEE','SNCC','SNCB','SNCE','SCIP','SCTP','IINS','IINP','ISFA','ICEX','ISOI','IIAQ','ISOB','IIAQ','FSIC','FRRC','FSIP','FRRP','FDPC','FDPP','FRCP')
                        and a.UpdatedOn is not null
                        group by i.IssuerID, i.RepoNo, b.IndType, i.IssuerName, i.ExchangeCountryCode, i.CountryCode , i.Active,  f.FinStmtType, p.FY,  f.Interim, p.EndDate, f.StatementDate,  f.FilingDate,  f.Flash, f.Preliminary, f.Detailed, f.SubmissionType, f.ReportUnit, f.FilingType, p.PeriodType, c.InterimTypeDesc, f.DateLength, a.LineitemID, l.COA, l.ShortDescription, a.LineItemValue, a.UpdatedBy, a.UpdatedOn

                        -------------------BUSINESS SEGMENT
                        UNION ALL
                        SELECT DISTINCT i.IssuerID, i.RepoNo, b.IndType, i.IssuerName, coalesce(i.ExchangeCountryCode, i.CountryCode) Exchange_CountryCode, i.Active,  f.FinStmtType, p.FY,  f.Interim, max(Convert(varchar, p.EndDate,101)) as EndDate,  Convert(varchar, f.StatementDate,101) as StatementDate,  Convert(varchar, f.FilingDate,101) as FilingDate,  f.Flash, f.Preliminary, f.Detailed, f.SubmissionType, REPLACE(CONVERT(VARCHAR(50), (CAST(f.ReportUnit AS money)), 1), '.00', '') as Scaling, f.FilingType, p.PeriodType, c.InterimTypeDesc, f.DateLength, a.LineItemID, a.COA, e.description, REPLACE(CONVERT(VARCHAR(50), (CAST(a.Value AS money)), 1), '.00', '') LineItemValue, a.UpdatedBy, Convert(varchar, a.UpdatedOn,1) as UpdatedOn,
                        --HelperStatementDate(FinStmtType/PeriodEndDate/Interim/DateLength)
                        LTRIM(RTRIM(f.FinStmtType))+ 
                        Convert(Varchar(5),Datediff(DD,'18991230',p.EndDate))+
                        LTRIM(RTRIM(Convert(Char,f.Interim)))+
                        LTRIM(RTRIM(Convert(Char,f.Datelength))) AS HelperStatementDate,

                        --HelperFilingType(FinStmtType/PeriodEndDate/Interim/StatementDate/DateLength)
                        LTRIM(RTRIM(f.FinStmtType))+ 
                        Convert(Varchar(5),Datediff(DD,'18991230',p.EndDate))+
                        LTRIM(RTRIM(Convert(Char,f.Interim)))+
                        Convert(Varchar(5),Datediff(DD,'18991230',f.StatementDate))+
                        LTRIM(RTRIM(Convert(Char,f.Datelength))) AS HelperFilingType,

                        --HelperValues(FinStmtType/PeriodEndDate/Interim/StatementDate/FilingType/InterimTypeDesc/DateLength/COA)
                        LTRIM(RTRIM(f.FinStmtType))+ 
                        Convert(varchar, p.EndDate,101)+
                        LTRIM(RTRIM(Convert(Char,f.Interim)))+
                        Convert(varchar, f.StatementDate,101)+
                        LTRIM(RTRIM(f.FilingType))+
                        LTRIM(RTRIM(c.InterimTypeDesc))+
                        LTRIM(RTRIM(Convert(Char,f.Datelength)))+
                        LTRIM(RTRIM(a.COA)) AS HelperValues,

                        --HelperInterimTypeLength(FinStmtType/PeriodEndDate)
                        LTRIM(RTRIM(f.FinStmtType))+ 
                        Convert(Varchar(5),Datediff(DD,'18991230',p.EndDate)) AS HelperInterimTypeLength,

                        --HelperInconsistentFPDFlag(Flash/Preliminary/Detailed)
                        case when f.flash = 1 then 'F, ' when f.flash = 0 then '' else 'UNDEFINED' end +
                        case when f.Preliminary = 1 then 'P, ' when f.Preliminary = 0 then '' else 'UNDEFINED' end +
                        case when f.Detailed = 1 then 'D ' when f.Detailed = 0 then '' else 'UNDEFINED'
                        end as HelperInconsistentFPDFlag, a.COA, REPLACE(CONVERT(VARCHAR(50), (CAST(a.Value AS money)), 1), '.00', '') as LineItemValue

                        from fundbpro..FunCompanyInfo i (nolock)
                        join fundbpro..Issuer b (nolock) on b.IssuerID = i.IssuerID
                        join fundbpro..Periodid p (nolock) ON i.IssuerID = p.IssuerID 
                        join fundbpro..Finfiling f (nolock) ON p.IssuerID = f.IssuerID AND p.PeriodID = f.PeriodID
                        left join fundbpro..BIDBSDataValues a (nolock) ON a.IssuerID = f.IssuerID AND  a.PeriodID = p.PeriodID AND a.FilingID = f.FilingID
                        left join fundbpro..COACode e (nolock)on e.COA = a.COA
                        join fundbpro..interimtype c (nolock) ON f.InterimTypeID = c.InterimTypeID
                        where i.RepoNo = :RepoNoBS and p.FY in (:FYBS, :PFYBS)
                        and f.FinStmtType = 'BS'
                        and a.COA in ('REXR','RINR','EIBT','TTAX','TIAT','CEIA','EUIE','ATOT','LTLL')
                        and a.UpdatedOn is not null
                        group by i.IssuerID, i.RepoNo, b.IndType, i.IssuerName, i.ExchangeCountryCode, i.CountryCode , i.Active,  f.FinStmtType, p.FY,  f.Interim, p.EndDate, f.StatementDate,  f.FilingDate,  f.Flash, f.Preliminary, f.Detailed, f.SubmissionType, f.ReportUnit, f.FilingType, p.PeriodType, c.InterimTypeDesc, f.DateLength, a.LineitemID, a.COA, e.description, a.Value, a.UpdatedBy, a.UpdatedOn

                        -------------------GEOGRAPHIC SEGMENT
                        UNION ALL
                        SELECT DISTINCT i.IssuerID, i.RepoNo, b.IndType, i.IssuerName, coalesce(i.ExchangeCountryCode, i.CountryCode) Exchange_CountryCode, i.Active,  f.FinStmtType, p.FY,  f.Interim, max(Convert(varchar, p.EndDate,101)) as EndDate,  Convert(varchar, f.StatementDate,101) as StatementDate,  Convert(varchar, f.FilingDate,101) as FilingDate,  f.Flash, f.Preliminary, f.Detailed, f.SubmissionType, REPLACE(CONVERT(VARCHAR(50), (CAST(f.ReportUnit AS money)), 1), '.00', '') as Scaling, f.FilingType, p.PeriodType, c.InterimTypeDesc, f.DateLength, a.LineItemID, a.COA, e.description, REPLACE(CONVERT(VARCHAR(50), (CAST(a.Value AS money)), 1), '.00', '') LineItemValue, a.UpdatedBy, Convert(varchar, a.UpdatedOn,1) as UpdatedOn,
                        --HelperStatementDate(FinStmtType/PeriodEndDate/Interim/DateLength)
                        LTRIM(RTRIM(f.FinStmtType))+ 
                        Convert(Varchar(5),Datediff(DD,'18991230',p.EndDate))+
                        LTRIM(RTRIM(Convert(Char,f.Interim)))+
                        LTRIM(RTRIM(Convert(Char,f.Datelength))) AS HelperStatementDate,

                        --HelperFilingType(FinStmtType/PeriodEndDate/Interim/StatementDate/DateLength)
                        LTRIM(RTRIM(f.FinStmtType))+ 
                        Convert(Varchar(5),Datediff(DD,'18991230',p.EndDate))+
                        LTRIM(RTRIM(Convert(Char,f.Interim)))+
                        Convert(Varchar(5),Datediff(DD,'18991230',f.StatementDate))+
                        LTRIM(RTRIM(Convert(Char,f.Datelength))) AS HelperFilingType,

                        --HelperValues(FinStmtType/PeriodEndDate/Interim/StatementDate/FilingType/InterimTypeDesc/DateLength/COA)
                        LTRIM(RTRIM(f.FinStmtType))+ 
                        Convert(varchar, p.EndDate,101)+
                        LTRIM(RTRIM(Convert(Char,f.Interim)))+
                        Convert(varchar, f.StatementDate,101)+
                        LTRIM(RTRIM(f.FilingType))+
                        LTRIM(RTRIM(c.InterimTypeDesc))+
                        LTRIM(RTRIM(Convert(Char,f.Datelength)))+
                        LTRIM(RTRIM(a.COA)) AS HelperValues,

                        --HelperInterimTypeLength(FinStmtType/PeriodEndDate)
                        LTRIM(RTRIM(f.FinStmtType))+ 
                        Convert(Varchar(5),Datediff(DD,'18991230',p.EndDate)) AS HelperInterimTypeLength,

                        --HelperInconsistentFPDFlag(Flash/Preliminary/Detailed)
                        case when f.flash = 1 then 'F, ' when f.flash = 0 then '' else 'UNDEFINED' end +
                        case when f.Preliminary = 1 then 'P, ' when f.Preliminary = 0 then '' else 'UNDEFINED' end +
                        case when f.Detailed = 1 then 'D ' when f.Detailed = 0 then '' else 'UNDEFINED'
                        end as HelperInconsistentFPDFlag, a.COA, REPLACE(CONVERT(VARCHAR(50), (CAST(a.Value AS money)), 1), '.00', '') as LineItemValue

                        from fundbpro..FunCompanyInfo i (nolock)
                        join fundbpro..Issuer b (nolock) on b.IssuerID = i.IssuerID
                        join fundbpro..Periodid p (nolock) ON i.IssuerID = p.IssuerID 
                        join fundbpro..Finfiling f (nolock) ON p.IssuerID = f.IssuerID AND p.PeriodID = f.PeriodID
                        left join fundbpro..BIDGSDataValues a (nolock) ON a.IssuerID = f.IssuerID AND  a.PeriodID = p.PeriodID AND a.FilingID = f.FilingID
                        left join fundbpro..COACode e (nolock)on e.COA = a.COA
                        join fundbpro..interimtype c (nolock) ON f.InterimTypeID = c.InterimTypeID
                        where i.RepoNo = :RepoNoGS and p.FY in (:FYGS, :PFYGS)
                        and f.FinStmtType = 'GS'
                        and a.COA in ('REXR','RINR','EIBT','TTAX','TIAT','CEIA','EUIE','ATOT','LTLL')
                        and a.UpdatedOn is not null
                        group by i.IssuerID, i.RepoNo, b.IndType, i.IssuerName, i.ExchangeCountryCode, i.CountryCode , i.Active,  f.FinStmtType, p.FY,  f.Interim, p.EndDate, f.StatementDate,  f.FilingDate,  f.Flash, f.Preliminary, f.Detailed, f.SubmissionType, f.ReportUnit, f.FilingType, p.PeriodType, c.InterimTypeDesc, f.DateLength, a.LineitemID, a.COA, e.description, a.Value, a.UpdatedBy, a.UpdatedOn

                        order by i.IssuerID, p.FY desc, EndDate desc ,f.FinStmtType desc, f.DateLength desc";

                        $pdoResult = $conn->prepare($query);

                        $pdoExec = $pdoResult->execute(array(":RepoNoINC"=>$RepoNo, ":FYINC"=>$FY, ":PFYINC"=>$PFY, ":RepoNoBAL"=>$RepoNo, ":FYBAL"=>$FY, ":PFYBAL"=>$PFY, ":RepoNoCAS"=>$RepoNo, ":FYCAS"=>$FY, ":PFYCAS"=>$PFY, ":RepoNoBS"=>$RepoNo, ":FYBS"=>$FY, ":PFYBS"=>$PFY, ":RepoNoGS"=>$RepoNo, ":FYGS"=>$FY, ":PFYGS"=>$PFY));
            
                  if($Type == "SemiAnnual")
                  {     
                              if($pdoExec)
                              {
                                  echo '
                                  <tr>
                                        <th>IssuerID</th>
                                        <th>RepoNo</th>
                                        <th>IndType</th>
                                        <th>IssuerName</th>
                                        <th>Exchange_CountryCode</th>
                                        <th>Active</th>
                                        <th>FinStmtType</th>
                                        <th>FY</th>
                                        <th>Interim</th>
                                        <th>PeriodEndDate</th>
                                        <th>StatementDate</th>
                                        <th>FilingDate</th>
                                        <th>Flash</th>
                                        <th>Preliminary</th>
                                        <th>Detailed</th>
                                        <th>SubmissionType</th>
                                        <th>Scaling</th>
                                        <th>FilingType</th>
                                        <th>PeriodType</th>
                                        <th>InterimTypeDesc</th>
                                        <th>DateLength</th>
                                        <th>LineItemID</th>
                                        <th>COA</th>
                                        <th>ShortDescription</th>
                                        <th>LineItemValue</th>
                                        <th>UpdatedBy</th>
                                        <th>UpdatedOn</th>
                                        <th>HelperStatementDate</th>
                                        <th>HelperFilingType</th>
                                        <th>HelperValues</th>
                                        <th>HelperInterimTypeLength</th>
                                        <th>Task</th>
                                  </tr>'; 

                                  if($pdoResult->rowCount()==0)
                                  {
                                      echo 'Error';
                                  }
                                  else
                                  {
                                      foreach($pdoResult as $row)
                                      {
                                    echo
                                      '<tr>

                                      <td>'.$row['IssuerID'].'</td>            
                                      <td>'.$row['RepoNo'].'</td>          
                                      <td>'.$row['IndType'].'</td>         
                                      <td>'.$row['IssuerName'].'</td>          
                                      <td>'.$row['Exchange_CountryCode'].'</td>            
                                      <td>'.$row['Active'].'</td>          
                                      <td>'.$row['FinStmtType'].'</td>         
                                      <td>'.$row['FY'].'</td>          
                                      <td>'.$row['Interim'].'</td>         
                                      <td>'.$row['EndDate'].'</td>           
                                      <td>'.$row['StatementDate'].'</td>           
                                      <td>'.$row['FilingDate'].'</td>          
                                      <td>'.$row['Flash'].'</td>           
                                      <td>'.$row['Preliminary'].'</td>         
                                      <td>'.$row['Detailed'].'</td>            
                                      <td>'.$row['SubmissionType'].'</td>          
                                      <td>'.$row['Scaling'].'</td>         
                                      <td>'.$row['FilingType'].'</td>          
                                      <td>'.$row['PeriodType'].'</td>          
                                      <td>'.$row['InterimTypeDesc'].'</td>         
                                      <td>'.$row['DateLength'].'</td>          
                                      <td>'.$row['LineItemID'].'</td>          
                                      <td>'.$row['COA'].'</td>         
                                      <td>'.$row['ShortDescription'].'</td>            
                                      <td>'.$row['LineItemValue'].'</td>           
                                      <td>'.$row['UpdatedBy'].'</td>           
                                      <td>'.$row['UpdatedOn'].'</td>           
                                      <td>'.$row['HelperStatementDate'].'</td>           
                                      <td>'.$row['HelperFilingType'].'</td>          
                                      <td>'.$row['HelperValues'].'</td>          
                                      <td>'.$row['HelperInterimTypeLength'].'</td>            
                                      <td>'.$row['HelperInconsistentFPDFlag'].'</td>        

                                      </tr>';

                                    require 'header.php';
                                    
                                    
                                      }
                                      
                                  }
                  }

                  else
                  {
                        
                  }
            } 
      }
?>