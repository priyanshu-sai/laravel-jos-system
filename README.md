# Laravel JOS System

This is a Laravel 12 project designed to manage **Job Order Statements (JOS)** for contractors and conductors. It allows you to track job orders, calculate totals, manage payments, and export PDF summaries.

## Features

- Job Order CRUD with actual work & rate
- Contractor & Conductor management
- Monthly JOS generation (based on filters)
- Auto-calculation of total amount and balance
- Editable paid amount and remarks
- PDF Export of JOS
- Soft delete support
- Clean Bootstrap-based UI

##  Project Structure

- `app/Models`: All main models (JOS, JobOrder, Contractor, Conductor)
- `app/Http/Controllers`: Controller logic for CRUD and grouping
- `resources/views`: Blade views with layout includes
- `routes/web.php`: All named routes (no resource routes)

## Setup Instructions

1. Clone the repository:
   ```bash
   git clone https://github.com/priyanshu-sai/laravel-jos-system.git
