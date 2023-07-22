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
            <h1>Event Walaa: You a new enquiry from Add Business</h1>
        </div>
        <table id="contact">
            <tr>
                <th>Venue name</th>
                <td>{{ $business_data['venue_name'] }}</td>
            </tr>
            <tr>
                <th>Country</th>
                <td>{{ $business_data['country'] }}</td>
            </tr>
            <tr>
                <th>State</th>
                <td>{{ $business_data['state'] }}</td>
            </tr>
            <tr>
                <th>City</th>
                <td>{{ $business_data['city'] }}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>{{ $business_data['address'] }}</td>
            </tr>
            <tr>
                <th>Max capacity</th>
                <td>{{ $business_data['max_capacity'] }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ $business_data['description'] }}</td>
            </tr>
            <tr>
                <th>Venue url</th>
                <td>{{ $business_data['venue_url'] }}</td>
            </tr>
            <tr>
                <th>Owner name</th>
                <td>{{ $business_data['owner_name'] }}</td>
            </tr>
            <tr>
                <th>Owner phone</th>
                <td>{{ $business_data['owner_phone'] }}</td>
            </tr>
            <tr>
                <th>Owner email</th>
                <td>{{ $business_data['owner_email'] }}</td>
            </tr>
           
        </table>
    </div>
</body>

</html>