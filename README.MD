# Setup Guide

## Prerequisites

Before you begin, make sure you have the following installed on your machine:

-   PHP
-   Composer
-   XAMPP

## Installation Steps

### 1. Clone the Repository

Clone the Laravel project repository from GitHub to your local machine using the following command:

```bash
git clone https://github.com/Amrakk/ecommerce-fahaha.git
```

### 2. Navigate to the xampp/htdocs directory

Once cloned, navigate to the xampp/htdocs directory:

```bash
cd /path/to/your/xampp/htdocs
```

Then, paste the `localbranch` folder into this directory.

### 3. Install Composer Dependencies

Before installing dependencies, you need to set up GitHub authentication token to avoid rate limiting issues. Run the following command in your terminal, replacing `<TOKEN>` with your GitHub token:

```bash
composer config --global github-oauth.github.com <TOKEN>
```

If you don't have a token yet, you can generate one [here](https://github.com/settings/tokens/new?scopes=repo).

Run Composer to install the project dependencies:

```bash
composer install
```

### 4. Open and Run XAMPP

Open XAMPP control panel and start Apache and MySQL servers.

### 5. Import SQL File

Import the SQL file provided with the project into your MySQL database using phpMyAdmin.
