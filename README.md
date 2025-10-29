<<<<<<< HEAD
# Discover Brussels - Website Project

An attractive and responsive website about Brussels, Belgium, created for the North Intensive Program (NIP) 2025.

##  About This Project

This website showcases Brussels' rich history, stunning landmarks, world-class museums, European institutions, and sustainability initiatives. It was developed as part of a cultural and educational exchange between Mwenge Catholic University (MWECAU) in Tanzania and Erasmus University College Brussels in Belgium.

##  Technologies Used

- **Frontend**: HTML5, CSS3, Bootstrap 5, JavaScript, jQuery
- **Backend**: PHP 7.4+
- **Database**: MySQL
- **Server**: XAMPP (Apache, MySQL, PHP)
- **Libraries**: 
  - AOS (Animate On Scroll)
  - Lightbox2 for image galleries
  - Font Awesome icons
  - Google Fonts

##  Project Structure

```
brussels-website/
├── assets/
│   ├── css/
│   │   └── style.css
│   ├── js/
│   │   └── script.js
│   └── images/
├── includes/
│   ├── config.php
│   ├── header.php
│   └── footer.php
├── pages/
│   ├── history.php
│   ├── landmarks.php
│   ├── museums.php
│   ├── nip_program.php
│   ├── sustainability.php
│   ├── democracy.php
│   └── contact.php
├── index.php
├── database.sql
└── README.md
```

##  XAMPP Setup Instructions

### Step 1: Install XAMPP
1. Download XAMPP from [https://www.apachefriends.org](https://www.apachefriends.org)
2. Install XAMPP on your computer
3. Start **Apache** and **MySQL** services from the XAMPP Control Panel

### Step 2: Setup the Database
1. Open your web browser and go to `http://localhost/phpmyadmin`
2. Click on "Import" tab
3. Choose the `database.sql` file from this project
4. Click "Go" to import the database
5. The database `brussels_website` will be created with all necessary tables and sample data

### Step 3: Configure the Project
1. Copy the entire project folder to XAMPP's `htdocs` directory:
   - Windows: `C:\xampp\htdocs\brussels-website`
   - Mac: `/Applications/XAMPP/htdocs/brussels-website`
   - Linux: `/opt/lampp/htdocs/brussels-website`

2. Verify database configuration in `includes/config.php`:
   ```php
   define('DB_HOST', 'localhost');
   define('DB_USER', 'root');
   define('DB_PASS', '');  // Default XAMPP MySQL password is empty
   define('DB_NAME', 'brussels_website');
   ```

### Step 4: Access the Website
1. Open your web browser
2. Navigate to: `http://localhost/brussels-website` or `http://localhost/index.php`
3. The website should load with all features working!

##  Database Tables

The website uses the following MySQL tables:

- **landmarks**: Information about Brussels' famous landmarks
- **gallery**: Photo gallery with images and descriptions
- **comments**: Visitor feedback and contact form submissions
- **visitor_stats**: Page visit tracking statistics

##  Features

### 1. Home Page
- Stunning hero section with Grand Place image
- Overview of Brussels and NIP Program
- Statistics section
- Photo gallery preview

### 2. History & Culture
- Belgian historical timeline
- Royal family information
- Famous Belgian artists (Magritte, Bruegel)
- Brussels City Walls story

### 3. Landmarks
- Detailed information about 8 major landmarks
- Interactive image galleries
- Visit information and locations
- Sablon District and more attractions

### 4. Museums & Arts
- Royal Museums of Fine Arts
- Magritte Museum
- AfricaMuseum in Tervuren
- NIP Program art experiences
- Belgian Comic Strip Center and more

### 5. NIP Program
- Complete 9-day program schedule
- Daily activities and reflections
- Participants list
- Learning outcomes and acknowledgments

### 6. Sustainability
- Sonian Forest conservation
- BIGH Urban Farm innovation
- Brussels' green initiatives
- Lessons for Tanzania

### 7. Democracy & Governance
- European Parliament visit
- Belgian Federal Parliament
- Comparison of Belgian and Tanzanian democracy
- EU institutions overview

### 8. Contact Page
- Contact form with database storage
- FAQ section
- Tourist information
- Visit planning tips

##  Design Features

### Color Scheme
Inspired by the Belgian flag:
- Primary Black: #1a1a1a
- Primary Gold: #d4af37
- Primary Red: #c8102e
- Accent Gold: #ffd700

### Responsive Design
- Fully responsive layout using Bootstrap 5
- Mobile-friendly navigation
- Optimized images and content for all screen sizes

### Animations
- AOS (Animate On Scroll) for smooth entrance animations
- Hover effects on cards and buttons
- Smooth scrolling navigation

### Interactive Features
- Lightbox image gallery
- Smooth scroll-to-top button
- Interactive navigation with active states
- Form validation

##  Content Sources

All content is based on:
- North Intensive Program (NIP) Report 2025
- Official Brussels tourism information
- European Union institutions documentation
- Personal experiences of MWECAU students in Brussels

##  Credits

### Development Team
This website was created by students from Mwenge Catholic University (MWECAU) as part of the North Intensive Program 2025.

### Participants
- **Teachers/Coordinators**: Dr. Gileard Minja, Sir Denis Mbilinyi, Prof. Stefan Moens
- **Students**: 10 students from BScCS and BAGEN programs

### Acknowledgments
- Erasmus University College Brussels
- Prof. Stefan Moens for guidance and storytelling
- Mwenge Catholic University (MWECAU)
- All Belgian and Tanzanian participants

##  License

This project was created for educational purposes as part of the North Intensive Program (NIP) 2025.

##  Browser Support

- Chrome (recommended)
- Firefox
- Safari
- Edge
- Opera

##  Contact

For questions or feedback about this project, please use the contact form on the website.

---

**Asante sana - Thank you so much!**

*Developed with ❤️ for the North Intensive Program 2025 by FaustineEmmanuel*
*Brussels, Belgium | October 11-19, 2025*
=======
# brussels-website
>>>>>>> 6808ae0e6b133b6ee884fe041a174e04bc2b938e
