# 🚩 BUBT CTF Restaurant
A vulnerable restaturant portal where participants need to exploit multiple flaws to retrieve the flag.

**Event:** [BUBT CyberSafe II (2025)](https://www.facebook.com/events/2004535227044271)  
**Category:** Web Exploitation  
**Difficulty:** Medium  
**Author:** [Humayan Kabir Rupok](https://github.com/hkrcse)

## Challenges

### Task 1: SQL Injection
**Description:** Welcome to the vulnerable restaurant website! 🍽️

Your mission is to identify and exploit an SQL Injection vulnerability in the system. This will allow you to bypass the login page and access restricted areas as an administrator.

**Tasks:**
1. What is the database name configured for this vulnerable site?
2. What is the admin username for this web application?
3. What is the admin password for this web application?

### Task 2: Cross Site Scripting (XSS)
**Description:** Welcome to the Cross Site Scripting (XSS) challenge!  
Your goal is to:
- Discover an input field or search box vulnerable to XSS.

**Tasks:**

1. What is the cookie flag of this website?

### Task 3: Parameter Tampering
**Description:** Welcome to the Parameter Tampering challenge! There is a Parameter Tampering vulnerability in the "Add to Cart" Functionality.

Your goal is to:.

- Use Burp Suite to intercept and modify the request data before it reaches the server. Capture a screenshot of the modified request.

### Task 4: Shell Upload
**Description:** In this task, you will explore how insecure file upload mechanisms can lead to full system compromise. Your goal is to:

1. Identify a vulnerable file upload form.
2. Upload a PHP Reverse Shell web shell (e.g., shell.php).
3. Download the shell from [here](https://github.com/pentestmonkey/php-reverse-shell/blob/master/php-reverse-shell.php).


**Tasks:**
1. What is the content of the hackedme.txt file located in the Desktop folder?


## 💻 Setup Instructions

### 1. Clone the Repository
```bash
git clone https://github.com/kurtnettle/bubt-ctf-restaurant.git
cd bubt-ctf-restaurant
```

### 2. Docker
```bash
docker-compose up -d
```

> [!NOTE]  
> If you don't have docker installed in your system then visit [here](https://docs.docker.com/compose/install)


### 3. Access the Website
- http://localhost:8000
