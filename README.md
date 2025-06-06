# 🧭 ELFv2-Laravel - E-Lost & Found (Laravel Version)

ELFv2-Laravel is a web platform designed to help users report and search for lost and found items within a university environment. It is a Laravel-based remake of a previous native PHP project called **E-Lost&Found**. The system provides a simple interface for users to upload found items and search missing ones, while giving admin (librarians) the ability to verify and manage item statuses.

## 🎯 Purpose

The goal of this project is to:

- Recreate the previous e-lost&found system using Laravel.
- Provide a centralized platform where users can report or search for lost items.
- Assign librarian roles as admins to verify the authenticity of the found items.
- Enhance Laravel backend development skills through practical application.

---

## ✨ Features

### 👤 User Features
- 🖼️ View missing items listed on the platform.
- 📤 Upload a found item to the system with details and images.

### 🛠️ Admin (Librarian) Features
- 📋 Review missing/found item reports submitted by users.
- 🔄 Change the status of an item:
  - `Pending`
  - `Ready to Collect`
  - `Collected`

---

## 🧰 Tech Stack

- ⚙️ **Backend:** Laravel (PHP Framework)
- 🎨 **Frontend:** Bootstrap
- 🗃️ **Database:** MySQL (default Laravel setup)
- 🧪 Built as a learning project following a Laravel backend tutorial on YouTube

---

## 🚀 Installation

> **Note:** These steps assume you have PHP, Composer, and a local server (like XAMPP or Laravel Sail) installed.

1. **Clone the Repository**
   ```bash
   git clone https://github.com/FarezFhmi/ELFv2-Laravel.git
   cd ELFv2-Laravel