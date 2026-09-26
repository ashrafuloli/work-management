You are a senior Laravel architect and full-stack Laravel developer.

I am building a production-ready SaaS application called:

"ResearchOS — Research Project Management SaaS"

The application is designed for academic research teams, R&D teams, laboratories, research organizations, and project-based scientific teams.

IMPORTANT:
Do NOT build the complete application yet.

Your current task is ONLY to establish a clean, scalable, production-ready Laravel project structure and frontend foundation.

==================================================
TECHNOLOGY STACK
==================================================

Backend:
- Laravel 12+
- PHP 8.3+
- MySQL 8+
- Redis
- Laravel Queue
- Laravel Scheduler

Frontend:
- Laravel Blade
- Bootstrap 5
- SCSS
- JavaScript
- jQuery
- AJAX
- Vite

Do NOT use:
- React
- Vue
- Next.js
- Inertia.js
- Livewire

The application must use traditional Laravel MVC + Blade with AJAX-driven interactions.

==================================================
CORE ARCHITECTURE
==================================================

Follow this architecture:

Browser
↓
Blade
↓
JavaScript / jQuery AJAX
↓
Route
↓
Controller
↓
Form Request
↓
Service
↓
Repository / Query Layer
↓
Eloquent Model
↓
MySQL

Controllers must remain thin.

Business logic must NOT be placed directly inside controllers.

Use:
- Form Requests for validation
- Services / Actions for business logic
- Policies for authorization
- API Resources when returning structured JSON
- Eloquent Models for database relationships
- Repositories / Query classes where query complexity justifies them
- Enums for fixed statuses/types
- Jobs for expensive/background operations
- Events/Listeners where appropriate

==================================================
PROJECT STRUCTURE
==================================================

Create and organize the project using this structure:

app/
├── Actions/
├── Console/
├── Enums/
├── Events/
├── Exceptions/
├── Helpers/
├── Http/
│   ├── Controllers/
│   │   ├── Auth/
│   │   ├── Dashboard/
│   │   ├── Project/
│   │   ├── Task/
│   │   ├── Milestone/
│   │   ├── Timeline/
│   │   ├── Calendar/
│   │   ├── Workstream/
│   │   ├── File/
│   │   ├── Team/
│   │   ├── Report/
│   │   ├── Risk/
│   │   ├── Notification/
│   │   ├── Search/
│   │   ├── Settings/
│   │   ├── Billing/
│   │   └── Developer/
│   │
│   ├── Middleware/
│   ├── Requests/
│   └── Resources/
│
├── Jobs/
├── Listeners/
├── Mail/
├── Models/
├── Notifications/
├── Policies/
├── Repositories/
├── Rules/
├── Services/
└── Support/

database/
├── factories/
├── migrations/
└── seeders/

resources/
├── js/
│   ├── app.js
│   ├── bootstrap.js
│   ├── components/
│   ├── helpers/
│   └── pages/
│       ├── auth/
│       ├── dashboard/
│       ├── projects/
│       ├── tasks/
│       ├── milestones/
│       ├── timeline/
│       ├── calendar/
│       ├── workstreams/
│       ├── files/
│       ├── team/
│       ├── reports/
│       ├── risks/
│       ├── settings/
│       └── billing/
│
├── scss/
│   ├── app.scss
│   ├── common/
│   │   ├── _variables.scss
│   │   ├── _mixins.scss
│   │   ├── _typography.scss
│   │   ├── _utilities.scss
│   │   └── _reset.scss
│   │
│   ├── components/
│   │   ├── _buttons.scss
│   │   ├── _forms.scss
│   │   ├── _tables.scss
│   │   ├── _badges.scss
│   │   ├── _modal.scss
│   │   ├── _drawer.scss
│   │   ├── _dropdown.scss
│   │   ├── _pagination.scss
│   │   ├── _toast.scss
│   │   └── _cards.scss
│   │
│   ├── layouts/
│   │   ├── _app-layout.scss
│   │   ├── _sidebar.scss
│   │   ├── _header.scss
│   │   └── _project-layout.scss
│   │
│   └── pages/
│       ├── _login.scss
│       ├── _register.scss
│       ├── _dashboard.scss
│       ├── _projects.scss
│       ├── _project-create.scss
│       ├── _project-overview.scss
│       ├── _tasks.scss
│       ├── _task-detail.scss
│       ├── _milestones.scss
│       ├── _timeline.scss
│       ├── _calendar.scss
│       ├── _workstreams.scss
│       ├── _files.scss
│       ├── _team.scss
│       ├── _reports.scss
│       ├── _risks.scss
│       ├── _settings.scss
│       └── _billing.scss
│
└── views/
├── layouts/
│   ├── app.blade.php
│   ├── auth.blade.php
│   └── partials/
│       ├── sidebar.blade.php
│       ├── header.blade.php
│       ├── breadcrumbs.blade.php
│       ├── notifications.blade.php
│       └── footer.blade.php
│
├── components/
│   ├── button.blade.php
│   ├── input.blade.php
│   ├── select.blade.php
│   ├── badge.blade.php
│   ├── avatar.blade.php
│   ├── modal.blade.php
│   ├── drawer.blade.php
│   ├── toast.blade.php
│   ├── empty-state.blade.php
│   ├── loading-state.blade.php
│   ├── status-badge.blade.php
│   └── priority-badge.blade.php
│
├── auth/
├── dashboard/
├── projects/
│   ├── index.blade.php
│   ├── create.blade.php
│   ├── show.blade.php
│   └── partials/
├── tasks/
│   └── partials/
├── milestones/
├── timeline/
├── calendar/
├── workstreams/
├── files/
├── team/
├── reports/
├── risks/
├── settings/
└── billing/

routes/
├── web.php
├── auth.php
└── api.php

==================================================
BLADE ARCHITECTURE
==================================================

Use Blade as the primary frontend rendering system.

All authenticated application pages must extend:

@extends('layouts.app')

Every page must define:

@section('title', 'Page Title')

Every page must have ONE unique parent class.

Examples:

<div class="dashboard-page">
</div>

<div class="projects-page">
</div>

<div class="project-overview-page">
</div>

<div class="tasks-page">
</div>

<div class="task-detail-page">
</div>

Page-specific styles must be nested inside that unique parent class.

==================================================
SCSS RULE
==================================================

Every page-specific SCSS file MUST start with:

@use "../common" as *;

This must always be the first SCSS import.

Example:

@use "../common" as *;

.projects-page {

    .page-header {
    }

    .projects-table {
    }

}

Do not create uncontrolled global styles.

Use reusable variables, mixins, spacing, typography, breakpoints, and component styles.

==================================================
GLOBAL LAYOUT
==================================================

Create a professional SaaS layout:

┌────────────────┬────────────────────────────────────┐
│                │ Header                             │
│    Sidebar     ├────────────────────────────────────┤
│                │ Breadcrumb / Page Header           │
│                │                                    │
│                │ Main Content                       │
│                │                                    │
└────────────────┴────────────────────────────────────┘

Sidebar navigation:

ResearchOS

Dashboard

WORKSPACE
- Projects
- My Tasks
- Calendar

COLLABORATION
- Team
- Reports

----------------

Notifications
Integrations
Settings

When inside a project, support project navigation:

Overview
Tasks
Timeline
Milestones
Workstreams
Files
Team
Reports
Risks & Issues
Activity

==================================================
AJAX ARCHITECTURE
==================================================

Use jQuery AJAX for dynamic interactions.

Configure global CSRF handling in app.js.

Use a standard AJAX response format:

SUCCESS:

{
"success": true,
"message": "Operation completed successfully.",
"data": {}
}

VALIDATION:

{
"success": false,
"message": "Validation failed.",
"errors": {}
}

ERROR:

{
"success": false,
"message": "Something went wrong."
}

Do not reload the entire page for normal CRUD operations.

Use AJAX for:

- Create
- Update
- Delete
- Status changes
- Filters
- Search
- Sorting
- Pagination where appropriate
- Assignments
- Comments
- Notifications
- File uploads
- Drawer content
- Modal content

Use Blade partials when HTML needs to be returned.

Use JSON when the frontend can update the DOM directly.

==================================================
GLOBAL AJAX COMPONENTS
==================================================

Create reusable JavaScript helpers for:

- AJAX requests
- Toast notifications
- Validation errors
- Loading states
- Modal loading
- Drawer loading
- Confirmation dialogs

Create reusable global UI components:

- Ajax Modal
- Ajax Drawer
- Toast
- Confirmation Dialog
- Loading Overlay

==================================================
AUTHENTICATION
==================================================

Prepare architecture for:

- Login
- Register
- Logout
- Forgot Password
- Reset Password
- Email Verification

Use Laravel authentication best practices.

==================================================
MULTI-TENANT WORKSPACE
==================================================

The application is workspace-based.

A user can belong to multiple workspaces.

Core models:

User
Workspace
WorkspaceMember
Role
Permission

All workspace-owned resources must contain:

workspace_id

Never trust workspace_id directly from the frontend.

Workspace access must be resolved server-side.

Prepare middleware:

- SetCurrentWorkspace
- EnsureWorkspaceMember

==================================================
RBAC
==================================================

Prepare role-based permissions.

Roles:

- Workspace Admin
- Project Manager
- Research Lead
- Researcher
- Contributor
- Viewer

Prepare:

- roles
- permissions
- role_permissions

Use Laravel Policies for authorization.

==================================================
CORE DOMAIN MODELS
==================================================

Prepare architecture for:

User
Workspace
WorkspaceMember
Role
Permission

Project
ProjectMember

Task
TaskDependency

Milestone
Workstream

File
FileVersion

Comment
Mention
Activity

Risk

Notification

Integration
ApiKey
Webhook

Plan
Subscription
Invoice
Payment

Do NOT create these models yet unless required for the foundation.

The current task is architecture setup, not full feature implementation.

==================================================
CODING STANDARDS
==================================================

Follow these rules strictly:

1. Controllers must remain thin.

2. Do not put business logic inside controllers.

3. Use Form Requests for validation.

4. Use Services for business logic.

5. Use Policies for authorization.

6. Use Eloquent relationships properly.

7. Use Enums for fixed statuses and types.

8. Use database transactions for multi-step operations.

9. Use SoftDeletes for important resources.

10. Prevent N+1 queries with eager loading.

11. Use pagination for large datasets.

12. Never use $request->all() for mass assignment.

13. Use $request->validated().

14. Never expose sensitive credentials.

15. Never trust workspace_id from the client.

16. Keep AJAX responses consistent.

17. Keep page-specific JS separate.

18. Keep page-specific SCSS separate.

19. Reuse Blade components.

20. Avoid duplicated markup.

21. Avoid unnecessary abstractions.

22. Do not over-engineer simple CRUD.

23. Use clear naming conventions.

24. Keep the code easy for another Laravel developer to understand.

==================================================
DATABASE RULES
==================================================

Use:

- Foreign keys
- Proper indexes
- Unique constraints where appropriate
- Timestamps
- Soft deletes where appropriate

Frequently queried fields should be indexed.

Workspace isolation must be considered when creating indexes.

==================================================
CURRENT TASK
==================================================

ONLY perform the project foundation setup.

Do NOT build:

- Dashboard
- Projects
- Tasks
- Billing
- Reports
- Any business feature

yet.

First:

1. Inspect the existing Laravel project.

2. Confirm the Laravel/PHP versions.

3. Configure the project for Blade + Bootstrap + SCSS + jQuery + AJAX + Vite.

4. Create the clean folder structure.

5. Configure Vite.

6. Create the global Blade layout.

7. Create sidebar partial.

8. Create header partial.

9. Create basic reusable Blade components.

10. Create SCSS architecture.

11. Create JavaScript architecture.

12. Configure global AJAX CSRF handling.

13. Create a basic dashboard placeholder route/page only to verify the architecture.

14. Make sure the application runs without errors.

15. Do not create unnecessary files.

==================================================
IMPORTANT DEVELOPMENT BEHAVIOR
==================================================

Do NOT modify unrelated Laravel files unnecessarily.

Before creating a file, check whether it already exists.

Do not duplicate existing Laravel functionality.

Use Laravel conventions wherever possible.

Keep the implementation simple and production-ready.

After completing the foundation:

- Show me the final folder structure.
- List every file created or modified.
- Explain what each important file does.
- Show the commands used.
- Show how to run the project.
- Mention any package that was installed.
- Mention any remaining setup required.

Then STOP.

Do not continue to the next feature automatically.

I will say "NEXT" when I want to move to the next development step.






NEXT

Now implement STEP 01 of the ResearchOS development roadmap.

Follow the existing architecture strictly.
Do not restructure existing folders unnecessarily.
Do not implement future features.

First explain what you are going to build, then implement it.
After implementation, show:
1. Files changed
2. Code changes
3. Commands to run
4. How to test
5. Expected result

Then STOP and wait for NEXT.
