<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Strategic Planning - Questionnaire.pdf
    </title>

    <style>
        {!! file_get_contents(resource_path('css/bootstrap.min.css')) !!}
    </style>

    <style>
        @font-face {
            font-family: 'Ubuntu';
            src: url('{{ public_path('fonts/Poppins-Light.ttf') }}') format('truetype') !important;
            font-weight: lighter !important;
        }

        html,
        body {
            font-family: "Poppins" !important;
            margin: 0;
        }

        p {
            font-weight: lighter !important;
        }

        @page {
            margin: 0;
        }

        body {
            page-break-inside: avoid;
        }

        .container2 {
            width: 100% !important;
            height: 100%;
            margin: auto;
        }

        .container3 {
            width: 90% !important;
            height: 90% !important;
            margin: auto;
            padding: 50px 0 !important;
        }

        .px-50 {
            padding: 0 50px 0 50px;
        }

        h4,
        .h4 {
            font-size: 1rem !important;
        }

        .h5 {
            font-size: 0.9rem !important;
        }

        h5 {
            font-size: 0.9rem !important;
            font-weight: 400;
        }

        .h6 {
            font-size: 0.9rem !important;
            font-weight: 400;
        }

        .page-break {
            page-break-before: always;
        }

        .lh-1 {
            line-height: 1 !important;
        }

        .s-8 {
            font-size: 8px !important;
        }

        .s-10 {
            font-size: 10px !important;
        }

        .s-12 {
            font-size: 12px !important;
        }

        .s-14 {
            font-size: 14px !important;
        }

        .s-15 {
            font-size: 15px !important;
        }

        .s-16 {
            font-size: 16px !important;
        }

        .s-17 {
            font-size: 17px !important;
        }

        .s-18 {
            font-size: 18px !important;
        }


        .d-table {
            display: table;
            width: 100%;
        }


        .header {
            padding: 30px 50px;
            background-color: #E9ECF9;
        }

        .bg-pdf {
            background-color: #E9ECF9;
        }

        p {
            line-height: 1;
        }

        .container4 {
            width: 100%;
            padding-left: 50px;
            padding-right: 50px;
        }

        .col-1 {
            width: 8.33% !important;
        }

        .col-2 {
            width: 16.66% !important;
        }

        .col-3 {
            width: calc(8.33% * 3) !important;
        }


        .col-4 {
            width: calc(8.33% * 4) !important;
        }

        .col-5 {
            width: calc(8.33% * 5) !important;
        }


        .col-6 {
            width: calc(8.33% * 6) !important;
        }


        .col-7 {
            width: calc(8.33% * 7) !important;
        }


        .col-8 {
            width: calc(8.33% * 8) !important;
        }


        .col-9 {
            width: calc(8.33% * 9) !important;
        }


        .col-10 {
            width: calc(8.33% * 10 !important);
        }


        .col-11 {
            width: calc(8.33% * 11 !important);
        }


        .col-12 {
            width: calc(8.33% * 12 !important);
        }

        .table-wrapper {
            width: 100% !important;
            display: table !important;
            table-layout: fixed !important;
        }

        .table-row {
            display: table-row !important;
        }

        .table-cell {
            display: table-cell !important;
            vertical-align: top !important;
        }

        .card {
            height: 95% !important;
            border-left: 0px !important;
            border-right: 0px !important;
            border-radius: 0px !important;
        }

        table,
        th,
        td {
            border: 1px solid #dee2e6 !important;
        }

        .table td,
        .table th {
            padding: .75rem;
            vertical-align: top;
        }

        .align-justify {
            text-align: justify !important;
        }

        .fw-400 {
            font-weight: 400 !important;
        }

        .fw-500 {
            font-weight: 500;
        }

        .fw-600 {
            font-weight: 600;
        }

        .toc-table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }

        .toc-table td {
            padding: 4px 0;
            white-space: nowrap;
            font-size: 14px;
        }

        .toc-title {
            width: 100%;
            position: relative;
        }

        .toc-title::after {
            content: ".......................................................................................................................................................................................";
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            overflow: hidden;
            white-space: nowrap;
            color: #999;
            pointer-events: none;
        }

        .toc-text {
            background: white;
            position: relative;
            padding-right: 5px;
            z-index: 1;
        }

        .blank {
            display: inline-block;
            border-bottom: 1px solid #000;
            width: 200px;
        }

        .para {
            font-size: 15px !important;
            text-align: justify !important;
        }
    </style>

</head>

<body>

    <!-- Section B Started -->
    <section>

        <div class="container2 ">
            <div class="container3">

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">
                                <div>
                                    <div class="table-wrapper grid-template-columns">
                                        <div class="table-row grid-template-columns">
                                            <div class="table-cell text-center ">
                                                <!-- <img src="{{asset('assets/images/logo.jpg')}}" width="100%" alt=""> -->
                                            </div>
                                            <div class="table-cell text-center py-5">
                                                <img src="{{ $images['logoDark'] }}" width="80%" alt="Logo">

                                            </div>
                                            <div class="table-cell text-center ">
                                                <!-- <img src="{{asset('assets/images/logo.jpg')}}" width="100%" alt=""> -->
                                            </div>

                                        </div>
                                    </div>


                                    <h2 class="text-center fw-bold">
                                        SECTION: B
                                        <br>
                                        ESTABLISHING THE BUSINESS

                                    </h2>


                                    <h3 class="text-center fw-bold text-primary">
                                        CONTENTS
                                    </h3>




                                    <table class="toc-table border-0">
                                        <tr>
                                            <td class="toc-title border-0">
                                                <span class="toc-text">INTRODUCTION</span>
                                            </td>
                                            <td class="border-0">1</td>
                                        </tr>
                                        <tr>
                                            <td class="toc-title border-0">
                                                <span class="toc-text">PREPARING FOR LAUNCH OF THE FRANCHISE </span>
                                            </td>
                                            <td class="border-0">2</td>
                                        </tr>

                                        <tr>
                                            <td class="toc-title border-0">
                                                <span class="toc-text">SELECTING YOUR BUSINESS TYPE </span>
                                            </td>
                                            <td class="border-0">4</td>
                                        </tr>

                                        <tr class="mx-5">
                                            <td class="toc-title border-0 ms-5">
                                                <span class="toc-text">PARTNERSHIP </span>
                                            </td>
                                            <td class="border-0 me-5">5</td>
                                        </tr>

                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">THE LIMITED PARTNERSHIP</span>
                                            </td>
                                            <td class="border-0 ">6</td>
                                        </tr>

                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">THE CORPORATION </span>
                                            </td>
                                            <td class="border-0 ">6</td>
                                        </tr>


                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">LIMITED LIABILITY COMPANY </span>
                                            </td>
                                            <td class="border-0 ">7</td>
                                        </tr>



                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">SUBCHAPTER “S” CORPORATION </span>
                                            </td>
                                            <td class="border-0 ">7</td>
                                        </tr>


                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">YOUR STATUS AS A FRANCHISEE </span>
                                            </td>
                                            <td class="border-0 ">8</td>
                                        </tr>

                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">APPROVED BUSINESS NAME </span>
                                            </td>
                                            <td class="border-0 ">8</td>
                                        </tr>

                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">APPROVED BUSINESS COLLATERAL </span>
                                            </td>
                                            <td class="border-0 ">9</td>
                                        </tr>

                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    SIGNAGE
                                                </span>
                                            </td>
                                            <td class="border-0 ">9</td>
                                        </tr>


                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    REQUIRED BANKING
                                                </span>
                                            </td>
                                            <td class="border-0 ">9</td>
                                        </tr>


                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    ACCOUNTS TO OPEN
                                                </span>
                                            </td>
                                            <td class="border-0 ">10</td>
                                        </tr>

                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    ESTABLISHING AN OPERATIONAL “HOME BASE”
                                                </span>
                                            </td>
                                            <td class="border-0 ">10</td>
                                        </tr>



                                    </table>



                                </div>


                            </div>

                        </div>
                    </div>


                </div>
                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="table-cell w-50">

                            <p class="s-10">
                                Kosha Hibachi
                                <br>
                                Brand Standards Manual
                            </p>
                        </div>

                        <div class="table-cell w-50">
                            <p class="s-10 text-end">
                                Copyright 2024
                                <br>
                                Kosha Hibachi Franchising. Inc.
                            </p>
                        </div>

                    </div>
                </div>

            </div>


        </div>

        <!-- ==================== -->

        <div class="container2 page-break">
            <div class="container3">

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">
                                <div>

                                    <table class="toc-table border-0">


                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    REQUIRED INSURANCE
                                                </span>
                                            </td>
                                            <td class="border-0 ">11</td>
                                        </tr>


                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    TRAILER & TRUCK SPECIFICATIONS
                                                </span>
                                            </td>
                                            <td class="border-0 ">13</td>
                                        </tr>

                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    SIGNAGE AND LOGO SPECIFICATIONS
                                                </span>
                                            </td>
                                            <td class="border-0 ">14</td>
                                        </tr>

                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    LICENSES, PERMITS, AND CERTIFICATIONS
                                                </span>
                                            </td>
                                            <td class="border-0 ">15</td>
                                        </tr>


                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    HEALTH DEPARTMENT REGULATIONS
                                                </span>
                                            </td>
                                            <td class="border-0 ">16</td>
                                        </tr>

                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    FOOD HANDLER’S PERMIT
                                                </span>
                                            </td>
                                            <td class="border-0 ">16</td>
                                        </tr>

                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    UTILITIES AND OTHER SERVICES
                                                </span>
                                            </td>
                                            <td class="border-0 ">17</td>
                                        </tr>

                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    UTILITIES ON THE TRAILER:
                                                </span>
                                            </td>
                                            <td class="border-0 "> 17</td>
                                        </tr>

                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    ADDITIONAL SERVICES FOR THE COMMISSARY:
                                                </span>
                                            </td>
                                            <td class="border-0 "> 17</td>
                                        </tr>


                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    OCCASIONAL SERVICES:
                                                </span>
                                            </td>
                                            <td class="border-0 ">17</td>
                                        </tr>


                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    PURCHASING EQUIPMENT AND SUPPLIES
                                                </span>
                                            </td>
                                            <td class="border-0 ">18</td>
                                        </tr>

                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    REQUIRED SOFTWARE
                                                </span>
                                            </td>
                                            <td class="border-0 ">18</td>
                                        </tr>


                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    APPROVED VENDORS
                                                </span>
                                            </td>
                                            <td class="border-0 ">20</td>
                                        </tr>

                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    NOTICE OF PROPOSED CHANGE OF SUPPLIER OR VENDOR (SAMPLE)
                                                </span>
                                            </td>
                                            <td class="border-0 ">21</td>
                                        </tr>


                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    TAXES
                                                </span>
                                            </td>
                                            <td class="border-0 ">22</td>
                                        </tr>


                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    INCOME TAXES
                                                </span>
                                            </td>
                                            <td class="border-0 ">22</td>
                                        </tr>


                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    SELF-EMPLOYMENT TAXES
                                                </span>
                                            </td>
                                            <td class="border-0 ">23</td>
                                        </tr>


                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    SOCIAL SECURITY, MEDICARE, AND WITHHELD INCOME TAXES
                                                </span>
                                            </td>
                                            <td class="border-0 ">23</td>
                                        </tr>


                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    UNEMPLOYMENT TAXES
                                                </span>
                                            </td>
                                            <td class="border-0 ">23</td>
                                        </tr>


                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    EXCISE TAXES
                                                </span>
                                            </td>
                                            <td class="border-0 ">24</td>
                                        </tr>


                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    STATE INCOME TAXES
                                                </span>
                                            </td>
                                            <td class="border-0 ">24</td>
                                        </tr>


                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    STATE UNEMPLOYMENT TAXES
                                                </span>
                                            </td>
                                            <td class="border-0 ">24</td>
                                        </tr>


                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    SALES TAXES
                                                </span>
                                            </td>
                                            <td class="border-0 ">25</td>
                                        </tr>

                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    COUNTY OR TOWN TAXES
                                                </span>
                                            </td>
                                            <td class="border-0 ">25</td>
                                        </tr>


                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    SALES TAX
                                                </span>
                                            </td>
                                            <td class="border-0 ">25</td>
                                        </tr>


                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    PERSONAL PROPERTY TAX
                                                </span>
                                            </td>
                                            <td class="border-0 ">25</td>
                                        </tr>


                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    COUNTY OR TOWN BUSINESS TAX
                                                </span>
                                            </td>
                                            <td class="border-0 ">25</td>
                                        </tr>


                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    EMPLOYER IDENTIFICATION NUMBER (“E.I.N.”)
                                                </span>
                                            </td>
                                            <td class="border-0 ">26</td>
                                        </tr>


                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    HOW TO GET AN EIN
                                                </span>
                                            </td>
                                            <td class="border-0 ">26</td>
                                        </tr>


                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    IRS-REQUIRED REPORTS
                                                </span>
                                            </td>
                                            <td class="border-0 ">27</td>
                                        </tr>


                                    </table>



                                </div>


                            </div>

                        </div>
                    </div>


                </div>
                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="table-cell w-50">

                            <p class="s-10">
                                Kosha Hibachi
                                <br>
                                Brand Standards Manual
                            </p>
                        </div>

                        <div class="table-cell w-50">
                            <p class="s-10 text-end">
                                Copyright 2024
                                <br>
                                Kosha Hibachi Franchising. Inc.
                            </p>
                        </div>

                    </div>
                </div>

            </div>


        </div>
        <!-- =========================== -->


        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section B: Establishing the Business </p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">B-1</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">
                                <h2 class="fw-bold text-center">
                                    INTRODUCTION
                                </h2>
                                <p class="s-15 fw-light align-justify">
                                    Before opening your Kosha Hibachi franchise business, you must attend to several
                                    general business tasks, as well as specific franchise-related tasks. Among them are
                                    your responsibilities to incorporate your legal business entity, select and develop
                                    an area, and purchase required insurance. This section describes the tasks you must
                                    complete to open your Kosha Hibachi business according to the standards of Kosha
                                    Hibachi LLC.
                                </p>
                            </div>

                        </div>
                    </div>


                </div>
                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="table-cell w-50">

                            <p class="s-10">
                                Kosha Hibachi
                                <br>
                                Brand Standards Manual
                            </p>
                        </div>

                        <div class="table-cell w-50">
                            <p class="s-10 text-end">
                                Copyright 2024
                                <br>
                                Kosha Hibachi Franchising. Inc.
                            </p>
                        </div>

                    </div>
                </div>

            </div>


        </div>

        <!-- =========================== -->


        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section B: Establishing the Business </p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">B-2</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">
                                <h2 class="fw-bold text-center">
                                    PREPARING FOR LAUNCH OF THE FRANCHISE
                                </h2>

                                <div>
                                    <ol class="s-15 fw-light"
                                        style="padding-left: 20px; font-family: Arial, sans-serif;">
                                        <li style="margin-bottom: 10px;">
                                            Franchisee must set up their new Business Entity:
                                            <ul style="padding-left: 20px; list-style-type: disc;">
                                                <li>Franchisee must complete the steps as enforced in their state and
                                                    market in which they intend to operate their Kosha Hibachi franchise
                                                    business.</li>
                                                <li>Franchisees are required to utilize the services of their own
                                                    attorney or legal counsel while adhering to all terms stated in the
                                                    Franchise Agreement.</li>
                                                <li>Franchisees must submit all business registration information to the
                                                    Corporate Office for validating compliance with the Franchise
                                                    Agreement.</li>
                                            </ul>
                                        </li>

                                        <li style="margin-bottom: 10px;">
                                            Sign the Franchise Agreement – Become our next Franchisee!
                                            <ul style="padding-left: 20px; list-style-type: disc;">
                                                <li>Conduct “Kick-Off Call” with the Corporate Office and Kosha Hibachi
                                                    Team.</li>
                                            </ul>
                                        </li>

                                        <li style="margin-bottom: 10px;">
                                            Establish a “Home Base”:
                                            <ul style="padding-left: 20px; list-style-type: disc;">
                                                <li>Franchisees may need to establish operations at a commissary with
                                                    proper storage.</li>
                                            </ul>
                                        </li>

                                        <li style="margin-bottom: 10px;">
                                            Acquire Vehicle and Trailer
                                            <ul style="padding-left: 20px; list-style-type: disc;">
                                                <li>Trailer must be outfitted according to brand standards.</li>
                                                <li>Franchisee will acquire trailer from the approved manufacturer in a
                                                    “ready” state:
                                                    <ul style="padding-left: 20px; list-style-type: circle;">
                                                        <li>Logos affixed</li>
                                                        <li>Wrapped</li>
                                                        <li>Equipment-Ready</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>

                                        <li style="margin-bottom: 10px;">
                                            Acquire Equipment and Technologies
                                            <ul style="padding-left: 20px; list-style-type: disc;">
                                                <li>The franchisee must purchase all Required Equipment.
                                                    <ul style="padding-left: 20px; list-style-type: circle;">
                                                        <li>Office Accessories</li>
                                                        <li>Vehicle Accessories</li>
                                                        <li>Cooking Accessories</li>
                                                    </ul>
                                                </li>
                                                <li>The franchisee must purchase all Required Software and Technologies.
                                                    <ul style="padding-left: 20px; list-style-type: circle;">
                                                        <li>QuickBooks (must share sales reports and data with the
                                                            Corporate Office)</li>
                                                        <li>Square POS</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>

                                        <li style="margin-bottom: 10px;">
                                            Acquire Insurance
                                            <ul style="padding-left: 20px; list-style-type: disc;">
                                                <li>Insurance “types” and policies must adhere to the terms stated in
                                                    the Franchise Agreement.</li>
                                            </ul>
                                        </li>
                                    </ol>

                                </div>
                            </div>

                        </div>
                    </div>


                </div>
                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="table-cell w-50">

                            <p class="s-10">
                                Kosha Hibachi
                                <br>
                                Brand Standards Manual
                            </p>
                        </div>

                        <div class="table-cell w-50">
                            <p class="s-10 text-end">
                                Copyright 2024
                                <br>
                                Kosha Hibachi Franchising. Inc.
                            </p>
                        </div>

                    </div>
                </div>

            </div>


        </div>


        <!-- =========================== -->


        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section B: Establishing the Business </p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">B-3</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">


                                <div class="fw-light">
                                    <ol class="s-15 fw-light" start="7" style="padding-left: 20px;">
                                        <li style="margin-bottom: 10px;">
                                            Satisfy all Business Compliance Requirements (Market-Specific)
                                            <ul style="padding-left: 20px; list-style-type: disc;">
                                                <li>Business License</li>
                                                <li>City or Municipal Permits (or similar)</li>
                                                <li>Food Handling Certification</li>
                                                <li>Franchisee may be required to complete certain examinations or
                                                    acquire certain certifications or permits as required by their
                                                    locale</li>
                                                <li>Any other license as required locally</li>
                                            </ul>
                                        </li>

                                        <li style="margin-bottom: 10px;">
                                            Commence Phase I of “Franchisee Training”:
                                            <ul style="padding-left: 20px; list-style-type: disc;">
                                                <li>Conduct an Overview of the Customer Experience</li>
                                                <li>Review “Business Readiness”
                                                    <ul style="padding-left: 20px; list-style-type: circle;">
                                                        <li>Review email and compliance with applicable domain.</li>
                                                        <li>Review pre-approved Marketing Materials.</li>
                                                        <li>Review proper customer interaction etiquette.</li>
                                                        <li>Review office utilities (dedicated business phone line must
                                                            be established!)</li>
                                                        <li>Review vehicle readiness.</li>
                                                        <li>Review all cooking equipment.</li>
                                                    </ul>
                                                </li>
                                                <li>Conduct Initial Marketing Campaign
                                                    <ul style="padding-left: 20px; list-style-type: circle;">
                                                        <li>Verify online presence, including use of social media
                                                            platforms, Google and Kosha Hibachi website and related web
                                                            tools.</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>

                                        <li style="margin-bottom: 10px;">
                                            Conduct Phase II of “Franchisee Training” at the franchisee’s office or
                                            location.
                                            <ul style="padding-left: 20px; list-style-type: disc;">
                                                <li>Onward!
                                                    <ul style="padding-left: 20px; list-style-type: circle;">
                                                        <li>Keep track of all business financials.
                                                            <ul style="padding-left: 20px; list-style-type: square;">
                                                                <li>Upload and integrate sales data to QuickBooks
                                                                    regularly.</li>
                                                                <li>Share sales reports with the Corporate Office.</li>
                                                                <li>Verify payment of “Franchise-related” fees, such as
                                                                    Royalties and Franchise Marketing Contributions.
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>Each franchisee should evaluate their own personal
                                                            involvement with the business to help manage labor needs.
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>Conduct Inventory Ordering</li>
                                                <li>Operate trailer according to Kosha Hibachi franchise brand standards
                                                </li>
                                            </ul>
                                        </li>
                                    </ol>


                                </div>
                            </div>

                        </div>
                    </div>


                </div>
                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="table-cell w-50">

                            <p class="s-10">
                                Kosha Hibachi
                                <br>
                                Brand Standards Manual
                            </p>
                        </div>

                        <div class="table-cell w-50">
                            <p class="s-10 text-end">
                                Copyright 2024
                                <br>
                                Kosha Hibachi Franchising. Inc.
                            </p>
                        </div>

                    </div>
                </div>

            </div>


        </div>


        <!-- =========================== -->


        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section B: Establishing the Business </p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">B-3</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">


                                <div class="fw-light">
                                    <ol class="s-15 fw-light" start="7" style="padding-left: 20px; ">
                                        <li style="margin-bottom: 10px;">
                                            Satisfy all Business Compliance Requirements (Market-Specific)
                                            <ul style="padding-left: 20px; list-style-type: disc;">
                                                <li>Business License</li>
                                                <li>City or Municipal Permits (or similar)</li>
                                                <li>Food Handling Certification</li>
                                                <li>Franchisee may be required to complete certain examinations or
                                                    acquire certain certifications or permits as required by their
                                                    locale</li>
                                                <li>Any other license as required locally</li>
                                            </ul>
                                        </li>

                                        <li style="margin-bottom: 10px;">
                                            Commence Phase I of “Franchisee Training”:
                                            <ul style="padding-left: 20px; list-style-type: disc;">
                                                <li>Conduct an Overview of the Customer Experience</li>
                                                <li>Review “Business Readiness”
                                                    <ul style="padding-left: 20px; list-style-type: circle;">
                                                        <li>Review email and compliance with applicable domain.</li>
                                                        <li>Review pre-approved Marketing Materials.</li>
                                                        <li>Review proper customer interaction etiquette.</li>
                                                        <li>Review office utilities (dedicated business phone line must
                                                            be established!)</li>
                                                        <li>Review vehicle readiness.</li>
                                                        <li>Review all cooking equipment.</li>
                                                    </ul>
                                                </li>
                                                <li>Conduct Initial Marketing Campaign
                                                    <ul style="padding-left: 20px; list-style-type: circle;">
                                                        <li>Verify online presence, including use of social media
                                                            platforms, Google and Kosha Hibachi website and related web
                                                            tools.</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>

                                        <li style="margin-bottom: 10px;">
                                            Conduct Phase II of “Franchisee Training” at the franchisee’s office or
                                            location.
                                            <ul style="padding-left: 20px; list-style-type: disc;">
                                                <li>Onward!
                                                    <ul style="padding-left: 20px; list-style-type: circle;">
                                                        <li>Keep track of all business financials.
                                                            <ul style="padding-left: 20px; list-style-type: square;">
                                                                <li>Upload and integrate sales data to QuickBooks
                                                                    regularly.</li>
                                                                <li>Share sales reports with the Corporate Office.</li>
                                                                <li>Verify payment of “Franchise-related” fees, such as
                                                                    Royalties and Franchise Marketing Contributions.
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>Each franchisee should evaluate their own personal
                                                            involvement with the business to help manage labor needs.
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>Conduct Inventory Ordering</li>
                                                <li>Operate trailer according to Kosha Hibachi franchise brand standards
                                                </li>
                                            </ul>
                                        </li>
                                    </ol>


                                </div>
                            </div>

                        </div>
                    </div>


                </div>
                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="table-cell w-50">

                            <p class="s-10">
                                Kosha Hibachi
                                <br>
                                Brand Standards Manual
                            </p>
                        </div>

                        <div class="table-cell w-50">
                            <p class="s-10 text-end">
                                Copyright 2024
                                <br>
                                Kosha Hibachi Franchising. Inc.
                            </p>
                        </div>

                    </div>
                </div>

            </div>


        </div>



        <!-- =========================== -->


        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section B: Establishing the Business </p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">B-4</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">

                                <h2 class="fw-bold text-center">
                                    SELECTING YOUR BUSINESS TYPE
                                </h2>

                                <p class="mt-4 s-15 fw-light align-justify">
                                    One of the first decisions you will need to make is how you would like to structure
                                    your business. The following information will familiarize you with the various
                                    business structures available for your Kosha Hibachi business.
                                </p>
                                <br>
                                <br>

                                <p class="s-15 fw-light ">
                                    For most businesses, these choices include:
                                </p>

                                <ol class="s-15 fw-light">
                                    <li> Partnership; </li>
                                    <li>Limited partnership;</li>
                                    <li>A corporation; or </li>
                                    <li>limited liability company (LLC)</li>
                                </ol>

                                <p class="fw-light s-15 align-justify">Each of these structures is defined by the laws
                                    of
                                    the
                                    jurisdiction in which it is formed. We provide this discussion for your information
                                    only and recommend making any decisions in relation to this matter on the advice of
                                    your attorney.</p>
                            </div>

                        </div>
                    </div>


                </div>
                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="table-cell w-50">

                            <p class="s-10">
                                Kosha Hibachi
                                <br>
                                Brand Standards Manual
                            </p>
                        </div>

                        <div class="table-cell w-50">
                            <p class="s-10 text-end">
                                Copyright 2024
                                <br>
                                Kosha Hibachi Franchising. Inc.
                            </p>
                        </div>

                    </div>
                </div>

            </div>


        </div>



        <!-- =========================== -->

        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section B: Establishing the Business </p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">B-5</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">

                                <h2 class="fw-bold">
                                    PARTNERSHIP
                                </h2>

                                <p class="mt-4 s-15 fw-light align-justify">
                                    A partnership is the simplest form of organization involving more than one person.
                                    It is formed merely by agreement of the partners who share the right to manage and
                                    the right to participate in the profits. Each also shares the unlimited obligation
                                    to answer personally for all the liabilities of the business.

                                    <br>
                                    <br>

                                    Partnerships offer opportunity for more capital, more ideas, and more expertise.
                                    Very often it is the joint venture of an idea person and a money person.
                                    Partnerships relieve the responsibility of sole decision-making and sole liability.
                                    They also provide the ability to take a vacation without closing your doors.
                                    Disadvantages include the loss of sole decision-making and requirement for more
                                    paperwork as well as time and tact in interpersonal relations.

                                    <br>
                                    <br>

                                    Although not required by a general partnership, it is probably unwise to enter into
                                    a partnership without a written agreement. A written agreement should establish
                                    several things:
                                </p>
                                <br>

                                <ol class="s-15 fw-light">
                                    <li>A statement of the basic goals and principles of the business. </li>
                                    <li> The contribution of each partner in cash, labor, or property. Equal
                                        contributions are not required.</li>
                                    <li> The division of profits by the partners including how much and when profits
                                        are to be withdrawn.</li>
                                    <li> An itemization of the specific duties, authorities, and responsibilities of
                                        each partner. (This does not reduce the legal responsibilities of each general
                                        partner but serves as a basis for management organization.)</li>
                                    <li> Provisions for business continuation in the event of death or withdrawal of a
                                        partner. (A method of return of capital should be established so that a partner
                                        can recoup his/her investment without putting the business in jeopardy.)</li>
                                </ol>
                            </div>

                        </div>
                    </div>


                </div>
                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="table-cell w-50">

                            <p class="s-10">
                                Kosha Hibachi
                                <br>
                                Brand Standards Manual
                            </p>
                        </div>

                        <div class="table-cell w-50">
                            <p class="s-10 text-end">
                                Copyright 2024
                                <br>
                                Kosha Hibachi Franchising. Inc.
                            </p>
                        </div>

                    </div>
                </div>

            </div>


        </div>


        <!-- =========================== -->

        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section B: Establishing the Business </p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">B-6</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">

                                <h2 class="fw-bold">
                                    THE LIMITED PARTNERSHIP
                                </h2>

                                <p class=" s-15 fw-light align-justify">
                                    A limited partnership is a partnership of two or more persons in which there are one
                                    or more general partners unlimitedly liable for the debts of the business with
                                    general powers of management and one or more limited partners who have no personal
                                    liability for the debts of the business (except to the extent of their capital
                                    contributions) and very limited powers of management. In order to create a limited
                                    partnership, a certificate must be filed with an appropriate state or county
                                    official and a fee paid. The limited partnership certificate bears little
                                    resemblance to corporate articles of incorporation and the state official who is
                                    authorized to accept articles of incorporation. Partnership agreements state that
                                    certain people are “limited partners” or that specified persons “are not personally
                                    liable for the debts of the business.” To ensure limited liability, a certificate of
                                    limited partnership must be filed.
                                </p>

                                <br>
                                <br>

                                <h2 class="fw-bold">
                                    THE CORPORATION
                                </h2>

                                <p class=" s-15 fw-light align-justify">
                                    The most common interest of small business incorporation is in the area of “limited
                                    liability.” A corporation is a separate legal entity from its owners and is taxed as
                                    a corporation apart from its owners. As an owner, creditors may not pursue your
                                    personal non-business assets for collection or damages in a lawsuit.
                                    <br>
                                    <br>
                                    This “limited liability” is not all encompassing. Corporate officers have
                                    “fiduciary” responsibilities that compel them to operate the corporation within the
                                    laws governing corporations. They are responsible for any gross negligence, criminal
                                    action, or failure in compliance with government regulations. Also, organizations
                                    that lend money to small corporations often require the stockholders or officers to
                                    co-sign as personal guarantors of the loan, thus diminishing the “limited liability”
                                    of incorporation.

                                    <br>
                                    <br>
                                    As a corporate officer, you may be paid an employee’s salary, taxable to yourself,
                                    and deductible as a business expense. The remaining corporate profits not paid out
                                    as wages are subject to corporate taxes. Wages paid cannot be in excess of what is
                                    deemed “reasonable” by the IRS according to industry standards. If wages are
                                    declared “unreasonable” by the IRS, they may be treated as “constructive dividends”
                                    and are subject to double tax, once at corporate level and once at the individual
                                    level (up to 50 percent on unearned income.)
                                </p>


                            </div>

                        </div>
                    </div>


                </div>
                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="table-cell w-50">

                            <p class="s-10">
                                Kosha Hibachi
                                <br>
                                Brand Standards Manual
                            </p>
                        </div>

                        <div class="table-cell w-50">
                            <p class="s-10 text-end">
                                Copyright 2024
                                <br>
                                Kosha Hibachi Franchising. Inc.
                            </p>
                        </div>

                    </div>
                </div>

            </div>


        </div>

        <!-- =========================== -->

        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section B: Establishing the Business </p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">B-6</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">

                                <h2 class="fw-bold">
                                    LIMITED LIABILITY COMPANY
                                </h2>

                                <p class=" s-15 fw-light align-justify">
                                    A limited liability company or LLC is a business structure that is becoming
                                    increasingly popular. The limited liability company has three main advantages:
                                </p>

                                <br>
                                <br>

                                <ol class="align-justify s-15 fw-light">
                                    <li>In general, in a limited liability company, you would
                                        receive the liability protection of a corporation. Owners are not liable for the
                                        LLC’s obligations simply by virtue of their status as owners. Ownership then
                                        does not result in personal liability. </li>
                                    <li>
                                        In an LLC, you would also receive the tax benefits of a partnership. You are
                                        taxed only once on the income and gains from the business, at owner level, with
                                        generally no tax at the company level. Keep in mind, passing all federal tests
                                        for partnership tax classification does not necessarily mean that the states
                                        will extend a similar exemption from corporate tax.
                                    </li>
                                    <li>
                                        Both of these advantages are then coupled with a unique flexibility in the
                                        structuring of management and member relations. Management may be retained by
                                        members, delegated to outside managers or structured anywhere between those two
                                        alternatives. LLCs may be structured under an agreement by the members or
                                        managers involved. This agreement is typically called the Regulations. The
                                        Regulations govern the internal affairs of the LLC and the relationship of its
                                        members.
                                    </li>
                                </ol>
                                <br>
                                <br>

                                <p class="s-15 fw-light align-justify">
                                    To file for LLC status, you must have Articles of Organization. These Articles,
                                    separate from the Regulations, are similar to corporate articles of incorporation or
                                    a certificate of limited partnership. These Articles, in a sense document the basic
                                    foundation of the limited liability company. They provide information about it, and
                                    sometimes establish certain rights and obligations among the owners. To form an LLC,
                                    you must file your Articles of Organization with the appropriate state regulatory
                                    authority.
                                </p>

                                <br>
                                <br>

                                <h3 class="fw-bold">
                                    SUBCHAPTER “S” CORPORATION
                                </h3>
                                <p class="justify-align s-15 fw-light">
                                    Small corporations or LLCs may elect tax treatment under Subchapter “S” of the
                                    Internal Revenue Code. In this case, profits and losses of a corporation “flow
                                    through” directly to the owners, who are taxed on individual income. There are
                                    limitations on the size and the structure of a corporation electing Subchapter “S”
                                    status. “Sub S” corporations enjoy most of the benefits of incorporation while
                                    eliminating the possibility of double taxation of a typical corporation.
                                </p>


                            </div>

                        </div>
                    </div>


                </div>
                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="table-cell w-50">

                            <p class="s-10">
                                Kosha Hibachi
                                <br>
                                Brand Standards Manual
                            </p>
                        </div>

                        <div class="table-cell w-50">
                            <p class="s-10 text-end">
                                Copyright 2024
                                <br>
                                Kosha Hibachi Franchising. Inc.
                            </p>
                        </div>

                    </div>
                </div>

            </div>


        </div>

        <!-- =========================== -->

        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section B: Establishing the Business </p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">B-7</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">

                                <h2 class="fw-bold text-center">
                                    YOUR STATUS AS A FRANCHISEE
                                </h2>

                                <p class=" s-15 fw-light align-justify">
                                    When you signed your Franchise Agreement, you agreed to represent yourself as
                                    neither an agent, a partner, nor an employee of the franchisor, Kosha Hibachi LLC.
                                    Although you are enfranchised to use the name and logo “Kosha Hibachi” in your daily
                                    business operations, it must be made clear to the public that your business is a
                                    separate and distinct legal entity.

                                    <br>
                                    <br>

                                    The following policies have been designed to direct you in the correct use of the
                                    Kosha Hibachi logo and name to indicate your status as a franchisee, as required by
                                    your Franchise Agreement.


                                </p>

                                <h3 class="fw-bold mt-3">
                                    APPROVED BUSINESS NAME
                                </h3>


                                <br>
                                <p class="s-15 fw-light align-justify">
                                    When you incorporate, you may not use the trademarks of Kosha Hibachi LLC as part of
                                    your legal business name.
                                    <br>
                                    <br>
                                    You should only use the name “Kosha Hibachi” when you refer to:
                                </p>
                                <br>


                                <ol class="s-15 fw-light">
                                    <li>The menu</li>
                                    <li>The Corporate Office (“Kosha Hibachi LLC”)</li>
                                    <li>The Kosha Hibachi franchise business opportunity</li>
                                </ol>


                                <p class="s-15 ">Acceptable business name examples:</p>

                                <div class="table-wrapper">
                                    <div class="table-row">
                                        <div class="table-cell w-50">
                                            <h4>ACCEPTABLE</h4>
                                            <p class="s-14 fw-light">Robert Smith, Inc. d/b/a Kosha Hibachi </p>
                                        </div>

                                        <div class="table-cell w-50">
                                            <h4>NOT ACCEPTABLE</h4>
                                            <p class="s-14 fw-light">Kosha Hibachi, Inc.</p>
                                            <p class="s-14 fw-light">Kosha Hibachi Corporation</p>
                                            <p class="s-14 fw-light">Kosha Hibachi of (your state), Inc.</p>
                                        </div>
                                    </div>
                                </div>




                            </div>

                        </div>
                    </div>


                </div>
                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="table-cell w-50">

                            <p class="s-10">
                                Kosha Hibachi
                                <br>
                                Brand Standards Manual
                            </p>
                        </div>

                        <div class="table-cell w-50">
                            <p class="s-10 text-end">
                                Copyright 2024
                                <br>
                                Kosha Hibachi Franchising. Inc.
                            </p>
                        </div>

                    </div>
                </div>

            </div>


        </div>

        <!-- ======================= -->

        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section B: Establishing the Business </p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">B-8</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">

                                <h2 class="fw-bold text-center">
                                    APPROVED BUSINESS COLLATERAL
                                </h2>

                                <p class=" s-15 fw-light align-justify">
                                    Make sure all of your business forms clearly indicate your independent ownership of
                                    the Kosha Hibachi franchise.

                                    <br>
                                    <br>

                                    Kosha Hibachi LLC has designed a distinctive logo to use on your checks, letterhead,
                                    envelopes, and business cards to establish immediate recognition of your status as a
                                    Kosha Hibachi franchise owner. However, your personal identification must always be
                                    included when you use the Kosha Hibachi name and logo. For example, your business
                                    card may read:

                                </p>

                                <p class="s-15 fw-bold text-center">
                                    “Kosha Hibachi,
                                    <br>
                                    Independently owned and operated by Robert Smith, Inc.”
                                </p>

                                <p>
                                    or
                                </p>

                                <p class="s-15 fw-bold text-center">
                                    “Kosha Hibachi,
                                    <br>
                                    Robert Smith, Inc., Franchisee”
                                </p>


                                <p class="s-15 fw-light align-justify">
                                    Remember that all printed materials you develop must be reviewed and approved by
                                    Kosha Hibachi LLC before they are put to use.
                                </p>

                                <br>

                                <p class="s-15 align-justify fw-light">
                                    <span class="s-17 fw-bold">SIGNAGE</span>
                                    <br>
                                    Per your Franchise Agreement, you are to post signage in view that advises the
                                    public that your business is independently owned and operated and that identifies
                                    you as a member of the Kosha Hibachi franchise network. Display this sign
                                    prominently on the trailer.
                                </p>

                            </div>

                        </div>
                    </div>


                </div>
                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="table-cell w-50">

                            <p class="s-10">
                                Kosha Hibachi
                                <br>
                                Brand Standards Manual
                            </p>
                        </div>

                        <div class="table-cell w-50">
                            <p class="s-10 text-end">
                                Copyright 2024
                                <br>
                                Kosha Hibachi Franchising. Inc.
                            </p>
                        </div>

                    </div>
                </div>

            </div>


        </div>

        <!-- ======================= -->

        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section B: Establishing the Business </p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">B-9</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">

                                <h2 class="fw-bold text-center">
                                    REQUIRED BANKING
                                </h2>

                                <p class=" s-15 fw-light align-justify">
                                    It is important to develop a good working relationship with a bank in your area.
                                    When you make your selection, be sure to go personally to the bank and introduce
                                    yourself to its officers. Speak with them directly and honestly, describing your
                                    business and your business needs.
                                </p>

                                <h3 class="fw-bold">
                                    ACCOUNTS TO OPEN
                                </h3>

                                <ul class="s-15 fw-light">
                                    <li> Open a <b> general operating account </b> under your legal business name. We
                                        recommend
                                        opening an account for which you are charged a flat monthly fee. You and your
                                        designated bookkeeper should act as co-signatories on checks. Be sure your
                                        checks are clearly imprinted with your business’ name and address.</li>
                                    <li>
                                        Kosha Hibachi LLC requires that you initiate an <b> ACH to a checking
                                            account</b>, to
                                        which Kosha Hibachi LLC will have access for the purpose of receiving payment
                                        from you for all continuing services and royalty fees, advertising
                                        contributions, amounts due for purchases you make from Kosha Hibachi LLC, and
                                        other amounts that you might owe to Kosha Hibachi LLC
                                    </li>
                                    <li>
                                        Kosha Hibachi LLC strongly recommends that you use a payroll service, however
                                        if you wish to handle your own payroll, open a <b> payroll account </b> from
                                        which you
                                        will draft payroll checks for your employees’ pay period.

                                    </li>
                                </ul>



                            </div>

                        </div>
                    </div>


                </div>
                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="table-cell w-50">

                            <p class="s-10">
                                Kosha Hibachi
                                <br>
                                Brand Standards Manual
                            </p>
                        </div>

                        <div class="table-cell w-50">
                            <p class="s-10 text-end">
                                Copyright 2024
                                <br>
                                Kosha Hibachi Franchising. Inc.
                            </p>
                        </div>

                    </div>
                </div>

            </div>


        </div>


        <!-- ======================= -->

        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section B: Establishing the Business </p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">B-10</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">

                                <h2 class="fw-bold text-center">
                                    ESTABLISHING AN OPERATIONAL “HOME BASE”
                                </h2>

                                <p class=" s-15 fw-light align-justify">
                                    Finding the best location for your Kosha Hibachi franchise is important to the
                                    healthy growth of your business. The franchise model is unique in that the business
                                    is based on the mobile food service model. The location of the commissary will serve
                                    as “home base” for the operation and should be in a location that is convenient for
                                    loading inventory in between meals or events. This location should be on a
                                    high-traffic, but low speed limit road, allowing your trailer to get more attention
                                    from daily drivers for your operation on days that you aren’t at an event.
                                    <br>
                                    <br>
                                    Each franchisee is required to adhere to their local laws and regulations as they
                                    pertain to management of a “mobile food business” and fulfilling requirements for
                                    maintaining a commissary site.
                                    <br>
                                    <br>
                                    Before you make a binding commitment to lease or purchase any site for use as a
                                    Kosha Hibachi commissary, you must submit a description of the proposed site to
                                    Kosha Hibachi LLC, accompanied by a letter of intent or other evidence satisfactory
                                    to us that confirms your favorable prospects for obtaining the proposed site. The
                                    Corporate Office will provide you with written approval or disapproval of the
                                    proposed site within 30 days of receiving your written proposal.
                                    <br>
                                    <br>
                                    The reason you will need to have a location for the Kosha Hibachi business model is
                                    because most municipalities and regulations for counties or states will require that
                                    you have a fixed location for food service operations.
                                </p>

                            </div>

                        </div>
                    </div>


                </div>
                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="table-cell w-50">

                            <p class="s-10">
                                Kosha Hibachi
                                <br>
                                Brand Standards Manual
                            </p>
                        </div>

                        <div class="table-cell w-50">
                            <p class="s-10 text-end">
                                Copyright 2024
                                <br>
                                Kosha Hibachi Franchising. Inc.
                            </p>
                        </div>

                    </div>
                </div>

            </div>


        </div>


        <!-- ======================= -->

        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section B: Establishing the Business </p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">B-11</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">

                                <h2 class="fw-bold text-center">
                                    REQUIRED INSURANCE
                                </h2>

                                <p class=" s-15 fw-light align-justify">
                                    Your Franchise Agreement indicates that you must protect both your business and
                                    Kosha Hibachi LLC against liability and loss. Your Franchise Agreement requires that
                                    you purchase the essential coverage listed below. Within 60 days after you have
                                    signed the Franchise Agreement, you must forward a copy of the certificate of
                                    insurance to the Corporate Office. The certificate must state that your policies may
                                    not be cancelled or altered without 30 days’ prior written notice to Kosha Hibachi
                                    LLC

                                </p>

                                <ul>
                                    <li> All risks coverage insurance on the trailer and all fixtures, equipment, and
                                        all supplies used in the operation of the food service with coverage limits of
                                        at least full replacement cost.
                                    </li>
                                    <li>
                                        Worker’s compensation and employer’s liability insurance, as well as any other
                                        such insurance required by the state in which the franchise is located with the
                                        statutory minimum limit as required by state law.
                                    </li>
                                    <li>
                                        Comprehensive general liability insurance and product liability insurance,
                                        with a minimum liability coverage of ONE MILLION DOLLARS ($1,000,000.00) per
                                        occurrence or, if higher, the statutory minimum limit required by state law
                                    </li>

                                    <li>
                                        Business interruption insurance
                                    </li>

                                    <li>
                                        Automobile liability insurance, including owned, hired, and non-owned vehicle
                                        coverage, with a combined single limit of ONE MILLION DOLLARS ($1,000,000.00)
                                        or, if higher, the statutory minimum limit required by state law

                                    </li>
                                    <li>
                                        <b>
                                            Kosha Hibachi LLC should always be named as an additional insured on your
                                            insurance plans.
                                        </b>
                                    </li>

                                </ul>

                                <p class="s-15 fw-light align-justify">
                                    There may be additional insurance coverages that are required depending on your
                                    local market. You should inquire with local legal counsel to ensure that you are
                                    compliant with local ordinances and municipalities.
                                </p>
                            </div>

                        </div>
                    </div>


                </div>
                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="table-cell w-50">

                            <p class="s-10">
                                Kosha Hibachi
                                <br>
                                Brand Standards Manual
                            </p>
                        </div>

                        <div class="table-cell w-50">
                            <p class="s-10 text-end">
                                Copyright 2024
                                <br>
                                Kosha Hibachi Franchising. Inc.
                            </p>
                        </div>

                    </div>
                </div>

            </div>


        </div>


        <!-- ======================= -->

        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section B: Establishing the Business </p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">B-12</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">

                                <h2 class="fw-bold text-center">
                                    TRAILER & TRUCK SPECIFICATIONS
                                </h2>

                                <p class=" s-15 fw-light align-justify">
                                    Kosha Hibachi LLC has developed a distinctive Kosha Hibachi mobile unit design. Each
                                    franchisee will be required to purchase, lease, and/or acquire a truck for towing
                                    the trailer. Kosha Hibachi LLC may enforce requirements regarding “Make” and “Model”
                                    of the truck. Franchisees must seek approval from the Corporate Office prior to
                                    purchasing any vehicles for the purpose of operating a Kosha Hibachi franchise.
                                    <br>
                                    <br>

                                    In addition to the truck, the <b> trailer </b>will provide a space for the
                                    franchisee to
                                    conduct operations, including prepping food, greeting, and serving customers,
                                    managing the Square POS system, and maintaining a visible and attractive presence
                                    wherever it is set up. The trailer will be delivered <b> wrapped </b> with Kosha
                                    Hibachi
                                    branding.

                                    <br>
                                    <br>

                                    The Kosha Hibachi trailers are specially made for the concept and represents the
                                    brand and the business in its entirety. It is critical that you keep the branding
                                    intact and in line with the operating structure of the business.

                                </p>
                            </div>

                        </div>
                    </div>


                </div>
                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="table-cell w-50">

                            <p class="s-10">
                                Kosha Hibachi
                                <br>
                                Brand Standards Manual
                            </p>
                        </div>

                        <div class="table-cell w-50">
                            <p class="s-10 text-end">
                                Copyright 2024
                                <br>
                                Kosha Hibachi Franchising. Inc.
                            </p>
                        </div>

                    </div>
                </div>

            </div>


        </div>


        <!-- ======================= -->

        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section B: Establishing the Business </p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">B-13</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">

                                <h2 class="fw-bold text-center">
                                    SIGNAGE AND LOGO SPECIFICATIONS
                                </h2>

                                <p class=" s-15 fw-light align-justify">
                                    All uses of the trademarks owned by Kosha Hibachi LLC must be consistent with the
                                    official colors and design of the Kosha Hibachi logo. This includes its use on all
                                    business cards, exterior signage, advertisements, checks, decals, letterhead, and
                                    any other custom-printed forms, labels, envelopes, or papers.
                                    <br>
                                    <br>

                                    The Corporate Office will provide you with digital files of the logo. They can be
                                    used by your printer to reproduce the proper image on your letterhead and other
                                    related business pieces for distribution.

                                    <br>
                                    <br>
                                </p>

                                <div class="table-wrapper grid-template-columns">
                                    <div class="table-row grid-template-columns">
                                        <div class="table-cell text-center ">
                                            <!-- <img src="{{asset('assets/images/logo.jpg')}}" width="100%" alt=""> -->
                                        </div>
                                        <div class="table-cell text-center py-5">
                                            <img src="{{ $images['logoDark'] }}" width="80%" alt="Logo">

                                        </div>
                                        <div class="table-cell text-center ">
                                            <!-- <img src="{{asset('assets/images/logo.jpg')}}" width="100%" alt=""> -->
                                        </div>

                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>


                </div>
                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="table-cell w-50">

                            <p class="s-10">
                                Kosha Hibachi
                                <br>
                                Brand Standards Manual
                            </p>
                        </div>

                        <div class="table-cell w-50">
                            <p class="s-10 text-end">
                                Copyright 2024
                                <br>
                                Kosha Hibachi Franchising. Inc.
                            </p>
                        </div>

                    </div>
                </div>

            </div>


        </div>


        <!-- ======================= -->

        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section B: Establishing the Business </p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">B-14</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">

                                <h2 class="fw-bold text-center">
                                    LICENSES, PERMITS, AND CERTIFICATIONS
                                </h2>

                                <p class=" s-15 fw-light align-justify">
                                    Since local ordinances vary, check with your municipal and state authorities
                                    (particularly your state mobile food association if one exists) to determine:

                                </p>

                                <ul>
                                    <li> The requirements for licenses and/or necessary permitting in your area</li>
                                    <li> The time required for approval of each and what it takes to get your trailer
                                        up and running</li>
                                </ul>

                                <p class=" s-15 fw-light align-justify">

                                    NOTE: There are often waiting periods involved in obtaining licenses and permits. Be
                                    sure to make your investigations well in advance of your proposed opening date.

                                    <br>
                                    <br>

                                    In particular, you will have to obtain a business license from your city/town hall
                                    or local government office, and you will have to register with the state to obtain
                                    your sales tax I.D. number. In addition to your business license and sales tax I.D.
                                    numbers, you will want to inquire about the following building permits and
                                    inspections:
                                </p>

                                <ul class="s-15 fw-light align-justify">
                                    <li>Certificate of Health inspection (Trailer and/or Commissary)</li>
                                    <li>Fire Marshall Certificate (Trailer and/or Commissary)</li>
                                    <li>Department of Transportation Tag</li>
                                    <li>Signage permits</li>
                                    <li>ServSafe Certification</li>
                                </ul>


                            </div>

                        </div>
                    </div>


                </div>
                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="table-cell w-50">

                            <p class="s-10">
                                Kosha Hibachi
                                <br>
                                Brand Standards Manual
                            </p>
                        </div>

                        <div class="table-cell w-50">
                            <p class="s-10 text-end">
                                Copyright 2024
                                <br>
                                Kosha Hibachi Franchising. Inc.
                            </p>
                        </div>

                    </div>
                </div>

            </div>


        </div>


        <!-- ======================= -->

        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section B: Establishing the Business </p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">B-15</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">

                                <h2 class="fw-bold">
                                    HEALTH DEPARTMENT REGULATIONS
                                </h2>

                                <p class=" s-15 fw-light align-justify">
                                    Food establishment operations are governed by federal, state, and local health codes
                                    (in some locales, the Department of Agriculture is the controlling agency). The
                                    various regulations they may impose deal with the care, storage, and preparation of
                                    foods, housekeeping requirements, and employee food handling and sanitary
                                    procedures.
                                    <br>
                                    <br>
                                    It is extremely important that you contact your local health department as soon as
                                    you have signed your lease for the commissary. Be sure you understand all of the
                                    regulations and permits required, particularly if you are having any remodeling
                                    done. All new construction must comply with local building codes. If possible,
                                    obtain as much of the information in writing so you can refer to it later. Finally,
                                    apply for all permits as soon as possible. Any problems cited by the health
                                    department could delay the opening of your business. It is most efficient to have
                                    your health permit issued for your commissary kitchen prior to the delivery of your
                                    food trailer, and a scheduled inspection date for your trailer upon its delivery.
                                </p>


                                <h2 class="fw-bold">
                                    FOOD HANDLER’S PERMIT
                                </h2>

                                <p class=" s-15 fw-light align-justify">
                                    Some states require that at least one person preparing the food be a certified food
                                    handler, while certain municipalities require that all employees secure a food
                                    handler’s permit. In most cases, this involves the successful completion of formal
                                    coursework and an examination for a food handler’s certificate. Also, some states
                                    require that health cards be posted, while others do not. Since regulations
                                    regarding this vary from area to area, contact your local health department and/or
                                    the Food and Drug Administration to see if this rule applies to your location.

                                    <br>
                                    <br>

                                    Because you will be operating a business serving food-based product from a trailer,
                                    there may be different regulations and restrictions that you should become aware of
                                    when starting your business.

                                    <br>
                                    <br>

                                    Each franchisee may be required to obtain ServSafe certification (or similar) in
                                    order to operate the business. Furthermore, additional staff members may also be
                                    required to complete ServSafe certification (or similar) depending on the laws and
                                    regulations in the franchisee’s market and locale.

                                </p>

                                <br>
                                <br>

                                <p class="s-15 fw-light text-center">Website Resource : www.ServSafe.com </p>


                            </div>

                        </div>
                    </div>


                </div>
                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="table-cell w-50">

                            <p class="s-10">
                                Kosha Hibachi
                                <br>
                                Brand Standards Manual
                            </p>
                        </div>

                        <div class="table-cell w-50">
                            <p class="s-10 text-end">
                                Copyright 2024
                                <br>
                                Kosha Hibachi Franchising. Inc.
                            </p>
                        </div>

                    </div>
                </div>

            </div>


        </div>


        <!-- ======================= -->

        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section B: Establishing the Business </p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">B-16</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">

                                <h2 class="fw-bold text-center">
                                    UTILITIES AND OTHER SERVICES
                                </h2>
                                <br>
                                <br>

                                <h3 class="fw-bold ">
                                    UTILITIES ON THE TRAILER:
                                </h3>

                                <ul class="s-15 fw-light">
                                    <li>Water (handwashing station)</li>
                                    <li>Electricity (based on equipment choice)</li>
                                    <li>Fuel Source
                                        <ul type="square">
                                            <li>Propane</li>
                                            <li>Gasoline</li>
                                        </ul>
                                    </li>
                                </ul>

                                <h3 class="fw-bold">ADDITIONAL SERVICES FOR THE COMMISSARY:</h3>

                                <ul class="s-15 fw-light">
                                    <li> Trash collection (dumpster recommended)</li>
                                    <li> Pest control </li>
                                    <li> HVAC and refrigeration maintenance (for the commissary)</li>
                                    <li> Fire extinguisher inspection (for the trailer and/or commissary)</li>
                                </ul>

                                <h3 class="fw-bold">OCCASIONAL SERVICES:</h3>

                                <ul class="s-15 fw-light">
                                    <li>Signage maintenance</li>
                                    <li>Equipment repair and maintenance</li>
                                    <li>Vehicle maintenance</li>
                                    <li>Locksmith</li>
                                </ul>



                            </div>

                        </div>
                    </div>


                </div>
                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="table-cell w-50">

                            <p class="s-10">
                                Kosha Hibachi
                                <br>
                                Brand Standards Manual
                            </p>
                        </div>

                        <div class="table-cell w-50">
                            <p class="s-10 text-end">
                                Copyright 2024
                                <br>
                                Kosha Hibachi Franchising. Inc.
                            </p>
                        </div>

                    </div>
                </div>

            </div>


        </div>


        <!-- ======================= -->

        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section B: Establishing the Business </p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">B-17</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">

                                <h2 class="fw-bold text-center">
                                    PURCHASING EQUIPMENT AND SUPPLIES
                                </h2>
                                <br>

                                <p class="s-15 fw-light align-justify">
                                    To get the most out of your investment in the food service equipment acquired, and
                                    to meet our standards for food quality, Kosha Hibachi LLC requires that all
                                    equipment purchasing, leasing, and/or acquisition be reviewed and approved by the
                                    Corporate Office. The following equipment should be acquired for the purpose of
                                    operating a Kosha Hibachi franchise.
                                </p>

                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Equipment/Material</th>
                                            <th>Purpose</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Square POS / IPAD</td>
                                            <td>For making sales</td>
                                        </tr>
                                        <tr>
                                            <td>Three-compartment sink</td>
                                            <td>Required to pass health inspection for commissary kitchen</td>
                                        </tr>
                                        <tr>
                                            <td>Single-compartment sink</td>
                                            <td>Required to pass health inspection for commissary kitchen</td>
                                        </tr>
                                        <tr>
                                            <td>Mop sink</td>
                                            <td>Required to pass health inspection for commissary kitchen</td>
                                        </tr>
                                        <tr>
                                            <td>124 cup electric rice cooker X2</td>
                                            <td>To prepare steamed and fried rice</td>
                                        </tr>
                                        <tr>
                                            <td>Two-door commercial cooler X2</td>
                                            <td>To store prepped food materials</td>
                                        </tr>
                                        <tr>
                                            <td>Knife set</td>
                                            <td>To cut/prep food materials</td>
                                        </tr>
                                        <tr>
                                            <td>Bowl set</td>
                                            <td>To prep food materials</td>
                                        </tr>
                                        <tr>
                                            <td>Measuring cup</td>
                                            <td>To prep food materials</td>
                                        </tr>
                                        <tr>
                                            <td>Electric paint/compound mixer</td>
                                            <td>To prep sauces</td>
                                        </tr>
                                        <tr>
                                            <td>Vitamix blender</td>
                                            <td>To prep sauces</td>
                                        </tr>
                                        <tr>
                                            <td>5 gallon bucket X5</td>
                                            <td>To prep/store sauces</td>
                                        </tr>
                                        <tr>
                                            <td>Prepping table</td>
                                            <td>To prep food materials</td>
                                        </tr>
                                        <tr>
                                            <td>50ft Extension Cord X4</td>
                                            <td>For events, power at trailer</td>
                                        </tr>
                                        <tr>
                                            <td>50ft Hose</td>
                                            <td>To add water into the trailer water tank</td>
                                        </tr>
                                        <tr>
                                            <td>100lb propane tank X2</td>
                                            <td>Propane for the trailer's grill</td>
                                        </tr>
                                        <tr>
                                            <td>Gas tanks X3</td>
                                            <td>For generator when at events without power</td>
                                        </tr>
                                        <tr>
                                            <td>Generator</td>
                                            <td>For events without power hook up</td>
                                        </tr>
                                        <tr>
                                            <td>Trailer hitch lock</td>
                                            <td>To keep trailer secure when parked</td>
                                        </tr>
                                        <tr>
                                            <td>Trailer wheel lock</td>
                                            <td>To keep trailer secure when parked</td>
                                        </tr>
                                        <tr>
                                            <td>Fire ansul</td>
                                            <td>Required by Fire Marshall to be installed and inspected above trailer's
                                                grill</td>
                                        </tr>
                                        <tr>
                                            <td>Stand-up Flag (Tall)</td>
                                            <td>Placed next to trailer</td>
                                        </tr>
                                        <tr>
                                            <td>Fire extinguishers X4</td>
                                            <td>Required by Fire Marshall to be installed (2) in the commissary kitchen
                                                and (2) per trailer</td>
                                        </tr>
                                    </tbody>
                                </table>


                            </div>

                        </div>
                    </div>


                </div>
                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="table-cell w-50">

                            <p class="s-10">
                                Kosha Hibachi
                                <br>
                                Brand Standards Manual
                            </p>
                        </div>

                        <div class="table-cell w-50">
                            <p class="s-10 text-end">
                                Copyright 2024
                                <br>
                                Kosha Hibachi Franchising. Inc.
                            </p>
                        </div>

                    </div>
                </div>

            </div>


        </div>



        <!-- ======================= -->

        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section B: Establishing the Business </p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">B-18</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">

                                <h2 class="fw-bold text-center">
                                    REQUIRED SOFTWARE
                                </h2>
                                <br>

                                <p class="s-15 fw-light align-justify">
                                    All franchisees will be required to use software standardized and set forth by Kosha
                                    Hibachi LLC. The following software programs will need to be acquired and used when
                                    managing a Kosha Hibachi franchise.
                                </p>


                                <p class="s-15 text-center">
                                    <b>Square POS- </b>POS (Point of Sale)
                                    <br>
                                    <b>QuickBooks – </b>Accounting
                                    <br>
                                    https://quickbooks.intuit.com/
                                </p>

                                <p class="s-15 fw-light align-justify">
                                    Franchisees will share access to each of these platforms with the Corporate Office
                                    at the time the software is purchased. The Corporate Office will have the ability to
                                    monitor current sales and inventory trends.
                                </p>


                            </div>

                        </div>
                    </div>


                </div>
                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="table-cell w-50">

                            <p class="s-10">
                                Kosha Hibachi
                                <br>
                                Brand Standards Manual
                            </p>
                        </div>

                        <div class="table-cell w-50">
                            <p class="s-10 text-end">
                                Copyright 2024
                                <br>
                                Kosha Hibachi Franchising. Inc.
                            </p>
                        </div>

                    </div>
                </div>

            </div>


        </div>

        <!-- ======================= -->

        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section B: Establishing the Business </p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">B-20</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">

                                <h2 class="fw-bold text-center">
                                    APPROVED VENDORS
                                </h2>
                                <br>

                                <p class="s-15 fw-light align-justify">
                                    To make sure the items served at each location meet our standards for quality, are
                                    consistent throughout the franchise network, and give customers the best value, we
                                    require that you follow our ingredient purchasing specifications.
                                    <br>
                                    <br>
                                    Approved representatives and vendors that currently work with Kosha Hibachi include:
                                </p>

                                <ul class="s-15 fw-light">
                                    <li>Sysco</li>
                                    <li>Local grocers (each must be approved by the Corporate Office)</li>
                                </ul>



                                <p class="s-15 align-justify fw-light ">
                                    You may purchase products and supplies from other reputable, dependable sources,
                                    provided you obtain Kosha Hibachi approval. This consent will not be withheld if the
                                    products, supplies, and equipment conform to Kosha Hibachi brand standards and
                                    specifications for appearance, quality, and taste.
                                </p>

                                <br>
                                <p class="s-15 fw-light align-justify">
                                    If you wish to order inventory from an alternate vendor, you must submit a
                                    <b>
                                        Notice of
                                        Proposed Change of Supplier or Vendor </b> (sample follows) to Kosha Hibachi
                                    LLC. You
                                    will be notified in writing whether we have approved the supplier. Kosha Hibachi LLC
                                    may require that samples from suppliers be delivered to the Corporate Office or to a
                                    designated independent laboratory for food testing before and following approval.
                                    You may be required to pay a fee for these testing services.
                                </p>


                            </div>

                        </div>
                    </div>


                </div>
                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="table-cell w-50">

                            <p class="s-10">
                                Kosha Hibachi
                                <br>
                                Brand Standards Manual
                            </p>
                        </div>

                        <div class="table-cell w-50">
                            <p class="s-10 text-end">
                                Copyright 2024
                                <br>
                                Kosha Hibachi Franchising. Inc.
                            </p>
                        </div>

                    </div>
                </div>

            </div>


        </div>


        <!-- ======================= -->

        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section B: Establishing the Business </p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">B-21</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">

                                <h3 class="fw-bold text-center">
                                    NOTICE OF PROPOSED CHANGE OF SUPPLIER OR VENDOR (SAMPLE)
                                </h3>
                                <br>

                                <div class="table-wrapper">
                                    <div class="table-row">
                                        <div class="table-cell" style="width: 45px;">

                                            <p class="s-12">Franchise: <span class="blank" style="width:300px"></span>
                                            </p>
                                        </div>
                                        <div class="table-cell" style="width: 10px;"></div>
                                        <div class="table-cell" style="width: 45px;">
                                            <p class="s-12">Date: <span class="blank" style="width:40px"></span>/<span
                                                    class="blank" style="width:40px"></span></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-wrapper mt-3">
                                    <div class="table-row">
                                        <div class="table-cell" style="width: 45px;">

                                            <p class="s-12">Location: <span class="blank" style="width:300px"></span>
                                            </p>
                                        </div>
                                        <div class="table-cell" style="width: 10px;"></div>
                                        <div class="table-cell" style="width: 45px;">
                                            <p class="s-12">Effective Change Date: <span class="blank"
                                                    style="width:40px"></span>/<span class="blank"
                                                    style="width:40px"></span></p>
                                        </div>
                                    </div>
                                </div>

                                <p class="s-14 fw-light">
                                    For purchasing the following products:
                                </p>

                                <span class="blank mt-4" style="width:100%"></span>
                                <span class="blank mt-4" style="width:100%"></span>
                                <span class="blank mt-4" style="width:100%"></span>

                                <div class="table-wrapper">
                                    <div class="table-row">
                                        <div class="table-cell w-50">
                                            <p class="s-14 fw-light">
                                                CURRENT SUPPLIER
                                            </p>

                                            <p class="s-14 fw-light mb-5">Name: <span class="blank"
                                                    style="width:300px;"></span></p>

                                            <p class="s-14 fw-light mb-5">Address: <span class="blank"
                                                    style="width:300px;"></span></p>


                                            <p class="s-14 fw-light mb-5">Phone: <span class="blank"
                                                    style="width:300px;"></span></p>
                                        </div>


                                        <div class="table-cell w-50">
                                            <p class="s-14 fw-light">
                                                PROPOSED SUPPLIER
                                            </p>



                                            <p class="s-14 fw-light mb-5">Name: <span class="blank"
                                                    style="width:300px;"></span></p>

                                            <p class="s-14 fw-light mb-5">Address: <span class="blank"
                                                    style="width:300px;"></span></p>


                                            <p class="s-14 fw-light mb-5">Phone: <span class="blank"
                                                    style="width:300px;"></span></p>
                                        </div>
                                    </div>
                                </div>

                                <p class="s-14 fw-light">
                                    REASON FOR CHANGE:
                                </p>

                                <span class="blank mt-4" style="width:100%"></span>
                                <span class="blank mt-4" style="width:100%"></span>
                                <span class="blank mt-4" style="width:100%"></span>

                                <hr>

                                <p class="s-14 ">For Office Use Only:</p>

                                <p class="s-14">Recorded: <span class="s-blank w-100"></span></p>
                                <p class="s-14"> Acknowledgement sent to franchisee<span class="s-blank w-100"></span>
                                </p>

                                <p class="s-14">COMMENTS: </p>
                                <p>
                                    <span class="s-14 blank w-100"></span>
                                </p>

                            </div>

                        </div>
                    </div>


                </div>
                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="table-cell w-50">

                            <p class="s-10">
                                Kosha Hibachi
                                <br>
                                Brand Standards Manual
                            </p>
                        </div>

                        <div class="table-cell w-50">
                            <p class="s-10 text-end">
                                Copyright 2024
                                <br>
                                Kosha Hibachi Franchising. Inc.
                            </p>
                        </div>

                    </div>
                </div>

            </div>


        </div>



        <!-- ======================= -->

        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section B: Establishing the Business </p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">B-22</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">

                                <h3 class="text-center fw-bold">
                                    TAXES
                                </h3>

                                <p class="s-15 align-justify fw-light">
                                    Businesses and individuals alike must pay both federal and state taxes based on the
                                    amount of income they report at the end of the year. However, businesses are
                                    required to file reports and pay taxes throughout the year as well. It is necessary
                                    to figure and report income taxes, social security taxes, and unemployment taxes. In
                                    some cases, self-employment and excise taxes also apply. Payment of such taxes is
                                    often made through a system of tax deposits using a “Federal Tax Deposit Coupon
                                    Book” (Form 8109) or through an electronic funds transfer payment system. An
                                    Employer’s Tax Guide (Circular E) and an IRS Tax Calendar can help you file the
                                    appropriate taxes on time.
                                </p>

                                <h3 class="fw-bold">
                                    INCOME TAXES
                                </h3>

                                <p class="s-15 fw-light align-justify">
                                    Every business must file an annual income tax return. The form you should use
                                    depends on how your business is organized.
                                </p>

                                <div class="table-wrapper">
                                    <div class="table-row">
                                        <div class="table-cell">
                                            <p class="s-15 fw-light">
                                                <b>If you are:</b>
                                                <br>
                                                A sole proprietor
                                                <br>
                                                A partnership
                                                <br>
                                                A corporation
                                                <br>
                                                An “S” corporation
                                            </p>
                                        </div>


                                        <div class="table-cell">
                                            <p class="s-15 fw-light">
                                                <b>File:</b>
                                                <br>
                                                Schedule C (Form 1040)
                                                <br>
                                                Form 1065
                                                <br>
                                                Form 1120 or 1120-A
                                                <br>
                                                Form 1120S
                                            </p>
                                        </div>


                                    </div>
                                </div>


                                <p class="s-15 fw-light align-justify">
                                    Federal income and self-employment taxes are pay-as-you-go taxes. Generally, you
                                    will pay the tax during the year as you earn your income. Sole proprietors,
                                    partners, or shareholders of an “S” corporation pay as they go by making regular
                                    payments of estimated tax during the year. For information on estimated tax, see IRS
                                    Publication 505, Tax Withholding and Estimated Tax.

                                    <br>
                                    Corporations pay as they go by making periodic deposits of their estimated income
                                    tax, as described earlier.

                                </p>


                            </div>

                        </div>
                    </div>


                </div>
                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="table-cell w-50">

                            <p class="s-10">
                                Kosha Hibachi
                                <br>
                                Brand Standards Manual
                            </p>
                        </div>

                        <div class="table-cell w-50">
                            <p class="s-10 text-end">
                                Copyright 2024
                                <br>
                                Kosha Hibachi Franchising. Inc.
                            </p>
                        </div>

                    </div>
                </div>

            </div>


        </div>

        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section B: Establishing the Business </p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">B-23</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">

                                <h3 class="fw-bold">
                                    SELF-EMPLOYMENT TAXES
                                </h3>

                                <p class="s-15 fw-light align-justify">
                                    Self-employment tax is the social security tax for individuals who work for
                                    themselves, such as sole proprietors and members of a partnership. The tax is
                                    figured and reported on Schedule SE, which is attached to and filed with Form 1040.
                                    For more information, obtain Publication 533, Self-Employment Tax.
                                </p>


                                <h3 class="fw-bold">
                                    SOCIAL SECURITY, MEDICARE, AND WITHHELD INCOME TAXES
                                </h3>



                                <p class="s-15 fw-light align-justify">
                                    If you have employees, you are required to pay the following:
                                </p>

                                <ul class="s-15fw-light">
                                    <li> Federal income taxes</li>
                                    <li> Social security taxes</li>
                                    <li> Medicare (insurance)</li>
                                </ul>

                                <p class="s-15 fw-light align-justify">
                                    The total amount of federal income tax must be withheld from your employees’ wages.
                                    For social security tax (the FICA, or Federal Insurance Contributions Act tax), you
                                    withhold part from your employees’ wages and you pay a matching amount yourself. An
                                    additional amount must be withheld from employees’ wages for Medicare. Social
                                    security, Medicare, and withheld income taxes are reported and paid together.

                                    <br>

                                    Determine the amount of income tax to withhold from each employee’s paycheck from a
                                    tax table furnished by the Internal Revenue Service using the employee’s gross pay
                                    for that pay period and the number of exemptions claimed by the employee (from W-4
                                    form). The tax tables to use may be found in Publication 15, Circular E, Employer’s
                                    Tax Guide. Your state’s department of revenue can provide you with similar
                                    information about state taxes. The amount to withhold for social security is based
                                    on a percentage of the gross pay.

                                </p>


                                <h3 class="fw-bold">
                                    UNEMPLOYMENT TAXES
                                </h3>

                                <p class="s-15 fw-light align-justify">
                                    The Federal Unemployment Tax system (FUTA) provides for unemployment compensation
                                    for laid-off workers. Federal unemployment tax is reported and paid separately from
                                    social security taxes and withheld income taxes. You pay the FUTA tax from your
                                    funds. Employees do not pay this tax, or have it withheld from their pay. Use Form
                                    940, “Employer’s Annual Federal Unemployment Tax (FUTA) Return,” to report this tax.
                                </p>

                            </div>

                        </div>
                    </div>


                </div>
                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="table-cell w-50">

                            <p class="s-10">
                                Kosha Hibachi
                                <br>
                                Brand Standards Manual
                            </p>
                        </div>

                        <div class="table-cell w-50">
                            <p class="s-10 text-end">
                                Copyright 2024
                                <br>
                                Kosha Hibachi Franchising. Inc.
                            </p>
                        </div>

                    </div>
                </div>

            </div>


        </div>


        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section B: Establishing the Business </p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">B-24</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">

                                <h3 class="fw-bold">
                                    EXCISE TAXES
                                </h3>

                                <p class="s-15 fw-light align-justify">

                                    Unless you are in the business of manufacturing or selling certain products, you
                                    should not have to pay excise taxes. However, there are excise taxes on certain
                                    kinds of businesses and transactions, and on the use of various kinds of equipment,
                                    facilities, and products.

                                    <br>

                                    Refer to Publication 510, Excise Taxes, on excise taxes you must report.

                                </p>

                                <h3 class="fw-bold">
                                    STATE INCOME TAXES
                                </h3>

                                <p class="s-15 fw-light align-justify">
                                    If you are operating as a sole proprietor or as a partner, you will not receive a
                                    salary as your employees do. There will be no income tax withheld from the money you
                                    take out of your business. To meet your tax obligations, you must estimate your tax
                                    liability and file your income taxes at year-end. Your state’s revenue department
                                    will supply you with a tax guide for small businesses and the applicable forms. Your
                                    tax return is filed at year-end as an individual return, and your liability is
                                    computed from profits earned by the business in that year.
                                </p>



                                <h3 class="fw-bold">
                                    STATE UNEMPLOYMENT TAXES
                                </h3>



                                <p class="s-15 fw-light align-justify">
                                    Many states require payment of an unemployment tax to be reported quarterly and paid
                                    separately from any other state taxes. This tax is paid as a percentage of gross
                                    wages, up to a maximum wage level that varies from state to state. The percentage,
                                    called an “experience rating,” is determined by the number of claims attributable to
                                    your business’ account. It is applied to your employees’ taxable gross wages. In
                                    general, the lower the number and amount of the claims, the lower the experience
                                    rating will be. This tax is not withheld from the employees’ pay, but is the sole
                                    responsibility of the business.

                                </p>



                            </div>

                        </div>
                    </div>


                </div>
                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="table-cell w-50">

                            <p class="s-10">
                                Kosha Hibachi
                                <br>
                                Brand Standards Manual
                            </p>
                        </div>

                        <div class="table-cell w-50">
                            <p class="s-10 text-end">
                                Copyright 2024
                                <br>
                                Kosha Hibachi Franchising. Inc.
                            </p>
                        </div>

                    </div>
                </div>

            </div>


        </div>


        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section B: Establishing the Business </p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">B-24</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">

                                <h3 class="fw-bold">
                                    SALES TAXES
                                </h3>

                                <p class="s-15 fw-light align-justify">
                                    Most states have a tax on retail sales (sales to the end user). This tax varies
                                    depending upon the state. Since you will be making retail sales or collecting tax on
                                    a sale, you must obtain a seller’s permit and be assigned a tax number. Your
                                    seller’s permit and tax number should be kept handy.
                                    <br>
                                    If you are required to collect tax on some items and not others, you will need to
                                    set up a system of record keeping that accommodates those requirements. In many
                                    areas, you are not required to collect taxes on sales to certain non-profit
                                    institutions, such as schools and churches. These institutions should provide you
                                    with their tax-exempt number. Businesses are usually required to remit sales tax
                                    deposits quarterly.


                                </p>

                                <h2 class="text-center fw-bold">COUNTY OR TOWN TAXES</h2>

                                <h3 class="fw-bold">
                                    SALES TAX
                                </h3>

                                <p class="s-15 fw-light align-justify">
                                    Some counties or towns impose sales taxes in addition to sales tax set by the state.
                                    Know what the tax liability, if any, is in your county or town.
                                </p>



                                <h3 class="fw-bold">
                                    PERSONAL PROPERTY TAX
                                </h3>



                                <p class="s-15 fw-light align-justify">
                                    Some towns or counties levy an annual tax based on the value of your inventory and
                                    equipment. If this is applicable to you, you will receive a form in the mail to be
                                    completed and returned.

                                </p>

                                <h3 class="fw-bold">
                                    COUNTY OR TOWN BUSINESS TAX
                                </h3>



                                <p class="s-15 fw-light align-justify">
                                    Some counties, villages, and towns levy a county or town business tax. The rate of
                                    taxation can be obtained by calling your city hall.
                                </p>



                            </div>

                        </div>
                    </div>


                </div>
                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="table-cell w-50">

                            <p class="s-10">
                                Kosha Hibachi
                                <br>
                                Brand Standards Manual
                            </p>
                        </div>

                        <div class="table-cell w-50">
                            <p class="s-10 text-end">
                                Copyright 2024
                                <br>
                                Kosha Hibachi Franchising. Inc.
                            </p>
                        </div>

                    </div>
                </div>

            </div>


        </div>


        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section B: Establishing the Business </p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">B-25</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">

                                <h3 class="fw-bold">
                                    EMPLOYER IDENTIFICATION NUMBER (“E.I.N.”)
                                </h3>

                                <p class="s-15 fw-light align-justify">
                                    You must have a federal taxpayer identification number so the Internal Revenue
                                    Service can process your return. There are two kinds of taxpayer identification
                                    numbers: a social security number and an employer identification number.
                                    <br>
                                    If you are a sole proprietor, you need an employer identification number (EIN) only
                                    if you are required to file an excise or employment tax return. Otherwise, use your
                                    social security number. You are a sole proprietor if you are self-employed (work for
                                    yourself) and are the only owner of your unincorporated business.
                                </p>

                                <h2 class="text-center fw-bold">COUNTY OR TOWN TAXES</h2>

                                <h3 class="fw-bold">
                                    HOW TO GET AN EIN
                                </h3>

                                <p class="s-15 fw-light align-justify">
                                    To get an EIN, file Form SS-4, Application for Employer Identification Number, with
                                    the Internal Revenue Service Center in your area. Franchisees can visit
                                    https://www.irs.gov/businesses/small-businesses-self-employed/apply-for-an-employer-identification-number-ein-online.

                                </p>
                            </div>

                        </div>
                    </div>


                </div>
                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="table-cell w-50">

                            <p class="s-10">
                                Kosha Hibachi
                                <br>
                                Brand Standards Manual
                            </p>
                        </div>

                        <div class="table-cell w-50">
                            <p class="s-10 text-end">
                                Copyright 2024
                                <br>
                                Kosha Hibachi Franchising. Inc.
                            </p>
                        </div>

                    </div>
                </div>

            </div>


        </div>


        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section B: Establishing the Business </p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">B-25</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">

                                <h3 class="fw-bold">
                                    IRS-REQUIRED REPORTS
                                </h3>

                                <p class="s-15 fw-light align-justify">
                                    The three reports required by the IRS concerning payroll taxes are:
                                </p>

                                <ol type="1" class="s-15 fw-light">
                                    <li> A Quarterly Federal Tax Return (Form 941), due April 30, July 31, October 31,
                                        and January 31</li>
                                    <li> An annual withholding statement for individual employees (W 2 form), due to
                                        the employee by January 31 and to the Social Security Administration by the last
                                        day of February</li>
                                    <li> An annual withholding tax summary (W-3 form) which reconciles individual
                                        employee withholding taxes (W 2 form) with the quarterly returns (Form 941)</li>
                                </ol>

                                <p class="s-15 fw-light align-justify">
                                    Because tax deposit and reporting requirements can be complex, you may find you must
                                    devote a lot of time to record keeping and tax reporting. Yet, because you are
                                    subject to penalties incurred for late payments of taxes, it is essential that your
                                    tax collecting methods are established correctly and that appropriate taxes are
                                    submitted accurately and on time.

                                    <br>

                                    Therefore, Kosha Hibachi LLC recommends that you call your state department of
                                    revenue, the IRS, or the local chamber of commerce or small business association in
                                    your state when you have questions.

                                </p>

                            </div>

                        </div>
                    </div>


                </div>
                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="table-cell w-50">

                            <p class="s-10">
                                Kosha Hibachi
                                <br>
                                Brand Standards Manual
                            </p>
                        </div>

                        <div class="table-cell w-50">
                            <p class="s-10 text-end">
                                Copyright 2024
                                <br>
                                Kosha Hibachi Franchising. Inc.
                            </p>
                        </div>

                    </div>
                </div>

            </div>


        </div>




    </section>
    <!-- Section B Ended -->


</body>

</html>