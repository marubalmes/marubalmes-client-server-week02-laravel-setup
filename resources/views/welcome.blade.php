<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hello Laravel</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            color: #333;
        }

        .navbar {
            background: #222;
            padding: 18px 8%;
            color: white;
        }

        .navbar h2 {
            margin: 0;
            font-size: 20px;
            font-weight: normal;
        }

        .container {
            max-width: 850px;
            margin: 60px auto;
            padding: 0 20px;
        }

        .card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        .header {
            padding: 35px 40px;
            border-bottom: 1px solid #eee;
        }

        .tag {
            display: inline-block;
            background: #fce8e6;
            color: #d92d20;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 13px;
            margin-bottom: 15px;
        }

        .header h1 {
            margin: 0;
            font-size: 34px;
            color: #222;
        }

        .header p {
            margin: 10px 0 0;
            color: #777;
            font-size: 16px;
        }

        .info {
            padding: 30px 40px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .info-item {
            padding: 15px;
            background: #f8f8f8;
            border-radius: 8px;
        }

        .info-item strong {
            display: block;
            color: #888;
            font-size: 13px;
            margin-bottom: 6px;
            text-transform: uppercase;
        }

        .info-item span {
            color: #333;
            font-size: 15px;
        }

        .footer {
            text-align: center;
            color: #999;
            font-size: 14px;
            margin-top: 25px;
        }

        @media (max-width: 600px) {
            .container {
                margin: 30px auto;
            }

            .header,
            .info {
                padding: 25px;
            }

            .info {
                grid-template-columns: 1fr;
            }

            .header h1 {
                font-size: 28px;
            }
        }
    </style>
</head>

<body>

    <div class="navbar">
        <h2>My Laravel Project</h2>
    </div>

    <div class="container">

        <div class="card">

            <div class="header">
                <div class="tag">ITST 302 • Laravel Activity</div>

                <h1>Hello, Laravel!</h1>

                <p>
                    Welcome to my Laravel project and student profile.
                </p>
            </div>

            <div class="info">

                <div class="info-item">
                    <strong>Name</strong>
                    <span>Balmes, Amaru Jay F.</span>
                </div>

                <div class="info-item">
                    <strong>Student Number</strong>
                    <span>0124-0398</span>
                </div>

                <div class="info-item">
                    <strong>Course</strong>
                    <span>Bachelor of Science in Information Technology</span>
                </div>

                <div class="info-item">
                    <strong>Section</strong>
                    <span>3-C</span>
                </div>

                <div class="info-item">
                    <strong>Subject</strong>
                    <span>ITST 302</span>
                </div>

                <div class="info-item">
                    <strong>Date</strong>
                    <span>August 8, 2026</span>
                </div>

            </div>

        </div>

        <div class="footer">
            Created with Laravel
        </div>

    </div>

</body>
</html>