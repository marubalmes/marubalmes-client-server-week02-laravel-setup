<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hello Laravel | ITST 302</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            color: #333;
            min-height: 100vh;
        }

        .navbar {
            background: #1f2937;
            color: white;
            padding: 18px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h2 {
            font-size: 20px;
        }

        .navbar span {
            font-size: 14px;
            color: #d1d5db;
        }

        .container {
            width: 85%;
            max-width: 900px;
            margin: 50px auto;
        }

        .welcome {
            background: white;
            padding: 40px;
            border-radius: 12px;
            border: 1px solid #e5e7eb;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
        }

        .welcome h1 {
            font-size: 32px;
            color: #1f2937;
            margin-bottom: 10px;
        }

        .welcome .subtitle {
            color: #6b7280;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .student-section {
            display: flex;
            gap: 30px;
            align-items: stretch;
        }

        .about {
            flex: 1;
            background: #f9fafb;
            padding: 25px;
            border-radius: 10px;
            border: 1px solid #e5e7eb;
        }

        .about h3 {
            color: #1f2937;
            margin-bottom: 15px;
            font-size: 20px;
        }

        .about p {
            color: #6b7280;
            line-height: 1.7;
            font-size: 14px;
        }

        .info {
            flex: 1;
            padding: 25px;
            border-left: 4px solid #374151;
            background: #f9fafb;
            border-radius: 0 10px 10px 0;
        }

        .info h3 {
            margin-bottom: 18px;
            color: #1f2937;
        }

        .info p {
            margin-bottom: 12px;
            font-size: 14px;
            line-height: 1.5;
        }

        .info strong {
            color: #374151;
        }

        .status {
            margin-top: 30px;
            padding: 15px 18px;
            background: #f3f4f6;
            border-radius: 8px;
            font-size: 14px;
            color: #4b5563;
        }

        .status span {
            font-weight: bold;
            color: #166534;
        }

        footer {
            text-align: center;
            margin-top: 35px;
            color: #9ca3af;
            font-size: 13px;
        }

        @media (max-width: 700px) {
            .navbar {
                padding: 16px 5%;
            }

            .container {
                width: 92%;
                margin: 30px auto;
            }

            .welcome {
                padding: 25px;
            }

            .student-section {
                flex-direction: column;
            }

            .info {
                border-left: none;
                border-top: 4px solid #374151;
                border-radius: 0 0 10px 10px;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar">
        <h2>ITST 302</h2>
        <span>Client-Server Technologies</span>
    </nav>

    <main class="container">

        <section class="welcome">

            <h1>Welcome to Client-Server Technologies</h1>

            <p class="subtitle">
                Hello! This is my Laravel project for ITST 302.
                This page was created as part of our Laravel setup and
                client-server technologies activity.
            </p>

            <div class="student-section">

                <div class="about">
                    <h3>About This Project</h3>

                    <p>
                        This project is my introduction to developing a web
                        application using Laravel and PHP. It demonstrates
                        the basic setup of a Laravel application, database
                        configuration, and a customized homepage.
                    </p>

                    <p style="margin-top: 15px;">
                        As a third-year BSIT student, this activity helped me
                        understand how the different tools used in web
                        development work together.
                    </p>
                </div>

                <div class="info">

                    <h3>Student Information</h3>

                    <p>
                        <strong>Name:</strong><br>
                        Balmes, Amaru Jay F.
                    </p>

                    <p>
                        <strong>Student Number:</strong><br>
                        0124-0398
                    </p>

                    <p>
                        <strong>Course:</strong><br>
                        Bachelor of Science in Information Technology
                    </p>

                    <p>
                        <strong>Section:</strong><br>
                        3-C
                    </p>

                    <p>
                        <strong>Subject:</strong><br>
                        ITST 302
                    </p>

                    <p>
                        <strong>Date:</strong><br>
                        August 8, 2026
                    </p>

                </div>

            </div>

            <div class="status">
                <strong>Project Status:</strong>
                <span> Laravel application running successfully</span>
            </div>

        </section>

        <footer>
            <p>ITST 302 &nbsp; | &nbsp; Laravel Project &nbsp; | &nbsp; 3rd Year BSIT</p>
        </footer>

    </main>

</body>
</html>