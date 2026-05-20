<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Careers at Uma Memorial Public School – find teaching jobs, administrative roles, staff benefits, and apply online for school job vacancies.">
    <title>Careers | Uma Memorial Public School</title>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" onload="this.rel='stylesheet'">
    <noscript>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    </noscript>

    

    <!-- Font Awesome -->
     <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        </noscript>

    <link rel="icon" type="image/jpg" href="images/logo-1_imresizer_1.jpg">
    <link rel="stylesheet"  href="career.css"/>

    <style>
        body {
        font-family: 'Inter', system-ui, Arial, sans-serif;
        margin: 0;
        }
    </style>

</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">

                <!-- Logo -->
                <div class="flex items-center space-x-2">
                    <div class="w-[70px] h-[41px] flex-shrink-0 rounded-full flex items-center justify-center">
                        <img src="images/logo-2.webp" alt="UMPS" width="70" height="41" loading="eager" fetchpriority="high" class="object-contain">
                    </div>
                    <span class="font-bold text-sm sm:text-lg md:text-xl text-gray-800 leading-tight">
                        Uma Memorial <br class="sm:hidden"> Public School
                    </span>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="index.php" class="text-gray-700 transition hover:text-[#167CE9]">
                        Home
                    </a>
                    <a href="about.php" class="text-gray-700 transition hover:text-[#167CE9]">
                        About
                    </a>
                    <a href="login.php"
                        class="bg-[#167CE9] text-white px-5 py-2 rounded-full font-semibold hover:bg-white hover:text-[#FFC300] transition shadow-lg">
                        Login
                    </a>
                    <a href="signup.php"
                        class="bg-[#FFC300] text-white px-5 py-2 rounded-full font-semibold hover:bg-white hover:text-[#167CE9] transition">
                        Sign Up
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button class="md:hidden text-gray-700 text-2xl" onclick="toggleMobileMenu()">
                    <i class="fas fa-bars"></i>
                </button>

            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden md:hidden bg-white border-t shadow-md">
            <div class="flex flex-col px-4 py-4 space-y-3">
                <a href="index.php" class="text-gray-700 hover:text-[#167CE9]">
                    Home
                </a>
                <a href="about.php" class="text-gray-700 hover:text-[#167CE9]">
                    About
                </a>
                <a href="login.php"
                    class="bg-[#167CE9] text-white text-center px-5 py-2 rounded-full font-semibold hover:bg-white hover:text-[#FFC300] transition shadow-lg">
                    Login
                </a>
                <a href="signup.php"
                    class="bg-[#FFC300] text-white text-center px-5 py-2 rounded-full font-semibold hover:bg-white hover:text-[#167CE9] transition">
                    Sign Up
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section border-2 border-white -->
    <section class="gradient-bg min-h-screen flex items-center relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-20 left-10 w-72 h-72 bg-white rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 right-20 w-96 h-96 bg-white rounded-full blur-3xl"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center">
                <span class="inline-block bg-white/20 text-white px-4 py-2 rounded-full text-sm font-medium mb-6">
                    <i class="fas fa-briefcase mr-2"></i>Join Our Team
                </span>
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                    Shaping Bright Futures with <br>
                    <span class="text-white-300">Knowledge & Values</span>
                </h1>
                <p class="text-xl text-blue-100 max-w-2xl mx-auto mb-10">
                    Join a passionate community of educators dedicated to inspiring the next generation. Discover your perfect role at Uma Memorial Public School.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#positions" class="bg-[#167CE9] text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-[#FFC300] transition shadow-lg">
                        View Open Positions
                    </a>
                    <a href="#benefits" class="bg-[#FFC300] text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-[#167CE9] transition">
                        Why Work With Us
                    </a>
                </div>
            </div>
            
            <!-- Stats -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-16">
                <div class="stat-card rounded-2xl p-6 text-center">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-2">30+</div>
                    <div class="text-blue-200 text-sm">Faculty Members</div>
                </div>
                <div class="stat-card rounded-2xl p-6 text-center">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-2">16</div>
                    <div class="text-blue-200 text-sm">Years of Excellence</div>
                </div>
                <div class="stat-card rounded-2xl p-6 text-center">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-2">98%</div>
                    <div class="text-blue-200 text-sm">Staff Satisfaction</div>
                </div>
                <div class="stat-card rounded-2xl p-6 text-center">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-2">12</div>
                    <div class="text-blue-200 text-sm">Open Positions</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Work With Us -->
    <section id="benefits" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center mb-16 scroll-animate">
                <span class="text-[#167CE9] font-semibold text-sm uppercase tracking-wider">
                    Staff Benefits
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-3 mb-4">
                    Benefits at Uma Memorial Public School</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    We value our educators and staff by offering financial security, healthcare support, and family benefits.
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- EPF -->
                <div class="card-hover bg-gray-50 rounded-2xl p-8 scroll-animate border-t-4 border-[#FFC300]">
                    <div class="w-14 h-14 bg-[#167CE9] rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-piggy-bank text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">
                        EPF & Provident Fund
                    </h3>
                    <p class="text-gray-600">
                        Employees receive EPF and Provident Fund benefits ensuring long-term financial security.
                    </p>
                </div>

                <!-- Health Insurance -->
                <div class="card-hover bg-gray-50 rounded-2xl p-8 scroll-animate border-t-4 border-[#FFC300]">
                    <div class="w-14 h-14 bg-[#167CE9] rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-heartbeat text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">
                        Health Insurance Coverage
                    </h3>
                    <p class="text-gray-600">
                        Comprehensive health insurance coverage up to ₹5 Lakhs for our staff members.
                    </p>
                </div>

                <!-- Staff Child Fee Waiver -->
                <div class="card-hover bg-gray-50 rounded-2xl p-8 scroll-animate border-t-4 border-[#FFC300]">
                    <div class="w-14 h-14 bg-[#167CE9] rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-child text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">
                        50% Fee Waiver for Staff Children
                    </h3>
                    <p class="text-gray-600">
                        50% tuition fee concession for children of full-time staff members.
                    </p>
                </div>

            </div>
        </div>
    </section>


    <!-- Job Listings -->
    <section id="positions" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 scroll-animate">
                <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">Open Positions</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-3 mb-4">Find Your Perfect Role</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Explore our current openings and take the first step towards a rewarding career in education.</p>
            </div>
            
            <!-- Filters -->
            <div class="bg-white rounded-2xl shadow-sm p-6 mb-8 scroll-animate">
                <div class="grid md:grid-cols-4 gap-4">
                    <div>
                        <label for="filterDepartment" class="block text-sm font-medium text-gray-700 mb-2">Department</label>
                        <select id="filterDepartment" onchange="filterJobs()" class="w-full border border-gray-300 rounded-lg px-4 py-3 bg-white">
                            <option value="">All Departments</option>
                            <!-- Academic Group -->
                            <optgroup label="Academic">
                                <option value="commerce">Commerce</option>
                                <option value="science">Science</option>
                                <option value="social-science">Social Science</option>
                                <option value="hindi">Hindi</option>
                                <option value="english">English</option>
                                <option value="maths">Maths</option>
                            </optgroup>

                            <!-- Management Group -->
                            <optgroup label="Management">
                                <option value="coordinator-hr">Coordinator</option>
                                <option value="account-manager">Account Manager</option>
                                <option value="administration">Administration</option>
                                <option value="receptionist">Receptionist</option>
                            </optgroup>
                            <option value="support">Support Staff</option>
                        </select>
                    </div>
                    <div>
                        <label for="filterType" class="block text-sm font-medium text-gray-700 mb-2">Employment Type</label>
                        <select id="filterType" onchange="filterJobs()" class="w-full border border-gray-300 rounded-lg px-4 py-3 bg-white">
                            <option value="">All Types</option>
                            <option value="full-time">Full Time</option>
                            <option value="part-time">Part Time</option>
                            <option value="contract">Contract</option>
                        </select>
                    </div>
                    <div>
                        <label for="filterExperience" class="block text-sm font-medium text-gray-700 mb-2">Experience Level</label>
                        <select id="filterExperience" onchange="filterJobs()" class="w-full border border-gray-300 rounded-lg px-4 py-3 bg-white">
                            <option value="">All Levels</option>
                            <option value="entry">Entry Level</option>
                            <option value="mid">Mid Level</option>
                            <option value="senior">Senior Level</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Search</label>
                        <div class="relative">
                            <input type="text" id="searchInput" onkeyup="filterJobs()" placeholder="Search positions..." class="w-full border border-gray-300 rounded-lg px-4 py-3 pl-10">
                            <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Job Cards -->
            <div id="jobListings" class="space-y-4">
                <!-- Job Card 1 -->
                <div class="job-card bg-white rounded-2xl border-2 border-gray-100 p-6 scroll-animate" data-department="maths" data-type="full-time" data-experience="mid">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <div class="flex-1">
                            <div class="flex flex-wrap items-center gap-3 mb-3">
                                <h3 class="text-xl font-bold text-gray-900">High School Mathematics Teacher</h3>
                                <span class="tag bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-medium">New</span>
                            </div>
                            <div class="flex flex-wrap gap-4 text-sm text-gray-600 mb-4">
                                <span><i class="fas fa-building mr-2 text-blue-600"></i>Academic Department</span>
                                <span><i class="fas fa-clock mr-2 text-blue-600"></i>Full Time</span>
                                <span><i class="fas fa-map-marker-alt mr-2 text-blue-600"></i>Main Campus</span>
                                <span><img src="images/icons8-rupee-32 (1).png" alt="Rupee Icon" class="w-4 h-4 inline mr-1">Rs.55,000 - Rs.75,000</span>
                            </div>
                            <p class="text-gray-600 text-sm">Looking for a passionate mathematics educator to inspire students in algebra, geometry, and calculus courses.</p>
                        </div>
                        <div class="flex gap-3">
                            <button onclick="openJobModal('math-teacher')" class="text-blue-600 border border-blue-600 px-5 py-2.5 rounded-lg font-medium hover:bg-blue-50 transition">
                                View Details
                            </button>
                            <button onclick="openApplyModal('High School Mathematics Teacher')" class="btn-primary text-white px-5 py-2.5 rounded-lg font-medium">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Job Card 2 -->
                <div class="job-card bg-white rounded-2xl border-2 border-gray-100 p-6 scroll-animate" data-department="english" data-type="full-time" data-experience="senior">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <div class="flex-1">
                            <div class="flex flex-wrap items-center gap-3 mb-3">
                                <h3 class="text-xl font-bold text-gray-900">English Department Head</h3>
                                <span class="tag bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-xs font-medium">Leadership</span>
                            </div>
                            <div class="flex flex-wrap gap-4 text-sm text-gray-600 mb-4">
                                <span><i class="fas fa-building mr-2 text-blue-600"></i>Academic Department</span>
                                <span><i class="fas fa-clock mr-2 text-blue-600"></i>Full Time</span>
                                <span><i class="fas fa-map-marker-alt mr-2 text-blue-600"></i>Main Campus</span>
                                <span><img src="images/icons8-rupee-32 (1).png" alt="Rupee Icon" class="w-4 h-4 inline mr-1">Rs.70,000 - Rs.90,000</span>
                            </div>
                            <p class="text-gray-600 text-sm">Lead our English department with curriculum development, teacher mentorship, and innovative teaching strategies.</p>
                        </div>
                        <div class="flex gap-3">
                            <button onclick="openJobModal('english-head')" class="text-blue-600 border border-blue-600 px-5 py-2.5 rounded-lg font-medium hover:bg-blue-50 transition">
                                View Details
                            </button>
                            <button onclick="openApplyModal('English Department Head')" class="btn-primary text-white px-5 py-2.5 rounded-lg font-medium">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Job Card 3 -->
                <div class="job-card bg-white rounded-2xl border-2 border-gray-100 p-6 scroll-animate" data-department="administration" data-type="full-time" data-experience="mid">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <div class="flex-1">
                            <div class="flex flex-wrap items-center gap-3 mb-3">
                                <h3 class="text-xl font-bold text-gray-900">Admissions Counselor</h3>
                            </div>
                            <div class="flex flex-wrap gap-4 text-sm text-gray-600 mb-4">
                                <span><i class="fas fa-building mr-2 text-blue-600"></i>Management Department</span>
                                <span><i class="fas fa-clock mr-2 text-blue-600"></i>Full Time</span>
                                <span><i class="fas fa-map-marker-alt mr-2 text-blue-600"></i>Admin Building</span>
                                <span><img src="images/icons8-rupee-32 (1).png" alt="Rupee Icon" class="w-4 h-4 inline mr-1">Rs.45,000 - Rs.55,000</span>
                            </div>
                            <p class="text-gray-600 text-sm">Guide prospective families through the admissions process and represent our school at recruitment events.</p>
                        </div>
                        <div class="flex gap-3">
                            <button onclick="openJobModal('admissions')" class="text-blue-600 border border-blue-600 px-5 py-2.5 rounded-lg font-medium hover:bg-blue-50 transition">
                                View Details
                            </button>
                            <button onclick="openApplyModal('Admissions Counselor')" class="btn-primary text-white px-5 py-2.5 rounded-lg font-medium">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Job Card 4 -->
                <div class="job-card bg-white rounded-2xl border-2 border-gray-100 p-6 scroll-animate" data-department="science" data-type="part-time" data-experience="entry">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <div class="flex-1">
                            <div class="flex flex-wrap items-center gap-3 mb-3">
                                <h3 class="text-xl font-bold text-gray-900">Science Teacher (Part-Time)</h3>
                                <span class="tag bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-medium">Part Time</span>
                            </div>
                            <div class="flex flex-wrap gap-4 text-sm text-gray-600 mb-4">
                                <span><i class="fas fa-building mr-2 text-blue-600"></i>Academic Department</span>
                                <span><i class="fas fa-clock mr-2 text-blue-600"></i>Part Time</span>
                                <span><i class="fas fa-map-marker-alt mr-2 text-blue-600"></i>Main Campus</span>
                                <span><img src="images/icons8-rupee-32 (1).png" alt="Rupee Icon" class="w-4 h-4 inline mr-1">Rs.70,000 - Rs.85,000</span>
                            </div>
                            <p class="text-gray-600 text-sm">Teach instrumental and vocal music to middle and high school students. Lead after-school ensemble programs.</p>
                        </div>
                        <div class="flex gap-3">
                            <button onclick="openJobModal('science')" class="text-blue-600 border border-blue-600 px-5 py-2.5 rounded-lg font-medium hover:bg-blue-50 transition">
                                View Details
                            </button>
                            <button onclick="openApplyModal('Science Teacher (Part-Time)')" class="btn-primary text-white px-5 py-2.5 rounded-lg font-medium">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Job Card 5 -->
                <div class="job-card bg-white rounded-2xl border-2 border-gray-100 p-6 scroll-animate" data-department="account" data-type="full-time" data-experience="mid">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <div class="flex-1">
                            <div class="flex flex-wrap items-center gap-3 mb-3">
                                <h3 class="text-xl font-bold text-gray-900">Account Manager</h3>
                                <span class="tag bg-orange-100 text-orange-700 px-3 py-1 rounded-full text-xs font-medium">Urgent</span>
                            </div>
                            <div class="flex flex-wrap gap-4 text-sm text-gray-600 mb-4">
                                <span><i class="fas fa-building mr-2 text-blue-600"></i>Management Department</span>
                                <span><i class="fas fa-clock mr-2 text-blue-600"></i>Full Time</span>
                                <span><i class="fas fa-map-marker-alt mr-2 text-blue-600"></i>Main Campus</span>
                                <span><img src="images/icons8-rupee-32 (1).png" alt="Rupee Icon" class="w-4 h-4 inline mr-1">Rs.65,000 - Rs.85,000</span>
                            </div>
                            <p class="text-gray-600 text-sm">Oversee all athletic programs, manage coaching staff, and promote student-athlete development and wellness.</p>
                        </div>
                        <div class="flex gap-3">
                            <button onclick="openJobModal('account')" class="text-blue-600 border border-blue-600 px-5 py-2.5 rounded-lg font-medium hover:bg-blue-50 transition">
                                View Details
                            </button>
                            <button onclick="openApplyModal('Account Manager')" class="btn-primary text-white px-5 py-2.5 rounded-lg font-medium">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Job Card 6 -->
                <div class="job-card bg-white rounded-2xl border-2 border-gray-100 p-6 scroll-animate" data-department="support" data-type="full-time" data-experience="entry">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <div class="flex-1">
                            <div class="flex flex-wrap items-center gap-3 mb-3">
                                <h3 class="text-xl font-bold text-gray-900">Support Staff</h3>
                                <span class="tag bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-medium">New</span>
                            </div>
                            <div class="flex flex-wrap gap-4 text-sm text-gray-600 mb-4">
                                <span><i class="fas fa-building mr-2 text-blue-600"></i>Support Staff</span>
                                <span><i class="fas fa-clock mr-2 text-blue-600"></i>Full Time</span>
                                <span><i class="fas fa-map-marker-alt mr-2 text-blue-600"></i>Student Services</span>
                                <span><img src="images/icons8-rupee-32 (1).png" alt="Rupee Icon" class="w-4 h-4 inline mr-1">Rs.5,000 - Rs.6,000</span>
                            </div>
                            <p class="text-gray-600 text-sm">Provide academic, career, and social-emotional support to students. Develop and implement counseling programs.</p>
                        </div>
                        <div class="flex gap-3">
                            <button onclick="openJobModal('support')" class="text-blue-600 border border-blue-600 px-5 py-2.5 rounded-lg font-medium hover:bg-blue-50 transition">
                                View Details
                            </button>
                            <button onclick="openApplyModal('Support Staff')" class="btn-primary text-white px-5 py-2.5 rounded-lg font-medium">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- No Results Message -->
            <div id="noResults" class="hidden text-center py-12">
                <i class="fas fa-search text-5xl text-gray-300 mb-4"></i>
                <h3 class="text-xl font-semibold text-gray-700 mb-2">No positions found</h3>
                <p class="text-gray-500">Try adjusting your filters or search terms</p>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 scroll-animate">
                <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">Testimonials</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-3 mb-4">Hear From Our Team</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Our faculty and staff love being part of the Greenwood family.</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-50 rounded-2xl p-8 scroll-animate">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                    <p class="text-gray-600 mb-6">"Working at Greenwood has been the most rewarding experience of my career. The administration truly supports teachers and provides resources for us to succeed."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center text-white font-bold">NK</div>
                        <div class="ml-4">
                            <div class="font-semibold text-gray-900">Neeraj Kumar</div>
                            <div class="text-sm text-gray-500">Science Teacher, 8 years</div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-2xl p-8 scroll-animate">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                    <p class="text-gray-600 mb-6">"The professional development opportunities here are unmatched. I've grown so much as an educator thanks to the continuous learning environment."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center text-white font-bold">AS</div>
                        <div class="ml-4">
                            <div class="font-semibold text-gray-900">Anuj Sharma</div>
                            <div class="text-sm text-gray-500">History Department Head, 12 years</div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-2xl p-8 scroll-animate">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                    <p class="text-gray-600 mb-6">"The work-life balance and benefits package are exceptional. My children attend Greenwood, and the tuition discount has been a game-changer for our family."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center text-white font-bold">AS</div>
                        <div class="ml-4">
                            <div class="font-semibold text-gray-900">Anjali Saxena</div>
                            <div class="text-sm text-gray-500">Administrative Coordinator, 5 years</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Application Process -->
    <section class="py-20 gradient-bg relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-10 right-10 w-72 h-72 bg-white rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 left-20 w-96 h-96 bg-white rounded-full blur-3xl"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center mb-16 scroll-animate">
                <span class="text-blue-200 font-semibold text-sm uppercase tracking-wider">How to Apply</span>
                <h2 class="text-3xl md:text-4xl font-bold text-white mt-3 mb-4">Our Hiring Process</h2>
                <p class="text-blue-100 max-w-2xl mx-auto">A transparent and supportive journey from application to offer.</p>
            </div>
            
            <div class="grid md:grid-cols-7 gap-2 items-center">

                <!-- Step 1 -->
                <div class="text-center scroll-animate">
                    <div class="w-16 h-16 rounded-full bg-white/20 flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl font-bold text-white">1</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Submit Application</h3>
                    <p class="text-blue-100">Complete our online application form and upload your resume and cover letter.</p>
                </div>

                <!-- Arrow -->
                <div class="hidden md:flex justify-center">
                    <i class="fas fa-arrow-right text-white text-3xl opacity-70 animate-pulse"></i>
                </div>

                <!-- Step 2 -->
                <div class="text-center scroll-animate">
                    <div class="w-16 h-16 rounded-full bg-white/20 flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl font-bold text-white">2</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Initial Screening</h3>
                    <p class="text-blue-100">Our HR team reviews applications and conducts phone interviews with qualified candidates.</p>
                </div>

                <!-- Arrow -->
                <div class="hidden md:flex justify-center">
                    <i class="fas fa-arrow-right text-white text-3xl opacity-70 animate-pulse"></i>
                </div>

                <!-- Step 3 -->
                <div class="text-center scroll-animate">
                    <div class="w-16 h-16 rounded-full bg-white/20 flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl font-bold text-white">3</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Campus Interview</h3>
                    <p class="text-blue-100">Meet with department heads, demonstrate teaching skills, and tour our facilities.</p>
                </div>

                <!-- Arrow -->
                <div class="hidden md:flex justify-center">
                    <i class="fas fa-arrow-right text-white text-3xl opacity-70 animate-pulse"></i>
                </div>

                <!-- Step 4 -->
                <div class="text-center scroll-animate">
                    <div class="w-16 h-16 rounded-full bg-white/20 flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl font-bold text-white">4</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Offer & Onboarding</h3>
                    <p class="text-blue-100">Receive your offer and join our comprehensive orientation program.</p>
                </div>

            </div>

        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center scroll-animate">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Don't See the Right Position?</h2>
            <p class="text-xl text-gray-600 mb-8">We're always looking for talented educators and staff. Submit your resume for future opportunities.</p>
            <button onclick="openApplyModal('General Application')" class="btn-dan text-white px-8 py-4 rounded-full font-semibold text-lg">
                Submit General Application
            </button>
        </div>
    </section>

    <!-- Footer -->
    <footer class="relative bg-cover bg-center bg-no-repeat"
            style="background-image: url('images/footer-1.jpeg');" loading="lazy" decoding="async">

    <!-- Dark Overlay -->
    <div class="absolute inset-0 bg-[#0f172a]/85"></div>

    <div class="relative max-w-7xl mx-auto px-8 py-16 text-gray-300">

        <div class="grid md:grid-cols-5 gap-12">

        <!-- Logo + About -->
        <div>
            <div class="flex items-center gap-3 mb-6">
            <img src="images/logo-2.webp" width="70" height="41" alt="UMPS">
            <div>
                <h2 class="text-xl font-semibold text-white">UMA MEMORIAL</h2>
                <p class="text-sm tracking-widest text-blue-400">PUBLIC SCHOOL</p>
            </div>
            </div>

            <p class="text-sm leading-relaxed mb-6">
            A Co-ed institution dedicated to providing quality education.
            </p>

            <!-- Social Icons -->
            <div class="flex gap-4">
            <a href="https://www.youtube.com/@umamemorial22" target="_blank" rel="noopener noreferrer" aria-label="Visit our YouTube channel" class="w-10 h-10 flex items-center justify-center rounded-full bg-white/10 hover:bg-[#FFC300] transition">
                <i class="fab fa-youtube text-white"></i>
            </a>
            <a href="https://www.facebook.com/umamemorial22/" target="_blank" rel="noopener noreferrer" aria-label="Visit our Facebook channel" class="w-10 h-10 flex items-center justify-center rounded-full bg-white/10 hover:bg-[#FFC300] transition">
                <i class="fab fa-facebook-f text-white"></i>
            </a>
            <a href="https://www.instagram.com/umamemorial22/" target="_blank" rel="noopener noreferrer" aria-label="Visit our Instagram channel" class="w-10 h-10 flex items-center justify-center rounded-full bg-white/10 hover:bg-[#FFC300] transition">
                <i class="fab fa-instagram text-white"></i>
            </a>
            <a href="https://www.linkedin.com/jobs/view/school-teacher-at-uma-memorial-public-school-4398734139?originalSubdomain=in" target="_blank" rel="noopener noreferrer" aria-label="Visit our Linkedin channel" class="w-10 h-10 flex items-center justify-center rounded-full bg-white/10 hover:bg-[#FFC300] transition">
                <i class="fab fa-linkedin-in text-white"></i>
            </a>
            </div>
        </div>

        <!-- Site Links -->
        <div>
            <h3 class="text-lg font-semibold text-white mb-6">Site Links</h3>
            <ul class="space-y-3 text-sm">
            <li><a href="#" class="hover:text-white">Home</a></li>
            <li><a href="#" class="hover:text-white">Career  </a><span class="tag bg-red-500 text-white px-3 py-1 rounded-full text-xs font-medium">Hiring</span></li>
            <li><a href="#" class="hover:text-white">About</a></li>
            <li><a href="#" class="hover:text-white">Academics</a></li>
            <li><a href="#" class="hover:text-white">Admissions</a></li>
            <li><a href="#" class="hover:text-white">Startup & Innovation</a></li>
            <li><a href="#" class="hover:text-white">Contact</a></li>
            </ul>
        </div>

        <!-- Contact -->
        <div>
            <h3 class="text-lg font-semibold text-white mb-6">Have a Questions?</h3>
            <ul class="space-y-4 text-sm">
            <li class="flex gap-3">
                <span><i class="fas fa-map-marker-alt text-white"></i></span>
                <span>Dherahi, Lakhanpur Cholapur Varanasi 221101</span>
            </li>
            <li class="flex gap-3">
                <span><i class="fa-solid fa-phone text-white"></i></span>
                <span>+918090587632 +918052305632</span>
            </li>
            <li class="flex gap-3">
                <span><i class="fas fa-envelope text-white"></i></span>
                <span>admission@umagroups.com</span>
            </li>
            </ul>
        </div>

        <!-- Education Policy -->
        <div>
            <h3 class="text-lg font-semibold text-white mb-6">Policies</h3>
            <h4 class="text-sm font-semibold text-gray-200 mb-3">Education Policy</h4>
            <ul class="space-y-2 text-sm">
            <li>✔ Equal education for all students</li>
            <li>✔ Safe and inclusive school environment</li>
            <li>✔ Zero discrimination policy</li>
            <li>✔ Continuous teacher development</li>
            </ul>
        </div>

        <!-- Legal Policy -->
        <div>
            <h3 class="text-lg font-semibold text-white mb-6 invisible">Hidden</h3>
            <h4 class="text-sm font-semibold text-gray-200 mb-3">Legal Policy</h4>
            <p class="text-sm leading-relaxed">
            We respect the privacy of our students, parents, and visitors.
            Any personal information collected through this website or during
            the admission process is used only for official school purposes.
            <br><br>
            The school does not share personal information with third parties
            without prior consent, except when required by law.
            </p>
        </div>

        </div>

        <!-- Bottom Copyright -->
        <div class="mt-16 text-center text-sm text-gray-400 border-t border-white/20 pt-6">
        © <script>document.write(new Date().getFullYear());</script>
        All rights reserved | Managed by
        <a href="#" class="text-white hover:text-[#FFC300] font-medium">
            Coderbot Robotech And IT Pvt Ltd
        </a>
        </div>

    </div>
    </footer>



    <!-- Job Details Modal -->
    <div id="jobModal" class="modal">
        <div class="modal-content">
            <div class="p-6 border-b">
                <div class="flex justify-between items-start">
                    <div>
                        <h2 id="modalJobTitle" class="text-2xl font-bold text-gray-900 mb-2">Job Title</h2>
                        <div id="modalJobMeta" class="flex flex-wrap gap-3 text-sm text-gray-600"></div>
                    </div>
                    <button onclick="closeJobModal()" class="text-gray-400 hover:text-gray-600 text-2xl">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="p-6">
                <div id="modalJobContent" class="prose max-w-none">
                    <!-- Content will be inserted here -->
                </div>
            </div>
            <div class="p-6 border-t bg-gray-50 flex justify-end gap-3">
                <button onclick="closeJobModal()" class="text-gray-600 border border-gray-300 px-5 py-2.5 rounded-lg font-medium hover:bg-gray-100 transition">
                    Close
                </button>
                <button id="modalApplyBtn" onclick="closeJobModal(); openApplyModal('');" class="btn-dan text-white px-5 py-2.5 rounded-lg font-medium">
                    Apply Now
                </button>
            </div>
        </div>
    </div>

    <!-- Application Modal -->
    <div id="applyModal" class="modal">
        <div class="modal-content">
            <div class="p-6 border-b">
                <div class="flex justify-between items-start">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900 mb-1">Apply Now</h2>
                        <p id="applyJobTitle" class="text-gray-600">Position: High School Mathematics Teacher</p>
                    </div>
                    <button onclick="closeApplyModal()" class="text-gray-400 hover:text-gray-600 text-2xl">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <form id="applicationForm" class="p-6" onsubmit="submitApplication(event)">
                <div class="space-y-5">
                    <div class="grid md:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">First Name *</label>
                            <input type="text" required class="w-full border border-gray-300 rounded-lg px-4 py-3">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Last Name *</label>
                            <input type="text" required class="w-full border border-gray-300 rounded-lg px-4 py-3">
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                        <input type="email" required class="w-full border border-gray-300 rounded-lg px-4 py-3">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number *</label>
                        <input type="tel" required class="w-full border border-gray-300 rounded-lg px-4 py-3">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Resume/CV *</label>
                        <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-blue-500 transition cursor-pointer">
                            <i class="fas fa-cloud-upload-alt text-3xl text-gray-400 mb-2"></i>
                            <p class="text-gray-600">Drag and drop your file here or <span class="text-blue-600">browse</span></p>
                            <p class="text-sm text-gray-400 mt-1">PDF, DOC, DOCX (Max 5MB)</p>
                            <input type="file" class="hidden" accept=".pdf,.doc,.docx">
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Address *</label>
                        <textarea rows="2" class="w-full border border-gray-300 rounded-lg px-4 py-3" placeholder="Enter your full address..."></textarea>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Expected Salary *</label>
                        <input type="text" required class="w-full border border-gray-300 rounded-lg px-4 py-3" placeholder="e.g., Rs.50,000 - Rs.60,000">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">How did you hear about us?</label>
                        <select class="w-full border border-gray-300 rounded-lg px-4 py-3">
                            <option value="">Select an option</option>
                            <option value="website">School Website</option>
                            <option value="linkedin">LinkedIn</option>
                            <option value="indeed">Indeed</option>
                            <option value="referral">Employee Referral</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    
                    <div class="flex items-start">
                        <input type="checkbox" required class="mt-1 mr-3">
                        <label class="text-sm text-gray-600">I confirm that the information provided is accurate and I agree to the <a href="#" class="text-blue-600 hover:underline">privacy policy</a> and <a href="#" class="text-blue-600 hover:underline">terms of service</a>.</label>
                    </div>
                </div>
            </form>
            <div class="p-6 border-t bg-gray-50 flex justify-end gap-3">
                <button onclick="closeApplyModal()" class="text-gray-600 border border-gray-300 px-5 py-2.5 rounded-lg font-medium hover:bg-gray-100 transition">
                    Cancel
                </button>
                <button onclick="document.getElementById('applicationForm').requestSubmit()" class="btn-dan text-white px-5 py-2.5 rounded-lg font-medium">
                    Submit Application
                </button>
            </div>
        </div>
    </div>

    <!-- Success Modal -->
    <div id="successModal" class="modal">
        <div class="modal-content max-w-md text-center p-8">
            <div class="w-20 h-20 rounded-full bg-green-100 flex items-center justify-center mx-auto mb-6">
                <i class="fas fa-check text-green-500 text-4xl"></i>
            </div>
            <h2 class="text-2xl font-bold text-gray-900 mb-3">Application Submitted!</h2>
            <p class="text-gray-600 mb-6">Thank you for your interest in joining Greenwood Academy. We'll review your application and get back to you within 5-7 business days.</p>
            <button onclick="closeSuccessModal()" class="btn-dan text-white px-8 py-3 rounded-lg font-medium w-full">
                Close
            </button>
        </div>
    </div>

    <script src="career.js" defer></script>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
