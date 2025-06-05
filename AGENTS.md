## \ud83c\udf3f Project Overview
This Laravel SaaS application is a **Cleaning Job Portal**. It is multi-tenant, meaning each office (company) can sign up, create jobs, and assign cleaners under their account.

The app has 3 user roles:
- **Super Admin** – Can manage all offices
- **Office Admin** – Can create jobs, assign cleaners, monitor work
- **Cleaner** – Views daily assigned jobs, updates status, uploads photos/videos

---

## \ud83c\udfbe Core Features

### 1. Authentication & Roles
- Tenancy support (Stancl/Laravel Tenancy)
- Super Admin login (global)
- Office registration/login (tenant)
- Cleaners assigned to tenant

### 2. Job Creation (Office Admin)
- Create Job with:
  - Job Title
  - Plot Number
  - Site Location
  - Date & Time
  - Job Type (Dropdown)
  - Instructions (optional)
- Assign one or more cleaners
- Set status: Pending / In Progress / Completed / Not Ready / Partially Done

### 3. Cleaner Dashboard
- View assigned jobs by date (calendar and list view)
- Filter by status
- Mark job as:
  - \u2705 Done
  - \u274c Not Ready
  - \u26a0\ufe0f Partially Done
- Leave comments
- Upload image/video proof
- See job instructions

### 4. Office Dashboard
- View job completion stats
- Track job progress per cleaner
- Calendar view for all jobs
- Job detail page with attachments/comments

### 5. Super Admin Dashboard
- List of offices
- See total number of jobs
- Monitor cleaner activity across tenants

---

## \ud83d\udceb Tech Suggestions
- Laravel 11
- Jetstream or Breeze for Auth
- Spatie Roles & Permissions
- Media uploads (Spatie MediaLibrary or native Laravel)
- Livewire/Alpine or Vue for dynamic UI
- FullCalendar.js for calendar views
- Blade UI for lightweight UIs

---

## \u2705 Visual Layouts (Rough Sketchs)

- `/dashboard` \u2192 Role-based (Cleaner vs Office)
- `/jobs/create` \u2192 Form with cleaner assign dropdown
- `/jobs/calendar` \u2192 Calendar with clickable job entries
- `/cleaner/tasks/today` \u2192 Card list or timeline of jobs
- `/jobs/{id}` \u2192 Detail view with updates, media, notes

---

## \ud83e\udde0 Notes
- System should be API-ready for mobile later.
- Ensure scalable architecture with policy controls.
- Clean separation between tenant environments (DB separation or scoped by tenant_id).
