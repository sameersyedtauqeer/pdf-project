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

    <!-- Section A Started-->
    <section>

        <div class="container2">
            <div class="container3">

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">
                                <div>

                                    <h2 class="text-center fw-bold">
                                        SECTION: A
                                        <br>
                                        INTRODUCTION

                                    </h2>

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


                                    <h2 class="text-center fw-bold text-primary">
                                        CONTENTS

                                    </h2>




                                    <table class="toc-table border-0">
                                        <tr>
                                            <td class="toc-title border-0">
                                                <span class="toc-text">INTRODUCTION</span>
                                            </td>
                                            <td class="border-0">1</td>
                                        </tr>
                                        <tr>
                                            <td class="toc-title border-0">
                                                <span class="toc-text">WELCOME TO KOSHA HIBACHI</span>
                                            </td>
                                            <td class="border-0">1</td>
                                        </tr>

                                        <tr>
                                            <td class="toc-title border-0">
                                                <span class="toc-text">OUR STORY </span>
                                            </td>
                                            <td class="border-0">2</td>
                                        </tr>

                                        <tr class="mx-5">
                                            <td class="toc-title border-0 ms-5">
                                                <span class="toc-text">OUR QUALITY ASSURANCE PHILOSOPHY</span>
                                            </td>
                                            <td class="border-0 me-5">2</td>
                                        </tr>

                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">UNDERSTANDING THE FRANCHISE SYSTEM</span>
                                            </td>
                                            <td class="border-0 ">4</td>
                                        </tr>

                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">TERRITORY SELECTION </span>
                                            </td>
                                            <td class="border-0 ">4</td>
                                        </tr>


                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">COMMISSARY AND STORAGE </span>
                                            </td>
                                            <td class="border-0 ">4</td>
                                        </tr>



                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">FRANCHISE-APPROVED MARKETING MATERIALS </span>
                                            </td>
                                            <td class="border-0 ">4</td>
                                        </tr>


                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">FRANCHISEE TRAINING AND ASSISTANCE</span>
                                            </td>
                                            <td class="border-0 ">5</td>
                                        </tr>

                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">PHASE I -- TRAINING PROVIDED AT A LOCATION
                                                    DESIGNATED
                                                    BY THE FRANCHISOR: </span>
                                            </td>
                                            <td class="border-0 ">5</td>
                                        </tr>

                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">PHASE II -- TRAINING PROVIDED AT THE FRANCHISEE'S
                                                    LOCATION: </span>
                                            </td>
                                            <td class="border-0 ">5</td>
                                        </tr>

                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    OPERATIONS CONSULTING
                                                </span>
                                            </td>
                                            <td class="border-0 ">6</td>
                                        </tr>


                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    FRANCHISEE ADVISORY COUNCIL
                                                </span>
                                            </td>
                                            <td class="border-0 ">6</td>
                                        </tr>


                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    FRANCHISEE HELPLINE
                                                </span>
                                            </td>
                                            <td class="border-0 ">6</td>
                                        </tr>

                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    WEBSITE
                                                </span>
                                            </td>
                                            <td class="border-0 ">6</td>
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
                                                    SOCIAL MEDIA
                                                </span>
                                            </td>
                                            <td class="border-0 ">6</td>
                                        </tr>


                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    FRANCHISE NEWSLETTER
                                                </span>
                                            </td>
                                            <td class="border-0 ">6</td>
                                        </tr>

                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    RESPONSIBILITIES OF A FRANCHISEE
                                                </span>
                                            </td>
                                            <td class="border-0 ">8</td>
                                        </tr>

                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    RESPONSIBILITIES TO YOUR CUSTOMERS
                                                </span>
                                            </td>
                                            <td class="border-0 ">8</td>
                                        </tr>


                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    RESPONSIBILITIES TO YOUR FELLOW FRANCHISEES
                                                </span>
                                            </td>
                                            <td class="border-0 ">8</td>
                                        </tr>

                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    RESPONSIBILITIES TO YOUR TEAM MEMBERS
                                                </span>
                                            </td>
                                            <td class="border-0 ">9</td>
                                        </tr>

                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    RESPONSIBILITIES TO THE FRANCHISOR
                                                </span>
                                            </td>
                                            <td class="border-0 ">10</td>
                                        </tr>

                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    FRANCHISE SALES REPORTING
                                                </span>
                                            </td>
                                            <td class="border-0 ">11</td>
                                        </tr>

                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    MONTHLY ACTIVITY UPDATE
                                                </span>
                                            </td>
                                            <td class="border-0 ">12</td>
                                        </tr>


                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    VISITS FROM THE CORPORATE OFFICE
                                                </span>
                                            </td>
                                            <td class="border-0 ">14</td>
                                        </tr>


                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    YOUR FIELD CONSULTANT
                                                </span>
                                            </td>
                                            <td class="border-0 ">15</td>
                                        </tr>

                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    FIELD VISIT CONFIRMATION
                                                </span>
                                            </td>
                                            <td class="border-0 ">16</td>
                                        </tr>


                                        <tr class="">
                                            <td class="toc-title border-0 ">
                                                <span class="toc-text">
                                                    FIELD VISIT REMARKS
                                                </span>
                                            </td>
                                            <td class="border-0 ">17</td>
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
                            <p class="s-10 mb-0">Section A: Introductiion</p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">A-1</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">
                                <div>

                                    <h2 class="text-center fw-bold">
                                        WELCOME TO KOSHA HIBACHI!
                                    </h2>


                                    <p class="mt-4 fw-light s-15 align-justify">

                                        <b>Dear Franchisee,</b>
                                        <br>
                                        Welcome to the Kosha Hibachi franchise network! We are pleased to have you as a
                                        member of our growing and dedicated franchise team. We will provide you with the
                                        assistance and support needed as you enter a new and exciting journey in which a
                                        better, stronger, and more profitable franchise organization is built. As a
                                        result,
                                        we expect that your decision to join us will be a very exciting and rewarding
                                        experience.
                                        <br>
                                        <br>
                                        You have been specially chosen because of your integrity, work ethic, and
                                        appreciation of the Kosha Hibachi system. When visiting us, people become
                                        customers
                                        for life, and we task our franchisees with the goal of sharing our hibachi with
                                        as
                                        many people as possible!
                                        <br>
                                        <br>


                                        As a franchisee, you have enlisted the support of our entire organization. This
                                        Brand Standards Manual and ongoing consulting support will help assist your
                                        efforts
                                        in managing the business. As you commence operations of your franchise, we will
                                        be
                                        able to help and answer your questions along the way!

                                        <br>
                                        <br>


                                        As new recipes and procedures are introduced, they will be forwarded to you for
                                        your
                                        implementation. Your input and feedback will not only be important to us – it is
                                        encouraged. After all, the free exchange of ideas and information throughout our
                                        growing franchise network fosters the cooperation that will lead us all to
                                        mutual
                                        prosperity.

                                        <br>
                                        <br>

                                        Once again, welcome to Kosha Hibachi! We are committed to doing all we can to
                                        ensure
                                        your success, for we realize that our success as a franchise organization rests
                                        on
                                        the individual successes of our franchisees. We look forward to working with you
                                        as
                                        we continue to build and strengthen the Kosha Hibachi network!



                                    </p>

                                    <div class="table-wrapper mt-5">
                                        <div class="table-row">
                                            <div class="table-cell col-6 s-15">

                                                <p>
                                                    <i>Sincerely,</i>
                                                    <br>
                                                    <b>
                                                        The Kosha Hibachi
                                                        <br>
                                                        Franchise Management Team

                                                    </b>
                                                </p>
                                            </div>

                                            <div class="table-cell col-6 text-end">
                                                <img src="{{ $images['logoDark'] }}" width="30%" alt="Logo">


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

        <!-- ================================ -->

        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section A: Introduction</p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">A-2</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">
                                <div>

                                    <h2 class="text-center fw-bold">
                                        OUR STORY
                                    </h2>


                                    <div class="table-wrapper">
                                        <div class="table-row">
                                            <div class="table-cell col-3">
                                                <img src="{{ $images['ourstory'] }}" width="90%" alt="Logo">
                                            </div>


                                            <div class="table-cell col-9">
                                                <p class="s-15">
                                                    The Kosha Hibachi franchise organization is proud to represent
                                                    hibachi-style food trucks. We have a simple but enjoyable menu with
                                                    extremely high margins compared to industry standards.

                                                    <br>
                                                    <br>

                                                    Kosha Hibachi serves award-winning hibachi-styled food to local
                                                    customers, served at high-traffic events as well as catering for
                                                    private
                                                    parties.

                                                    <br>
                                                    <br>

                                                    Franchisees of Kosha Hibachi will operate out of a shared kitchen or
                                                    commissary, along with a truck (for towing) and food trailer to
                                                    begin
                                                    operations, and will sign up for local fairs, festivals, stadiums,
                                                    theme
                                                    parks and other events (that have a large captive audience) that
                                                    usually
                                                    occur annually or on some other regular basis. Franchisees will also
                                                    be
                                                    encouraged to find more permanent spaces, but this will vary based
                                                    on
                                                    city or municipal restrictions.

                                                </p>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-wrapper mt-5">
                                        <div class="table-row">
                                            <div class="table-cell" style="width: 65%;">
                                                <P class="s-15">
                                                    Each franchisee will be trained in all aspects of the business
                                                    including
                                                    sales, marketing, operations, staffing, food preparation, food
                                                    safety,
                                                    growth, social networking, typical mannerisms, and everything from
                                                    maintaining the truck and trailer to managing and working the
                                                    events.
                                                </P>

                                                <div class="text-end me-5">
                                                    <img src="{{ $images['logoDark'] }}" width="30%" alt="Logo">

                                                </div>

                                            </div>

                                            <div class="table-cell" style="width: 35%;">
                                                <img src="{{ $images['ourstory2'] }}" width="30%" alt="Logo">

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

        <!-- ======================================= -->

        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section A: Introductiion</p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">A-3</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">
                                <div>

                                    <h2 class="fw-bold">
                                        OUR QUALITY ASSURANCE PHILOSOPHY
                                    </h2>


                                    <p class="mt-4 fw-light s-15 align-justify">

                                        To ensure that quality levels are met at all stages and delivered to the
                                        customer on
                                        a solid, consistent basis, we have designed the most thorough and the most
                                        stringent
                                        internal quality processes for managing the Kosha Hibachi franchise system.
                                        These
                                        procedures enable us to build quality into all our food and ensure that it is
                                        served
                                        directly to our customers.
                                        <br>
                                        <br>
                                        Individual coaching and feedback are always available for franchisees. The
                                        Corporate
                                        Office strives to provide franchisees the skillset to please every customer that
                                        visits us.
                                        <br>
                                        <br>


                                        Our authentic hibachi combined with fresh ingredients will satisfy any customer
                                        that
                                        stops by. We live up to our mission to create a social media post or hashtag
                                        worthy
                                        experience, each and every time!

                                        <br>
                                        <br>


                                        Our daily mission is to orchestrate synergistic efforts from all areas of our
                                        business, from food preparation to set up of the trailer, and to deliver the
                                        highest
                                        possible quality and value to our customers.
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

        <!-- ============================================ -->

        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section A: Introduction</p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">A-4</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">
                                <div>

                                    <h2 class="fw-bold text-center">
                                        UNDERSTANDING THE FRANCHISE SYSTEM
                                    </h2>


                                    <p class="mt-4 fw-light s-15 align-justify">

                                        The Corporate Office is dedicated to the success of its franchise network.
                                        Therefore, each franchisee can expect support from the Corporate Office. The
                                        following services have been developed to assist franchisees on helping operate
                                        their business.

                                    </p>


                                    <div class="px-5">

                                        <h3 class="fw-bold">TERRITORY SELECTION</h3>
                                        <p class="s-15 fw-light align-justify">
                                            The Kosha Hibachi franchise territory selection process is extremely
                                            restrictive
                                            for the success of your business. Our assistance and approval of an area
                                            will be
                                            required prior to selling products to customers. The Corporate Office will
                                            review and approve the territory you desire.
                                        </p>

                                        <h3 class="mt-3 fw-bold align-justify">
                                            COMMISSARY AND STORAGE
                                        </h3>

                                        <p class="s-15 fw-light align-justify">
                                            Local laws may require that franchisees have a fixed location to act as a
                                            commissary for the business. Franchisees will need a space to store
                                            inventory
                                            and parking space for the trailer. Commissary space may be around 400 square
                                            feet and should include a large enough parking lot for the trailer to sit
                                            and
                                            serve food when it’s not serving at an event, with space for customers to
                                            park.
                                        </p>

                                        <h3 class="mt-3 fw-bold">
                                            FRANCHISE-APPROVED MARKETING MATERIALS
                                        </h3>

                                        <p class="s-15 fw-light align-justify">
                                            Kosha Hibachi LLC publishes a variety of advertising materials specifically
                                            designed to promote Kosha Hibachi products. You will be able to use these
                                            tools
                                            and collateral material per the terms of the Franchise Agreement. Each
                                            franchisee will be responsible for contributing to the marketing efforts of
                                            their business.
                                        </p>
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

        <!-- ============================================ -->


        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section A: Introduction</p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">A-5</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">
                                <div>

                                    <h2 class="fw-bold text-center">
                                        FRANCHISEE TRAINING AND ASSISTANCE
                                    </h2>


                                    <p class="mt-4 fw-bold s-15 align-justify">

                                        Phase l:

                                    </p>

                                    <ol class="s-14" type="A">
                                        <li>
                                            SKOOL online portal with training modules and community forums for
                                            additional
                                            questions.
                                        </li>

                                        <li>
                                            Reasonable corporate assistance with questions during the start-up phase
                                            (prior to the grand opening).
                                        </li>
                                    </ol>


                                    <p class="mt-4 fw-bold s-15 align-justify">

                                        Phase ll:

                                    </p>

                                    <ol class="s-14" type="A">
                                        <li>Remote video chat to review and advise on kitchen set up (when the location
                                            is
                                            leased).</li>
                                        <li> Remote video chat to review and advise on kitchen set up (when the kitchen
                                            is
                                            built out).</li>
                                    </ol>


                                    <p class="mt-4 fw-bold s-15 align-justify">

                                        Phase lll:
                                    </p>

                                    <ol class="s-14" type="A">
                                        <li>Remote video chat meeting 1 week prior to the grand opening to discuss and
                                            strategize plans to make the grand opening a successful one!</li>
                                        <li>
                                            B. In-person representative visit for 1-2 days before/during the grand
                                            opening
                                            to assist with set up and operations, and to advise on tips for operations.
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

        <!-- ===================================== -->

        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section A: Introduction</p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">A-6</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">
                                <h2 class="fw-bold">
                                    OPERATIONS CONSULTING
                                </h2>

                                <p class="s-15 fw-light align-justify">
                                    Kosha Hibachi LLC will provide you with expert consulting services in all aspects of
                                    your business operation. This manual, which will be continually updated as
                                    improvements
                                    are made in the system, is one part of this service. In addition, a Field Consultant
                                    will periodically schedule visits or virtual consultations with you to provide
                                    ongoing
                                    assistance as needed. The resources of the entire franchisor organization are behind
                                    you
                                    to help find solutions to your business challenges.
                                </p>

                                <br>
                                <br>

                                <h2 class="fw-bold">
                                    FRANCHISEE ADVISORY COUNCIL
                                </h2>

                                <p class="s-15 fw-light align-justify">
                                    At such time as it is warranted, a Franchisee Advisory Council will be formed to
                                    allow
                                    franchisees the opportunity to share information, address issues of common concern,
                                    and
                                    solve problems. We believe this forum will be of value to our franchise network –
                                    franchisees will receive information at the appropriate time regarding their
                                    participation in this program. The Franchisee Network will conduct all interactions
                                    and
                                    operations on the SKOOL platform.
                                </p>

                                <br>
                                <br>

                                <h2 class="fw-bold">
                                    FRANCHISEE HELPLINE
                                </h2>

                                <p class="s-15 fw-light align-justify">
                                    The Franchisor supplies you with a phone number that may be called as a resource for
                                    any
                                    questions; Kosha Hibachi is devoted to supporting you. The current contact number
                                    for
                                    franchisees is (423) 834-2172.
                                </p>

                                <br>
                                <br>

                                <h2 class="fw-bold">
                                    WEBSITE
                                </h2>

                                <p class="s-15 fw-light align-justify">
                                    The Kosha Hibachi organization is represented on a website. This website will list
                                    the
                                    menu and provide information regarding the whereabouts of each franchisee’s
                                    locations
                                    and trailers. It will also provide customers with additional information about the
                                    Kosha
                                    Hibachi brand that is both educational and insightful. It is a very effective
                                    marketing
                                    tool for the business and franchise network.
                                </p>

                                <h2 class="fw-bold">
                                    SOCIAL MEDIA
                                </h2>

                                <p class="s-15 fw-light align-justify">
                                    Kosha Hibachi embraces the Internet and the access to information that different
                                    social
                                    media sites can provide. Kosha Hibachi is on the major social networking sites and
                                    will
                                    regularly provide information and updates on company events and information through
                                    these platforms. Franchisees may be encouraged to suggest posts and other content to
                                    be
                                    uploaded to Kosha Hibachi social media pages. Each franchisee will be provided with
                                    access to their own, location-specific social media pages intended to promote the
                                    Kosha
                                    Hibachi brand.
                                </p>

                                <br>
                                <br>

                                <h2 class="fw-bold">
                                    FRANCHISE NEWSLETTER
                                </h2>

                                <p class="s-15 fw-light align-justify">
                                    Each franchisee may receive a franchise newsletter announcing latest milestones, new
                                    franchises awarded, and information that will be helpful and insightful for each
                                    franchisee.
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


        <!-- ====================== -->

        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section A: Introduction</p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">A-7</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">
                                <h2 class="fw-bold text-center">
                                    RESPONSIBILITIES OF A FRANCHISEE
                                </h2>

                                <p class="s-15 fw-light text-center"><i>As a Kosha Hibachi franchisee, you have several
                                        distinct and
                                        overriding responsibilities:</i></p>



                                <br>
                                <br>

                                <h3 class="fw-bold">
                                    RESPONSIBILITIES TO YOUR CUSTOMERS
                                </h3>
                                <ul>
                                    <li> Provide the highest quality service to customers.</li>
                                    <li> Provide and serve the best in authentic hibachi, each and every time!</li>
                                    <li> Always be well informed, courteous and friendly in your dealings and
                                        interactions
                                        with customers.</li>
                                    <li>
                                        Make certain you are always prepared with the proper information and materials
                                        to
                                        meet your customer’s needs.
                                    </li>

                                    <li>
                                        Be in constant communication with your clients as to what events you will be
                                        visiting during any given day or week.
                                    </li>
                                </ul>

                                <h3 class="fw-bold">
                                    RESPONSIBILITIES TO YOUR FELLOW FRANCHISEES
                                </h3>

                                <ul>
                                    <li> Operate your business consistent with all Kosha Hibachi franchise standards
                                        from a
                                        quality and service level standpoint.</li>
                                    <li>
                                        Assist other franchisees whenever possible through shared ideas, submission of
                                        suggestions, and attendance at seminars and meetings.
                                    </li>
                                    <li>
                                        Protect all proprietary Kosha Hibachi materials from scrutiny or casual review
                                        by
                                        competitors, visitors, and the public.
                                    </li>
                                    <li>
                                        Do your best to build the Kosha Hibachi name and brand in and throughout the
                                        community.
                                    </li>
                                </ul>


                                <h3 class="fw-bold">
                                    RESPONSIBILITIES TO YOUR TEAM MEMBERS
                                </h3>
                                <ul>
                                    <li> Create a safe and pleasant working environment and abide by local and state
                                        laws
                                        that pertain to your operating business.</li>
                                    <li> Provide thorough training to all employed personnel.</li>
                                    <li>
                                        Provide each individual with the opportunity for professional growth.
                                    </li>
                                    <li>
                                        Be honest, fair, and impartial.
                                    </li>

                                    <li>
                                        Provide fair compensation and pay.
                                    </li>

                                    <li>
                                        Provide leadership through good management skills.
                                    </li>

                                    <li>
                                        Encourage open communication – we have found at Kosha Hibachi that many of our
                                        best ideas come directly from our staff.
                                    </li>

                                    <li>
                                        Conduct regular performance evaluations, giving recognition to those who excel
                                        and
                                        making suggestions where improvement is needed.
                                    </li>


                                    <li>
                                        Abide by the law as it pertains to issues of employment. Kosha Hibachi will not
                                        be
                                        responsible for your violation of local or state employment laws; it is your
                                        responsibility as the franchisee to maintain compliance.
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


        <!-- ================= -->

        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section A: Introduction</p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">A-8</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">


                                <h3 class="fw-bold">
                                    RESPONSIBILITIES TO THE FRANCHISOR
                                </h3>
                                <ul>
                                    <li>
                                        Maintain the highest standards of service and customer satisfaction.
                                    </li>
                                    <li> Abide by the terms of the Franchise Agreement.</li>
                                    <li>
                                        Pay Royalties promptly.
                                    </li>
                                    <li>
                                        Pay Franchise Marketing Contributions promptly.
                                    </li>

                                    <li>
                                        Protect all confidential information.
                                    </li>

                                    <li>
                                        Submit all required reports accurately and on time.
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

        <!-- =========================== -->

        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section A: Introduction</p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">A-9</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">


                                <h3 class="fw-bold text-center">
                                    FRANCHISE SALES REPORTING
                                </h3>

                                <p class="s-15 fw-light">
                                    As franchisees manage their operation, sales reports must be provided to the
                                    Corporate
                                    Office. These reports will assist the Corporate Office in determining what you are
                                    doing
                                    well and what needs improvement. Our goal is to support you, and we can only do this
                                    with good information!

                                    <br>
                                    <br>

                                    Kosha Hibachi will utilize QuickBooks Online for accounting needs – this software is
                                    designed to generate all necessary reports for the Corporate Office. The Corporate
                                    Office will have shared access to each franchisee’s QuickBooks platform.
                                    Furthermore,
                                    the Corporate Office mandates that each franchisee utilize the Square POS software
                                    for
                                    tracking of revenue and sales data.

                                    <br>
                                    <br>


                                    Remember, our intent is to provide you with information, support, and feedback - we
                                    can
                                    only provide complete support if we know and understand what your business is
                                    generating.

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

        <!-- ================================ -->

        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section A: Introduction</p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">A-10</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">


                                <h3 class="fw-bold text-center mb-5">
                                    MONTHLY ACTIVITY UPDATE
                                </h3>

                                <p class="s-16 fw-light text-center">
                                    Franchisee: <span class="blank"></span> Month Ending: <span class="blank"></span>
                                </p>

                                <ol class="s-15 fw-light">
                                    <li class="mb-5 pb-5">
                                        How many events did you attend this month?
                                    </li>
                                    <li class="mb-5 pb-5">
                                        What were the most popular items?
                                    </li>
                                    <li class="mb-5 pb-5">
                                        How many employees did you have on staff?
                                    </li>
                                    <li class="mb-5 pb-5">
                                        How was your inventory management this month? Did you find that you had any
                                        problems
                                        or obstacles in dealing with inventory?
                                    </li>
                                    <li class="mb-5 pb-5">
                                        What were your total sales ($ Amount) this month?
                                    </li>
                                    <li class="mb-5 pb-5">
                                        What were your total costs? Dollar volume? Cost of Goods?
                                    </li>


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

        <!-- ============================ -->

        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section A: Introduction</p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">A-11</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">

                                <ol class="s-15 fw-light" start="7">

                                    <li class="mb-5 pb-5">
                                        Were there any problems that required assistance?
                                    </li>
                                    <li class="mb-5 pb-5">
                                        What was the best thing that happened to you this month?
                                    </li>

                                    <li class="mb-5 pb-5">
                                        What was the worst thing that happened to you this month?
                                    </li>
                                    <li class="mb-5 pb-5">
                                        What did you do from a marketing standpoint to get in front of more customers or
                                        potential venues? What was the outcome?
                                    </li>
                                    <li class="mb-5 pb-5">
                                        Any community involvement or community service?
                                    </li>
                                    <li class="mb-5 pb-5">
                                        What feedback and response have you gotten from customers?
                                    </li>

                                    <li class="mb-5 pb-5">
                                        Are there any testimonials you would like to share?
                                    </li>
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

        <!-- ============================= -->

        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section A: Introduction</p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">A-12</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">

                                <h2 class="fw-bold text-center">
                                    VISITS FROM THE CORPORATE OFFICE
                                </h2>

                                <p class="s-15 align-justify fw-light">
                                    A Field Consultant will be visiting you periodically. Field Consultants will help
                                    discuss efficiencies for organizing your commissary space and setting up your
                                    trailer.
                                    These visits are designed to help you find new ways to increase sales, serve your
                                    customers better, familiarize you with new serving techniques or procedures, and
                                    exchange ideas and information

                                    <br>
                                    <br>
                                    <br>

                                    Although most visits will be scheduled in advance, some may occur without notice.
                                    The
                                    Corporate Office recommends that you keep your revenue and expense records and
                                    projections up to date so that you are prepared to participate in a useful
                                    discussion
                                    each time. To some extent, certain training will be provided virtually and over the
                                    phone.


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

        <!-- ============================= -->

        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section A: Introduction</p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">A-13</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">

                                <h2 class="fw-bold text-center">
                                    YOUR FIELD CONSULTANT
                                </h2>

                                <p class="s-15 align-justify fw-light">

                                    Your first line of assistance is your Field Consultant - the person consulted when
                                    you
                                    have a question. Your Field Consultant is able to provide answers or direct
                                    inquiries to
                                    a person at the Corporate Office.

                                    <br>
                                    <br>
                                    <br>

                                    The Corporate Office is committed to helping you in every way possible to develop
                                    your
                                    business. Your Field Consultant is your partner, ready to share knowledge gained
                                    through
                                    lengthy experience in:

                                </p>

                                <ul class="s-15 fw-light my-3">
                                    <li> Trailer setup and operation.</li>
                                    <li>
                                        Proper food prep and serving technique.
                                    </li>
                                    <li>
                                        Marketing.
                                    </li>
                                    <li> Improving customer relations.</li>
                                    <li> Promotion of menu items.</li>
                                    <li> Record keeping and reporting.</li>
                                    <li> Relations with other franchisees.</li>
                                </ul>

                                <table style="width:100%">
                                    <thead>
                                        <tr class="text-center">
                                            <td class="p-2">
                                                YOUR FIELD CONSULTANT
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="p-2">
                                            <td><b> NAME:</b> <br> Nash Bowen</td>
                                        </tr>

                                        <tr class="p-2">
                                            <td>
                                                <b>CONTACT INFORMATION:</b>
                                                <br>Phone: (423) 834-2172 <br> Email:
                                                koshahibachifranchises@gmail.com
                                            </td>
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

        <!-- ============================= -->

        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section A: Introduction</p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">A-14</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">

                                <h2 class="fw-bold text-center">
                                    FIELD VISIT CONFIRMATION
                                </h2>

                                <div class="table-wrapper">
                                    <div class="table-row">
                                        <div class="table-cell"></div>
                                        <div class="table-cell text-center pt-3">
                                            <img src="{{ $images['logoDark'] }}" width="40%" alt="Logo">

                                        </div>
                                        <div class="table-cell"></div>
                                    </div>
                                </div>

                                <table style="width:100%">

                                    <tbody>
                                        <tr class="">
                                            <td class="ps-2 s-12"><b> FRANCHISEE NAME:</b></td>
                                        </tr>

                                        <tr class="">
                                            <td class="ps-2 s-12"><b> FRANCHISEE LOCATION:</b></td>
                                        </tr>


                                        <tr class="">
                                            <td class="ps-2 s-12">
                                                <b>DATE:</b>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <p class="s-14 fw-light align-justify mt-2">
                                    I was visited on the above date by <span class="blank"></span> Field Consultant for
                                    the Franchisor. At this time, all questions and help needed by me have been answered
                                    or
                                    provided. If not, the following questions need answering and/or the following help
                                    is
                                    needed:
                                </p>

                                <table style="width:100%">

                                    <tbody>
                                        <tr class="">
                                            <td class="p-3"></td>
                                        </tr>

                                        <tr class="">
                                            <td class="p-3"></td>

                                        </tr>


                                        <tr class="">
                                            <td class="p-3"></td>

                                        </tr>

                                        <tr class="">
                                            <td class="p-3"></td>

                                        </tr>
                                    </tbody>
                                </table>

                                <div class="table-wrapper">
                                    <div class="table-row">
                                        <div class="table-cell col-2">
                                            <p class="s-12">
                                                At this time
                                            </p>
                                        </div>
                                        <div class="table-cell col-10">
                                            <p class="s-12">
                                                [ ] I am satisfied with my franchise support.
                                            </p>
                                            <p class="s-12">
                                                [ ] I am in need of additional support from the Corporate Office.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <table style="width:100%">

                                    <tbody>
                                        <tr class="">
                                            <td class="p-2 text-uppercase s-14">Additional Comments</td>
                                        </tr>

                                        <tr class="">
                                            <td class="p-2"></td>

                                        </tr>


                                        <tr class="">
                                            <td class="p-2"></td>

                                        </tr>

                                        <tr class="">
                                            <td class="p-2"></td>

                                        </tr>
                                    </tbody>
                                </table>


                                <div class="table-wrapper mt-5">
                                    <div class="table-row">
                                        <div class="table-cell col-6">
                                            <p class="s-14"><span class="blank"></span></p>
                                            <p class="s-12"> Franchisee Signature</pc>
                                        </div>


                                        <div class="table-cell col-6">
                                            <p class="s-14"><span class="blank"></span></p>
                                            <p class="s-12"> Date</pc>
                                        </div>
                                    </div>
                                </div>


                                <div class="table-wrapper mt-5">
                                    <div class="table-row">
                                        <div class="table-cell col-6">
                                            <p class="s-14"><span class="blank"></span></p>
                                            <p class="s-12"> Field Consultant Signature</pc>
                                        </div>


                                        <div class="table-cell col-6">
                                            <p class="s-14"><span class="blank"></span></p>
                                            <p class="s-12"> Date</pc>
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

        <!-- ================================== -->

        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section A: Introduction</p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">A-17</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">

                                <h2 class="fw-bold text-center">
                                    FIELD VISIT REMARKS
                                </h2>

                                <table style="width: 100%; border-collapse: collapse; text-align: center;">
                                    <tr>
                                        <th rowspan="2"
                                            style="border: 1px solid black; padding: 8px; font-weight: bold;">
                                            Operational Management and<br>Knowledge
                                        </th>
                                        <th colspan="5" style="border: 1px solid black; padding: 8px;">RATING</th>
                                        <th rowspan="2" style="border: 1px solid black; padding: 8px;">
                                            <span style="font-style: italic;">COMMENTS</span><br>
                                            <span style="font-style: italic;">(Other comments may be attached)</span>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th style="border: 1px solid black; padding: 8px;">1</th>
                                        <th style="border: 1px solid black; padding: 8px;">2</th>
                                        <th style="border: 1px solid black; padding: 8px;">3</th>
                                        <th style="border: 1px solid black; padding: 8px;">4</th>
                                        <th style="border: 1px solid black; padding: 8px;">5</th>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid black; padding: 8px; text-align: left;">
                                            Understanding
                                            of Prep Procedures</td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid black; padding: 8px; text-align: left;">
                                            Understanding
                                            of Trailer Setup</td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid black; padding: 8px; text-align: left;">Task
                                            Management
                                        </td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid black; padding: 8px; text-align: left;">Staff
                                            Coordination</td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid black; padding: 8px; text-align: left;">Acquisition
                                            and
                                            Use of Equipment</td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                    </tr>
                                </table>


                                <table class="mt-5" style="width: 100%; border-collapse: collapse; text-align: center;">
                                    <tr>
                                        <th style="border: 1px solid black; padding: 8px; font-weight: bold;">Office
                                            Administration</th>
                                        <th style="border: 1px solid black; padding: 8px;">YES</th>
                                        <th style="border: 1px solid black; padding: 8px;">NO</th>
                                        <th style="border: 1px solid black; padding: 8px;">COMMENTS</th>
                                    </tr>

                                    <tr>
                                        <td style="border: 1px solid black; padding: 8px; text-align: left;">
                                            Hire documentation for all staff in place?
                                        </td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid black; padding: 8px; text-align: left;">
                                            All equipment operational?
                                        </td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid black; padding: 8px; text-align: left;">
                                            All necessary software operational?
                                        </td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid black; padding: 8px; text-align: left;">
                                            Dedicated phone service operational?
                                        </td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                    </tr>
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

        <!-- =========================== -->

        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section A: Introduction</p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">A-18</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">


                                <table style="width: 100%; border-collapse: collapse; text-align: center;">
                                    <tr>
                                        <th rowspan="2"
                                            style="border: 1px solid black; padding: 8px; font-weight: bold;">
                                            Customer Service
                                        </th>
                                        <th colspan="5" style="border: 1px solid black; padding: 8px;">RATING</th>
                                        <th rowspan="2" style="border: 1px solid black; padding: 8px;">
                                            <span style="font-style: italic;">COMMENTS</span><br>
                                            <span style="font-style: italic;">(Other comments may be attached)</span>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th style="border: 1px solid black; padding: 8px;">1</th>
                                        <th style="border: 1px solid black; padding: 8px;">2</th>
                                        <th style="border: 1px solid black; padding: 8px;">3</th>
                                        <th style="border: 1px solid black; padding: 8px;">4</th>
                                        <th style="border: 1px solid black; padding: 8px;">5</th>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid black; padding: 8px; text-align: left;">
                                            Proper Phone Etiquette with Customers
                                        </td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid black; padding: 8px; text-align: left;">
                                            Proper in-person Etiquette with Customers
                                        </td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid black; padding: 8px; text-align: left;">
                                            Timeliness in Response to Inquiries
                                        </td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                    </tr>

                                </table>

                                <table class="mt-5" style="width: 100%; border-collapse: collapse; text-align: center;">
                                    <tr>
                                        <th rowspan="2"
                                            style="border: 1px solid black; padding: 8px; font-weight: bold;">
                                            Business Registration
                                        </th>
                                        <th colspan="5" style="border: 1px solid black; padding: 8px;">RATING</th>
                                        <th rowspan="2" style="border: 1px solid black; padding: 8px;">
                                            <span style="font-style: italic;">COMMENTS</span><br>
                                            <span style="font-style: italic;">(Other comments may be attached)</span>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th style="border: 1px solid black; padding: 8px;">1</th>
                                        <th style="border: 1px solid black; padding: 8px;">2</th>
                                        <th style="border: 1px solid black; padding: 8px;">3</th>
                                        <th style="border: 1px solid black; padding: 8px;">4</th>
                                        <th style="border: 1px solid black; padding: 8px;">5</th>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid black; padding: 8px; text-align: left;">
                                            Business License up to date?
                                        </td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid black; padding: 8px; text-align: left;">
                                            Brand Standards Manual up to date?
                                        </td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid black; padding: 8px; text-align: left;">
                                            All necessary Licenses, Permits and/or Certifications acquired?
                                        </td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid black; padding: 8px; text-align: left;">
                                            Each crewmember properly trained and in possession of necessary
                                            certifications?

                                        </td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                    </tr>

                                </table>


                                <table class="mt-5" style="width: 100%; border-collapse: collapse; text-align: center;">
                                    <tr>
                                        <th style="border: 1px solid black; padding: 8px; font-weight: bold;">Financial
                                        </th>
                                        <th style="border: 1px solid black; padding: 8px;">YES</th>
                                        <th style="border: 1px solid black; padding: 8px;">NO</th>
                                        <th style="border: 1px solid black; padding: 8px;">COMMENTS</th>
                                    </tr>

                                    <tr>
                                        <td style="border: 1px solid black; padding: 8px; text-align: left;">
                                            Liquid Capital sufficient?
                                        </td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid black; padding: 8px; text-align: left;">
                                            Sales and franchise reporting satisfactory?
                                        </td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                        <td style="border: 1px solid black;"></td>
                                    </tr>

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

        <!-- =================== -->

        <div class="container2 page-break">
            <div class="container3">

                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="w-50 text-start table-cell ">
                            <p class="s-10 mb-0">Section A: Introduction</p>
                        </div>

                        <div class="w-50 table-cell text-end">
                            <p class="s-10 mb-0">A-19</p>
                        </div>

                    </div>
                </div>

                <div class="card">

                    <div class="table-wrapper ">
                        <div class="table-row ">
                            <div class="table-cell  border-0 pt-3">

                                <p class="text-center">
                                    <i> Additional Comments</i>
                                </p>

                                <p class="mt-5">
                                    <b>COMMENTS FROM FIELD CONSULTANT </b> (to be attached):
                                </p>

                                <div class="table-wrapper mt-5 pt-5">
                                    <div class="table-row">
                                        <div class="table-cell" style="width: 63;">
                                            <p><span style="width:100%;" class="blank mb-0"></span></p>
                                            <p class="s-14">
                                                Signature of Field Consultant
                                            </p>
                                        </div>
                                        <div class="table-cell" style="width:5%"></div>

                                        <div class="table-cell " style="width: 35%;">
                                            <p><span class="blank mb-0" style="width:100%;"></span></p>
                                            <p class="s-14">Date</p>
                                        </div>
                                    </div>
                                </div>


                                <p class="mt-3">
                                    <b>COMMENTS FROM FIELD CONSULTANT </b> (to be attached):
                                </p>


                                <div class="table-wrapper mt-5 pt-5">
                                    <div class="table-row">
                                        <div class="table-cell" style="width: 63;">
                                            <p><span style="width:100%;" class="blank mb-0"></span></p>
                                            <p class="s-14">
                                                Signature of Franchisee
                                            </p>
                                        </div>
                                        <div class="table-cell" style="width:5%"></div>

                                        <div class="table-cell " style="width: 35%;">
                                            <p><span class="blank mb-0" style="width:100%;"></span></p>
                                            <p class="s-14">Date</p>
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


    </section>
    <!-- Section A Ended -->


</body>

</html>