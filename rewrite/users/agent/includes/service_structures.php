<?php
$serviceData = [
    //housing loan
    254 => [
        "service_name" => "Housing Loan",
        "pages" => [
                1 => [
                        "page_name" => "Mobile Verification",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "customer_mobile",
                                    "display_name" => "Mobile Number",
                                    "placeholder" => "Enter Your Mobile Number",
                                ],
                            ],
                    ],
                2 => [
                        "page_name" => "Personal Details",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "customer_name",
                                    "display_name" => "Customer's Name",
                                    "placeholder" => "Enter Your Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "email",
                                    "display_name" => "Customer's E-mail",
                                    "placeholder" => "Enter Your Email",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "whatsapp",
                                    "display_name" => "WhatsApp",
                                    "placeholder" => "Enter Your WhatsApp Number",
                                ],
                                [
                                    "type" => "date",
                                    "id" => "customer_dob",
                                    "display_name" => "Date Of Birth",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "mother_name",
                                    "display_name" => "Mother's Name",
                                    "placeholder" => "Enter Mother's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "father_name",
                                    "display_name" => "Father's Name",
                                    "placeholder" => "Enter Father's Name",
                                ],
                            ],
                    ],
                3 => [
                        "page_name" => "Gauranter Details",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "gauranter_name",
                                    "display_name" => "Gauranter's Name",
                                    "placeholder" => "Enter Gauranter's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "gauranter_mobile",
                                    "display_name" => "Gauranter's Mobile Number",
                                    "placeholder" => "Enter Mobile Number",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "gauratner_relation",
                                    "display_name" => "Relation",
                                    "placeholder" => "Enter Relation",
                                ],
                            ],
                    ],
                4 => [
                        "page_name" => "Select Your Income Source",
                        "next_btn" => 0,
                        "Fields" => [
                                [
                                    "type" => "button",
                                    "id" => "salary",
                                    "display_name" => "Salary",
                                    "href" => "order.php?page=5",
                                ],
                                [
                                    "type" => "button",
                                    "id" => "business",
                                    "display_name" => "Business",
                                    "href" => "order.php?page=6",
                                ],
                            ],
                    ],
                5 => [
                        "page_name" => "Salary",
                        "next_page" => "7",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "company_name",
                                    "display_name" => "Company's Name",
                                    "placeholder" => "Enter Company's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "salary",
                                    "display_name" => "Salary",
                                    "placeholder" => "Enter Salary",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "loan_amount",
                                    "display_name" => "Loan Amount",
                                    "placeholder" => "Enter Loan Amount",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhar_front",
                                    "display_name" => "Aadhaar Front",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhaar_back",
                                    "display_name" => "Addhaar Back",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "pan_card",
                                    "display_name" => "Pan Card",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "bank_statement",
                                    "display_name" => "Bank Statement",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "form16",
                                    "display_name" => "Form 16",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "voter_id",
                                    "display_name" => "Voter Id",
                                ],
                            ],
                    ],
                6 => [
                        "page_name" => "Bussiness",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "company_name",
                                    "display_name" => "Company's Name",
                                    "placeholder" => "Enter Company's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "income",
                                    "display_name" => "Income",
                                    "placeholder" => "Enter Income",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "loan_amount",
                                    "display_name" => "Loan Amount",
                                    "placeholder" => "Enter Loan Amount",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhar_front",
                                    "display_name" => "Aadhaar Front",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhaar_back",
                                    "display_name" => "Addhaar Back",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "pan_card",
                                    "display_name" => "Pan Card",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "bank_statement",
                                    "display_name" => "Bank Statement",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "itr",
                                    "display_name" => "ITR (3 Years)",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "itr",
                                    "display_name" => "GST (2 Years)",
                                ],
                            ],
                    ],
                7 => [
                        "page_name" => "Bank Information",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "bank_name",
                                    "display_name" => "Bank's Name",
                                    "placeholder" => "Enter Banks's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "account_holder_name",
                                    "display_name" => "Account Holder's Name",
                                    "placeholder" => "Enter Account Holder's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "bank_account_number",
                                    "display_name" => "Account Number",
                                    "placeholder" => "Enter Mobile Number",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "ifsc",
                                    "display_name" => "IFSC",
                                    "placeholder" => "Enter IFSC Code",
                                ],
                            ],
                    ],
                8 => [
                        "page_name" => "Documents",
                        "Fields" => [
                                [
                                    "type" => "file",
                                    "id" => "registry_paper",
                                    "display_name" => "Registry Paper",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "khatauni",
                                    "display_name" => "Khatauni",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "nivaas_praman_patra",
                                    "display_name" => "Nivaas Praman Patra",
                                ],
                            ],
                    ],
            ],
    ],
    //business loan
    255 => [
        "service_name" => "Business Loan",
        "pages" => [
                1 => [
                        "page_name" => "Mobile Verification",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "customer_mobile",
                                    "display_name" => "Mobile Number",
                                    "placeholder" => "Enter Your Mobile Number",
                                ],
                            ],
                    ],
                2 => [
                        "page_name" => "Personal Details",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "customer_name",
                                    "display_name" => "Customer's Name",
                                    "placeholder" => "Enter Your Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "email",
                                    "display_name" => "Customer's E-mail",
                                    "placeholder" => "Enter Your Email",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "whatsapp",
                                    "display_name" => "WhatsApp",
                                    "placeholder" => "Enter Your WhatsApp Number",
                                ],
                                [
                                    "type" => "date",
                                    "id" => "customer_dob",
                                    "display_name" => "Date Of Birth",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "mother_name",
                                    "display_name" => "Mother's Name",
                                    "placeholder" => "Enter Mother's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "father_name",
                                    "display_name" => "Father's Name",
                                    "placeholder" => "Enter Father's Name",
                                ],
                            ],
                    ],
                3 => [
                        "page_name" => "Gauranter Details",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "gauranter_name",
                                    "display_name" => "Gauranter's Name",
                                    "placeholder" => "Enter Gauranter's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "gauranter_mobile",
                                    "display_name" => "Gauranter's Mobile Number",
                                    "placeholder" => "Enter Mobile Number",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "gauratner_relation",
                                    "display_name" => "Relation",
                                    "placeholder" => "Enter Relation",
                                ],
                            ],
                    ],
                4 => [
                        "page_name" => "Select Your Income Source",
                        "next_btn" => 0,
                        "Fields" => [
                                [
                                    "type" => "button",
                                    "id" => "salary",
                                    "display_name" => "Salary",
                                    "href" => "order.php?page=5",
                                ],
                                [
                                    "type" => "button",
                                    "id" => "business",
                                    "display_name" => "Business",
                                    "href" => "order.php?page=6",
                                ],
                            ],
                    ],
                5 => [
                        "page_name" => "Salary",
                        "next_page" => "7",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "company_name",
                                    "display_name" => "Company's Name",
                                    "placeholder" => "Enter Company's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "salary",
                                    "display_name" => "Salary",
                                    "placeholder" => "Enter Salary",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "loan_amount",
                                    "display_name" => "Loan Amount",
                                    "placeholder" => "Enter Loan Amount",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhar_front",
                                    "display_name" => "Aadhaar Front",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhaar_back",
                                    "display_name" => "Addhaar Back",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "pan_card",
                                    "display_name" => "Pan Card",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "bank_statement",
                                    "display_name" => "Bank Statement",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "form16",
                                    "display_name" => "Form 16",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "voter_id",
                                    "display_name" => "Voter Id",
                                ],
                            ],
                    ],
                6 => [
                        "page_name" => "Bussiness",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "company_name",
                                    "display_name" => "Company's Name",
                                    "placeholder" => "Enter Company's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "income",
                                    "display_name" => "Income",
                                    "placeholder" => "Enter Income",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "loan_amount",
                                    "display_name" => "Loan Amount",
                                    "placeholder" => "Enter Loan Amount",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhar_front",
                                    "display_name" => "Aadhaar Front",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhaar_back",
                                    "display_name" => "Addhaar Back",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "pan_card",
                                    "display_name" => "Pan Card",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "bank_statement",
                                    "display_name" => "Bank Statement",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "itr",
                                    "display_name" => "ITR (3 Years)",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "itr",
                                    "display_name" => "GST (2 Years)",
                                ],
                            ],
                    ],
                7 => [
                        "page_name" => "Bank Information",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "bank_name",
                                    "display_name" => "Bank's Name",
                                    "placeholder" => "Enter Banks's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "account_holder_name",
                                    "display_name" => "Account Holder's Name",
                                    "placeholder" => "Enter Account Holder's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "bank_account_number",
                                    "display_name" => "Account Number",
                                    "placeholder" => "Enter Mobile Number",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "ifsc",
                                    "display_name" => "IFSC",
                                    "placeholder" => "Enter IFSC Code",
                                ],
                            ],
                    ],
            ],
    ],
    //personal loan
    256 => [
        "service_name" => "Personal Loan",
        "pages" => [
                1 => [
                        "page_name" => "Mobile Verification",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "customer_mobile",
                                    "display_name" => "Mobile Number",
                                    "placeholder" => "Enter Your Mobile Number",
                                ],
                            ],
                    ],
                2 => [
                        "page_name" => "Personal Details",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "customer_name",
                                    "display_name" => "Customer's Name",
                                    "placeholder" => "Enter Your Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "email",
                                    "display_name" => "Customer's E-mail",
                                    "placeholder" => "Enter Your Email",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "whatsapp",
                                    "display_name" => "WhatsApp",
                                    "placeholder" => "Enter Your WhatsApp Number",
                                ],
                                [
                                    "type" => "date",
                                    "id" => "customer_dob",
                                    "display_name" => "Date Of Birth",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "mother_name",
                                    "display_name" => "Mother's Name",
                                    "placeholder" => "Enter Mother's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "father_name",
                                    "display_name" => "Father's Name",
                                    "placeholder" => "Enter Father's Name",
                                ],
                            ],
                    ],
                3 => [
                        "page_name" => "Gauranter Details",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "gauranter_name",
                                    "display_name" => "Gauranter's Name",
                                    "placeholder" => "Enter Gauranter's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "gauranter_mobile",
                                    "display_name" => "Gauranter's Mobile Number",
                                    "placeholder" => "Enter Mobile Number",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "gauratner_relation",
                                    "display_name" => "Relation",
                                    "placeholder" => "Enter Relation",
                                ],
                            ],
                    ],
                4 => [
                        "page_name" => "Select Your Income Source",
                        "next_btn" => 0,
                        "Fields" => [
                                [
                                    "type" => "button",
                                    "id" => "salary",
                                    "display_name" => "Salary",
                                    "href" => "order.php?page=5",
                                ],
                                [
                                    "type" => "button",
                                    "id" => "business",
                                    "display_name" => "Business",
                                    "href" => "order.php?page=6",
                                ],
                            ],
                    ],
                5 => [
                        "page_name" => "Salary",
                        "next_page" => "7",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "company_name",
                                    "display_name" => "Company's Name",
                                    "placeholder" => "Enter Company's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "salary",
                                    "display_name" => "Salary",
                                    "placeholder" => "Enter Salary",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "loan_amount",
                                    "display_name" => "Loan Amount",
                                    "placeholder" => "Enter Loan Amount",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhar_front",
                                    "display_name" => "Aadhaar Front",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhaar_back",
                                    "display_name" => "Addhaar Back",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "pan_card",
                                    "display_name" => "Pan Card",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "bank_statement",
                                    "display_name" => "Bank Statement",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "form16",
                                    "display_name" => "Form 16",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "voter_id",
                                    "display_name" => "Voter Id",
                                ],
                            ],
                    ],
                6 => [
                        "page_name" => "Bussiness",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "company_name",
                                    "display_name" => "Company's Name",
                                    "placeholder" => "Enter Company's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "income",
                                    "display_name" => "Income",
                                    "placeholder" => "Enter Income",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "loan_amount",
                                    "display_name" => "Loan Amount",
                                    "placeholder" => "Enter Loan Amount",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhar_front",
                                    "display_name" => "Aadhaar Front",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhaar_back",
                                    "display_name" => "Addhaar Back",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "pan_card",
                                    "display_name" => "Pan Card",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "bank_statement",
                                    "display_name" => "Bank Statement",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "itr",
                                    "display_name" => "ITR (3 Years)",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "itr",
                                    "display_name" => "GST (2 Years)",
                                ],
                            ],
                    ],
                7 => [
                        "page_name" => "Bank Information",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "bank_name",
                                    "display_name" => "Bank's Name",
                                    "placeholder" => "Enter Banks's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "account_holder_name",
                                    "display_name" => "Account Holder's Name",
                                    "placeholder" => "Enter Account Holder's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "bank_account_number",
                                    "display_name" => "Account Number",
                                    "placeholder" => "Enter Mobile Number",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "ifsc",
                                    "display_name" => "IFSC",
                                    "placeholder" => "Enter IFSC Code",
                                ],
                            ],
                    ],
            ],
    ],
    //vehicle loan
    257 => [
        "service_name" => "Vehicle Loan",
        "pages" => [
                1 => [
                        "page_name" => "Mobile Verification",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "customer_mobile",
                                    "display_name" => "Mobile Number",
                                    "placeholder" => "Enter Your Mobile Number",
                                ],
                            ],
                    ],
                2 => [
                        "page_name" => "Personal Details",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "customer_name",
                                    "display_name" => "Customer's Name",
                                    "placeholder" => "Enter Your Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "email",
                                    "display_name" => "Customer's E-mail",
                                    "placeholder" => "Enter Your Email",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "whatsapp",
                                    "display_name" => "WhatsApp",
                                    "placeholder" => "Enter Your WhatsApp Number",
                                ],
                                [
                                    "type" => "date",
                                    "id" => "customer_dob",
                                    "display_name" => "Date Of Birth",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "mother_name",
                                    "display_name" => "Mother's Name",
                                    "placeholder" => "Enter Mother's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "father_name",
                                    "display_name" => "Father's Name",
                                    "placeholder" => "Enter Father's Name",
                                ],
                            ],
                    ],
                3 => [
                        "page_name" => "Gauranter Details",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "gauranter_name",
                                    "display_name" => "Gauranter's Name",
                                    "placeholder" => "Enter Gauranter's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "gauranter_mobile",
                                    "display_name" => "Gauranter's Mobile Number",
                                    "placeholder" => "Enter Mobile Number",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "gauratner_relation",
                                    "display_name" => "Relation",
                                    "placeholder" => "Enter Relation",
                                ],
                            ],
                    ],
                4 => [
                        "page_name" => "Select Your Income Source",
                        "next_btn" => 0,
                        "Fields" => [
                                [
                                    "type" => "button",
                                    "id" => "salary",
                                    "display_name" => "Salary",
                                    "href" => "order.php?page=5",
                                ],
                                [
                                    "type" => "button",
                                    "id" => "business",
                                    "display_name" => "Business",
                                    "href" => "order.php?page=6",
                                ],
                            ],
                    ],
                5 => [
                        "page_name" => "Salary",
                        "next_page" => "7",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "company_name",
                                    "display_name" => "Company's Name",
                                    "placeholder" => "Enter Company's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "salary",
                                    "display_name" => "Salary",
                                    "placeholder" => "Enter Salary",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "loan_amount",
                                    "display_name" => "Loan Amount",
                                    "placeholder" => "Enter Loan Amount",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhar_front",
                                    "display_name" => "Aadhaar Front",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhaar_back",
                                    "display_name" => "Addhaar Back",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "pan_card",
                                    "display_name" => "Pan Card",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "bank_statement",
                                    "display_name" => "Bank Statement",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "form16",
                                    "display_name" => "Form 16",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "voter_id",
                                    "display_name" => "Voter Id",
                                ],
                            ],
                    ],
                6 => [
                        "page_name" => "Bussiness",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "company_name",
                                    "display_name" => "Company's Name",
                                    "placeholder" => "Enter Company's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "income",
                                    "display_name" => "Income",
                                    "placeholder" => "Enter Income",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "loan_amount",
                                    "display_name" => "Loan Amount",
                                    "placeholder" => "Enter Loan Amount",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhar_front",
                                    "display_name" => "Aadhaar Front",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhaar_back",
                                    "display_name" => "Addhaar Back",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "pan_card",
                                    "display_name" => "Pan Card",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "bank_statement",
                                    "display_name" => "Bank Statement",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "itr",
                                    "display_name" => "ITR (3 Years)",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "itr",
                                    "display_name" => "GST (2 Years)",
                                ],
                            ],
                    ],
                7 => [
                        "page_name" => "Bank Information",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "bank_name",
                                    "display_name" => "Bank's Name",
                                    "placeholder" => "Enter Banks's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "account_holder_name",
                                    "display_name" => "Account Holder's Name",
                                    "placeholder" => "Enter Account Holder's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "bank_account_number",
                                    "display_name" => "Account Number",
                                    "placeholder" => "Enter Mobile Number",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "ifsc",
                                    "display_name" => "IFSC",
                                    "placeholder" => "Enter IFSC Code",
                                ],
                            ],
                    ],
            ],
    ],
    //Loan Against Property
    258 => [
        "service_name" => "Loan Against Property",
        "pages" => [
                1 => [
                        "page_name" => "Mobile Verification",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "customer_mobile",
                                    "display_name" => "Mobile Number",
                                    "placeholder" => "Enter Your Mobile Number",
                                ],
                            ],
                    ],
                2 => [
                        "page_name" => "Personal Details",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "customer_name",
                                    "display_name" => "Customer's Name",
                                    "placeholder" => "Enter Your Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "email",
                                    "display_name" => "Customer's E-mail",
                                    "placeholder" => "Enter Your Email",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "whatsapp",
                                    "display_name" => "WhatsApp",
                                    "placeholder" => "Enter Your WhatsApp Number",
                                ],
                                [
                                    "type" => "date",
                                    "id" => "customer_dob",
                                    "display_name" => "Date Of Birth",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "mother_name",
                                    "display_name" => "Mother's Name",
                                    "placeholder" => "Enter Mother's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "father_name",
                                    "display_name" => "Father's Name",
                                    "placeholder" => "Enter Father's Name",
                                ],
                            ],
                    ],
                3 => [
                        "page_name" => "Gauranter Details",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "gauranter_name",
                                    "display_name" => "Gauranter's Name",
                                    "placeholder" => "Enter Gauranter's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "gauranter_mobile",
                                    "display_name" => "Gauranter's Mobile Number",
                                    "placeholder" => "Enter Mobile Number",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "gauratner_relation",
                                    "display_name" => "Relation",
                                    "placeholder" => "Enter Relation",
                                ],
                            ],
                    ],
                4 => [
                        "page_name" => "Select Your Income Source",
                        "next_btn" => 0,
                        "Fields" => [
                                [
                                    "type" => "button",
                                    "id" => "salary",
                                    "display_name" => "Salary",
                                    "href" => "order.php?page=5",
                                ],
                                [
                                    "type" => "button",
                                    "id" => "business",
                                    "display_name" => "Business",
                                    "href" => "order.php?page=6",
                                ],
                            ],
                    ],
                5 => [
                        "page_name" => "Salary",
                        "next_page" => "7",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "company_name",
                                    "display_name" => "Company's Name",
                                    "placeholder" => "Enter Company's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "salary",
                                    "display_name" => "Salary",
                                    "placeholder" => "Enter Salary",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "loan_amount",
                                    "display_name" => "Loan Amount",
                                    "placeholder" => "Enter Loan Amount",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhar_front",
                                    "display_name" => "Aadhaar Front",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhaar_back",
                                    "display_name" => "Addhaar Back",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "pan_card",
                                    "display_name" => "Pan Card",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "bank_statement",
                                    "display_name" => "Bank Statement",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "form16",
                                    "display_name" => "Form 16",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "voter_id",
                                    "display_name" => "Voter Id",
                                ],
                            ],
                    ],
                6 => [
                        "page_name" => "Bussiness",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "company_name",
                                    "display_name" => "Company's Name",
                                    "placeholder" => "Enter Company's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "income",
                                    "display_name" => "Income",
                                    "placeholder" => "Enter Income",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "loan_amount",
                                    "display_name" => "Loan Amount",
                                    "placeholder" => "Enter Loan Amount",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhar_front",
                                    "display_name" => "Aadhaar Front",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhaar_back",
                                    "display_name" => "Addhaar Back",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "pan_card",
                                    "display_name" => "Pan Card",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "bank_statement",
                                    "display_name" => "Bank Statement",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "itr",
                                    "display_name" => "ITR (3 Years)",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "itr",
                                    "display_name" => "GST (2 Years)",
                                ],
                            ],
                    ],
                7 => [
                        "page_name" => "Bank Information",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "bank_name",
                                    "display_name" => "Bank's Name",
                                    "placeholder" => "Enter Banks's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "account_holder_name",
                                    "display_name" => "Account Holder's Name",
                                    "placeholder" => "Enter Account Holder's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "bank_account_number",
                                    "display_name" => "Account Number",
                                    "placeholder" => "Enter Mobile Number",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "ifsc",
                                    "display_name" => "IFSC",
                                    "placeholder" => "Enter IFSC Code",
                                ],
                            ],
                    ],
            ],
    ],
    //MSME
    259 => [
        "service_name" => "MSME",
        "pages" => [
                1 => [
                        "page_name" => "Mobile Verification",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "customer_mobile",
                                    "display_name" => "Mobile Number",
                                    "placeholder" => "Enter Your Mobile Number",
                                ],
                            ],
                    ],
                2 => [
                        "page_name" => "Personal Details",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "customer_name",
                                    "display_name" => "Customer's Name",
                                    "placeholder" => "Enter Your Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "email",
                                    "display_name" => "Customer's E-mail",
                                    "placeholder" => "Enter Your Email",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "whatsapp",
                                    "display_name" => "WhatsApp",
                                    "placeholder" => "Enter Your WhatsApp Number",
                                ],
                                [
                                    "type" => "date",
                                    "id" => "customer_dob",
                                    "display_name" => "Date Of Birth",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "mother_name",
                                    "display_name" => "Mother's Name",
                                    "placeholder" => "Enter Mother's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "father_name",
                                    "display_name" => "Father's Name",
                                    "placeholder" => "Enter Father's Name",
                                ],
                            ],
                    ],
                3 => [
                        "page_name" => "Gauranter Details",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "gauranter_name",
                                    "display_name" => "Gauranter's Name",
                                    "placeholder" => "Enter Gauranter's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "gauranter_mobile",
                                    "display_name" => "Gauranter's Mobile Number",
                                    "placeholder" => "Enter Mobile Number",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "gauratner_relation",
                                    "display_name" => "Relation",
                                    "placeholder" => "Enter Relation",
                                ],
                            ],
                    ],
                4 => [
                        "page_name" => "Select Your Income Source",
                        "next_btn" => 0,
                        "Fields" => [
                                [
                                    "type" => "button",
                                    "id" => "salary",
                                    "display_name" => "Salary",
                                    "href" => "order.php?page=5",
                                ],
                                [
                                    "type" => "button",
                                    "id" => "business",
                                    "display_name" => "Business",
                                    "href" => "order.php?page=6",
                                ],
                            ],
                    ],
                5 => [
                        "page_name" => "Salary",
                        "next_page" => "7",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "company_name",
                                    "display_name" => "Company's Name",
                                    "placeholder" => "Enter Company's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "salary",
                                    "display_name" => "Salary",
                                    "placeholder" => "Enter Salary",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "loan_amount",
                                    "display_name" => "Loan Amount",
                                    "placeholder" => "Enter Loan Amount",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhar_front",
                                    "display_name" => "Aadhaar Front",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhaar_back",
                                    "display_name" => "Addhaar Back",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "pan_card",
                                    "display_name" => "Pan Card",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "bank_statement",
                                    "display_name" => "Bank Statement",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "form16",
                                    "display_name" => "Form 16",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "voter_id",
                                    "display_name" => "Voter Id",
                                ],
                            ],
                    ],
                6 => [
                        "page_name" => "Bussiness",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "company_name",
                                    "display_name" => "Company's Name",
                                    "placeholder" => "Enter Company's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "income",
                                    "display_name" => "Income",
                                    "placeholder" => "Enter Income",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "loan_amount",
                                    "display_name" => "Loan Amount",
                                    "placeholder" => "Enter Loan Amount",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhar_front",
                                    "display_name" => "Aadhaar Front",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhaar_back",
                                    "display_name" => "Addhaar Back",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "pan_card",
                                    "display_name" => "Pan Card",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "bank_statement",
                                    "display_name" => "Bank Statement",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "itr",
                                    "display_name" => "ITR (3 Years)",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "itr",
                                    "display_name" => "GST (2 Years)",
                                ],
                            ],
                    ],
                7 => [
                        "page_name" => "Bank Information",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "bank_name",
                                    "display_name" => "Bank's Name",
                                    "placeholder" => "Enter Banks's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "account_holder_name",
                                    "display_name" => "Account Holder's Name",
                                    "placeholder" => "Enter Account Holder's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "bank_account_number",
                                    "display_name" => "Account Number",
                                    "placeholder" => "Enter Mobile Number",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "ifsc",
                                    "display_name" => "IFSC",
                                    "placeholder" => "Enter IFSC Code",
                                ],
                            ],
                    ],
                8 => [
                        "page_name" => "Documents",
                        "Fields" => [
                                [
                                    "type" => "file",
                                    "id" => "msme_document",
                                    "display_name" => "MSME Document",
                                ],
                            ],
                    ],
            ],
    ],
    //peer to peer lending
    260 => [
        "service_name" => "Peer to Peer Loan",
        "pages" => [
                1 => [
                        "page_name" => "Mobile Verification",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "customer_mobile",
                                    "display_name" => "Mobile Number",
                                    "placeholder" => "Enter Your Mobile Number",
                                ],
                            ],
                    ],
                2 => [
                        "page_name" => "Personal Details",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "customer_name",
                                    "display_name" => "Customer's Name",
                                    "placeholder" => "Enter Your Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "email",
                                    "display_name" => "Customer's E-mail",
                                    "placeholder" => "Enter Your Email",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "whatsapp",
                                    "display_name" => "WhatsApp",
                                    "placeholder" => "Enter Your WhatsApp Number",
                                ],
                                [
                                    "type" => "date",
                                    "id" => "customer_dob",
                                    "display_name" => "Date Of Birth",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "mother_name",
                                    "display_name" => "Mother's Name",
                                    "placeholder" => "Enter Mother's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "father_name",
                                    "display_name" => "Father's Name",
                                    "placeholder" => "Enter Father's Name",
                                ],
                            ],
                    ],
                3 => [
                        "page_name" => "Gauranter Details",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "gauranter_name",
                                    "display_name" => "Gauranter's Name",
                                    "placeholder" => "Enter Gauranter's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "gauranter_mobile",
                                    "display_name" => "Gauranter's Mobile Number",
                                    "placeholder" => "Enter Mobile Number",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "gauratner_relation",
                                    "display_name" => "Relation",
                                    "placeholder" => "Enter Relation",
                                ],
                            ],
                    ],
                4 => [
                        "page_name" => "Select Your Income Source",
                        "next_btn" => 0,
                        "Fields" => [
                                [
                                    "type" => "button",
                                    "id" => "salary",
                                    "display_name" => "Salary",
                                    "href" => "order.php?page=5",
                                ],
                                [
                                    "type" => "button",
                                    "id" => "business",
                                    "display_name" => "Business",
                                    "href" => "order.php?page=6",
                                ],
                            ],
                    ],
                5 => [
                        "page_name" => "Salary",
                        "next_page" => "7",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "company_name",
                                    "display_name" => "Company's Name",
                                    "placeholder" => "Enter Company's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "salary",
                                    "display_name" => "Salary",
                                    "placeholder" => "Enter Salary",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "loan_amount",
                                    "display_name" => "Loan Amount",
                                    "placeholder" => "Enter Loan Amount",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhar_front",
                                    "display_name" => "Aadhaar Front",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhaar_back",
                                    "display_name" => "Addhaar Back",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "pan_card",
                                    "display_name" => "Pan Card",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "bank_statement",
                                    "display_name" => "Bank Statement",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "form16",
                                    "display_name" => "Form 16",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "voter_id",
                                    "display_name" => "Voter Id",
                                ],
                            ],
                    ],
                6 => [
                        "page_name" => "Bussiness",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "company_name",
                                    "display_name" => "Company's Name",
                                    "placeholder" => "Enter Company's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "income",
                                    "display_name" => "Income",
                                    "placeholder" => "Enter Income",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "loan_amount",
                                    "display_name" => "Loan Amount",
                                    "placeholder" => "Enter Loan Amount",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhar_front",
                                    "display_name" => "Aadhaar Front",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhaar_back",
                                    "display_name" => "Addhaar Back",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "pan_card",
                                    "display_name" => "Pan Card",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "bank_statement",
                                    "display_name" => "Bank Statement",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "itr",
                                    "display_name" => "ITR (3 Years)",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "itr",
                                    "display_name" => "GST (2 Years)",
                                ],
                            ],
                    ],
                7 => [
                        "page_name" => "Bank Information",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "bank_name",
                                    "display_name" => "Bank's Name",
                                    "placeholder" => "Enter Banks's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "account_holder_name",
                                    "display_name" => "Account Holder's Name",
                                    "placeholder" => "Enter Account Holder's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "bank_account_number",
                                    "display_name" => "Account Number",
                                    "placeholder" => "Enter Mobile Number",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "ifsc",
                                    "display_name" => "IFSC",
                                    "placeholder" => "Enter IFSC Code",
                                ],
                            ],
                    ],
                8 => [
                        "page_name" => "Documents",
                        "Fields" => [
                                [
                                    "type" => "file",
                                    "id" => "registry_paper",
                                    "display_name" => "Registry Paper",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "khatauni",
                                    "display_name" => "Khatauni",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "nivas_praman_patra",
                                    "display_name" => "Nivaas Praman Patra",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "zameen_adhar_front",
                                    "display_name" => "Zameen maalik ka aadhaar(front)",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "zameen_adhar_back",
                                    "display_name" => "Zameen maalik ka aadhaar(back)",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "zameen_pan",
                                    "display_name" => "Zameen maalik ka pan card",
                                ],
                            ],
                    ],
            ],
    ],
    //Education loan
    261 => [
        "service_name" => "Education Loan",
        "pages" => [
                1 => [
                        "page_name" => "Mobile Verification",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "customer_mobile",
                                    "display_name" => "Mobile Number",
                                    "placeholder" => "Enter Your Mobile Number",
                                ],
                            ],
                    ],
                2 => [
                        "page_name" => "Personal Details",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "customer_name",
                                    "display_name" => "Customer's Name",
                                    "placeholder" => "Enter Your Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "email",
                                    "display_name" => "Customer's E-mail",
                                    "placeholder" => "Enter Your Email",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "whatsapp",
                                    "display_name" => "WhatsApp",
                                    "placeholder" => "Enter Your WhatsApp Number",
                                ],
                                [
                                    "type" => "date",
                                    "id" => "customer_dob",
                                    "display_name" => "Date Of Birth",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "mother_name",
                                    "display_name" => "Mother's Name",
                                    "placeholder" => "Enter Mother's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "father_name",
                                    "display_name" => "Father's Name",
                                    "placeholder" => "Enter Father's Name",
                                ],
                            ],
                    ],
                3 => [
                        "page_name" => "Gauranter Details",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "gauranter_name",
                                    "display_name" => "Gauranter's Name",
                                    "placeholder" => "Enter Gauranter's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "gauranter_mobile",
                                    "display_name" => "Gauranter's Mobile Number",
                                    "placeholder" => "Enter Mobile Number",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "gauratner_relation",
                                    "display_name" => "Relation",
                                    "placeholder" => "Enter Relation",
                                ],
                            ],
                    ],
                4 => [
                        "page_name" => "Select Your Income Source",
                        "next_btn" => 0,
                        "Fields" => [
                                [
                                    "type" => "button",
                                    "id" => "salary",
                                    "display_name" => "Salary",
                                    "href" => "order.php?page=5",
                                ],
                                [
                                    "type" => "button",
                                    "id" => "business",
                                    "display_name" => "Business",
                                    "href" => "order.php?page=6",
                                ],
                            ],
                    ],
                5 => [
                        "page_name" => "Salary",
                        "next_page" => "7",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "company_name",
                                    "display_name" => "Company's Name",
                                    "placeholder" => "Enter Company's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "salary",
                                    "display_name" => "Salary",
                                    "placeholder" => "Enter Salary",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "loan_amount",
                                    "display_name" => "Loan Amount",
                                    "placeholder" => "Enter Loan Amount",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhar_front",
                                    "display_name" => "Aadhaar Front",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhaar_back",
                                    "display_name" => "Addhaar Back",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "pan_card",
                                    "display_name" => "Pan Card",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "bank_statement",
                                    "display_name" => "Bank Statement",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "form16",
                                    "display_name" => "Form 16",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "voter_id",
                                    "display_name" => "Voter Id",
                                ],
                            ],
                    ],
                6 => [
                        "page_name" => "Bussiness",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "company_name",
                                    "display_name" => "Company's Name",
                                    "placeholder" => "Enter Company's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "income",
                                    "display_name" => "Income",
                                    "placeholder" => "Enter Income",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "loan_amount",
                                    "display_name" => "Loan Amount",
                                    "placeholder" => "Enter Loan Amount",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhar_front",
                                    "display_name" => "Aadhaar Front",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhaar_back",
                                    "display_name" => "Addhaar Back",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "pan_card",
                                    "display_name" => "Pan Card",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "bank_statement",
                                    "display_name" => "Bank Statement",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "itr",
                                    "display_name" => "ITR (3 Years)",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "itr",
                                    "display_name" => "GST (2 Years)",
                                ],
                            ],
                    ],
                7 => [
                        "page_name" => "Bank Information",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "bank_name",
                                    "display_name" => "Bank's Name",
                                    "placeholder" => "Enter Banks's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "account_holder_name",
                                    "display_name" => "Account Holder's Name",
                                    "placeholder" => "Enter Account Holder's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "bank_account_number",
                                    "display_name" => "Account Number",
                                    "placeholder" => "Enter Mobile Number",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "ifsc",
                                    "display_name" => "IFSC",
                                    "placeholder" => "Enter IFSC Code",
                                ],
                            ],
                    ],
            ],
    ],
    //mudra loan
    263 => [
        "service_name" => "Mudra Loan",
        "pages" => [
                1 => [
                        "page_name" => "Mobile Verification",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "customer_mobile",
                                    "display_name" => "Mobile Number",
                                    "placeholder" => "Enter Your Mobile Number",
                                ],
                            ],
                    ],
                2 => [
                        "page_name" => "Personal Details",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "customer_name",
                                    "display_name" => "Customer's Name",
                                    "placeholder" => "Enter Your Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "email",
                                    "display_name" => "Customer's E-mail",
                                    "placeholder" => "Enter Your Email",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "whatsapp",
                                    "display_name" => "WhatsApp",
                                    "placeholder" => "Enter Your WhatsApp Number",
                                ],
                                [
                                    "type" => "date",
                                    "id" => "customer_dob",
                                    "display_name" => "Date Of Birth",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "mother_name",
                                    "display_name" => "Mother's Name",
                                    "placeholder" => "Enter Mother's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "father_name",
                                    "display_name" => "Father's Name",
                                    "placeholder" => "Enter Father's Name",
                                ],
                            ],
                    ],
                3 => [
                        "page_name" => "Gauranter Details",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "gauranter_name",
                                    "display_name" => "Gauranter's Name",
                                    "placeholder" => "Enter Gauranter's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "gauranter_mobile",
                                    "display_name" => "Gauranter's Mobile Number",
                                    "placeholder" => "Enter Mobile Number",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "gauratner_relation",
                                    "display_name" => "Relation",
                                    "placeholder" => "Enter Relation",
                                ],
                            ],
                    ],

                4 => [
                        "page_name" => "Bussiness",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "company_name",
                                    "display_name" => "Company's Name",
                                    "placeholder" => "Enter Company's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "income",
                                    "display_name" => "Income",
                                    "placeholder" => "Enter Income",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "loan_amount",
                                    "display_name" => "Loan Amount",
                                    "placeholder" => "Enter Loan Amount",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhar_front",
                                    "display_name" => "Aadhaar Front",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhaar_back",
                                    "display_name" => "Addhaar Back",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "pan_card",
                                    "display_name" => "Pan Card",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "bank_statement",
                                    "display_name" => "Bank Statement",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "itr",
                                    "display_name" => "ITR (3 Years)",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "itr",
                                    "display_name" => "GST (2 Years)",
                                ],
                            ],
                    ],
                5 => [
                        "page_name" => "Bank Information",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "bank_name",
                                    "display_name" => "Bank's Name",
                                    "placeholder" => "Enter Banks's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "account_holder_name",
                                    "display_name" => "Account Holder's Name",
                                    "placeholder" => "Enter Account Holder's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "bank_account_number",
                                    "display_name" => "Account Number",
                                    "placeholder" => "Enter Mobile Number",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "ifsc",
                                    "display_name" => "IFSC",
                                    "placeholder" => "Enter IFSC Code",
                                ],
                            ],
                    ],
            ],
    ],
    //instant loan
    265 => [
        "service_name" => "Instant Loan",
        "pages" => [
                1 => [
                        "page_name" => "Mobile Verification",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "customer_mobile",
                                    "display_name" => "Mobile Number",
                                    "placeholder" => "Enter Your Mobile Number",
                                ],
                            ],
                    ],
                2 => [
                        "page_name" => "Personal Details",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "customer_name",
                                    "display_name" => "Customer's Name",
                                    "placeholder" => "Enter Your Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "email",
                                    "display_name" => "Customer's E-mail",
                                    "placeholder" => "Enter Your Email",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "whatsapp",
                                    "display_name" => "WhatsApp",
                                    "placeholder" => "Enter Your WhatsApp Number",
                                ],
                                [
                                    "type" => "date",
                                    "id" => "customer_dob",
                                    "display_name" => "Date Of Birth",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "mother_name",
                                    "display_name" => "Mother's Name",
                                    "placeholder" => "Enter Mother's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "father_name",
                                    "display_name" => "Father's Name",
                                    "placeholder" => "Enter Father's Name",
                                ],
                            ],
                    ],
                3 => [
                        "page_name" => "Gauranter Details",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "gauranter_name",
                                    "display_name" => "Gauranter's Name",
                                    "placeholder" => "Enter Gauranter's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "gauranter_mobile",
                                    "display_name" => "Gauranter's Mobile Number",
                                    "placeholder" => "Enter Mobile Number",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "gauratner_relation",
                                    "display_name" => "Relation",
                                    "placeholder" => "Enter Relation",
                                ],
                            ],
                    ],
                4 => [
                        "page_name" => "Select Your Income Source",
                        "next_btn" => 0,
                        "Fields" => [
                                [
                                    "type" => "button",
                                    "id" => "salary",
                                    "display_name" => "Salary",
                                    "href" => "order.php?page=5",
                                ],
                                [
                                    "type" => "button",
                                    "id" => "business",
                                    "display_name" => "Business",
                                    "href" => "order.php?page=6",
                                ],
                            ],
                    ],
                5 => [
                        "page_name" => "Salary",
                        "next_page" => "7",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "company_name",
                                    "display_name" => "Company's Name",
                                    "placeholder" => "Enter Company's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "salary",
                                    "display_name" => "Salary",
                                    "placeholder" => "Enter Salary",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "loan_amount",
                                    "display_name" => "Loan Amount",
                                    "placeholder" => "Enter Loan Amount",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhar_front",
                                    "display_name" => "Aadhaar Front",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhaar_back",
                                    "display_name" => "Addhaar Back",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "pan_card",
                                    "display_name" => "Pan Card",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "bank_statement",
                                    "display_name" => "Bank Statement",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "form16",
                                    "display_name" => "Form 16",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "voter_id",
                                    "display_name" => "Voter Id",
                                ],
                            ],
                    ],
                6 => [
                        "page_name" => "Bussiness",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "company_name",
                                    "display_name" => "Company's Name",
                                    "placeholder" => "Enter Company's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "income",
                                    "display_name" => "Income",
                                    "placeholder" => "Enter Income",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "loan_amount",
                                    "display_name" => "Loan Amount",
                                    "placeholder" => "Enter Loan Amount",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhar_front",
                                    "display_name" => "Aadhaar Front",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhaar_back",
                                    "display_name" => "Addhaar Back",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "pan_card",
                                    "display_name" => "Pan Card",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "bank_statement",
                                    "display_name" => "Bank Statement",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "itr",
                                    "display_name" => "ITR (3 Years)",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "itr",
                                    "display_name" => "GST (2 Years)",
                                ],
                            ],
                    ],
                7 => [
                        "page_name" => "Bank Information",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "bank_name",
                                    "display_name" => "Bank's Name",
                                    "placeholder" => "Enter Banks's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "account_holder_name",
                                    "display_name" => "Account Holder's Name",
                                    "placeholder" => "Enter Account Holder's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "bank_account_number",
                                    "display_name" => "Account Number",
                                    "placeholder" => "Enter Mobile Number",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "ifsc",
                                    "display_name" => "IFSC",
                                    "placeholder" => "Enter IFSC Code",
                                ],
                            ],
                    ],
            ],
    ],
    //lap loan
    266 => [
        "service_name" => "LAP Loan",
        "pages" => [
                1 => [
                        "page_name" => "Mobile Verification",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "customer_mobile",
                                    "display_name" => "Mobile Number",
                                    "placeholder" => "Enter Your Mobile Number",
                                ],
                            ],
                    ],
                2 => [
                        "page_name" => "Personal Details",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "customer_name",
                                    "display_name" => "Customer's Name",
                                    "placeholder" => "Enter Your Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "email",
                                    "display_name" => "Customer's E-mail",
                                    "placeholder" => "Enter Your Email",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "whatsapp",
                                    "display_name" => "WhatsApp",
                                    "placeholder" => "Enter Your WhatsApp Number",
                                ],
                                [
                                    "type" => "date",
                                    "id" => "customer_dob",
                                    "display_name" => "Date Of Birth",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "mother_name",
                                    "display_name" => "Mother's Name",
                                    "placeholder" => "Enter Mother's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "father_name",
                                    "display_name" => "Father's Name",
                                    "placeholder" => "Enter Father's Name",
                                ],
                            ],
                    ],
                3 => [
                        "page_name" => "Gauranter Details",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "gauranter_name",
                                    "display_name" => "Gauranter's Name",
                                    "placeholder" => "Enter Gauranter's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "gauranter_mobile",
                                    "display_name" => "Gauranter's Mobile Number",
                                    "placeholder" => "Enter Mobile Number",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "gauratner_relation",
                                    "display_name" => "Relation",
                                    "placeholder" => "Enter Relation",
                                ],
                            ],
                    ],
                4 => [
                        "page_name" => "Select Your Income Source",
                        "next_btn" => 0,
                        "Fields" => [
                                [
                                    "type" => "button",
                                    "id" => "salary",
                                    "display_name" => "Salary",
                                    "href" => "order.php?page=5",
                                ],
                                [
                                    "type" => "button",
                                    "id" => "business",
                                    "display_name" => "Business",
                                    "href" => "order.php?page=6",
                                ],
                            ],
                    ],
                5 => [
                        "page_name" => "Salary",
                        "next_page" => "7",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "company_name",
                                    "display_name" => "Company's Name",
                                    "placeholder" => "Enter Company's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "salary",
                                    "display_name" => "Salary",
                                    "placeholder" => "Enter Salary",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "loan_amount",
                                    "display_name" => "Loan Amount",
                                    "placeholder" => "Enter Loan Amount",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhar_front",
                                    "display_name" => "Aadhaar Front",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhaar_back",
                                    "display_name" => "Addhaar Back",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "pan_card",
                                    "display_name" => "Pan Card",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "bank_statement",
                                    "display_name" => "Bank Statement",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "form16",
                                    "display_name" => "Form 16",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "voter_id",
                                    "display_name" => "Voter Id",
                                ],
                            ],
                    ],
                6 => [
                        "page_name" => "Bussiness",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "company_name",
                                    "display_name" => "Company's Name",
                                    "placeholder" => "Enter Company's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "income",
                                    "display_name" => "Income",
                                    "placeholder" => "Enter Income",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "loan_amount",
                                    "display_name" => "Loan Amount",
                                    "placeholder" => "Enter Loan Amount",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhar_front",
                                    "display_name" => "Aadhaar Front",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhaar_back",
                                    "display_name" => "Addhaar Back",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "pan_card",
                                    "display_name" => "Pan Card",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "bank_statement",
                                    "display_name" => "Bank Statement",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "itr",
                                    "display_name" => "ITR (3 Years)",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "itr",
                                    "display_name" => "GST (2 Years)",
                                ],
                            ],
                    ],
                7 => [
                        "page_name" => "Bank Information",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "bank_name",
                                    "display_name" => "Bank's Name",
                                    "placeholder" => "Enter Banks's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "account_holder_name",
                                    "display_name" => "Account Holder's Name",
                                    "placeholder" => "Enter Account Holder's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "bank_account_number",
                                    "display_name" => "Account Number",
                                    "placeholder" => "Enter Mobile Number",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "ifsc",
                                    "display_name" => "IFSC",
                                    "placeholder" => "Enter IFSC Code",
                                ],
                            ],
                    ],
            ],
    ],
    //Term loan
    267 => [
        "service_name" => "Term Loan",
        "pages" => [
                1 => [
                        "page_name" => "Mobile Verification",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "customer_mobile",
                                    "display_name" => "Mobile Number",
                                    "placeholder" => "Enter Your Mobile Number",
                                ],
                            ],
                    ],
                2 => [
                        "page_name" => "Personal Details",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "customer_name",
                                    "display_name" => "Customer's Name",
                                    "placeholder" => "Enter Your Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "email",
                                    "display_name" => "Customer's E-mail",
                                    "placeholder" => "Enter Your Email",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "whatsapp",
                                    "display_name" => "WhatsApp",
                                    "placeholder" => "Enter Your WhatsApp Number",
                                ],
                                [
                                    "type" => "date",
                                    "id" => "customer_dob",
                                    "display_name" => "Date Of Birth",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "mother_name",
                                    "display_name" => "Mother's Name",
                                    "placeholder" => "Enter Mother's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "father_name",
                                    "display_name" => "Father's Name",
                                    "placeholder" => "Enter Father's Name",
                                ],
                            ],
                    ],
                3 => [
                        "page_name" => "Gauranter Details",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "gauranter_name",
                                    "display_name" => "Gauranter's Name",
                                    "placeholder" => "Enter Gauranter's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "gauranter_mobile",
                                    "display_name" => "Gauranter's Mobile Number",
                                    "placeholder" => "Enter Mobile Number",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "gauratner_relation",
                                    "display_name" => "Relation",
                                    "placeholder" => "Enter Relation",
                                ],
                            ],
                    ],
                4 => [
                        "page_name" => "Select Your Income Source",
                        "next_btn" => 0,
                        "Fields" => [
                                [
                                    "type" => "button",
                                    "id" => "salary",
                                    "display_name" => "Salary",
                                    "href" => "order.php?page=5",
                                ],
                                [
                                    "type" => "button",
                                    "id" => "business",
                                    "display_name" => "Business",
                                    "href" => "order.php?page=6",
                                ],
                            ],
                    ],
                5 => [
                        "page_name" => "Salary",
                        "next_page" => "7",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "company_name",
                                    "display_name" => "Company's Name",
                                    "placeholder" => "Enter Company's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "salary",
                                    "display_name" => "Salary",
                                    "placeholder" => "Enter Salary",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "loan_amount",
                                    "display_name" => "Loan Amount",
                                    "placeholder" => "Enter Loan Amount",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhar_front",
                                    "display_name" => "Aadhaar Front",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhaar_back",
                                    "display_name" => "Addhaar Back",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "pan_card",
                                    "display_name" => "Pan Card",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "bank_statement",
                                    "display_name" => "Bank Statement",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "form16",
                                    "display_name" => "Form 16",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "voter_id",
                                    "display_name" => "Voter Id",
                                ],
                            ],
                    ],
                6 => [
                        "page_name" => "Bussiness",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "company_name",
                                    "display_name" => "Company's Name",
                                    "placeholder" => "Enter Company's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "income",
                                    "display_name" => "Income",
                                    "placeholder" => "Enter Income",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "loan_amount",
                                    "display_name" => "Loan Amount",
                                    "placeholder" => "Enter Loan Amount",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhar_front",
                                    "display_name" => "Aadhaar Front",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhaar_back",
                                    "display_name" => "Addhaar Back",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "pan_card",
                                    "display_name" => "Pan Card",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "bank_statement",
                                    "display_name" => "Bank Statement",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "itr",
                                    "display_name" => "ITR (3 Years)",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "itr",
                                    "display_name" => "GST (2 Years)",
                                ],
                            ],
                    ],
                7 => [
                        "page_name" => "Bank Information",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "bank_name",
                                    "display_name" => "Bank's Name",
                                    "placeholder" => "Enter Banks's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "account_holder_name",
                                    "display_name" => "Account Holder's Name",
                                    "placeholder" => "Enter Account Holder's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "bank_account_number",
                                    "display_name" => "Account Number",
                                    "placeholder" => "Enter Mobile Number",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "ifsc",
                                    "display_name" => "IFSC",
                                    "placeholder" => "Enter IFSC Code",
                                ],
                            ],
                    ],
            ],
    ],
    //Cash Credit
    268 => [
        "service_name" => "Cash Credit",
        "pages" => [
                1 => [
                        "page_name" => "Mobile Verification",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "customer_mobile",
                                    "display_name" => "Mobile Number",
                                    "placeholder" => "Enter Your Mobile Number",
                                ],
                            ],
                    ],
                2 => [
                        "page_name" => "Personal Details",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "customer_name",
                                    "display_name" => "Customer's Name",
                                    "placeholder" => "Enter Your Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "email",
                                    "display_name" => "Customer's E-mail",
                                    "placeholder" => "Enter Your Email",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "whatsapp",
                                    "display_name" => "WhatsApp",
                                    "placeholder" => "Enter Your WhatsApp Number",
                                ],
                                [
                                    "type" => "date",
                                    "id" => "customer_dob",
                                    "display_name" => "Date Of Birth",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "mother_name",
                                    "display_name" => "Mother's Name",
                                    "placeholder" => "Enter Mother's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "father_name",
                                    "display_name" => "Father's Name",
                                    "placeholder" => "Enter Father's Name",
                                ],
                            ],
                    ],
                3 => [
                        "page_name" => "Gauranter Details",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "gauranter_name",
                                    "display_name" => "Gauranter's Name",
                                    "placeholder" => "Enter Gauranter's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "gauranter_mobile",
                                    "display_name" => "Gauranter's Mobile Number",
                                    "placeholder" => "Enter Mobile Number",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "gauratner_relation",
                                    "display_name" => "Relation",
                                    "placeholder" => "Enter Relation",
                                ],
                            ],
                    ],
                4 => [
                        "page_name" => "Select Your Income Source",
                        "next_btn" => 0,
                        "Fields" => [
                                [
                                    "type" => "button",
                                    "id" => "salary",
                                    "display_name" => "Salary",
                                    "href" => "order.php?page=5",
                                ],
                                [
                                    "type" => "button",
                                    "id" => "business",
                                    "display_name" => "Business",
                                    "href" => "order.php?page=6",
                                ],
                            ],
                    ],
                5 => [
                        "page_name" => "Salary",
                        "next_page" => "7",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "company_name",
                                    "display_name" => "Company's Name",
                                    "placeholder" => "Enter Company's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "salary",
                                    "display_name" => "Salary",
                                    "placeholder" => "Enter Salary",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "loan_amount",
                                    "display_name" => "Loan Amount",
                                    "placeholder" => "Enter Loan Amount",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhar_front",
                                    "display_name" => "Aadhaar Front",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhaar_back",
                                    "display_name" => "Addhaar Back",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "pan_card",
                                    "display_name" => "Pan Card",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "bank_statement",
                                    "display_name" => "Bank Statement",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "form16",
                                    "display_name" => "Form 16",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "voter_id",
                                    "display_name" => "Voter Id",
                                ],
                            ],
                    ],
                6 => [
                        "page_name" => "Bussiness",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "company_name",
                                    "display_name" => "Company's Name",
                                    "placeholder" => "Enter Company's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "income",
                                    "display_name" => "Income",
                                    "placeholder" => "Enter Income",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "loan_amount",
                                    "display_name" => "Loan Amount",
                                    "placeholder" => "Enter Loan Amount",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhar_front",
                                    "display_name" => "Aadhaar Front",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhaar_back",
                                    "display_name" => "Addhaar Back",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "pan_card",
                                    "display_name" => "Pan Card",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "bank_statement",
                                    "display_name" => "Bank Statement",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "itr",
                                    "display_name" => "ITR (3 Years)",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "itr",
                                    "display_name" => "GST (2 Years)",
                                ],
                            ],
                    ],
                7 => [
                        "page_name" => "Bank Information",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "bank_name",
                                    "display_name" => "Bank's Name",
                                    "placeholder" => "Enter Banks's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "account_holder_name",
                                    "display_name" => "Account Holder's Name",
                                    "placeholder" => "Enter Account Holder's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "bank_account_number",
                                    "display_name" => "Account Number",
                                    "placeholder" => "Enter Mobile Number",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "ifsc",
                                    "display_name" => "IFSC",
                                    "placeholder" => "Enter IFSC Code",
                                ],
                            ],
                    ],
            ],
    ],
    //cd loan
    269 => [
        "service_name" => "CD Loan",
        "pages" => [
                1 => [
                        "page_name" => "Mobile Verification",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "customer_mobile",
                                    "display_name" => "Mobile Number",
                                    "placeholder" => "Enter Your Mobile Number",
                                ],
                            ],
                    ],
                2 => [
                        "page_name" => "Personal Details",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "customer_name",
                                    "display_name" => "Customer's Name",
                                    "placeholder" => "Enter Your Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "email",
                                    "display_name" => "Customer's E-mail",
                                    "placeholder" => "Enter Your Email",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "whatsapp",
                                    "display_name" => "WhatsApp",
                                    "placeholder" => "Enter Your WhatsApp Number",
                                ],
                                [
                                    "type" => "date",
                                    "id" => "customer_dob",
                                    "display_name" => "Date Of Birth",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "mother_name",
                                    "display_name" => "Mother's Name",
                                    "placeholder" => "Enter Mother's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "father_name",
                                    "display_name" => "Father's Name",
                                    "placeholder" => "Enter Father's Name",
                                ],
                            ],
                    ],
                3 => [
                        "page_name" => "Gauranter Details",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "gauranter_name",
                                    "display_name" => "Gauranter's Name",
                                    "placeholder" => "Enter Gauranter's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "gauranter_mobile",
                                    "display_name" => "Gauranter's Mobile Number",
                                    "placeholder" => "Enter Mobile Number",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "gauratner_relation",
                                    "display_name" => "Relation",
                                    "placeholder" => "Enter Relation",
                                ],
                            ],
                    ],
                4 => [
                        "page_name" => "Select Your Income Source",
                        "next_btn" => 0,
                        "Fields" => [
                                [
                                    "type" => "button",
                                    "id" => "salary",
                                    "display_name" => "Salary",
                                    "href" => "order.php?page=5",
                                ],
                                [
                                    "type" => "button",
                                    "id" => "business",
                                    "display_name" => "Business",
                                    "href" => "order.php?page=6",
                                ],
                            ],
                    ],
                5 => [
                        "page_name" => "Salary",
                        "next_page" => "7",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "company_name",
                                    "display_name" => "Company's Name",
                                    "placeholder" => "Enter Company's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "salary",
                                    "display_name" => "Salary",
                                    "placeholder" => "Enter Salary",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "loan_amount",
                                    "display_name" => "Loan Amount",
                                    "placeholder" => "Enter Loan Amount",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhar_front",
                                    "display_name" => "Aadhaar Front",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhaar_back",
                                    "display_name" => "Addhaar Back",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "pan_card",
                                    "display_name" => "Pan Card",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "bank_statement",
                                    "display_name" => "Bank Statement",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "form16",
                                    "display_name" => "Form 16",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "voter_id",
                                    "display_name" => "Voter Id",
                                ],
                            ],
                    ],
                6 => [
                        "page_name" => "Bussiness",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "company_name",
                                    "display_name" => "Company's Name",
                                    "placeholder" => "Enter Company's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "income",
                                    "display_name" => "Income",
                                    "placeholder" => "Enter Income",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "loan_amount",
                                    "display_name" => "Loan Amount",
                                    "placeholder" => "Enter Loan Amount",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhar_front",
                                    "display_name" => "Aadhaar Front",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "aadhaar_back",
                                    "display_name" => "Addhaar Back",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "pan_card",
                                    "display_name" => "Pan Card",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "bank_statement",
                                    "display_name" => "Bank Statement",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "itr",
                                    "display_name" => "ITR (3 Years)",
                                ],
                                [
                                    "type" => "file",
                                    "id" => "itr",
                                    "display_name" => "GST (2 Years)",
                                ],
                            ],
                    ],
                7 => [
                        "page_name" => "Bank Information",
                        "Fields" => [
                                [
                                    "type" => "text",
                                    "id" => "bank_name",
                                    "display_name" => "Bank's Name",
                                    "placeholder" => "Enter Banks's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "account_holder_name",
                                    "display_name" => "Account Holder's Name",
                                    "placeholder" => "Enter Account Holder's Name",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "bank_account_number",
                                    "display_name" => "Account Number",
                                    "placeholder" => "Enter Mobile Number",
                                ],
                                [
                                    "type" => "text",
                                    "id" => "ifsc",
                                    "display_name" => "IFSC",
                                    "placeholder" => "Enter IFSC Code",
                                ],
                            ],
                    ],
            ],
    ],
];
?>
