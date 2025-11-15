# Timetable Management System

A comprehensive web-based timetable management system built with PHP and MySQL. This application allows admins, teachers, and students to manage class schedules, exams, and academic information efficiently.

## Features

- **Admin Dashboard**: Complete control over classes, teachers, students, subjects, exams, and timetables
- **Teacher Portal**: View assigned subjects, manage classes, and access student information
- **Student Portal**: View personal timetable, exam schedules, and class details
- **Class Management**: Add, edit, and manage classes (BCA and BBA programs)
- **Subject Management**: Manage subjects and assign teachers
- **Exam Scheduling**: Create and manage exam schedules with dates and times
- **Timetable Generation**: Create optimized timetables for multiple classes
- **User Authentication**: Secure login system for all user roles
- **Responsive Design**: User-friendly interface with Bootstrap framework
- **Student Complaints**: Students can submit complaints and receive responses

## Project Structure

```
timetable/
├── admin/               # Admin panel files
├── teacher/             # Teacher portal files
├── assets/              # CSS, JavaScript, and image files
├── index.php            # Student home page
├── login.php            # Login page
├── register.php         # Student registration
├── profile.php          # User profile management
├── time-table.php       # View timetable
├── exam.php             # View exam schedule
├── complaint.php        # Submit complaints
├── dbcon.php            # Database connection
└── timetable.sql        # Database schema and sample data
```

## Requirements

- PHP 8.2 or higher
- MySQL/MariaDB 10.4 or higher
- Apache Web Server
- jQuery 3.6.0
- Bootstrap 4.x

## Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/AlfinMathew232/TimeTableManagement.git
   cd timetable
   ```

2. **Create Database**
   - Open phpMyAdmin
   - Create a new database named `timetable`
   - Import the `timetable.sql` file

3. **Update Database Connection**
   - Edit `dbcon.php` and update your database credentials if needed:
   ```php
   $host = "127.0.0.1";
   $user = "root";
   $pass = "";
   $db = "timetable";
   ```

4. **Set Up Web Server**
   - Place the project in your web root (typically `htdocs` for XAMPP)
   - Access via `http://localhost/timetable`

## Login Details

### Admin Login
- **Email**: `admin@admin.com`
- **Password**: `admin`
- **Access**: Full system control, manage all entities

### Teacher Login
- **Email**: `teacher@t.com`
- **Password**: `123`
- **Access**: View assigned subjects, manage classes, view students

### Student Login
- **Email**: `student@student.com`
- **Password**: `123`
- **Class**: BCA 1
- **Registration Number**: 111111111111
- **Access**: View timetable, exam schedule, submit complaints

## Sample Test Accounts

### Additional Teacher Accounts
| Email | Password |
|-------|----------|
| teacher3@tc.com | 123 |
| jithu@123.com | 123 |

### Additional Student Accounts
| Email | Password | Class |
|-------|----------|-------|
| student@bca3.com | 123 | BCA 3 |
| student2@gmail.com | 123 | BCA 2 |
| sam@123.com | 123 | BBA 1 |

## Database Tables

The system includes the following main tables:

- `tbl_admin` - Admin user accounts
- `tbl_teacher` - Teacher information
- `tbl_student` - Student information
- `tbl_class` - Class details (BCA 1-3, BBA 1-3)
- `tbl_subject` - Subject information
- `tbl_exam` - Exam schedules
- `tbl_timetable` - Class timetables
- `tbl_day` - Days of the week
- `tbl_hour` - Class hours
- `tbl_message` - Student complaints and responses

## Usage

### For Admins
1. Login with admin credentials
2. Navigate to admin dashboard at `/admin/index.php`
3. Manage classes, teachers, students, subjects, exams, and timetables
4. Respond to student complaints

### For Teachers
1. Login with teacher credentials
2. Access teacher portal at `/teacher/index.php`
3. View assigned subjects and classes
4. Manage student information
5. View timetables and exam schedules

### For Students
1. Login or register with student credentials
2. View personal timetable on homepage
3. Check exam schedule in the exam section
4. Submit complaints if needed
5. View profile information

## Key Features

- **Responsive Dashboard**: Works on desktop, tablet, and mobile devices
- **Real-time Timetable View**: Students can see their class schedule immediately
- **Exam Schedule Management**: Organize exams with dates and times
- **Complaint System**: Two-way communication between students and admin
- **User-Friendly Interface**: Bootstrap-based responsive design
- **Data Validation**: Form validation for all user inputs
- **Session Management**: Secure user sessions with role-based access control

## Security Notes

⚠️ **Important**: This is a sample application. For production use:
- Change all default passwords
- Implement password hashing (use `password_hash()` and `password_verify()`)
- Add SQL injection prevention (use prepared statements)
- Enable HTTPS
- Implement CSRF protection tokens
- Add proper input validation and sanitization

## Technologies Used

- **Backend**: PHP 8.2
- **Database**: MySQL/MariaDB
- **Frontend**: HTML5, CSS3, JavaScript
- **Framework**: Bootstrap 4
- **Libraries**: jQuery, DataTables, Summernote, Select2, FullCalendar

## File Organization

- `admin/` - Administrative panel with full CRUD operations
- `teacher/` - Teacher-specific functionality
- `assets/` - Stylesheets, JavaScript files, and images
- `assets/plugins/` - External libraries and plugins
- `assets/img/` - Images and icons

## Support

For issues or questions, please contact the project owner or create an issue in the GitHub repository.

## License

This project is provided as-is for educational purposes.

## Author

**Alfin Mathew**  
GitHub: [AlfinMathew232](https://github.com/AlfinMathew232)

---

**Last Updated**: November 2025
