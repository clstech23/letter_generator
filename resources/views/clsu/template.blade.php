<?php 
switch ($details->account_name) {
        
        case "COB":
            $accoutdsc = "Credit One Bank";
            break;
        case "BOA":
            $accoutdsc = "Bank Of America";
            break;
        case "NFD":
            $accoutdsc = "Navy Fed";
            break;
        }

        switch ($details->agency) {
        
        case "EXP":
            $agencydsc = "Experian";
            $pob       = "PO Box 9701";
            $adr       = "Allen, TX 75013";
            break;
        case "EQF":
            $agencydsc = "Equifax Information Services LLC";
            $pob       = "PO Box 105069";
            $adr       = "Atlanta, GA 30348";
            break;
        case "TRSU":
            $agencydsc = "TransUnion LLC Consumer Dispute Center";
            $pob       = "PO Box 2000";
            $adr       = "Chester, PA 19016";
            break;
        }
    switch ($details->letter) {
        
    case "ARLR1":
        $dscr = "Account Removal Letter R1";
        break;
    case "ARLR2":
        $dscr = "Account Removal Letter R2";
        break;
    case "ITDL":
        $dscr = "Identity Theft Dispute Letter";
        break;
    case "NPRRPC":
        $dscr = "No Parking Rule Refusal to Pay Cease and Desist";
        break;
    case "LPD":
        $dscr = "Late Payment Deletion Letter";
        break;
    case "PIUL":
        $dscr = "Personal Information Update Letter";
        break;
    case "ALDL":
        $dscr = "Auto Loan Deletion Letter";
        break;
    case "MCD":
        $dscr = "Medical Collection Deletion";
        break;

    case "BDL":
        $dscr = "Bankrupcy Deletion Letter";
        break;
    case "MC":
        $dscr = "Medical Collection";
        break;
    case "REL":
        $dscr = "Repossession Letter";
        break;
    case "CDVNL":
        $dscr = "Cease and Desit Volenti Non Injuria";
        break;
    case "MDL":
        $dscr = "Mortgage Deletion Letter";
        break;
    case "SLDL":
        $dscr = "Student Loan Deletion Letter";
        break;
    case "COL":
        $dscr = "Charge Off Letter";
        break;
    case "CSL":
        $dscr = "Child Support Letter";
        break;
    case "DVL":
        $dscr = "Debt Validation Letter";
        break;
    case "IRL":
        $dscr = "Inquiry Removal Letter";
        break;

        }

      
?>

@if($details->letter == "LPD")
@include('clsu.letter_templates.latepayment');
@elseif($details->letter == "ARLR1")
@include('clsu.letter_templates.account_removal_R1');
@elseif($details->letter == "ARLR2")
@include('clsu.letter_templates.account_removal_R2');
@elseif($details->letter == "BDL")
@include('clsu.letter_templates.bankrupcy');
@elseif($details->letter == "ALDL")
@include('clsu.letter_templates.auto_loan_deletion.bankrupcy');
@elseif($details->letter == "COL")
@include('clsu.letter_templates.charge_off_letter');
@elseif($details->letter == "CSL")
@include('clsu.letter_templates.child_support_letter');
@endif