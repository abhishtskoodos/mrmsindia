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

         .form-box {
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


            .form-box h3 {
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
    <header id="header">
        <div class="header-lable">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hl-label">
                            <div class="hl-left">
                               <p> Mr. & Miss Glam India Talent Hunt Grand Final OCT - DEC 2025 </p>
                            </div>
                            <div class="hl-right">
                               <p> Mr. & Miss Glam India Talent Hunt Grand Final OCT - DEC 2025 </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-xl">
            <div class="container">
                <div class="nav-inside d-flex align-items-center justify-content-between">
                    <a class="navbar-brand" href="#"><img src="include/images/logo.png" alt="logo" /></a>
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="mainNav">
                        <div class="navbar-inside w-100">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a class="nav-link" href="#!">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="#!">About us</a></li>
                                <li class="nav-item"><a class="nav-link" href="#!">Show</a></li>
                                <li class="nav-item"><a class="nav-link" href="#!">Models & Glimpse</a></li>
                                <li class="nav-item"><a class="nav-link" href="#!">Sponsers</a></li>
                                <li class="nav-item"><a class="nav-link" href="#!">Contact Us</a></li>
                            </ul>

                            <div class="nav-inside-content d-block d-xl-none">
                                <div class="nav-inside-content-inside">
                                    <a href="#" class="header-link">Buy Tune Online</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!--============================== Header End ==============================-->

    <div class="content-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="form-box">
                        <h1>Registration Form</h1>
                        
                        <div class="form-section">
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" name="name" required>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="dob">Date of Birth</label>
                                    <input type="date" id="dob" name="dob" required>
                                </div>
                                <div class="form-group">
                                    <label for="language">Language</label>
                                    <input type="text" id="language" name="language">
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="age">Age</label>
                                    <input type="number" id="age" name="age">
                                </div>
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <select id="gender" name="gender">
                                        <option value="">Select</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="coatless-number">Coatless Number</label>
                                    <input type="text" id="coatless-number" name="coatless-number">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="email" id="email" name="email" required>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" id="address" name="address">
                                </div>
                                <div class="form-group">
                                    <label for="height">Height (cm)</label>
                                    <input type="number" id="height" name="height">
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="nationality">Nationality</label>
                                    <input type="text" id="nationality" name="nationality">
                                </div>
                                <div class="form-group">
                                    <label for="weight">Weight (kg)</label>
                                    <input type="number" id="weight" name="weight">
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="city">City for Audition</label>
                                    <input type="text" id="city" name="city">
                                </div>
                                <div class="form-group">
                                    <label for="instagram">Instagram</label>
                                    <input type="text" id="instagram" name="instagram">
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="profession">General Profession</label>
                                    <input type="text" id="profession" name="profession">
                                </div>
                                <div class="form-group">
                                    <label for="facebook">Facebook</label>
                                    <input type="text" id="facebook" name="facebook">
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="institute">Institute/Organisation</label>
                                    <input type="text" id="institute" name="institute">
                                </div>
                                <div class="form-group">
                                    <label for="other">Other</label>
                                    <input type="text" id="other" name="other">
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="experience">Experience and Achievements</label>
                                    <textarea id="experience" name="experience"></textarea>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="reason">Why do you want to participate in this event?</label>
                                    <textarea id="reason" name="reason"></textarea>
                                </div>
                            </div>
                        </div>
                        
                        <h3>Upload Requirements</h3>
                        <div class="upload-section">
                            <div class="upload-item">
                                <label for="photo">Recent Full-Length Photograph</label>
                                <input type="file" id="photo" name="photo" accept="image/*">
                            </div>
                            <div class="upload-item">
                                <label for="handling-photo">Recent Handling Photograph</label>
                                <input type="file" id="handling-photo" name="handling-photo" accept="image/*">
                            </div>
                            <div class="upload-item">
                                <label for="id-copy">Copy of ID/Passport</label>
                                <input type="file" id="id-copy" name="id-copy" accept="image/*,.pdf">
                            </div>
                            <div class="upload-item">
                                <label for="audio-card">Audio Card ID</label>
                                <input type="file" id="audio-card" name="audio-card" accept="image/*,.pdf">
                            </div>
                        </div>
                        
                        <div class="declaration">
                            <div class="mm-box">
                                <p> Declaration: </p>
                                <input type="checkbox" id="declaration" name="declaration" required>
                            </div>
                            <label for="declaration">I confirm that the information provided is accurate and truthful. I agree to abide by the rules and regulations of the Glenn Event. I understand that the organizers hold the right to disqualify any contestant for providing false information. <p class="text-white"> Terms & Conditions </p>  </label>
                        </div>
                        
                        <button type="submit" class="sub-btn">Submit <svg xmlns="http://www.w3.org/2000/svg" width="106" height="106" viewBox="0 0 106 106" fill="none">
                            <path d="M34.7476 70.5503C24.8495 60.6522 24.8495 44.6468 34.7476 34.7487C44.6457 24.8506 60.6511 24.8506 70.5492 34.7487C80.4473 44.6468 80.4473 60.6522 70.5492 70.5503C60.6511 80.4484 44.6457 80.4484 34.7476 70.5503ZM68.4433 36.8547C59.7035 28.1149 45.5934 28.1149 36.8536 36.8547C28.1138 45.5945 28.1138 59.7045 36.8536 68.4443C45.5934 77.1841 59.7035 77.1841 68.4433 68.4443C77.1831 59.7045 77.1831 45.5945 68.4433 36.8547Z" fill="black"/>
                            <path d="M59.5986 63.1793L59.5986 45.6997L42.119 45.6997L42.119 42.7513L62.547 42.7513L62.547 63.1793L59.5986 63.1793Z" fill="black"/>
                            <path d="M60.0195 43.1726L62.1255 45.2786L44.2247 63.1794L42.1187 61.0734L60.0195 43.1726Z" fill="black"/>
                            </svg> 
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--============================== Footer Start ==============================-->
    <footer id="footer">
        <div class="footer-upper">
           <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      
                      <div class="footer-inner">
                         <div class="fi-left">
                            <div class="fil-logo"> <img src="include/images/logo.png" alt=""> </div>
                            <p> ADDRESS & CONTACT <br/> Lorem Ipsum has been the <br/> industry's standard dummy text <br/> ever since the 1500 </p>
                            <div class="fil-search">
                                <input type="text" placeholder="Get Newsletters">
                                <button> Subscribe </button>
                            </div>
                         </div>
                         <div class="fi-middle">
                            <div class="fim-left">
                                <h4 class="head"> Quick Links </h4>
                                <ul class="fm-list">
                                    <li class="fm-item"> <a href="#!"> Contests </a> </li>
                                    <li class="fm-item"> <a href="#!"> Judges & Jury </a> </li>
                                    <li class="fm-item"> <a href="#!"> Apply as a Contestant </a> </li>
                                    <li class="fm-item"> <a href="#!"> Become a Sponsor </a> </li>
                                    <li class="fm-item"> <a href="#!"> Partner with Us </a> </li>
                                    <li class="fm-item"> <a href="#!"> Contact </a> </li>
                                </ul>
                            </div>
                            <div class="fim-right">
                                <h4 class="head" style="visibility: hidden;"> Quick Links </h4>
                                <ul class="fm-list">
                                    <li class="fm-item"> <a href="#!"> Home </a> </li>
                                    <li class="fm-item"> <a href="#!"> About Us </a> </li>
                                    <li class="fm-item"> <a href="#!"> Services </a> </li>
                                    <li class="fm-item"> <a href="#!"> Portfolio </a> </li>
                                    <li class="fm-item"> <a href="#!"> Blog </a> </li>
                                    <li class="fm-item"> <a href="#!"> Contact </a> </li>
                                </ul>
                            </div>
                         </div>
                         <div class="fi-right">
                            <h4 class="head"> Follow Us </h4>
                            <ul class="fr-link-list">
                                <li class="fr-link-item"> 
                                    <a href="#">  
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                                            <path d="M50 25.1519C50 11.3448 38.807 0.151855 25 0.151855C11.193 0.151855 0 11.3448 0 25.1519C0 37.63 9.14219 47.9728 21.0938 49.8481V32.3784H14.7461V25.1519H21.0938V19.644C21.0938 13.3784 24.8262 9.91748 30.5367 9.91748C33.2719 9.91748 36.1328 10.4058 36.1328 10.4058V16.5581H32.9805C29.8748 16.5581 28.9062 18.4853 28.9062 20.4624V25.1519H35.8398L34.7314 32.3784H28.9062V49.8481C40.8578 47.9728 50 37.6302 50 25.1519Z" fill="#1877F2"/>
                                        </svg>  
                                     </a>
                                </li>
                                <li class="fr-link-item"> 
                                    <a href="#">  
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                                            <g clip-path="url(#clip0_830_1323)">
                                              <path d="M38.2812 0H11.7188C5.24666 0 0 5.24666 0 11.7188V38.2812C0 44.7533 5.24666 50 11.7188 50H38.2812C44.7533 50 50 44.7533 50 38.2812V11.7188C50 5.24666 44.7533 0 38.2812 0Z" fill="url(#paint0_radial_830_1323)"/>
                                              <path d="M38.2812 0H11.7188C5.24666 0 0 5.24666 0 11.7188V38.2812C0 44.7533 5.24666 50 11.7188 50H38.2812C44.7533 50 50 44.7533 50 38.2812V11.7188C50 5.24666 44.7533 0 38.2812 0Z" fill="url(#paint1_radial_830_1323)"/>
                                              <path d="M25.0018 5.46875C19.6975 5.46875 19.0316 5.49199 16.9484 5.58672C14.8691 5.68203 13.4498 6.01113 12.208 6.49414C10.9232 6.99297 9.83359 7.66035 8.74805 8.74629C7.66152 9.83203 6.99414 10.9217 6.49375 12.2059C6.00938 13.448 5.67988 14.868 5.58633 16.9463C5.49316 19.0297 5.46875 19.6957 5.46875 25.0002C5.46875 30.3047 5.49219 30.9684 5.58672 33.0516C5.68242 35.1309 6.01152 36.5502 6.49414 37.792C6.99336 39.0768 7.66074 40.1664 8.74668 41.252C9.83203 42.3385 10.9217 43.0074 12.2055 43.5062C13.4482 43.9893 14.8678 44.3184 16.9467 44.4137C19.0301 44.5084 19.6953 44.5316 24.9994 44.5316C30.3043 44.5316 30.968 44.5084 33.0512 44.4137C35.1305 44.3184 36.5514 43.9893 37.7941 43.5062C39.0783 43.0074 40.1664 42.3385 41.2516 41.252C42.3381 40.1664 43.0053 39.0768 43.5059 37.7926C43.9859 36.5502 44.3156 35.1305 44.4133 33.052C44.5068 30.9688 44.5312 30.3047 44.5312 25.0002C44.5312 19.6957 44.5068 19.0301 44.4133 16.9467C44.3156 14.8674 43.9859 13.4482 43.5059 12.2064C43.0053 10.9217 42.3381 9.83203 41.2516 8.74629C40.1652 7.65996 39.0787 6.99258 37.793 6.49434C36.5479 6.01113 35.1277 5.68184 33.0484 5.58672C30.965 5.49199 30.3018 5.46875 24.9957 5.46875H25.0018ZM23.2496 8.98848C23.7697 8.9877 24.35 8.98848 25.0018 8.98848C30.2168 8.98848 30.8348 9.00723 32.8941 9.10078C34.7984 9.18789 35.832 9.50605 36.5205 9.77344C37.432 10.1273 38.0818 10.5506 38.765 11.2344C39.4486 11.918 39.8717 12.5689 40.2266 13.4805C40.4939 14.168 40.8125 15.2016 40.8992 17.1059C40.9928 19.1648 41.0131 19.7832 41.0131 24.9957C41.0131 30.2082 40.9928 30.8268 40.8992 32.8855C40.8121 34.7898 40.4939 35.8234 40.2266 36.5111C39.8727 37.4227 39.4486 38.0717 38.765 38.7549C38.0814 39.4385 37.4324 39.8615 36.5205 40.2156C35.8328 40.4842 34.7984 40.8016 32.8941 40.8887C30.8352 40.9822 30.2168 41.0025 25.0018 41.0025C19.7865 41.0025 19.1684 40.9822 17.1096 40.8887C15.2053 40.8008 14.1717 40.4826 13.4826 40.2152C12.5713 39.8611 11.9201 39.4381 11.2365 38.7545C10.5529 38.0709 10.1299 37.4215 9.775 36.5096C9.50762 35.8219 9.18906 34.7883 9.10234 32.884C9.00879 30.825 8.99004 30.2066 8.99004 24.9908C8.99004 19.775 9.00879 19.16 9.10234 17.101C9.18945 15.1967 9.50762 14.1631 9.775 13.4746C10.1291 12.5631 10.5529 11.9121 11.2367 11.2285C11.9205 10.5449 12.5713 10.1217 13.4828 9.76699C14.1713 9.49844 15.2053 9.18105 17.1096 9.09355C18.9113 9.01211 19.6096 8.98769 23.2496 8.98359V8.98848ZM35.4275 12.2314C34.1336 12.2314 33.0838 13.2803 33.0838 14.5744C33.0838 15.8684 34.1336 16.9182 35.4275 16.9182C36.7215 16.9182 37.7713 15.8684 37.7713 14.5744C37.7713 13.2805 36.7215 12.2307 35.4275 12.2307V12.2314ZM25.0018 14.9699C19.4627 14.9699 14.9717 19.4609 14.9717 25.0002C14.9717 30.5395 19.4627 35.0283 25.0018 35.0283C30.541 35.0283 35.0305 30.5395 35.0305 25.0002C35.0305 19.4611 30.5406 14.9699 25.0014 14.9699H25.0018ZM25.0018 18.4896C28.5973 18.4896 31.5123 21.4043 31.5123 25.0002C31.5123 28.5957 28.5973 31.5107 25.0018 31.5107C21.4062 31.5107 18.4914 28.5957 18.4914 25.0002C18.4914 21.4043 21.4061 18.4896 25.0018 18.4896Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <radialGradient id="paint0_radial_830_1323" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(13.2812 53.851) rotate(-90) scale(49.5537 46.0889)">
                                                <stop stop-color="#FFDD55"/>
                                                <stop offset="0.1" stop-color="#FFDD55"/>
                                                <stop offset="0.5" stop-color="#FF543E"/>
                                                <stop offset="1" stop-color="#C837AB"/>
                                              </radialGradient>
                                              <radialGradient id="paint1_radial_830_1323" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(-8.3752 3.60176) rotate(78.681) scale(22.1508 91.3062)">
                                                <stop stop-color="#3771C8"/>
                                                <stop offset="0.128" stop-color="#3771C8"/>
                                                <stop offset="1" stop-color="#6600FF" stop-opacity="0"/>
                                              </radialGradient>
                                              <clipPath id="clip0_830_1323">
                                                <rect width="50" height="50" fill="white"/>
                                              </clipPath>
                                            </defs>
                                        </svg>
                                     </a>
                                </li>
                                <li class="fr-link-item"> 
                                    <a href="#">  
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                                            <g clip-path="url(#clip0_830_1328)">
                                              <rect width="50" height="50" fill="white"/>
                                              <path d="M29.6543 21.1719L47.8676 0H43.5512L27.7371 18.3828L15.1059 0H0.537109L19.6379 27.7984L0.537109 50H4.85352L21.5543 30.5871L34.8934 50H49.4621L29.6531 21.1719H29.6543ZM23.7426 28.043L21.807 25.275L6.40859 3.24922H13.0383L25.4645 21.025L27.3996 23.793L43.5531 46.8984H36.9242L23.7426 28.0441V28.043Z" fill="black"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_830_1328">
                                                <rect width="50" height="50" fill="white"/>
                                              </clipPath>
                                            </defs>
                                        </svg>  
                                     </a>
                                </li>
                                <li class="fr-link-item"> 
                                    <a href="#">  
                                        <svg height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 461.001 461.001" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path style="fill:#F61C0D;" d="M365.257,67.393H95.744C42.866,67.393,0,110.259,0,163.137v134.728 c0,52.878,42.866,95.744,95.744,95.744h269.513c52.878,0,95.744-42.866,95.744-95.744V163.137 C461.001,110.259,418.135,67.393,365.257,67.393z M300.506,237.056l-126.06,60.123c-3.359,1.602-7.239-0.847-7.239-4.568V168.607 c0-3.774,3.982-6.22,7.348-4.514l126.06,63.881C304.363,229.873,304.298,235.248,300.506,237.056z"></path> </g> </g></svg>
                                     </a>
                                </li>
                            </ul>
                            <div class="fr-button">  Register Now  </div>
                         </div>
                      </div>
                  </div>
              </div>
           </div>
        </div>
        <div class="footer-lower">
            <div class="container">
                <div class="row">
                   <div class="col-lg-12">
                        <div class="ft-inner"> © 2025 Glam Events. All Rights Reserved. | Privacy Policy | Terms & Conditions </div>
                   </div>
                </div>
            </div>
        </div>
    </footer>
    <!--============================== Footer End ==============================-->
    <script src="include/js/jquery.min.js"></script>
    <script src="include/js/bootstrap.bundle.min.js"></script>
    <script src="include/js/plugins.js"></script>
    <script src="include/js/custom.js"></script>
</body>

</html>