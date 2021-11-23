<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Thasadith:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Thasadith', sans-serif;
            }
            
            /*
            * demo styles
            */

            @media screen and (min-width: 981px){
            
            html{
                font-size: 62.5%;
            }
            }

            @media screen and (min-width: 481px) and (max-width: 980px){

            html{
                font-size: 9px;
            }
            }

            @media screen and (max-width: 480px){

            html{
                font-size: 8px;
            }
            }

            body{
            background: radial-gradient(rgb(253, 253, 253), rgb(248, 248, 248));
                font-family: -apple-system, BlinkMacSystemFont, "Roboto", "Open Sans", "Helvetica Neue", "Segoe UI", sans-serif;
            font-size: 1.6rem;
            margin: 0;
            }

            .demo{
            min-height: 470px;
            box-sizing: border-box;
            position: relative;

            padding-left: 1rem;
            padding-right: 1rem;

            display: flex;
            justify-content: center;
            align-items: center;
            }

            .footer{
            padding: 2rem;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;  
            }

            a{
            color: #000;
            }

            a:focus{
            outline: 2px solid #fdde60;
            }

            a:hover{
            text-decoration: none;
            }

            .melnik909{
            margin-left: 2rem;
            }

            /*
            * CSS payment card
            */

            .payment-card{
            width: 60rem;
            }

            .payment-card__footer{
            text-align: center;
            margin-top: 2rem;
            }

            .bank-card{
            position: relative;
            }

            @media screen and (min-width: 481px){

            .bank-card{
                height: 30rem;
            }

            .bank-card__side{
                border-radius: 10px;
                border: 1px solid transparent;
                    position: absolute;
                    width: 65%;
            }

            .bank-card__side_front{
                background-color: #f0f0ee;
                padding: 5%;
                box-shadow: 0 0 10px #f4f4f2;
                border-color: #a29e97;

                top: 0;
                left: 0;
                z-index: 3;
            }

            .bank-card__side_back{
                background-color: #e0ddd7;
                padding: 24.5% 5% 11%;
                box-shadow: 0 0 2rem #f3f3f3;

                text-align: right;
                border-color: #dad9d6;

                    top: 12%;
                right: 0;
            }

            .bank-card__side_back:before{
                content: "";
                width: 100%;
                height: 25%;
                background-color: #8e8b85;

                position: absolute;
                top: 14%;
                right: 0;
            }
            }

            @media screen and (max-width: 480px){

            .bank-card__side{
                border: 1px solid #a29e97;
                background-color: #f0f0ee;
                padding-left: 5%;
                padding-right: 5%;
            }

            .bank-card__side_front{
                border-radius: 10px 10px 0 0;
                border-bottom: none;
                padding-top: 5%;
            }

            .bank-card__side_back{
                border-radius: 0 0 10px 10px;
                border-top: none;
                padding-bottom: 5%;
            }
            }

            .bank-card__inner{
            margin-bottom: 4%;
            }

            .bank-card__inner:last-child{
            margin-bottom: 0;
            }

            .bank-card__label{
            display: inline-block;
            vertical-align: middle;
            }

            .bank-card__label_holder, .bank-card__label_number{
            width: 100%;
            }

            @media screen and (min-width: 481px){

            .bank-card__month, .bank-card__year{
                width: 25%;
            }
            }

            @media screen and (max-width: 480px){

            .bank-card__month, .bank-card__year{
                width: 48%;
            }
            }

            @media screen and (min-width: 481px){

            .bank-card__cvc{
                width: 25%;
            }
            }

            @media screen and (max-width: 480px){

            .bank-card__cvc{
                width: 100%;
                margin-top: 4%;
            }
            }

            .bank-card__hint{
            position: absolute;
            left: -9999px;
            }

            .bank-card__caption{
            text-transform: uppercase;
            font-size: 1.1rem;
            margin-left: 1%;
            }

            .bank-card__field{
            box-sizing: border-box;
            border: 3px solid #d0d0ce;
            width: 100%;

            padding: 1rem;
            font-family: inherit;
            font-size: 100%;
            }

            .bank-card__field:focus{
            outline: none;
            border-color: #fdde60;
            }

            .bank-card__separator{
            font-size: 3.2rem;
            color: #c4c4c3;

            margin-left: 3%;
            margin-right: 3%;
            display: inline-block;
            vertical-align: middle;
            }

            @media screen and (max-width: 480px){

            .bank-card__separator{
                display: none;
            }
            }

            @media screen and (min-width: 481px){

            .bank-card__footer{
                background-image: url("https://stas-melnikov.ru/demo-icons/mastercard-colored.svg"), url("https://stas-melnikov.ru/demo-icons/visa-colored.svg");
                background-repeat: no-repeat;
                background-position: 78% 50%, 100% 50% ;
            }
            }

            @media screen and (max-width: 480px){

            .bank-card__footer{
                display: flex;
                justify-content: space-between;
            }
            }

            .payment-card__button{

            background-color: #ada093;
            transition: background-color .4s ease-out;

            border-radius: 5px;
            border: 3px solid transparent;
            cursor: pointer;
            padding: 1rem 6.5rem;

            font-size: 100%;
            font-family: inherit;
            color: #fff;
            }

            .payment-card__button:focus{
            outline: none;
            border-color: #fdde60;
            }

            .payment-card__button:hover, .payment-card__button:focus{
            background-color: #8e8b85;
            }
        </style>

        <style>
            .main-wrapper{
                display:flex;
                flex-direction: column;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="main-wrapper relative flex items-top justify-center min-h-screen dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <h1 style="color: white; font-weight: 100; font-size: 5vw;">Des <b>Chanceux</b></h1>
            <div class="demo">
                <form class="payment-card" id="payment-card-form">
                    <div class="bank-card">
                        <div class="bank-card__side bank-card__side_front">
                            <div class="bank-card__inner">
                                <label class="bank-card__label bank-card__label_holder">
                                    <span class="bank-card__hint">Holder of card</span>
                                    <input type="text" class="bank-card__field" placeholder="Holder of card" pattern="[A-Za-z, ]{2,}" name="card-holder" required value="Martin Knudsen">
                                </label>
                            </div>
                            <div class="bank-card__inner">
                                <label class="bank-card__label bank-card__label_number">
                                    <span class="bank-card__hint">Number of card</span>
                                    <input type="text" class="bank-card__field" placeholder="Number of card" pattern="[0-9]{16}" name="card-number" required value="1234123412341234">
                                </label>
                            </div>
                            <div class="bank-card__inner">
                            </div>
                            <div class="bank-card__inner bank-card__footer">
                                <label class="bank-card__label bank-card__month">
                                    <span class="bank-card__hint">Month</span>
                                    <input type="text" class="bank-card__field" placeholder="MM" maxlength="2" pattern="[0-9]{2}" name="expiration-month" required value="11">
                                </label>
                                <span class="bank-card__separator">/</span>
                                <label class="bank-card__label bank-card__year">
                                    <span class="bank-card__hint">Year</span>
                                    <input type="text" class="bank-card__field" placeholder="YY" maxlength="2" pattern="[0-9]{2}" name="expiration-year" required value="24">
                                </label>
                            </div>
                        </div>
                        <div class="bank-card__side bank-card__side_back">
                            <div class="bank-card__inner">
                                <label class="bank-card__label bank-card__cvc">
                                    <span class="bank-card__hint">CVC</span>
                                    <input type="text" class="bank-card__field" placeholder="CVC" maxlength="3" pattern="[0-9]{3}" name="card-cvc" required value="123">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="payment-card__footer">
                        <button class="payment-card__button" type="submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
        <script>
            let form = document.querySelector('#payment-card-form');
            form.onsubmit = function(){
                console.log('Validating Card....');
                for (i = 0; i < form.elements.length; i++) {
                    // Disable all form controls
                    form.elements[i].setAttribute("disabled", "true");
                }
                const data = { 
                    "card-holder": form.elements["card-holder"].value,
                    "card-number": form.elements["card-number"].value,
                    "expiration-month": form.elements["expiration-month"].value,
                    "expiration-year": form.elements["expiration-year"].value,
                    "card-cvc": form.elements["card-cvc"].value,
                };

                fetch('/validate-card', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{csrf_token()}}'
                    },
                    body: JSON.stringify(data),
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Success:', data);
                    console.log('Card Validated');
                })
                .catch((error) => {
                    console.error('Error:', error);
                })
                .finally(() => {
                    for (i = 0; i < form.elements.length; i++) {
                        // Disable all form controls
                        form.elements[i].removeAttribute("disabled");
                    }
                });
                event.preventDefault();
                return false;
            }
        </script>
    </body>
</html>
