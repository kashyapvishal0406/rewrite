<?php
date_default_timezone_set("Asia/Kolkata");
include("includes/agent_details.php");

$date_and_time = date("d-M-y h:i:a");
$center_wala_name = $agent_details['name'];
$name_center = $agent_details['shop_name'];

$channel_partner_name = $agent_details['name']; //pucho kya same hai. swati aur khusi 2 pade hain

$date = date("d-M-y");

$center_location = $agent_details['address']; //nahi dalwaya hai, sirf shop name hai.


// $date_and_time = date("d-M-y h:i:a");
// $center_wala_name = "Khusi Singh";
// $name_center = "Khusi";

// $channel_partner_name = "Swati Techtions Solution Pvt LTD";

// $date = date("d-M-y");

// $center_location = "Balaganj";


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aggrement</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <style>
        /* Add your custom CSS styles here */
        .letter-header {
            text-align: center;
        }

        .recipient {
            font-weight: bold;
        }

        .color_red {
            color: red;
        }

        .text_center {
            text-align: center;
        }

        .text_right {
            text-align: right;
        }


        /* .my_class {
            position: absolute;
            right: 0;
        } */
        .left {
            float: right;
        }
    </style>
</head>

<body>

    <p>
        <?php echo $date_and_time; ?>
    </p>
    <p class="text_center mt-5" style="margin-bottom:0px;">
        <?php echo $channel_partner_name; ?> TECHTIONS SOLUTION PVT LTD
    </p>
    <h3 class="text_center"> TECHTIONS SOLUTION PVT LTD</h3>
    <p class="text_center">Prepared by: TECHTIONS SOLUTION PVT LTD</p>
    <p class="text_center">Prepared for:
        <?php echo $center_wala_name; ?>
    </p>
    <p class="text_center">TS Pvt Ltd Agreement
    </p>
    THIS SERVICES AGREEMENT (hereinafter referred to as "The Agreement or "This Agreement"), is made at LUCKNOW, on this
    day <p clas>
        <?php echo $date; ?>
    </p>
    <p>BY AND BETWEEN</p>
    <p>Techtions Solution Pvt Ltd a Company registered under the provisions of the Indian Companies Act 2013, having its
        registered office at 628S/374B, Vikash Bhawan Road Near Chauhan Market, Indra Nagar, Sarvodaya Nagar, Lucknow,
        Uttar Pradesh – 226016 having the Corporate Identification Number (CIN)- U82990UP2023PTC184694 which expression
        shall, unless it be repugnant to the subject or context thereof, include its successors, nominees and permitted
        assignees and hereinafter called as FIRST PART;</p>
    <p class="text_center">TS PVT LTD</p>
    <p>
        <?php echo $center_wala_name; ?>
        having its office at
        <?php echo $name_center; ?>
        ,
        <?php echo $center_location; ?>
    </p>
    which is a
    <?php echo $name_center; ?>
    herein after referred to as the "TS PVT LTD" (which expression shall unless it be repugnant to the context or
    meaning thereof be deemed to mean and include its/his/her successors, legal heirs, nominees and permitted assignees,
    as the case may be) of the OTHER PART.</p>
    <p>WHEREAS TECHTIONS SOULTION is Private Limited & engaged in India as Provider of Financial and Management
        Consulting Services including TS PVT LTD Facilitation actives as stipulated by the Govt. of India, CBEC and -
        GSTN from time to time and https://techtionsolution.com/ is the website through which the services are rolled
        out to the customer/partners.</p>

    <P><b>WHERE AS </b></P>
    <p class="my">A) "TS PVT LTD" is an independent service provider/ business entity for Commission and will perform
        the work / activities for TS as agreed upon under the present Agreement or any Addendum or Corrigendum thereto.
    </p>
    <p> B) "TS PVT LTD "has approached TS -expressing its desire to be a Partner of TS PVT LTDc in promoting, marketing,
        targeting various clients for expansion of TS business. TS has accepted the said offer and agreed to grant the
        Partner, rights to operate as a TS PVT LTD subject to the terms and conditions of this Agreement, and
        conditioned upon TS PVT LTD continual adherence and conformity to the TS policies and standards. </p>
    <p>NOW THEREFORE in consideration of the foregoing and the mutual covenants and promises contained herein and other
        good and valuable consideration the receipt and adequacy of which is hereby acknowledged, the Parties intending
        to be bound legally, agree as follows:</p>

    <h2>1. Definition:</h2>

    <p>1.1 "Agreement" means this Agreement and annexure (s) to this Agreement and amendments made to this Agreement
        from time to time in writing with the consent of both the Parties, in accordance with the TS PVT LTD of this
        Agreement.
    </p>


    <p>1.2 "Annexure" means an annexure attached to this Agreement, mutually agreed and signed by both the Parties,
        which shall form an integral part of this Agreement.</p>


    <p>1.3 " TS PVT LTD" shall mean and include any associate/s, Affiliate , Subsidiary , group companies of TS PVT LTD
        or a person designated by TS PVT LTD to enter into this Agreement on his behalf.</p>


    <p>1.4 TS PVT LTD: shall have the meaning set out in Recital A above. </p>


    <p>1.5 "TS PVT LTD Act: shall mean and include the Acts, laws, rules and regulations, in relation to roll out of
        Goods and Services Tax which may be passed by the Government of India and thereafter it shall become effective
        from the date of its notification or as may be mentioned thereunder.</p>


    <p>1.6 "GSTN: The Government of India is proposing to implement Goods and Services Tax ("GST") and for this purpose,
        the government has engaged Goods and Services Tax Network ("GSTN") for setting up an information technology and
        communications infrastructure system ("GST System") for implementation of the same. </p>


    <p>1.7 TS PVT LTD: shall mean and include any person or entity who enters into this Agreement with TS PVT LTD and shall
        also include any associate of TS or a person designated/authorized by TS to enter into this Agreement on his
        behalf;</p>


    <p>1.8 'Territory' shall mean the territory of India only.</p>


    <p>1.9 'Term' shall have the meaning ascribed to it in clause 12 of this Agreement.</p>

    <h2>2. Commencement & Term</h2>


    <p>2.1 This Agreement shall commence from its date of execution mentioned above 24 Mar 2022.</p>


    <p>2.2 Your License is valid for 1 years from the date of its execution, unless terminated by the TS PVT LTD by
        giving notice in writing in accordance with the termination clauses of this Agreement.</p>


    <p>2.3 Unless terminated earlier in accordance with this Agreement, the Agreement shall end on completion of the
        term specified in the Agreement or on expiration of the renewed term.</p>


    <h2>3. Scope of Services: </h2>
    <p>a) To participate in all the training, awareness and outreach programs at their end for the end customers to
        bring the benefit of GST to them.</p>

    <p>b) To support the business associate of TS PVT LTD in all the marketing related programs with their active
        participation.</p>

    <p>c) To provide the end customers the services prescribed by the company Techtions Solution at the rate prescribed
        by them without hiding any facts from the customer.</p>

    <p>d) To keep the trust of the end customers/payers intact and ensuring their data integrity to the fullest.</p>

    <p>e) To provide most customer friendly environment to the end customers/payers without any discrimination based on
        their financial standing or any prejudice.
    </p>

    <p>f) To clear all the dues on timely fashion. In case of failure the login may be suspended.</p>

    <p>f) To clear all the dues on timely fashion. In case of failure the login may be suspended. </p>

    <p>g) To Ensure Compliance to Regulatory, Statutory and Legal frameworks by TS PVT LTD.</p>

    <p>h) To Facilitate Rolling out of Additional Financial Services as proposed by TS PVT LTD.</p>

    <h2>4. Responsibilities of TS PVT LTD:</h2>


    <p>a) TS PVT LTD shall provide the CRM and its Maintenance and Upgrade as per Directives of GSTN from time to time.
    </p>

    <p>b) TS PVT LTD will communicate to TS Distributer about all the Upgrades and Amendments in the ACT, Rules,
        Regulations, and Functionalities of the GST ecosystem.
    </p>

    <p>c) TS PVT LTD shall arrange for a Call Centre accessible by Distributer for queries and problem reporting about
        the CRM support.
    </p>

    <p>d)TS PVT LTD is maintaining a website with the name of https://techtionsolution.com/ to a CRM and application to
        connected GSP and ASP. TS shall ensure that sufficient access is provided to all the active partners at all the
        times during the existence of the agreement, limited only by the system provision by the backend partners.
    </p>

    <p><b>Nature of Services: </b></p>

    <h3>Level 1 services</h3>

    <ol>
        <li>Loan</li>
        <li>Home Loan</li>
        <li>Business Loan</li>
        <li>Personal Loan</li>
        <li>Housing Loan</li>
        <li>Loan Against Property Loan</li>
        <li>MSME Loan</li>
        <li>Education Loan</li>
        <li>Gold Loan</li>
        <li>Mudra Loan</li>
        <li>Kisan Loan</li>
        <li>Instant Loan</li>
        <li>Lap Loan</li>
        <li>Term Loan</li>
        <li>Cash Loan</li>
        <li>Vehicle Loan Micro ATM</li>
    </ol>

    <h3>Insurances</h3>
    <ol>
        <li>Car Insurance</li>
        <li>Two-Wheeler Insurance</li>
        <li>Health Insurance</li>
        <li>Group Term Insurance</li>
        <li>Life Insurance (renewal)</li>
        <li>General Insurance</li>
        <li>Group Term Insurance</li>
        <li>Rap Registration</li>
        <li>Vehicle / Motor Insurance</li>
        <li>Travel Insurance</li>
        <li>Corporate Insurance</li>
        <li>Personal Insurance</li>
        <li>Keyman Insurance</li>
        <li>Commercial Vehicle Insurance</li>
    </ol>
    <h3>Credit Card</h3>
    <h3>Online Service</h3>
    <ol>
        <li>Adhar card</li>
        <li>Pan Card</li>
        <li>Passport</li>
        <li>Swachh Bharat Abhiyan</li>
        <li>PM Awas Yojana</li>
        <li>Soll Health card</li>
        <li>Pradhan Mantri Fasal Bima Yojana</li>
        <li>Money Transfer</li>
    </ol>

    <h3>GST</h3>
    <ol>
        <li>GST Registration In Regolar Scheme For Proprietor</li>
        <li>GST Registration For PVT LDT / LLP Partnership</li>
        <li>GST QRMP Scheme For regolar return – (25 Invoice)</li>
        <li>GST Return filling composition scheme</li>
        <li>GST monthly return filling regolar scheme (25 Invoice)</li>
        <li>GST (Nill) Monthly Return filling regolar scheme</li>
        <li>GST Annual return (GSTR 9 / 9A)</li>
        <li>GST Audit (upto 5 crore)</li>
        <li>GST Audit (Above 5 Crore upto 10 Crore)</li>
        <li>GST cash refund</li>
        <li>GST Ecommerce return (GSTR-8)</li>
        <li>GST Final (GSTR-10)</li>
        <li>GST Reconciliation (upto 3 months)</li>
        <li>GST regolar return (annual charges)</li>
        <li>GST surrender</li>
        <li>GST registration in composition scheme (CMP 08)</li>
        <li>GST (Nill) return filling composition scheme</li>
        <li>GST PM 09 Form submission</li>
        <li>GST QRMP scheme for regolar return- (100 Invoice)</li>
        <li>GST Monthly return filling regolar scheme (upto 100 Invoice)</li>
        <li>GST Mothly return filling regolar scheme (upto 200 Invoice)</li>
        <li>GST composition to regolar scheme</li>
        <li>Revocation of cancellation of GST License</li>
        <li>Compolsory conversion of OPC into private limited into public limited Company</li>
        <li>Conversion of private limited into public limited</li>
        <li>GSTR – 07</li>
        <li>GST QRMP scheme (Nill) For regolar return</li>
        <li>GST QRMP scheme for regolar return – (200 invoice)</li>
        <li>GST QRMP scheme for regolar return – (upto 7020 invoice) (Excel Format)</li>
        <li>GST Monthly return filling regolar scheme (upto 700 invoices) (Excel Format)</li>
        <li>DRC – 03 Filling</li>
        <li>Appeal filling against GST cancellation</li>
        <li>GSTR-6 return filling</li>
        <li>GST regolar to composition scheme</li>
        <li>Free GST registration along with 12 month nil return</li>
        <li>GSTR search License</li>
        <li>GST Annual return GSTR-4</li>
    </ol>

    <h3>ITR</h3>
    <ol>
        <li>ITR (For Salaried person / 1 house property / other source) / ITR 1 for F.Y 22-23 (A.Y 23-24)</li>
        <li>ITR (proprietor business & profession) ITR-3 / ITR-4 for F.Y 22-23 (A.Y 23-24)</li>
        <li>ITR (Capital Gain / House Property / Other Source) ITR 2 For F.Y 22-23 (A.Y 23-24)</li>
    </ol>

    <h3>Accounting</h3>
    <ol>
        <li>Company Registration Haryana (At 1 Lac capital value and 2 directors)</li>
        <li>Monthly accounting Package / GST Bookkeeping / Digital Tax Payment (upto 20l turnover) monthly</li>
        <li>Yearly accounting Package / GST Bookkeeping / GST return filing / Reconciliation / Digital Tax Payment (upto
            20l turnover) monthly</li>
    </ol>

    <h3>Audit</h3>
    <ol>
        <li>Income Tax Audit (Above 1 crore upto 2 crore) Delhi / NCR</li>
        <li>Income Tax Audit (Above 2 crore upto 5 crore) Delhi / NCR</li>
    </ol>

    <h3>DSC</h3>
    <ol>
        <li>DSC Class 3 Signature for individuals (2 years) (without token)</li>
        <li>DSC Class 3 Combo (2 years) (without token)</li>
        <li>DSC Class 3 Signature for organizations (2 years) (without token)</li>
    </ol>

    <h3>FSSAI</h3>
    <ol>
        <li>FSSAI Basic Registration (Excluding Govt Fee)</li>
        <li>FSSAI State/Central License (Excluding Govt Fee)</li>
        <li>FSSAI Registration Certificate</li>
    </ol>

    <h3>MSME</h3>
    <ol>
        <li>Udyam Registration</li>
        <li>Udyam Kyc Update</li>
        <li>Upgrade Package</li>
    </ol>

    <h3>TDS</h3>
    <ol>
        <li>TDS Return (Quarter Filing) for individual</li>
        <li>TDS Return (Quarter Filing) for Organization</li>
        <li>TDS Chalan Submission</li>
    </ol>

    <h3>Tax</h3>
    <ol>
        <li>Advance Tax</li>
        <li>House Tax</li>
        <li>Water Tax</li>
    </ol>

    <h3>IEC</h3>
    <ol>
        <li>Import Export Code (IEC) Amendment</li>
        <li>Import Export Code (IEC) Registration Excluding Govt. Fee (Company)</li>
        <li>Import Export Code (IEC) Registration Excluding Govt. Fee (Partnership)</li>
    </ol>

    <h3>Trademark</h3>
    <ol>
        <li>Trademark registration - Individual (gov fee)</li>
        <li>Trademark registration - Other than Individual (gov fee)</li>
        <li>Trademark registration - processing fee</li>
    </ol>

    <h3>Eway</h3>
    <ol>
        <li>E-Way bill - Registration for individual</li>
        <li>E-Way bill - Single for individual</li>
        <li>E-Way - (pack - 5) One month for individual</li>
    </ol>

    <h3>Tours & Travel</h3>
    <ol>
        <li>Flight Ticket</li>
        <li>Bus Ticket</li>
        <li>Train Booking</li>
    </ol>

    <h3>State Government Services</h3>
    <ol>
        <li>Haryana e-District Services</li>
        <li>MP State Services</li>
        <li>West Bengal e-District Services</li>
    </ol>

    <h3>Web Services</h3>
    <ol>
        <li>Website (1 page website)</li>
        <li>E-commerce website</li>
        <li>SSL Certificate</li>
    </ol>

    <h3>Recharge</h3>
    <ol type="1">
        <li>Mobile Recharge</li>
        <li>DTH</li>
        <li>Data Card Bill</li>

    </ol>

    <h3>AEPS</h3>
    <ol>
        <li>CMS (Loan Repayment)</li>
        <li>Cash Deposit</li>
        <li>ATM Machine Apply</li>
    </ol>

    <h3>Other</h3>
    <ol>
        <li>Alteration / Addition in Company</li>
        <li>Amendment or correction in GST Application</li>
        <li>Charitable Trust Registration (Delhi)</li>
        <li>Micro ATM</li>
    </ol>

    <h3>Money Transfer</h3>
    <ol>
        <li>Other Utility Services</li>
        <li>Electricity new Connection</li>
        <li>Water Supply</li>
        <li>Sewer Connection</li>
        <li>Bharat Bill Payment System</li>
        <li>BBPS Mobile Postpaid</li>
        <li>BBPS DTH</li>
        <li>BBPS Landline Postpaid</li>
    </ol>

    <h3>Educational Services</h3>
    <ol>
        <li>NIELIT Facilitation Centre</li>
        <li>Tally Software Registration</li>
        <li>ITI Registration</li>
    </ol>

    <h3>FASTag</h3>
    <ol>
        <li>Navy Recruitment</li>
        <li>Job Seekers Registration</li>
        <li>Application Form Submission</li>
        <li>Employment Service</li>
        <li>Navy Recruitment</li>
        <li>Job Seekers Registration</li>
        <li>Application Form Submission</li>
    </ol>

    <h3>Labour and Pension</h3>
    <ol>
        <li>II Labour Certificate and Registration</li>
        <li>National Pension Scheme (NPS)</li>
        <li>Swavalamban Contribution</li>
    </ol>

    <h3>Election</h3>
    <ol>
        <li>Voter Registration - Form 6</li>
        <li>Deletion of Name - Form 7</li>
        <li>Modifications or Corrections - Form 8, 8A</li>
    </ol>

    <p>ADHAR Enabled payment system is a bank led model which allows ONLINE inter-operable financial inclusion
        transaction at POS
        (Micro ATM) through the Business correspondent of any bank using the ADHAR authentication allows you to do six
        types of transactions.
    </p>

    <p>The only inputs required for a customer to do a transaction under this scenario are:</p>
    <ol>
        <li>IIN (Identifying the Bank to which the customer is associated)</li>
        <li>Aadhaar Number</li>
        <li>Fingerprint captured during their enrollment</li>
    </ol>

    <p>It works as Mini ATM and you can give cash to your clients and earn attractive commissions.</p>

    <p>4. Level Services</p>

    <p>I. Banking on Demand</p>

    <p>Any other Product or Financial Services that TS PVT LTDc intends to add from time to time.</p>

    <h2>5. TS Pvt Ltd or his staffs/employees would adhere to the Following:</h2>


    <p>A) Minimum qualifications of Graduation (in exceptional cases Xll Pass with computer operation course) with
        adequate Computer Proficiency for selecting them in the capacity of staff/employee.</p>

    <p>B) Ensure regular services are offered to the customers at the TS PVT LTD. The TS PVT LTD would be free to
        determine and announce the Working Days and Timings based on the Local Needs. The Working Hours would be put up
        prominently at the TS PVT LTD for the benefit of the Payers. Adherence to the Working Hours must be ensured. The
        charge for odd working hours may be notified in advance by the TS PVT LTD, if any. All Staff must be trained to
        handle with care, their responsibilities particularly aspects like soliciting customer, hours of calling,
        privacy of
        customer information and informing the correct terms and conditions of the products/services offered ETC.</p>

    <p>C) Shall ensure that due diligence is done on selected agents/ employees / representatives.</p>

    <p>D) TS PVT LTD shall not sub-contract or outsource his work to any one and any sub-contracting or outsourcing of
        work shall be null and void ab initio and the TS PVT LTD shall ensure that the secrecy and faith of TS PVT LTD/
        payer's data/processes is maintained at all times.</p>

    <p>E) In case of any breach of Trust or Process by any agent/employees/representative leading to a Complaint with
        the Police or any other Law Enforcing Agency, the TS PVT LTD would be responsible for amicable resolution of the
        same and ensure that TS PVT LTD does not attract any disrepute or penalty whatsoever.</p>
    <p>F) TS PVT LTD shall adhere to the performance standards in respect of services and products as advised by TS from
        time to time.</p>

    <h2>6. Representations and Warrants </h2>
    <p>Each of the Parties represents and warrants in relation to itself to the other that: </p>
    <p>A) TS PVT LTD has all requisite qualification and has eligibility to execute, deliver and perform its obligations
        under this Agreement.</p>
    <p>B) TS PVT LTD has all necessary statutory and regulatory permissions, approvals and permits for the running and
        operation of its business.</p>
    <p>C) TS PVT LTD has full right, title and interest in and to ail software, copyrights, trade names, trademarks,
        service marks, logos symbols and other proprietary marks (collectively "IPR) (including appropriate limited
        right of use of those owned by any of its vendors, affiliates or subcontractors) which it provides to the TS PVT
        LTD, for use related to the services to be provided under this Agreement. TS PVT LTD .will provide such
        cooperation as the TS reasonably requests in order to give full effect to the provisions of this Agreement.</p>
    <p>D) The execution and performance of this Agreement by any of the Parties does not and shall not violate any
        provision of any of the existing Agreement with any of the party and any other third party.</p>
    <p>E) Within the Term of this agreement, TS PVT LTD shall ordinarily not sell the business to any other entity. In
        case, TS PVT LTD decides to do so, the TS PVT LTD would be given prior intimation and meeting will be arranged
        with the Prospective to allow an opportunity for TS PVT LTD to negotiate the new terms of engagement with the
        Buyer or move the TS PVT LTD:'S clients to an alternative related Service Provider.</p>
    <h2>7. Maintenance of Records </h2>
    <p>A) TS PVT LTD specifically agrees to maintain all other records accounts including registers / documents etc. as
        per instructions of the TS PVT LTD from time to time and ensure safe and proper custody of ail records, accounts
        including documents ETC.</p>
    <p>B) The TS PVT LTD shall maintain the records, registers, accounts and documents relating to the customer
        information in such manner so that those can be isolated, identified and segregated and the TS PVT LTD shall
        protect the absolute confidentiality there. In the Course of Business, the TS PVT LTD may be requested by Payers
        to provide Data/Reports regarding their Books of Accounts / Returns. All requests must invariably come from
        Authorized Personnel of the Payer and a proper record must be kept detailing the requests received and serviced
        by TS PVT LTD.</p>
    <p>C) TS PVT LTD specifically agrees that the TS shall be entitled to inspect and audit the records maintained by TS
        PVT LTD through its officers/employees or agents / auditors as may be decided by the TS at its sole discretion
        and TS PVT LTD hereby undertakes to promptly produce all records and information required for this purpose / for
        the purposes of inspection and audit. TS PVT LTD shall provide access, to the Officers / employees /
        representatives / agents or auditors of the TS to the</p>
    <p>D) premises / places where such records are kept / maintained. The TS PVT LTD shall have a right to obtain copies
        of any audit report, review reports and findings made on the TS in connection with the services performed by TS
        for the TS PVT LTD.</p>
    <p>E) Further,TS PVT LTD specifically agrees that it shall allow access to Authorities or persons authorized by
        Authorities or its employees/officers to inspect and access the documents, accounts, records of transactions and
        all necessary information in possession of, or stored or processed by the TS within a reasonable time. The
        persons authorized by Authorities shall have right to obtain copies of the records, information ETC, in
        possession of TS PVT LTD.</p>
    <p>F) TS PVT LTD further agrees that in case access is not allowed to the persons authorized by Authorities for the
        purposes of inspection which results in imposition of penalty Authorities upon the TS, and TS is required to pay
        such penalty, TS PVT LTD shall be liable to reimburse to the TS PVT LTD such fees including any penalty,
        interest levied and recovered.</p>
    <p>G) The TS PVT LTD would have right to conduct surprise check of the Service Provider's activities in respect of
        the
        Services.
    </p>
    <p>H) The TS PVT LTD agrees to preserve the documents and data in respect of the Services for such period in
        accordance with the legal / regulatory obligation of the TS PVT LTD in this regard.</p>

    <p>I) The TS PVT LTD agrees that the Complaints / feedback, if any received from the Payers in respect of the
        Services by TS shall be recorded and TS PVT LTD shall have access to such records and redressal of customer
        complaints by the TS PVT LTD.</p>
    <p>J) l. TS PVT LTD specifically agrees that the TS has full right to monitor and assess the performance of services
        by TS PVT LTD: and wherever the TS discovers any deficiency or non-performance of the services up to the mark; the TS
        PVT LTD shall instruct the TS in writing and TS agrees to rectify the deficiencies or to ensure compliance of
        the instructions of the TS PVT LTD.</p>
    <p>K) J. TS PVT LTD agrees to prepare and produce by (Date of Execution) a "Business Continuity Plan" for the
        purposes of ensuring continued rendering of services undertaken by the TS PVT LTD.</p>

    <h2>8. Confidentiality </h2>
    <p>A) TS PVT LTD is aware that all information disclosed to the TS PVT LTD and all records, accounts, documents
        maintained by TS PVT LTD are confidential in nature and having regard to the sensitive nature of the information
        and records, specifically agrees to maintain integrity, secrecy and confidentially of all the information and
        records, accounts in respect of the services in the same manner & degree of care as TS PVT LTD would ensure for
        its own confidential & sensitive information. TS PVT LTD shall ensure that appropriate and suitable undertaking
        / agreements are obtained and maintained from its</p>

    <p>B) 324/22, User employees, agents and representatives as the case may be to ensure compliance with
        confidentiality obligations of TS PVT LTD.</p>
    <p>C) TS shall hold the Confidential Information in confidence and shall exercise all reasonable diligence in
        ensuring that the Confidential</p>
    <p>D) Information is not disclosed to third parties and will refrain from using the Confidential Information for any
        purpose whatsoever other than for the purposes of this Agreement or for the purpose for which such information
        is supplied. TS PVT LTD shall also ensure that confidential information, directly or indirectly, is not
        disclosed without prior written consent of the TS PVT LTD.
    </p>
    <p>E) In the event that TS PVT LTD becomes legally compelled pursuant to any statutory or regulatory provision,
        court or a decision, governmental order requirements to disclose any of the Confidential Information, the
        compelled Party, as far as possible will provide the TS with prompt written notice. In any case, the compelled
        Party will furnish only that portion of the Confidentiality information which is legally required and will
        exercise all reasonable efforts to obtain reliable assurance that confidential treatment will be accorded to the
        Confidential Information.</p>
    <p>F) D. TS PVT LTD specifically agrees that the confidentiality obligations of the TS PVT LTD in terms of this
        agreement shall survive termination of this agreement.</p>
    <p>G) E. TS PVT LTD agrees that the products and services of other TS PVT LTD Service Providers will not be provided
        at the service outlets.</p>

    <h2>9. Relationship between the Parties</h2>
    <p>It is specifically agreed that the TS PVT LTD is an independent business entity and shall not be deemed to be the
        Agent of the TS except in respect of the transactions/services on account of TS and other related services
        enabled by TS noted above which give rise to Principal Agent relationship by implication.</p>
    <p>Neither TS nor its employees, agents, representatives shall hold out or represent as agents of the TS or GSTN.
        Neither the TS nor its employees, representatives or agents of TS shall be entitled to claim permanent
        absorption or any other claim or benefit against the TS or the concerned departments at any point of time.</p>
    <p>At no point of time, TS PVT LTD or his agents, representatives, shall claim any kind of employment with TS PVT
        LTD.</p>

    <h2>10. Compliance with Laws by TS PVT LTD</h2>
    <p>TS hereby agrees and declares that it shall be the sole responsibility of TS to comply with the provisions of all
        the applicable laws, concerning or in relation to rendering of services by TS as envisaged under this agreement.
    </p>
    <p>TS shall procure and maintain all necessary licenses permissions, approvals from the relevant authorities under
        the applicable laws throughout the currency of this agreement.</p>
    <p>TS shall solely liable & responsible for compliance of applicable Labour Laws in respect of its employees,
        agents, representatives in</p>
    <p>particular Laws relating to terminal benefits such as Pension, Gratuity, Provident Fund, Bonus or other benefits
        to which they may be entitled and the TS PVT LTD shall have no liability in this regard.</p>
    <p>TS PVT LTD hereby represents and warrants that it has full authority to enter into this Agreement and render the
        services as envisaged under this agreement with the TS PVT LTD.</p>
    <h2>11. Fees, Taxes, Duties & Payments</h2>
    <p>A) TS PVT LTD charges shall be governed by the marketing plan applicable to the users on time to time. All such
        payments shall be non refundable service payments for franchise fee, software solution, training and
        administrative expenses. The specific terms of the engagement shall be governed by the current scheme present at
        the time of signing of the agreement.</p>
    <p>B) TS PVT LTD shall be paid fees and commission subject to deduction of income thereon wherever required under
        the provisions of the Income Act by the TS. The rates of the services and the commission shall be part of the
        "Rates for Services" and that shall be available to the TS PVT LTD partners on the CRM portal. The rates and
        commission structure shall keep on changing based on the market condition. The applicable rates on any product
        shall be made known to the TS PVT LTD Franchise Partners through email/CRM page update.</p>
    <p>C) Fee structure and the commission for the partners shall be governed by the market conditions. However, for
        this agreement perspective, for all the GST related services (GST registration, GST return filing, GST
        bookkeeping) the TS PVT LTD commission shall be 50% of the service charges from the customer. Any Change in Fees
        Structure will be intimated by exchange of Email and then implemented by TS. Any service added later Shall be
        visible on the CRM panel of the TS and shall be communicated to the TS via email/CRM update. The TS shall be
        obliged to offer such services to their customer at the said price and commission structure informed to the TS
        time to time. All other taxes including GST, wherever applicable, duties and other charges, which may be levied,
        shall be borne by the TS PVT LTD and shall not be liable for the same.</p>
    <ol type="A">
        <li>A) Alt expenses, stamp duty and other charges expenses in connection with execution of this agreement shall
            be borne by TS PVT LTD.</li>

        <li>B) Payment of fees/commission shall be based on the centralized data of TS and it shall be final and binding
            on TS PVT LTD.</li>

        <li>C) Payment to TS PVT LTD would be made on twice in a month.</li>
    </ol>
    <h2>12. General Indemnity</h2>
    <p>A) TS undertakes and agrees to indemnify and keep indemnified TS PVT LTD against all claims, action, loss,
        damages, costs, expenses, charge, including legal expense (attorney, advocate fee included) which the TS PVT LTD
        may suffer or incur on account of any deficiency in service rendered by TS PVT LTD or any act of commission/
        omission on the part of GSICs employee, agent, representative since the date of starting of TS PVT LTD
        operations The TS PVT LTD: agrees to make good the loss suffered by TS as indicated above, on first demand made by the
        TS in this regard which shall be final conclusive and binding on TS PVT LTD.</p>
    <p>B. TS further undertakes to promptly notify the TS in writing any breach of obligation of the agreement by its
        employees or representatives including confidentiality obligation and in such an event, the TS will in addition
        to and without prejudice to any other available remedies be entitled to immediate equitable relief in a Court of
        competent jurisdiction to protect its interest including injunctive relief.</p>
    <p>C. The TS PVT LTD shall be directly and vicariously liable to indemnify the TS in case of any misuse of
        data/information of the TS PVT LTD its agents, employees, representatives deliberate or otherwise and this
        includes against intangible/ reputation losses.</p>

    <h2>13. Term & Termination</h2>
    <p>A) The TS PVT LTD shall have right to terminate the agreement by giving three months' notice in writing to the
        other party. In the event of termination of the agreement by TS, all records, information including documents
        etc. shall be returned by TS PVT LTD as per instructions of the TS PVT LTD.</p>
    <p>B) The TS PVT LTD shall have a right to terminate the agreement immediately by giving a notice in writing to TS
        in the following eventualities:</p>
    <ol type="i">
        <li>If any Receiver/Liquidator is appointed in connection with the business of the TS PVT LTD ts transfers
            substantial assets in favour of its creditors or any orders / directions are issued by any Authority /
            Regulator which has the effect of suspension of the business of TS PVT LTD.</li>
        <li>If TS PVT LTD applies to the Court or passes a resolution for voluntary declaration as an Insolvent
            person or business entity or any other creditor / person files a petition for winding or dissolution of TS
        </li>
        <li>If TS PVT LTD , in the reasonable opinion of the TS is unable to pay its debts or discharge its
            liabilities in normal course of business.</li>
        <li>If TS PVT LTD is unable to render the Services up to the mark as envisaged under this agreement upon a
            reasonable assessment of the circumstances by the TS PVT LTD which affect rendering of the services by TS as
            envisaged under this agreement.</li>

    </ol>
    <p>C) In the event of the termination of the agreement by the TS PVT LTD pursuant to clause 13.A hereinabove, TS
        shall be liable and responsible to return all records and information in its possession as envisaged under
        clause 13.B above. </p>
    <p>D) TS PVT LTD will have exclusivity at the TS.</p>
    <p>E) In the event of termination of the Agreement or on the expiry of the term/ renewed term of this Agreement, the
        TS PVT LTD shall render all reasonable assistance and help to the TS and any new TS engaged by the TS for the
        smooth switch over and continuity of the Services or if so required by the TS PVT LTD take all necessary steps
        to bring the Services to a close in a prompt and orderly manner.</p>
    <p>F) Poor performance, non-compliance of the requisite conditions, clauses, directions, any customer complaint
        against TS Pvt ltd etc .</p>
    <p>G) Upon termination or expiration of this Agreement, all rights and obligations of the Parties hereunder shall
        cease, except: (a) such rights and obligations as may have accrued on the date of termination or expiration; (b)
        the obligation of confidentiality; and (c) any right which a Party may have under the Application Law.</p>
    <p>H) If you need any kind of information or are facing any problem, then you will be provided with a
        relationship manager. You cannot call the relationship manager Directly WHATSAPP SMS can do. You will be replied
        within 30 minutes of the message. If you are not getting the answer in 30 minutes, then in that case after 30
        minutes you can send SMS again. can do.</p>
    <p>I) If you are not getting any response through the relationship manager, then in that condition you can complain
        about them on the company's mail. The Relationship Manager can also be changed.</p>
    <p>J) Through the Center or branch, if there is any kind of abuse related to the head office or using any kind of
        abusive words, their ID can be Terminal .Partnership can also be terminated through the owner of the company.
    </p>
    <p>K) We have some services in progress which cannot be provided by the people of our CENTER or branch. Very soon
        those services can be provided in case of finalization. There should be no objection on this</p>
    <h2>14. Arbitration</h2>
    <p>A) Any and all disputes, controversies and conflicts ("Disputes") arising out of this Agreement or in connection
        with this Agreement or the performance or non-performance of the rights and obligations set forth herein, or the
        breach, termination, invalidity or interpretation thereof shall be referred for arbitration in terms of the
        Arbitration and Conciliation Act, 1996 (Arbitration Act) or any amendments thereof. Prior to submitting the
        Disputes to Arbitration the parties shall make all Endeavors to settle the dispute/s through mutual negotiation
        and discussions. In the event that the said dispute/s are not settled within 30 days of the arising thereof as
        evidenced through the first written communication from any party notifying the other regarding the disputes, the
        same shall finally be settled and determined by arbitration as above.</p>
    <p>B) The place of arbitration shall be at LUCKNOW and the language used in the arbitral proceedings shall be
        English. Arbitration shall be conducted by a mutually appointed sole arbitrator. If the Parties are unable to
        agree upon a sole Arbitrator, each Party shall appoint one arbitrator and the two arbitrators so appointed by
        the Parties shall appoint the third arbitrator, who shall be the Chairman of the SURAJ GOSWAMI.</p>
    <p>C) The arbitral award shall be in writing and subject to the provisions of the Arbitration and Conciliation Act,
        1996 Act shall be enforceable in any court of competent jurisdiction.</p>
    <p>D) Pending the submission to arbitration and thereafter, till the Arbitrator or the Arbitral Tribunal renders the
        award or decision, the Parties shall, except in the event of termination of this Agreement or in the event of
        any interim order/award is granted under the afore stated Act, continue to perform their obligations under this
        Agreement</p>

    <h2>15. Governing Law & Jurisdiction</h2>
    <p>A) The agreement shall be governed and construed in accordance with the Laws of Republic of India.</p>
    <p>B) The parties agree to submit to the jurisdiction of the appropriate court in India in connection with any
        dispute between the parties under the agreement.</p>


    <h2>16. Notices</h2>
    <p>Any notice, invoice, approval, advice, report or any other communication required to be given under this
        Agreement shall be in writing and may be given by delivering the same by hand or sending the same by prepaid
        registered mail, courier or e-mail to the relevant address sent forth below or such other address as each Party
        may notify in writing to the other Party from time to time. Any such notice given as aforesaid shall be deemed
        to be served or received at the time upon delivery (if delivered by hand/email) or upon actual receipt (if sent
        by Post/e- mail) or fifteen (15) clear days after posting (if the addressee is outside the country of posting).
    </p>

    <h2>17. Force Majeure</h2>
    <p>A. Neither of the Parties to this Agreement Shall be liable or responsible for any failure to perform or delay in
        performance of their respective obligations hereunder, when such failure or delay is due or attributable to or
        arises out of, any Force Majeure event, provided a notice of occurrence of any Force Majeurevent is given by the
        affected Party to the other Party within a period of twenty—four (24) hours of the occurrence of such Force
        Majeure event.</p>

    <h2>18. Miscellaneous</h2>
    <p>A) Any provision of this Agreement may be amended or waived, if, and only if such amendment or waiver is in
        writing and signed, in the case of an amendment by each party, or in this case of a waiver, by the Party against
        whom the waiver is to be effective.</p>
    <p>B) No failure or delay by any party in exercising any right, power or privilege hereunder shall operate as a
        waiver thereof nor Shall any single or partial exercise of any other right, power of privilege. The rights and
        remedies herein provided shall be cumulative and not exclusive of any rights or remedies provided by law.</p>
    <p>C) Unless otherwise provided herein, all notices or other communications under or in connection with this
        Agreement shall be given in writing and may be sent by personal delivery or post or courier or e- mail. Any such
        notice or other communication wilt be deemed to be effective if sent by personal when delivered, if sent by
        post, two days after being deposited in the post and if sent by courier, one day after being deposited with the
        courier.
        The addresses referred should be the address of the party.
    </p>
    <p>D) This Agreement constitutes the entire agreement between the Parties with respect to the subject matter hereof
        and supersedes all prior written agreements, undertakings, understandings and negotiations, both written and
        oral, between the Parties with respect to the subject matter of the Agreement. No representation, inducement,
        promise, understanding, condition or warranty not set forth herein has been made or relied upon by any party
        hereto. However, the TS PVT LTD is liable for all acts done or omissions and shall indemnify TS for any loss
        caused by such acts or omissions by the TS , its agents, employees, representatives since the date of
        commencement of TS operations as per TS PVT LTD records.</p>
    <p>E) Neither this agreement nor any provision hereof is intended to confer upon any person/s other than the Parties
        to this Agreement any rights or remedies hereunder.</p>
    <p>F) The TS PVT LTD shall execute and deliver such additional documents and perform such additional actions, as may
        be necessary, appropriate or reasonably requested to carry out or evidence the transactions contemplated hereby.
    </p>
    <p>G) The invalidity or unenforceability of any provisions of this Agreement in any jurisdiction shall not affect
        the validity, legality or enforceability of the remainder of this Agreement in such jurisdiction or the
        validity, legality or enforceability of this Agreement, including any such provision, in any other jurisdiction,
        it being intended that all rights and obligations of the Parties hereunder shall be enforceable to the fullest
        extent permitted by law.</p>
    <p>H) In case of any change in applicable -laws in India that has an effect on the terms of this Agreement, the
        parties agree that the Agreement may be reviewed, and if deemed necessary by the Parties, renegotiated in good
        faith.</p>
    <p>I) The captions herein are included for convenience of reference only and shall be ignored in the construction or
        interpretation thereof.</p>
    <p>J) The TS PVT LTD shall not assign or transfer all or any of its rights, benefits or obligations under this
        Agreement without the approval of TS PVT LTD. TS may, at any time, assign or transfer all or any of its rights,
        benefits and obligations under this Agreement.</p>
    <p>K) This agreement shall not be construed as joint venture. Each party shall, be responsible for all its
        obligations towards its respective employees. No employee of any of the parties shall claim to be employee of
        other party.</p>

    <h2>19. Governing Laws and Dispute Resolution</h2>
    <p>This Agreement shall be governed by and construed in accordance with the laws of India, without giving effect to
        any choice of law or conflict of law provisions. The Parties consent to non- exclusive jurisdiction and venue in
        the courts of LUCKNOW , India. Any dispute arising in connection with this Agreement shall be amicably settled
        in accordance with the laws of Arbitration of India.</p>

    <p>IN WITNESS WHEREOF THE PARTIES HERETO HAVE HERE INTO SET THEIR HANDS AND SEAL ON THE DAY AND YEAR FIRST
        HERE IN ABOVE WRITTEN
    </p>
    <p>Document is digitally signed below and executed by and between —TECHTIONS SOLUTION PVT LTD &
        <?php echo $name_center; ?>
    </p>
    <p>Fee Summary </p>
    <p class="">Commercial conditions against this agreement are as follows- JNR </p>
    <h4 class="text_center">Annexure-A </h4>
    <p>The commercial conditions against this agreement are as follows:</p>
    <p>The TECHTIONS solution Pvt ltd franchise fee is /-. (Exclusive GST).</p>
    <p>This fee includes the cost of Franchise, Training, and CRM access for the period as prescribed in the agreement.
        This is non-refundable fee.</p>

    <p>The TS PVT LTD services rendered at the Franchise store shall be commission based. The commission for services
        related to shall be as per the price and commission rates put on the CRM portal for Franchise partners.</p>

    <p>Currently, the rates are:</p>
    <p>GST return, registration, book keeping — 50% of the revenue.</p>
    <p>Other services/products — As per the commission prescribed in the CRM.</p>
    <p>incentive and referral schemes are as per the marketing schemes proposed time to time by TS PVT LTD. The same
        shall be notified to the TS PVT LTD.</p>
    <p>The rates and commission shall be governed by the market conditions.</p>


    <p>Paid Fee :
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </p>
    <p>Unpaid Fee :
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </p>
    <p>Total Fee :
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Rs. 16999/-</p>

    <p>
        <?php echo $center_wala_name; ?> :
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Suraj Goswami
    </p>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>