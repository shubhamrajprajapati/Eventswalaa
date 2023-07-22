<html>
<head>
    <style>
        .container {
            padding: 10px;
        }

        #contact {
            border-collapse: collapse;
            width: 100%;
        }

        #contact td,
        #contact th {
            border: 1px solid #ddd;
            padding: 8px;
            width: 30%;
        }

        #contact th {
            width: 10%;
        }

        #contact tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #contact tr:hover {
            background-color: #ddd;
        }

        #contact th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #8062c7;
            color: white;
        }
        .heading {
            background-color: lightgray;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="heading">
            <h4>Event Walaa: You a new enquiry from Contact us</h4>
        </div>
        <table id="contact">

            You received an email from : {{ $name }} <br><br>

            User details: <br><br>
            occasion_type {{ $occasion_type}}<br>
            date  {{ $date}}<br>
            venue_address {{ $venue_address}}<br>
            no_guests {{ $no_guests}}<br>
            budget_range {{ $budget_range}}<br>
            req_meal {{ $req_meal}}<br>
            req_drinks {{ $req_drinks}}<br>
            name {{ $name}}<br>
            mobile {{ $mobile}}<br>
            email {{ $email}}<br>
            notes {{ $notes}}<br>
          
            Thanks
            </table>
    </div>
</body>

</html>