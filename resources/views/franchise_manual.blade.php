<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Franchise Manual
    </title>

    <style>
        {!! file_get_contents(resource_path('css/bootstrap.min.css')) !!}
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap');

        html,
        body {
            font-family: 'Ubuntu', sans-serif;
            margin: 0;
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


    <section>

        <!-- Page No 01 Start -->
        <div class="container2">
            <div class="container3">
                <div class="table-wrapper border-top">
                    <div class="table-row">
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

                <div class="text-center">

                    <p class="text-center">
                        Franchise
                        <br>
                        Brand
                        <br>
                        Standards Manual

                        <br>
                        <br>
                        <br>

                        COPYRIGHT © 2024
                        <br>
                        BY
                        <br>
                        KOSHA HIBACHI LLC


                        <br>
                        <br>
                        <br>
                    </p>
                </div>

                <div class="table-wrapper ">
                    <div class="table-row">
                        <div class="table-cell text-center " style="width:27.5%">
                            <!-- <img src="{{asset('assets/images/logo.jpg')}}" width="100%" alt=""> -->
                        </div>
                        <div class="table-cell text-center  py-5" style="width:45%">
                            <p class="s-12">

                                ALL RIGHTS RESERVED. NO PART OF THIS PUBLICATION
                                MAY BE REPRODUCED IN ANY FORM
                                WITHOUT PERMISSION IN WRITING FROM
                                KOSHA HIBACHI LLC.
                            </p>
                        </div>
                        <div class="table-cell text-center " style="width:27.5%">
                            <!-- <img src="{{asset('assets/images/logo.jpg')}}" width="100%" alt=""> -->
                        </div>

                    </div>
                </div>


                <div class="table-wrapper ">
                    <div class="table-row">
                        <div class="table-cell text-center ">
                            <!-- <img src="{{asset('assets/images/logo.jpg')}}" width="100%" alt=""> -->
                        </div>
                        <div class="table-cell text-center  pb-5" style="width:80%">
                            <p class="s-12">
                                Employees are encouraged to read this manual, but you, as a franchisee, are ultimately
                                responsible to ensure that the contents are kept strictly confidential. Failure to do so
                                is
                                a breach of the agreement you have signed with Kosha Hibachi LLC.
                            </p>
                        </div>
                        <div class="table-cell text-center ">
                            <!-- <img src="{{asset('assets/images/logo.jpg')}}" width="100%" alt=""> -->
                        </div>

                    </div>
                </div>

                <br>
                <br>
                <br>


                <hr>

            </div>


        </div>
        <!-- Page No 01 End -->

        <!-- Page No 02 Start -->
        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Preface</p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">i</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell border-0 text-center ">
                                <!-- <img src="{{asset('assets/images/logo.jpg')}}" width="100%" alt=""> -->
                            </div>
                            <div class="table-cell text-center border-0 pt-3">
                                <img src="{{ $images['logoDark'] }}" width="35%" alt="Logo">

                                <h3 class="fw-bold">
                                    Kosha Hibachi LLC
                                </h3>
                                <h4>
                                    2600 Crescent Club Dr
                                    <br>
                                    Hixson, TN 37343
                                </h4>

                                <div class="mt-3">
                                    <h3 class=" mb-1">
                                        Kosha Hibachi
                                    </h3>
                                    <h4 class=" ">
                                        The Franchise Corporate Office
                                        Contact Information

                                    </h4>

                                </div>
                            </div>
                            <div class="table-cell text-center border-0">
                                <!-- <img src="{{asset('assets/images/logo.jpg')}}" width="100%" alt=""> -->
                            </div>

                        </div>
                    </div>

                    <div class="table-wrapper mt-3">

                        <div class="table-row">
                            <div class="table-cell col-2 "></div>
                            <div class="table-cell col-8 ">
                                <table class="table table-bordered">

                                    <tbody>
                                        <tr>
                                            <th scope="row">Phone</th>
                                            <td>(423) 834-2172</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Website</th>
                                            <td>www.koshahibachifranchises.com </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Email</th>
                                            <td>koshahibachifranchises@gmail.com
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-cell col-2 "></div>

                        </div>
                    </div>


                    <div class="table-wrapper mt-4">

                        <div class="table-row">
                            <div class="table-cell col-8">
                                <table class="table table-bordered">

                                    <tbody>
                                        <tr class="bg-light text-center">
                                            <td>
                                                YOUR FIELD CONSULTANT
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <b>
                                                    NAME:
                                                </b>
                                                <br>
                                                Nash Bowen
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>

                                                <b>
                                                    CONTACT INFORMATION:
                                                </b>
                                                <br>
                                                Phone: (423) 834-2172
                                                Email: koshahibachifranchises@gmail.com

                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="s-10">Copyright 2024, Kosha Hibachi LLC</p>

            </div>


        </div>
        <!-- Page No 02 End -->


        <!-- Page No 03 Start -->
        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Preface</p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">ii</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  text-center border-0 pt-3">
                                <h2 class="mb-5 fw-bold">
                                    GENDER STATEMENT
                                </h2>

                                <p class="mt-5 align-justify px-5 fw-light" style="line-height:1.5">

                                    IN THIS MANUAL, EVERY ATTEMPT HAS BEEN MADE TO USE GENDER-NEUTRAL TERMINOLOGY.
                                    OCCASIONALLY, HOWEVER, THE USE OF GENDER-SPECIFIC TERMINOLOGY WAS UNAVOIDABLE.
                                    REGARDLESS OF THE LANGUAGE USED, KOSHA HIBACHI LLC UNCONDITIONALLY MAKES THE
                                    OPPORTUNITY
                                    TO BECOME A KOSHA HIBACHI FRANCHISEE EQUALLY AVAILABLE TO PERSONS OF ANY GENDER.
                                </p>

                            </div>

                        </div>
                    </div>


                </div>
                <p class="s-10">Copyright 2024, Kosha Hibachi LLC</p>

            </div>


        </div>
        <!-- Page No 03 End -->


        <!-- Page No 04 Start -->
        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Preface</p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">iii</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">
                                <div>

                                    <h2 class="text-center fw-bold">
                                        HOW THE BRAND STANDARDS MANUAL IS ORGANIZED
                                    </h2>

                                    <p class="mt-4 align-justify  fw-light">

                                        This document is the Kosha Hibachi Brand Standards Manual. It addresses the
                                        franchisee's
                                        general responsibilities for the start-up and management of a Kosha Hibachi
                                        business.
                                        The manual also covers the specific operational procedures to be followed by
                                        Kosha
                                        Hibachi employees under the franchisee's supervision. Throughout the manual, it
                                        will
                                        be
                                        written in a way to properly document the separation between the franchisee
                                        entity
                                        and
                                        franchisor. You will own and operate your own business as a franchisee of Kosha
                                        Hibachi
                                        LLC, and this manual is designed to help you run and to manage your business.
                                        Throughout
                                        this manual, the Franchisor may be referred to as “Kosha Hibachi LLC”, or “Kosha
                                        Hibachi”, or “Kosha Hibachi”. The Kosha Hibachi franchisee will be referred to
                                        as
                                        “You”
                                        or “Franchisee” throughout the manual.
                                    </p>
                                </div>

                                <div class="">

                                    <h2 class=" fw-bold text-center">
                                        DOCUMENT ORGANIZATION
                                    </h2>

                                    <p class="mt-4 align-justify  fw-light">

                                        The manual is divided into sections identified by both a section letter (e.g.,
                                        "A")
                                        and a subject title (e.g., "Introduction"). Sections are divided into
                                        subsections by
                                        topic titles. In addition, each section is preceded by its own table of contents
                                        for
                                        easy reference within a section. The sections are as follows:
                                    </p>

                                    <ol style="list-style-type: upper-alpha;">
                                        <li>Introduction</li>
                                        <li> Establishing the Business</li>
                                        <li> Managing the Business</li>
                                        <li> Personnel</li>
                                        <li> Daily Procedures</li>
                                        <li>Marketing</li>
                                    </ol>
                                </div>

                                <div class="">

                                    <h2 class=" fw-bold text-center">
                                        PAGE LAYOUT
                                    </h2>

                                    <p class="mt-4 align-justify  fw-light">
                                        Each page within a section is identified with the title of the manual, a section
                                        letter, a page number, and the date of copyright. Body text is presented in a
                                        clear,
                                        easy-to-read style with many side heads to help the reader find exact
                                        information.
                                        There is an emphasis on lists and short narratives to make the text brief and
                                        to-the-point. The intent throughout has been to make the manual easy to use and
                                        to
                                        reference as an active tool in the management of a Kosha Hibachi business.
                                    </p>
                                </div>

                            </div>

                        </div>
                    </div>


                </div>
                <p class="s-10">Copyright 2024, Kosha Hibachi LLC</p>

            </div>


        </div>
        <!-- Page No 04 End -->



        <!-- Page No 05 Start -->
        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Preface</p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">iv</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">
                                <div>

                                    <h2 class="text-center fw-bold">
                                        FRANCHISEE STATEMENT OF CONFIDENTIALITY
                                    </h2>

                                    <p class="mt-4 text-center  fw-light">
                                        <i>
                                            Each franchisee is to sign, print or electronic, this form upon receiving
                                            access
                                            to this Brand Standards Manual, and mail or email to the Corporate Office.
                                            This
                                            Statement of Confidentiality will function as a “receipt” upon sending of
                                            the
                                            Manual – signing and dating this form confirms that you have received the
                                            Brand
                                            Standards Manual.
                                        </i>
                                    </p>

                                    <p class="mt-4 fw-light s-15 align-justify">
                                        Information on how to develop a Kosha Hibachi franchise is disclosed to you by
                                        Kosha
                                        Hibachi LLC via our training programs, assistance, confidential Brand Standards
                                        Manual, and a variety of collateral materials. This information is proprietary,
                                        confidential, and comprises the proprietary information of Kosha Hibachi LLC.
                                        You
                                        agree to maintain the absolute confidentiality of all such information during
                                        and
                                        after the term of the Kosha Hibachi Franchise Agreement. You also agree that you
                                        will not use any such information in any other business or in any manner not
                                        specifically authorized or approved in writing by Kosha Hibachi LLC

                                        <br>
                                        <br>
                                        <br>

                                        Confidential information may be divulged to the employees who need it to perform
                                        their tasks. Kosha Hibachi confidential information, knowledge, and know-how
                                        includes, without limitation, recipes, ingredients, computer systems, customer
                                        lists, lead-generating techniques, and other data Kosha Hibachi LLC designates
                                        as
                                        confidential. You will be required to have all employees sign a Non-Disclosure
                                        and
                                        Non-Competition Agreement similar to the one found in the “Personnel” section of
                                        this manual.

                                        <br>
                                        <br>
                                        <br>

                                        During the term of your Franchise Agreement, Kosha Hibachi will provide you a
                                        copy
                                        of the confidential operations manual containing reasonable, suggested, and
                                        mandatory specifications, standards, operating procedures, and rules prescribed
                                        from
                                        time to time by Corporate for Kosha Hibachi businesses, as well as information
                                        about
                                        other obligations you may have under the franchise agreement. Kosha Hibachi LLC
                                        shall have the right to add to and otherwise modify the confidential operations
                                        manual from time to time to reflect changes in the requirements, standards, and
                                        operating recommendations prescribed by Kosha Hibachi LLC for all Kosha Hibachi
                                        franchisees. The confidential Brand Standards Manual remains at all times the
                                        sole
                                        property of Kosha Hibachi LLC and must be returned upon the expiration or other
                                        termination of the agreement.

                                    </p>

                                    <p class="s-15 mt-4 fw-light">
                                        I have read and understand the Statement of Confidentiality and will abide by
                                        its
                                        terms and conditions.
                                    </p>

                                    <div class="table-wrapper mt-5 pt-5">
                                        <div class="table-row">
                                            <div class="table-cell " style="width:60%">
                                                <div class="border-top">
                                                    <span>
                                                        <p class="s-14 fw-light">Signature of Franchisee</p>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="table-cell" style="width:5%"></div>
                                            <div class="table-cell " style="width:35%">
                                                <div class="border-top">
                                                    <span>
                                                        <p class="s-14 fw-light">Date</p>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>


                            </div>

                        </div>
                    </div>


                </div>
                <p class="s-10">Copyright 2024, Kosha Hibachi LLC</p>

            </div>


        </div>
        <!-- Page No 05 End -->


        <!-- Page No 06 Start -->
        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Preface</p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">v</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">
                                <div>

                                    <h2 class="text-center fw-bold">
                                        MANUAL REVISIONS
                                    </h2>



                                    <p class="mt-4 fw-light s-15 align-justify">
                                        Whenever the Corporate Office develops more practical or efficient procedures in
                                        any
                                        specific area, the manual will be updated accordingly. The Corporate Office will
                                        forward all manual revisions to you with a Notice of Policy or Procedure Change
                                        form
                                        (sample follows) explaining the nature of the changes to be made.

                                        <br>
                                        <br>
                                        <br>

                                        Revisions are to be read and placed in the manual immediately upon receipt.
                                        <b>
                                            The superseded pages are to be removed and returned to the Corporate Office
                                            unless otherwise designated in the instructions accompanying the mailing.
                                        </b>
                                        When a procedure has been only partially revised, care should be taken to remove
                                        and
                                        replace only those pages that have been updated.
                                        <br>
                                        <br>
                                        <br>

                                        A Field Consultant from the Corporate Office will check your operations manual
                                        during visits to your location and operating unit to ensure that it is current
                                        and
                                        that you are implementing the new procedures.

                                    </p>



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

                        <div class="text-end table-cell w-50">

                            <p class="s-10">
                                Copyright 2024
                                <br>
                                Kosha Hibachi LLC
                            </p>
                        </div>
                    </div>
                </div>

            </div>


        </div>
        <!-- Page No 06 End -->


        <!-- Page No 07 Start -->
        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Preface</p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">vi</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">
                                <div>

                                    <h2 class="text-center fw-bold">
                                        NOTICE OF POLICY OR PROCEDURE CHANGE
                                    </h2>



                                    <p class="mt-4 fw-light s-15 align-justify">

                                        <span class="fw-bold">Dear Franchisee:</span>
                                        <br>
                                        <br>

                                        New pages of the Kosha Hibachi Brand Standards Manual accompany this notice.
                                        They
                                        should immediately be placed in the manual or substituted for the pages they
                                        replace
                                        (if applicable). Sign the form below and return to the Corporate Office via mail
                                        or
                                        email.
                                        <br>
                                        <br>

                                        These new pages should be inserted into the manual in Section
                                        <span class="border-bottom d-inline-block border-dark"
                                            style="width: 60px;">&nbsp;</span>
                                        at Page
                                        <span class="border-bottom d-inline-block border-dark"
                                            style="width: 60px;">&nbsp;</span>.
                                        They have been prepared because of:

                                        <br>
                                        <br>

                                        <span class="ms-5">
                                            [ ] A change in procedure
                                        </span>
                                        <br>
                                        <br>

                                        <span class="ms-5">
                                            [ ] A new procedure
                                        </span>

                                        <br>
                                        <br>

                                        Effective Date:
                                        <span class="border-bottom border-dark d-inline-block"
                                            style="width: 40px;">&nbsp;
                                        </span>/
                                        <span class="border-bottom border-dark d-inline-block"
                                            style="width: 40px;">&nbsp;</span>/
                                        <span class="border-bottom border-dark d-inline-block"
                                            style="width: 40px;">&nbsp;</span>
                                    </p>





                                    <p class="s-15 fw-light mt-3">
                                        COMMENTS:
                                    </p>
                                    <table class="mt-4 table table-bordered">
                                        <tr>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                    </table>


                                    <p class="s-15 fw-light mt-4">
                                        Sincerely,
                                        <br>
                                        <b>
                                            Kosha Hibachi LLC
                                        </b>
                                    </p>

                                    <div class="table-wrapper">
                                        <div class="table-row">
                                            <div class="table-cell col-2">
                                                <img src="{{ $images['logoDark'] }}" width="100%" alt="Logo">

                                            </div>
                                            <div class="table-cell col-4 "></div>
                                            <div class="table-cell col-4"></div>
                                            <div class="table-cell col-2"></div>
                                        </div>
                                    </div>

                                    <div class="border p-2 mt-3">

                                        <p class="s-15 fw-light">
                                            I have received the revised manual pages dated
                                            <span class="border-bottom d-inline-block border-dark"
                                                style="width: 60px;">&nbsp;</span>
                                            and numbered
                                            <span class="border-bottom d-inline-block border-dark"
                                                style="width: 60px;">&nbsp;</span>.
                                            I have placed them into my copy of the Kosha Hibachi Brand Standards Manual.
                                        </p>


                                        <div class="table-wrapper pt-3">

                                            <div class="table-row  ">
                                                <div class="table-cell col-12 border-bottom">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="table-wrapper">
                                            <div class="table-row ">
                                                <div class="s-14 table-cell col-8 ">

                                                    Franchisee Signature
                                                </div>
                                                <div class="s-14 table-cell col-4">
                                                    Date
                                                </div>
                                            </div>
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
                                Copyright 2024, Kosha Hibachi LLC
                            </p>
                        </div>

                    </div>
                </div>

            </div>


        </div>
        <!-- Page No 07 End -->


        <!-- Page No 08 Start -->
        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Preface</p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">vii</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">
                                <div>

                                    <h2 class="text-center fw-bold">
                                        SUBMITTING SUGGESTIONS TO THE CORPORATE OFFICE
                                    </h2>



                                    <p class="mt-4 fw-light s-15 align-justify">

                                        Based on your experience, you may believe that a section or some specific
                                        information herein is unnecessary or incorrect. However, our success is based
                                        upon
                                        the adherence to the exact procedures and policies stated in this manual, and
                                        the
                                        strength of our franchise system depends upon the <b> consistent </b> adherence
                                        to
                                        these
                                        policies throughout the network by all franchisees.

                                        <br>
                                        <br>
                                        <br>

                                        Nevertheless, the principals at the Corporate Office recognize that you may have
                                        valuable experience or information that could be useful to others in the system.
                                        A
                                        major benefit of a franchise operation is the shared knowledge available from
                                        each
                                        franchisee. You are encouraged to send your suggestions or ideas to the
                                        Corporate
                                        Office using a Suggested Change of Policy or Procedure form (sample follows).
                                    </p>
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

                            <p class="s-10">
                                Copyright 2024
                                <br>
                                Kosha Hibachi Franchising. Inc.
                            </p>
                        </div>

                    </div>
                </div>

            </div>


        </div>
        <!-- Page No 08 End -->



        <!-- Page No 09 Start -->
        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Preface</p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">viii</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">
                                <div>

                                    <h2 class="text-center fw-bold">
                                        SUGGESTED CHANGE OF POLICY OR PROCEDURE
                                    </h2>

                                    <div class="table-wrapper">
                                        <div class="table-row">
                                            <div class="table-cell col-1">
                                                <img src="{{ $images['logoDark'] }}" width="100%" alt="Logo">

                                            </div>
                                            <div class="table-cell col-4 "></div>
                                            <div class="table-cell col-4"></div>
                                            <div class="table-cell col-3"></div>
                                        </div>
                                    </div>



                                    <p class="mt-4 fw-light s-15 align-justify">

                                        This suggestion concerns:
                                        <br>
                                        <br>

                                        New pages of the Kosha Hibachi Brand Standards Manual accompany this notice.
                                        They
                                        should immediately be placed in the manual or substituted for the pages they
                                        replace
                                        (if applicable). Sign the form below and return to the Corporate Office via mail
                                        or
                                        email.
                                        <br>
                                        <br>

                                        <span class="ms-5">
                                            [ ] The information in the Brand Standards Manual on section/page number
                                            <span class="border-bottom border-dark d-inline-block"
                                                style="width: 50px;">&nbsp;</span>
                                        </span>
                                        <br>
                                        <br>

                                        <span class="ms-5">
                                            [ ] A suggestion for a new procedure
                                        </span>

                                        <br>
                                        <br>
                                    </p>





                                    <p class="s-14 fw-light mt-3">
                                        This suggestion is being made because:
                                    </p>
                                    <table class="mt-4 table table-bordered">
                                        <tr>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                    </table>

                                    <p class="s-14 fw-light mt-3">
                                        This suggestion will improve this situation or enhance current operating
                                        procedures
                                        by:
                                    </p>
                                    <table class="mt-4 table table-bordered">
                                        <tr>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                    </table>


                                    <div class="table-wrapper">
                                        <div class="table-row">
                                            <div class="table-cell col-6">
                                                <div>

                                                    <span class="border-bottom border-dark d-inline-block"
                                                        style="width: 100%;">&nbsp;</span>
                                                    <br>
                                                    <p class="s-14">
                                                        Franchisee's Signature
                                                    </p>
                                                </div>

                                                <div>

                                                    <span class="border-bottom border-dark d-inline-block"
                                                        style="width: 100%;">&nbsp;</span>
                                                    <br>
                                                    <p class="s-14">
                                                        Franchisee
                                                    </p>
                                                </div>


                                                <div>

                                                    <span class="border-bottom border-dark d-inline-block"
                                                        style="width: 100%;">&nbsp;</span>
                                                    <br>
                                                    <p class="s-14">
                                                        Address
                                                    </p>
                                                </div>

                                                <div>

                                                    <span class="border-bottom border-dark d-inline-block"
                                                        style="width: 100%;">&nbsp;</span>
                                                    <br>
                                                    <p class="s-14">
                                                        Date
                                                    </p>
                                                </div>

                                            </div>

                                            <div class="table-cell col-6 p-2">
                                                <div class="border p-2">
                                                    <table class=" w-100 border-0">

                                                        <thead>
                                                            <tr class="text-center border-0">
                                                                <td colspan="2" class="border-0">

                                                                    For Office Use Only
                                                                </td>
                                                                <td class="border-0"></td>
                                                            </tr>
                                                        </thead>
                                                        <tr class="border-0">
                                                            <td class="s-14  border-0" style="width:100%;">
                                                                <p class="w-100 mb-0"> Date received:</p>
                                                            </td>
                                                            <td class="w-100 border-0">
                                                                <span class="border-bottom border-dark d-inline-block"
                                                                    style="width: 100%;">&nbsp;</span>
                                                            </td>
                                                        </tr>

                                                        <tr class="border-0">
                                                            <td class="s-14  border-0" style="width:100%;">
                                                                <p class="w-100 mb-0">Reviewed by:</p>
                                                            </td>
                                                            <td class="w-100 border-0">
                                                                <span class="border-bottom border-dark d-inline-block"
                                                                    style="width: 100%;">&nbsp;</span>
                                                            </td>
                                                        </tr>


                                                        <tr class="border-0">
                                                            <td class="s-14  border-0" style="width:100%;">
                                                                <p class="w-100 mb-0">Approved:</p>
                                                            </td>
                                                            <td class="w-100 border-0">
                                                                <span class="border-bottom border-dark d-inline-block"
                                                                    style="width: 100%;">&nbsp;</span>
                                                            </td>
                                                        </tr>


                                                        <tr class="border-0">
                                                            <td class="s-14  border-0" style="width:100%;">
                                                                <p class="w-100 mb-0">Not Approved:</p>
                                                            </td>
                                                            <td class="w-100 border-0">
                                                                <span class="border-bottom border-dark d-inline-block"
                                                                    style="width: 100%;">&nbsp;</span>
                                                            </td>
                                                        </tr>


                                                        <tr class="border-0">
                                                            <td class="s-14  border-0" style="width:100%;">
                                                                <p class="w-100 mb-0">Date:</p>
                                                            </td>
                                                            <td class="w-100 border-0">
                                                                <span class="border-bottom border-dark d-inline-block"
                                                                    style="width: 100%;">&nbsp;</span>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>

                                            </div>


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
                                Copyright 2024, Kosha Hibachi LLC
                            </p>
                        </div>

                    </div>
                </div>

            </div>


        </div>
        <!-- Page No 09 End -->


        <!-- Page No 10 Start -->
        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Preface</p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">ix</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">
                                <div>

                                    <h2 class="text-center fw-bold">
                                        LIMITATIONS OF THE MANUAL
                                    </h2>


                                    <p class="mt-4 fw-light s-15 align-justify">

                                        This manual outlines policies and practices relative to the operation of a Kosha
                                        Hibachi franchise business. Additional guidelines and recommendations will be
                                        provided during Franchisee Training and on an ongoing basis throughout the term
                                        of
                                        the Franchise Agreement. Some of these recommendations may not be the most
                                        appropriate for your locale, and certain recommended business management
                                        practices
                                        may not be legally compliant with local labor laws or similar regulations.
                                        Consequently, it is your responsibility to set additional policies for the
                                        business,
                                        when necessary, and to ensure that you operate your business per the laws,
                                        regulations, and customs in your area.
                                        <br>
                                        <br>
                                        Not only are you solely responsible for your own business policies and
                                        practices,
                                        but you are also accountable for the statements and actions of every person you
                                        employ. Therefore, Kosha Hibachi LLC requires that you use the advice and
                                        counsel of
                                        both a competent attorney and a CPA whenever franchise or business activities
                                        suggest such a need.
                                        <br>
                                        <br>

                                        In the event of inconsistencies or conflicts between this manual and the
                                        Franchise
                                        Agreement, the latter document shall take precedence.


                                    </p>

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
        <!-- Page No 10 End -->


    </section>



</body>

</html>