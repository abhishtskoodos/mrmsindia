<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tune</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto+Flex:opsz,wght@8..144,100..1000&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="include/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="include/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="include/css/fontawesome.min.css">
</head>


    <style>
        
        
        
        .form-box .form-section {
            margin-bottom: 25px;
        }
        
        .form-box .form-row {
            display: flex;
            margin-bottom: 15px;
        }
        
        .form-box .form-group {
            flex: 1;
            margin-right: 15px;
        }
        
        .form-box .form-group:last-child {
            margin-right: 0;
        }
        
        .form-box label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        
        .form-box input[type="text"],
        .form-box input[type="date"],
        .form-box input[type="number"],
        .form-box input[type="email"],
        .form-box select,
        .form-box textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            color: #fff;
        }
        
        .form-box textarea {
            height: 100px;
            resize: vertical;
        }

        .form-box input::placeholder{color: #fff !important;}
        
        .form-box .upload-section {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }
        
        .form-box .upload-item {
            width: 50%;
            padding: 10px;
        }
        
        .form-box .declaration {
            margin: 25px 0;
            padding: 15px;
            border-radius: 4px;
        }
        
        .form-box .submit-btn {
            display: block;
            width: 200px;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            margin: 0 auto;
            text-align: center;
        }
        
        .form-box .submit-btn:hover {
            background-color: #45a049;
        }
        
        .form-box .terms {
            font-size: 12px;
            text-align: center;
            margin-top: 10px;
            color: #666;
        }

        .form-box  {
                background: var(--secondary, rgba(0, 0, 0, 0.70));
                padding: 80px;
                display: flex;
                flex-direction: column;
            }

            .form-box  h1 {
                background: var(--gradient, linear-gradient(90deg, #BD7905 0%, #FD5 100%));
                background-clip: text;
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                font-size: 50px;
                text-align: center;
                font-weight: 500;
                margin-bottom: 40px;
            }

            .form-box .form-group label {
                color: #FF9;
                font-size: 20px;
                font-weight: 400;
            }

            .form-box .form-group input {
                border-radius: 30px;
                background: rgba(255, 255, 255, 0.50);
                border: none;
            }

            .form-box .form-group textarea {
                border-radius: 30px;
                background: rgba(255, 255, 255, 0.50);
                border: none;
            }

            .form-box .form-group select {
                border-radius: 30px;
                background: rgba(255, 255, 255, 0.50);
                border: none;
            }


            .form-box .form-box h3 {
                font-size: 22px;
                font-weight: 500;
                color: #FF9;
            }

            .form-box .upload-item label {
                color: #FF9;
                font-size: 20px;
                font-weight: 400;
            }

            .form-box .upload-item input {
                border: 1px solid #a5a5a5;
                padding: 5px 20px;
                width: 100%;
                border-radius: 20px;
                background: rgba(255, 255, 255, 0.50);
            }

            .form-box .mm-box {
                display: flex;
                align-items: center;
            }

            .form-box .mm-box p {
                margin-bottom: 0;
                color: #FF9;
                font-size: 21px;
                margin-right: 10px;
            }

            .form-box .mm-box input {
                width: 17px;
                height: 17px;
            }

            .form-box .declaration label {
                color: #ffff99;
                font-size: 18px;
                line-height: 1.2;
                font-weight: 400;
            }

            .form-box button.sub-btn {
                padding: 0;
                border-radius: 50px;
                background: var(--gradient, linear-gradient(90deg, #BD7905 0%, #FD5 100%));
                padding: 5px 40px;
                color: #000;
                font-size: 24px;
                margin: 0 auto;
            }

            .form-box button.sub-btn svg {
                width: 60px;
                height: 60px;
            }

            .form-box .file-upload {
                position: relative;
                display: inline-block;
                width: 100%;
            }
            
            .form-box .file-upload input[type="file"] {
                position: absolute;
                left: 0;
                top: 0;
                opacity: 0;
                width: 100%;
                height: 100%;
                cursor: pointer;
            }
            
            .form-box .file-upload-label {
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 8px 12px;
                border: 1px solid #ddd;
                border-radius: 4px;
                background-color: #f9f9f9;
            }
            
            .form-box .file-upload-button {
                padding: 6px 12px;
                background-color: #e9e9e9;
                border: 1px solid #ccc;
                border-radius: 4px;
                cursor: pointer;
            }
            
            .form-box .file-name {
                color: #cc1515;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
                flex-grow: 1;
                margin-right: 10px;
            }



    </style>

<body>
    <!--============================== Header Start ==============================-->
    @include('include.nav')
    <!--============================== Header End ==============================-->

    <div class="content-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <form class="form-box" action="{{ route('pageant.registration.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h1>Registration Form (Pageants)</h1>

                        <!-- Personal Info -->
                        <div class="form-section">
                            <div class="form-row">
                                <div class="form-group"><label>Name</label><input type="text" name="name"></div>
                                <div class="form-group"><label>Language</label><input type="text" name="language"></div>
                            </div>
                            <div class="form-row">
                                <div class="form-group"><label>Date of Birth</label><input type="date" name="dob"></div>
                                <div class="form-group"><label>Gender</label>
                                    <select name="gender">
                                        <option>Select</option><option>Male</option><option>Female</option><option>Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group"><label>Age</label><input type="number" name="age"></div>
                                <div class="form-group"><label>Email Address</label><input type="email" name="email"></div>
                            </div>
                            <div class="form-row">
                                <div class="form-group"><label>Contact Number</label><input type="tel" name="contact"></div>
                                <div class="form-group"><label>Nationality</label><input type="text" name="nationality"></div>
                            </div>
                            <div class="form-row">
                                <div class="form-group"><label>Address</label><input type="text" name="address"></div>
                                <div class="form-group"><label>City for Audition</label><input type="text" name="city"></div>
                            </div>
                            <div class="form-row">
                                <div class="form-group"><label>Current Profession</label><input type="text" name="profession"></div>
                                <div class="form-group"><label>Institute/Organization</label><input type="text" name="institute"></div>
                            </div>
                            <div class="form-row">
                                <div class="form-group"><label>Experience and Achievements</label><input type="text" name="experience"></div>
                            </div>
                            <div class="form-row">
                                <div class="form-group"><label>Why do you want to participate in this event?</label><input type="text" name="reason"></div>
                            </div>
                        </div>

                        <!-- Physical Attributes -->
                        <h3>Physical Attribute</h3>
                        <div class="form-section">
                            <div class="form-row">
                                <div class="form-group"><label>Height (cm)</label><input type="number" name="height"></div>
                                <div class="form-group"><label>Eye Color</label><input type="text" name="eye_color"></div>
                            </div>
                            <div class="form-row">
                                <div class="form-group"><label>Weight (kg)</label><input type="number" name="weight"></div>
                                <div class="form-group"><label>Hair Color</label><input type="text" name="hair_color"></div>
                            </div>
                            <div class="form-row">
                                <div class="form-group"><label>Shoulder</label><input type="text" name="shoulder"></div>
                                <div class="form-group"><label>Hair Length</label><input type="text" name="hair_length"></div>
                            </div>
                            <div class="form-row">
                                <div class="form-group"><label>Chest</label><input type="text" name="chest"></div>
                                <div class="form-group"><label>Body Type</label><input type="text" name="body_type"></div>
                            </div>
                            <div class="form-row">
                                <div class="form-group"><label>Waist</label><input type="text" name="waist"></div>
                                <div class="form-group"><label>Skills</label><input type="text" name="skills"></div>
                            </div>
                            <div class="form-row">
                                <div class="form-group"><label>Hips</label><input type="text" name="hips"></div>
                                <div class="form-group"><label>Dress Size</label><input type="text" name="dress_size"></div>
                            </div>
                            <div class="form-row">
                                <div class="form-group"><label>Shoe Size</label><input type="text" name="shoe_size"></div>
                            </div>
                        </div>

                        <!-- Upload Section -->
                        <h3>Upload Requirements</h3>
                        <div class="upload-section">
                            <div class="upload-item"><label>Recent Full-Length Photograph</label><input type="file" name="full_photo"></div>
                            <div class="upload-item"><label>Recent Headshot Photograph</label><input type="file" name="headshot_photo"></div>
                            <div class="upload-item"><label>Copy of ID/Passport</label><input type="file" name="id_copy"></div>
                            <div class="upload-item"><label>Aadhar Card ID</label><input type="file" name="aadhar"></div>
                            <div class="upload-item"><label>Close-shot Photograph</label><input type="file" name="close_shot"></div>
                            <div class="upload-item"><label>Without Makeup Photograph</label><input type="file" name="no_makeup"></div>
                            <div class="upload-item"><label>Miss-shot Photograph</label><input type="file" name="miss_shot"></div>
                            <div class="upload-item"><label>Videos of Their Ramp Walk</label><input type="file" name="ramp_walk_video" accept="video/*"></div>
                        </div>

                        <!-- Declaration -->
                        <div class="declaration">
                            <input type="checkbox" name="declaration" required>
                            <label>I confirm that the information provided is accurate and truthful. I agree to abide by the rules and regulations of the Glenn Event. I understand that the organizers hold the right to disqualify any contestant for providing false information. <a href="#">Terms & Conditions</a></label>
                        </div>

                        <button type="submit" class="sub-btn">Submit <svg xmlns="http://www.w3.org/2000/svg" width="106" height="106" viewBox="0 0 106 106" fill="none">
                            <path d="M34.7476 70.5503C24.8495 60.6522 24.8495 44.6468 34.7476 34.7487C44.6457 24.8506 60.6511 24.8506 70.5492 34.7487C80.4473 44.6468 80.4473 60.6522 70.5492 70.5503C60.6511 80.4484 44.6457 80.4484 34.7476 70.5503ZM68.4433 36.8547C59.7035 28.1149 45.5934 28.1149 36.8536 36.8547C28.1138 45.5945 28.1138 59.7045 36.8536 68.4443C45.5934 77.1841 59.7035 77.1841 68.4433 68.4443C77.1831 59.7045 77.1831 45.5945 68.4433 36.8547Z" fill="black"></path>
                            <path d="M59.5986 63.1793L59.5986 45.6997L42.119 45.6997L42.119 42.7513L62.547 42.7513L62.547 63.1793L59.5986 63.1793Z" fill="black"></path>
                            <path d="M60.0195 43.1726L62.1255 45.2786L44.2247 63.1794L42.1187 61.0734L60.0195 43.1726Z" fill="black"></path>
                            </svg> 
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--============================== Footer Start ==============================-->
    @include('include.footer')
    <!--============================== Footer End ==============================-->
    <script src="include/js/jquery.min.js"></script>
    <script src="include/js/bootstrap.bundle.min.js"></script>
    <script src="include/js/plugins.js"></script>
    <script src="include/js/custom.js"></script>
</body>

</html>