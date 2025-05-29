<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KoshaHibachi_Brochure
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

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

        .s-20 {
            font-size: 20px !important;
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

        .blank {
            display: inline-block;
            border-bottom: 1px solid #000;
            width: 200px;
        }

        .blank-2 {
            display: inline-block;
            border-bottom: 1px solid #000;
        }

        .para {
            font-size: 15px !important;
            text-align: justify !important;
        }

        .text-white {
            color: white;
        }

        .lh-120 {
            line-height: 1.2;
        }

        /* 
        .home-banner {
            background-image: url("{{ public_path('assets/images/marta.jpg') }}");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            width: 100%;
            height: 100vh;
        } */

        .full-page-bg {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            width: 100%;
            height: 100%;
            position: relative;
        }

        .section-1 {
            background-image: url('{{ $images["bg1"] }}');
        }

        .section-2 {
            background-image: url('{{ $images["foodtruck"] }}');
        }

        .section-3 {
            background-image: url('{{ $images["section3"] }}');
        }


        .content {
            position: absolute;
        }

        .transform {
            left: 50%;
            transform: translateX(-50%) !important;
        }

        .overlay {
            background: rgba(0, 0, 0, 0.5);
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
        }

        .text-center {
            text-align: center !important;
        }

        .w-100 {
            width: 100%;
        }

        .text-danger {
            color: #F34235;
        }

        .bg-danger {
            background-color: #F34235;
        }

        .ls-2 {
            letter-spacing: 1;
        }


        .overlay-2 {
            background: rgba(0, 0, 0, 0.8);
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
        }

        .overlay-3 {
            background: rgba(0, 0, 0, 0.8);
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
        }

        .mx-auto {
            margin: 0 auto !important;
        }
    </style>

</head>

<body>

    <section>



        <!-- ==== -->
        <div class="full-page-bg section-1 ">
            <div class="">
                <div class="content transform" style="top: 5%;">
                    <img src="{{ $images['logo'] }}" width="100%" alt="Logo">
                </div>


                <div class="content text-center"
                    style="background-color:rgba(255, 99, 71, 0.8); width: 100%; color:white; bottom: 10%">
                    <h2 class=" text-white" style="letter-spacing: 5;">FRANCHISE OPPORTUNITY</h2>

                    <p class="s-20">Join the Flaming Success of
                        <br>
                        Our Hibachi-Style Food Truck Franchise
                    </p>
                </div>
            </div>
        </div>



        <!-- ==== -->
        <div class="full-page-bg page-break section-2 ">
            <div class="overlay  w-100">
                <div class="content text-start" style="padding:15px">
                    <h2 class="text-danger fw-bold mb-4">TURN UP THE HEAT WITH KOSHA HIBACHI™</h2>

                    <p class="text-white lh-120 s-18 ls-1">
                        Are you looking to get in on the booming food truck industry? The Kosha Hibachi
                        franchise opportunity offers a proven, profitable model for a hibachi-style food
                        truck that’s sure to captivate customers. With our turn-key system, you’ll receive
                        comprehensive training, top-of-the-line equipment, and ongoing support to
                        launch your own successful hibachi food truck business. Hibachi dining is a unique,
                        interactive experience that people love, and our streamlined operations make
                        it easy to serve up delicious, made-to-order meals on the go. Join our growing
                        network of satisfied franchisees and start cooking up profits today.

                        <br>
                        <br>

                        Kosha Hibachi ™ offers award-winning hibachi-style cuisine to loyal customers
                        that crave the extraordinary. The company serves its delectable dishes at
                        high-traffic community events and provides catering services for private parties
                        Kosha Hibachi™’s exceptional food and top-notch service make it a premier choice
                        for those seeking an unforgettable dining experience.

                        <br>
                        <br>
                        With a focus on high-quality ingredients and expert culinary techniques, Kosha
                        Hibachi™ is poised for success in the competitive food service industry. Don’t miss
                        your chance to be a part of this exciting franchise opportunity - reach out to our
                        team today
                    </p>
                </div>

            </div>
        </div>


        <!-- ==== -->
        <div class="full-page-bg page-break section-3">
            <div class="overlay-2 w-100">
                <div class="content text-start" style="padding:15px">
                    <h2 class="text-danger fw-bold mb-4">AWARD-WINNING HIBACHI ON WHEELS </h2>

                    <p class="text-white lh-120 s-18 ls-1">

                        This innovative food truck concept offers a unique dining
                        experience that keeps customers coming back for more. With a
                        focus on high-quality ingredients and expert culinary techniques,
                        Kosha Hibachi™ is poised for success in the competitive food
                        service industry.

                        <br>
                        <br>
                        <span><i class="text-danger">Simple-to-Operate:</i></span> The Kosha Hibachi™ model is easy to
                        operate,
                        smoothly run with minimal staff, and manageable workload for an
                        owner/operator. The business is straightforward and will be easily
                        grasped by any motivated individual.


                        <br>
                        <br>
                        <span><i class="text-danger">The Kosha Hibachi™ Difference:</i></span> TKosha Hibachi ™ stands
                        out
                        against the competition by offering a beloved product that
                        customers crave - the irresistible flavors of hibachi - and brings this
                        culinary delight to the masses through its innovative mobile wok
                        concept. The menu’s laser-sharp focus on a few core items not
                        only reduces costs, but also streamlines the scope of ingredients
                        required, creating an efficient and sustainable business model.

                        <br>
                        <br>

                        <span><i class="text-danger">Strong Potential ROI:</i></span>
                        Kosha Hibachi™ offers franchise owners a
                        great potential for return on investment. With low overhead costs,
                        a low initial investment, and versatility across various markets, this
                        concept is financially viable

                        <br>
                        <br>


                        <span><i class="text-danger">Flexible Revenue Sources: </i></span>
                        : Our business model offers a diverse
                        range of revenue sources that are accessible in most markets.
                        From daily customers to private and public events, as well as
                        catering, the potential revenue streams are vast. With a creative
                        and community-minded franchisee, this business model provides
                        ample opportunities for growth and profitability

                    </p>
                </div>

            </div>
        </div>


        <!-- ==== -->
        <div class="full-page-bg page-break section-2">

            <div class="content transform text-center" style="padding:15px; width:60%; ">
                <div class="overlay-2 mx-auto" style="padding:20px">
                    <br>
                    <br>
                    <br>
                    <h2 class="text-danger fw-bold mb-4">ARE YOU THE RIGHT FIT
                        FOR KOSHA HIBACHI™?</h2>

                    <p class="text-white lh-120 s-18 ls-1">
                        The most successful Kosha Hibachi™ franchisees will
                        be passionate, energized, and engaging with previous
                        food service industry experience encouraged. We are
                        seeking franchisees who have the following qualities
                        to join our team:

                    </p>

                    <br>

                    <ul class="text-white" style=" font-weight:bold;">
                        <li><i> Incredible Work Ethic, Discipline, and Integrity</i></li>
                        <li><i> Strong Organizational and Management Skills
                            </i></li>
                        <li><i> Dedication to Kosha Hibachi™ Culture
                            </i></li>
                        <li> Ability to Work in Mobile Operation Daily
                        </li>
                        <li> Fluent in Business Management</li>
                    </ul>

                    <br>
                    <br>

                    <div class="">
                        <img src="{{ $images['logo'] }}" width="60%" alt="Logo">
                    </div>
                </div>
            </div>
        </div>


        <!-- ==== -->
        <div class="full-page-bg page-break section-3">
            <div class="overlay-2 w-100">
                <div class="content text-start w-100" style="padding:15px">

                    <div style="width:80%">

                        <h2 class="text-danger fw-bold mb-4">COMPREHENSIVE
                            FRANCHISEE SUPPORT</h2>


                        <p class="text-white">
                            Our award-winning food trucks break the mold of typical hibachi-style
                            restaurants. We are a bold company with a unique brand, and we’re
                            committed to helping the Kosha Hibachi™ vibe thrive in your community!
                        </p>
                    </div>

                    <div class="w-100" style="margin-top:30px">
                        <div style="display: inline-block; vertical-align: middle; width: 15%; ">
                            <img src="{{ $images['handshake'] }}" width="85%" alt="Logo">
                        </div>
                        <div style="display: inline-block; width: 60%;vertical-align: middle;">
                            <p class="text-white lh-120 s-18 ls-1">
                                <span><i class="text-danger">Comprehensive Training:</i></span>
                                An extensive dualphase initial training program will help set up
                                our franchise partners with all the knowledge
                                they need to run a Kosha Hibachi™ franchise.
                            </p>
                        </div>
                    </div>

                    <div class="w-100" style="margin-top:20px">
                        <div style="display: inline-block; vertical-align: middle; width: 15%; ">
                            <img src="{{ $images['man'] }}" width="85%" alt="Logo">
                        </div>
                        <div style="display: inline-block; width: 60%;vertical-align: middle;">
                            <p class="text-white lh-120 s-18 ls-1">
                                <span><i class="text-danger">Operational Support:</i></span>
                                We will provide ongoing
                                training and support in many areas, including
                                unit operations and maintenance, customerservice techniques, product ordering,
                                suggested pricing guidelines, software support,
                                and administrative procedures.
                            </p>
                        </div>
                    </div>


                    <div class="w-100" style="margin-top:20px">
                        <div style="display: inline-block; vertical-align: middle; width: 15%; ">
                            <img src="{{ $images['speaker'] }}" width="85%" alt="Logo">
                        </div>
                        <div style="display: inline-block; width: 60%;vertical-align: middle;">
                            <p class="text-white lh-120 s-18 ls-1">
                                <span><i class="text-danger">Marketing Support:</i></span>
                                We’ll help you maximize
                                the Kosha Hibachi™ brand loyalty! We will
                                coordinate the development of engaging
                                advertising materials, innovative strategies, and
                                effective consumer marketing plans.
                            </p>
                        </div>
                    </div>


                    <div class="w-100" style="margin-top:20px">
                        <div style="display: inline-block; vertical-align: middle; width: 15%; ">
                            <img src="{{ $images['bulb'] }}" width="85%" alt="Logo">
                        </div>
                        <div style="display: inline-block; width: 60%;vertical-align: middle;">
                            <p class="text-white lh-120 s-18 ls-1">
                                <span><i class="text-danger">Ongoing Business Development Support:</i></span>
                                We will provide our continued research
                                methods and techniques to enhance unit-level
                                profitability.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </div>


        <!-- ==== -->
        <div class="full-page-bg section-1 ">
            <div class="">



                <div class="content text-center transform"
                    style="background-color:rgba(255, 99, 71, 0.8); width: 75%; color:white; top: 10%">
                    <h2 class=" text-white" style="letter-spacing: 5;">READY TO TAKE YOUR BUSINESS
                        TO THE NEXT LEVEL?</h2>

                    <p class="s-20">
                        Bring the sizzle and showmanship of a world-class hibachi
                        experience to your neighborhood with Kosha Hibachi™.
                        <br>
                        <br>

                        To learn more, email us at <i> koshahibachifranchises@gmail.com</i>
                        <br>
                        or visit our website at<i> koshahibachifranchises.com</i>

                    </p>
                </div>


                <div class="content transform" style="bottom: 10%;">
                    <img src="{{ $images['logo'] }}" width="100%" alt="Logo">
                </div>
            </div>
        </div>


        <!-- ==== -->
        <div class="full-page-bg" style="background-color:black">
            <div class="">

                <div class="content transform" style="top: 5%;">
                    <img src="{{ $images['logo'] }}" width="100%" alt="Logo">
                </div>

                <div class="content transform" style="text-align:center; top:40%; width: 90%;">
                    <div style="display: inline-block;  width: 30%; height: 400px;">
                        <img src="{{ $images['food1'] }}" width="100%" alt="Logo">
                    </div>
                    <div style="display: inline-block;  width: 30%;  height: 400px;">
                        <img src="{{ $images['food2'] }}" width="100%" alt="Logo">
                    </div>
                    <div style="display: inline-block;  width: 30%;  height: 400px;">
                        <img src="{{ $images['food3'] }}" width="100%" alt="Logo">
                    </div>
                </div>

                <div class="content transform w-100 text-center" style="text-align:center; bottom:12%;">

                    <p class="text-white">423-834-2172 | koshahibachifranchises@gmail.com | 6724 Hixson Pike, Hixson, TN
                        37343</p>

                    <div class="w-100 bg-danger">
                        <h2 class="text-center text-white" style="padding:10px">Learn more at Koshahibachifranchises.com
                        </h2>
                    </div>

                    <br>

                    <div class="content transform " style="width: 90%">
                        <div>



                            <p class="s-14 text-white text-center">
                                This is not a franchise offering. A franchise offering can be made by us only in a state
                                if we
                                are first registered, excluded, exempted
                                or otherwise qualified to offer franchises in that state, and only if we provide you
                                with an
                                appropriate franchise disclosure document.
                                Follow-up or individualized responses to you that involve either effecting or attempting
                                to
                                effect the sale of a franchise will be made only
                                if we are first in compliance with state registration requirements, or are covered by an
                                applicable state exclusion or exemption.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </section>
</body>

</html>