# WORKMANAGEMENT — MASTER PROJECT CONTEXT & DEVELOPMENT INSTRUCTIONS

You are working on an existing Laravel SaaS application called:

WORKMANAGEMENT

Your job is to understand the existing project structure, preserve the existing UI/design system, and progressively convert the current static Blade-based UI into a production-ready multi-tenant SaaS application.

IMPORTANT:
Do NOT rebuild the entire project from scratch.
Do NOT replace existing working UI unnecessarily.
Do NOT introduce React, Vue, Next.js, Inertia.js, Livewire, Alpine.js, or another frontend framework.

The application must remain based on:

Laravel
PHP 8.3+
MySQL 8+
Redis
Laravel Queue
Laravel Scheduler
Blade
Bootstrap 5
SCSS
JavaScript
jQuery
AJAX
Vite

============================================================
1. PRODUCT OVERVIEW
   ============================================================

Product name:

WorkManagement

Product type:

Multi-tenant SaaS project and work management platform.

The product is designed for:

- Startups
- Product teams
- Software teams
- Research teams
- Marketing teams
- Operations teams
- Agencies
- General project-based teams

The product allows teams to:

- Create workspaces
- Manage members
- Create projects
- Manage tasks
- Manage milestones
- Manage workstreams
- Track project progress
- Collaborate through comments
- Manage files/documents
- Track activity
- Receive notifications
- View reports
- Manage roles and permissions
- Manage subscriptions
- Manage billing
- Manage workspace settings

The goal is to create a polished SaaS product similar in quality and usability to products such as:

- Linear
- Asana
- ClickUp
- Notion

But WorkManagement must have its own visual identity.

============================================================
2. CURRENT DEVELOPMENT STATUS
   ============================================================

The project currently has a substantial UI foundation.

Many pages already exist as Blade pages and routes.

The project is currently transitioning from:

STATIC UI

to:

REAL DATABASE-DRIVEN SAAS APPLICATION

Do not assume that an existing page is dynamically implemented just because the Blade page exists.

Always distinguish between:

1. UI/Page exists
2. Route exists
3. Database exists
4. Backend logic exists
5. AJAX interaction exists
6. Authorization exists
7. Production-ready functionality exists

============================================================
3. CURRENT PAGES
   ============================================================

LANDING / MARKETING

- Landing Page
- Pricing

AUTHENTICATION

- Login
- Register
- Forgot Password
- Reset Password
- Email Verification

MAIN APPLICATION

- Dashboard
- Projects
- Create Project
- Project Overview
- Project Tasks
- Project Milestones
- Project Timeline
- Project Calendar
- Project Workstreams
- Project Files
- Project Team
- Project Activity
- Project Reports
- Project Risks & Issues

GLOBAL PRODUCTIVITY

- Tasks
- Task Detail
- Time Tracking
- Calendar
- Workstreams
- Files
- Documents

TEAM

- Team
- Team Member Detail

COLLABORATION

- Activity
- Notifications
- Global Search

REPORTING

- Reports
- Risks & Issues

SETTINGS

- Settings
- Profile
- Roles & Permissions
- Workspace Settings
- Integrations
- API / Developer

BILLING

- Billing
- Subscription
- Checkout
- Payment Success

COMPONENTS

- Components Preview

============================================================
4. CURRENT UI STATUS
   ============================================================

The following areas already have UI/Blade work:

- Landing page
- Authentication pages
- Dashboard
- Projects
- Tasks
- Project pages
- Team
- Activity
- Notifications
- Search
- Reports
- Settings
- Billing
- Pricing

The landing page already includes:

- Header
- Desktop navigation
- Mobile navigation
- Hero
- Product dashboard preview
- Feature sections
- Workflow
- Solutions
- Stats
- Testimonial
- Pricing
- FAQ
- CTA
- Footer
- Pricing monthly/yearly toggle
- FAQ accordion
- Counter animation
- Scroll reveal
- Smooth scrolling

Do not unnecessarily redesign these pages.

Preserve the existing visual language unless there is a clear usability or architectural problem.

============================================================
5. FRONTEND ARCHITECTURE
   ============================================================

Frontend stack:

Blade
Bootstrap 5
SCSS
JavaScript
jQuery
AJAX

Do not use:

React
Vue
Next.js
Inertia
Livewire
Alpine.js

Use traditional Laravel MVC with AJAX-driven interactions.

Preferred request flow:

Browser
↓
Blade
↓
JavaScript / jQuery AJAX
↓
Laravel Route
↓
Controller
↓
Form Request
↓
Service
↓
Model / Repository if necessary
↓
Database

For complex operations:

Controller
↓
Form Request
↓
Service
↓
Model
↓
Database

Controllers should remain thin.

Business logic should NOT be placed directly inside controllers.

============================================================
6. BLADE CONVENTIONS
   ============================================================

Main application pages use:

@extends('layout.app')

@section('main')

    ...

@endsection

Authentication pages use:

@extends('layout.auth')

@section('title', 'Page Title')

@section('content')

    ...

@endsection

@push('script')

    ...

@endpush

Global layout:

@include('components.header')

@yield('main')

@include('components.footer')

Do not unnecessarily change this architecture.

============================================================
7. SCSS ARCHITECTURE
   ============================================================

Current SCSS architecture:

resources/scss/

common/
_variables.scss
_mixins.scss
_reset.scss
_utilities.scss
_index.scss

components/
_buttons.scss
_forms.scss
_cards.scss
_table.scss

layout/
_sidebar.scss
_header.scss
_content.scss
_footer.scss

pages/
dashboard.scss
projects.scss
project-overview.scss
tasks.scss
task-detail.scss
calendar.scss
workstreams.scss
files.scss
documents.scss
team-member.scss
activity.scss
notifications.scss
search.scss
reports.scss

pages/auth/
login.scss
register.scss
forgot-password.scss
reset-password.scss
verify-email.scss

app.scss

Use the existing SCSS architecture.

Each page should have its own unique parent wrapper.

Example:

.wm-dashboard-page {
...
}

.wm-projects-page {
...
}

.wm-login-page {
...
}

All page-specific selectors should be scoped under the page parent.

============================================================
8. VERY IMPORTANT SCSS RULE
   ============================================================

Use BEM-style naming:

.wm-project-card
.wm-project-card__title
.wm-project-card__meta
.wm-project-card__actions

BUT:

DO NOT use Sass parent selectors.

Never write:

.project-card {
&__title {}
&--featured {}
}

Instead write:

.project-card {
}

.project-card__title {
}

.project-card--featured {
}

Use complete selectors.

============================================================
9. DESIGN SYSTEM
   ============================================================

The existing brand colors include:

Primary:
#2563EB

Primary hover:
#1D4ED8

Primary light:
#EFF6FF

Primary soft:
#DBEAFE

Accent:
#10B981

Accent hover:
#059669

Accent light:
#ECFDF5

Cyan:
#06B6D4

Background:
#F8FAFC

Surface:
#FFFFFF

Text:
#374151

Dark text:
#111827

Secondary text:
#6B7280

Muted:
#9CA3AF

Border:
#E5E7EB

Success:
#10B981

Warning:
#F59E0B

Danger:
#EF4444

Info:
#0EA5E9

Purple:
#8B5CF6

Font:

Inter

Use the existing variables instead of hardcoding colors throughout the application.

============================================================
10. EXISTING SCSS COMMON FILES
    ============================================================

common/_index.scss should expose:

@forward "variables";
@forward "mixins";
@forward "reset";
@forward "utilities";

Page SCSS should generally use:

@use "../common" as *;

Auth page SCSS should use the correct relative path.

Make sure every variable used by the project actually exists.

For example:

$color-primary-soft

must be defined if it is being used.

Never silently invent a different variable name when fixing a Sass compilation issue.

============================================================
11. EXISTING MIXINS
    ============================================================

The project already uses utility mixins/functions such as:

alpha()
rem()
media()
flex-center
flex-between
flex-start
flex-end
flex-column
flex-wrap
absolute-center
absolute-full
truncate
line-clamp()
no-select
placeholder
appearance()
input-reset
button-reset
focus-ring
input-accent()
transition()
transform()
hover
card
scrollbar()
aspect-ratio()
visually-hidden

Reuse these instead of creating duplicate utilities unnecessarily.

============================================================
12. ICON SYSTEM
    ============================================================

Primary icon system:

Phosphor Icons.

Example:

<i class="ph ph-kanban"></i>
<i class="ph ph-check"></i>
<i class="ph ph-arrow-right"></i>

Do not introduce another icon library unless there is a specific requirement.

============================================================
13. EXISTING ROUTING
    ============================================================

Current routes include:

/
/components

/auth/login
/auth/register
/auth/forgot-password
/auth/reset-password
/auth/verify-email

/dashboard

/projects
/projects/create
/projects/{project}
/projects/{project}/tasks
/projects/{project}/milestones
/projects/{project}/timeline
/projects/{project}/calendar
/projects/{project}/workstreams
/projects/{project}/files
/projects/{project}/team
/projects/{project}/activity
/projects/{project}/reports
/projects/{project}/risks-issues

/time-tracking

/tasks
/tasks/{task}

/calendar
/workstreams
/files
/documents

/team
/team/{member}

/activity
/notifications
/search

/reports
/risks-issues

/settings
/settings/profile
/settings/roles-permissions
/settings/workspace
/settings/integrations
/settings/api

/billing
/billing/subscription
/billing/checkout
/billing/success

/pricing

There is currently also a placeholder logout route.

Do not assume these routes are production-ready.

============================================================
14. AUTHENTICATION — CURRENT STATE
    ============================================================

Authentication UI already exists:

Login
Register
Forgot Password
Reset Password
Verify Email

However, the real authentication backend still needs to be implemented properly.

Implement:

- Registration
- Login
- Logout
- Password reset
- Email verification
- Session handling
- Guest middleware
- Auth middleware
- Validation
- Rate limiting where appropriate
- Secure password handling

Use Laravel's native authentication mechanisms where appropriate instead of manually recreating secure authentication logic.

============================================================
15. MULTI-TENANCY / WORKSPACE MODEL
    ============================================================

This application is a workspace-based SaaS.

A user can belong to one or more workspaces.

Core relationship:

User
↓
Workspace
↓
Workspace Members
↓
Projects
↓
Tasks

Recommended initial database entities:

users
workspaces
workspace_members

Then:

projects
project_members

Then:

tasks
task_assignees
task_comments
task_labels

Then:

milestones
workstreams
files
documents
activities
notifications

Then:

plans
plan_features
subscriptions
payments
invoices

Design relationships carefully.

Avoid unnecessary complexity.

============================================================
16. ROLES
    ============================================================

Initial roles:

Owner
Admin
Project Manager
Member
Guest

Permissions should be explicit.

Examples:

Owner:
- Manage workspace
- Manage billing
- Manage members
- Manage roles
- Manage projects

Admin:
- Manage members
- Manage projects
- Manage workspace settings

Project Manager:
- Manage assigned projects
- Manage tasks
- Manage project members

Member:
- View assigned projects
- Manage assigned tasks
- Comment

Guest:
- Limited read access

Use Laravel Policies / Gates / authorization mechanisms.

Do not rely only on hiding UI buttons for security.

============================================================
17. SUBSCRIPTION SYSTEM
    ============================================================

The application is a SaaS product that sells subscriptions.

Initial plans:

Starter
Professional
Enterprise

The current landing page contains:

Starter:
$0

Professional:
$12/month
$9.60/month when billed yearly

Enterprise:
Custom pricing

Do not hardcode these permanently into Blade.

Create database-driven plans.

Suggested entities:

plans
plan_features
subscriptions
payments
invoices

Relationship:

Workspace
↓
Subscription
↓
Plan

Plans should support:

- Name
- Slug
- Description
- Monthly price
- Yearly price
- Member limit
- Project limit
- Feature limits
- Status

The landing page pricing should eventually read from the database.

============================================================
18. DEVELOPMENT ROADMAP
    ============================================================

Follow this exact high-level roadmap.

PHASE 01
Database Foundation

PHASE 02
Authentication

PHASE 03
Workspace / Organization

PHASE 04
Workspace Members

PHASE 05
Roles & Permissions

PHASE 06
Subscription Plans

PHASE 07
Workspace Subscription

PHASE 08
Dashboard

PHASE 09
Projects

PHASE 10
Project Members

PHASE 11
Tasks

PHASE 12
Task Comments

PHASE 13
Milestones

PHASE 14
Workstreams

PHASE 15
Calendar

PHASE 16
Timeline / Gantt

PHASE 17
Files

PHASE 18
Documents

PHASE 19
Activity Logs

PHASE 20
Notifications

PHASE 21
Reports

PHASE 22
Settings

PHASE 23
Billing

PHASE 24
Payment Gateway

PHASE 25
Dynamic Landing Page

PHASE 26
SaaS Admin Panel

PHASE 27
Security / Optimization / Production

============================================================
19. DATABASE DEVELOPMENT ORDER
    ============================================================

Do not create every table randomly.

Prefer this dependency order:

users
↓
workspaces
↓
workspace_members
↓
roles / permissions
↓
plans
↓
subscriptions
↓
projects
↓
project_members
↓
tasks
↓
task_assignees
↓
task_comments
↓
milestones
↓
workstreams
↓
files
↓
documents
↓
activities
↓
notifications
↓
reports
↓
payments
↓
invoices

Use proper:

- Foreign keys
- Indexes
- Unique constraints
- Cascading rules
- Nullable fields
- Timestamps

Avoid over-normalizing simple data.

============================================================
20. SERVICE LAYER
    ============================================================

Use Services for business logic.

Example:

app/Services/
Auth/
Workspace/
Project/
Task/
Billing/
Subscription/
Notification/

Example:

ProjectService

should handle:

- Create project
- Update project
- Delete project
- Add members
- Remove members
- Update project status

Controllers should mainly:

- Receive request
- Authorize
- Validate
- Call service
- Return response

============================================================
21. FORM REQUESTS
    ============================================================

Use Form Requests for validation.

Example:

app/Http/Requests/

Auth/
Workspace/
Project/
Task/
Billing/

Never put large validation arrays directly inside controllers when a Form Request is appropriate.

============================================================
22. AJAX CONVENTION
    ============================================================

Use jQuery AJAX.

Example flow:

Blade form
↓
jQuery submit
↓
AJAX
↓
Laravel route
↓
Controller
↓
Service
↓
JSON response
↓
Update UI

Use consistent JSON responses.

Example:

{
"success": true,
"message": "Project created successfully.",
"data": {}
}

Validation response:

{
"success": false,
"message": "Please correct the highlighted fields.",
"errors": {}
}

Do not reload the whole page when an AJAX interaction can update the UI cleanly.

============================================================
23. SECURITY REQUIREMENTS
    ============================================================

Security is critical.

Implement:

- CSRF
- Authentication middleware
- Authorization
- Policies
- Form Request validation
- Rate limiting
- Secure password hashing
- Secure file uploads
- MIME validation
- File size limits
- Prevent unauthorized workspace access
- Prevent IDOR
- Prevent unauthorized project access
- Escape output properly
- Avoid raw SQL unless necessary
- Avoid mass assignment vulnerabilities
- Validate ownership/workspace relationships

Never trust IDs supplied by the browser.

Always verify:

user → workspace → project → task

ownership/access chain.

============================================================
24. MULTI-TENANT SECURITY RULE
    ============================================================

This is extremely important.

A user from Workspace A must NEVER be able to access:

Workspace B
Workspace B projects
Workspace B tasks
Workspace B files
Workspace B members
Workspace B reports

simply by changing an ID in the URL or AJAX request.

Always scope queries to the authenticated user's workspace.

Example concept:

User
↓
Current Workspace
↓
Project belongs to Current Workspace
↓
Task belongs to Project

Never blindly:

Project::find($id)

when workspace isolation is required.

============================================================
25. DASHBOARD
    ============================================================

Dashboard should eventually show real database information:

- Active projects
- Completed projects
- Open tasks
- Completed tasks
- Overdue tasks
- Team members
- Project progress
- Recent activity
- Upcoming deadlines
- Workload
- Notifications

Avoid calculating everything directly inside Blade.

Use a DashboardService or equivalent.

============================================================
26. PROJECT MANAGEMENT
    ============================================================

Projects should support:

- Name
- Description
- Status
- Priority
- Start date
- Due date
- Owner
- Members
- Progress
- Health
- Tasks
- Milestones
- Workstreams
- Files
- Activity

Project statuses could include:

Planning
Active
On Hold
Completed
Archived

Use configurable values where appropriate.

============================================================
27. TASK MANAGEMENT
    ============================================================

Tasks should support:

- Title
- Description
- Status
- Priority
- Assignee
- Due date
- Start date
- Project
- Milestone
- Labels
- Comments
- Attachments
- Dependencies
- Activity

Suggested statuses:

Todo
In Progress
Review
Done

Do not overcomplicate the first version.

============================================================
28. LANDING PAGE
    ============================================================

The current landing page is primarily static.

Eventually make these database-driven:

- Pricing
- Features
- FAQs
- Testimonials
- Trusted companies
- Marketing statistics where appropriate

However:

DO NOT make the landing page dynamic before the underlying subscription system is stable.

Correct dependency:

Plans
↓
Subscriptions
↓
Billing
↓
Landing pricing

============================================================
29. BILLING
    ============================================================

Billing should eventually support:

- Current plan
- Upgrade
- Downgrade
- Monthly subscription
- Yearly subscription
- Payment history
- Invoices
- Subscription status
- Renewal date
- Cancellation
- Payment success
- Payment failure

Payment gateway integration should be implemented only after the internal subscription model is correct.

============================================================
30. ADMIN PANEL
    ============================================================

Eventually create a SaaS admin panel.

Admin should be able to manage:

- Users
- Workspaces
- Plans
- Plan features
- Subscriptions
- Payments
- Invoices
- FAQs
- Testimonials
- Landing page content
- System settings
- Audit logs

Do not build this before the core SaaS functionality is stable.

============================================================
31. ERROR HANDLING
    ============================================================

Use consistent error handling.

For AJAX:

Return JSON.

For normal requests:

Use Laravel validation/session handling.

Do not expose:

- SQL errors
- Stack traces
- Sensitive system information

to end users in production.

============================================================
32. CODE QUALITY
    ============================================================

Write code as a senior Laravel engineer.

Priorities:

1. Correctness
2. Security
3. Maintainability
4. Scalability
5. Readability
6. Performance

Avoid:

- Giant controllers
- Giant Blade files with business logic
- Duplicate queries
- Duplicate CSS
- Duplicate JavaScript
- Inline CSS
- Inline complex JS
- Hardcoded production data
- Random helper functions
- Unnecessary abstractions

Do not over-engineer simple CRUD.

============================================================
33. EXISTING CODE RULE
    ============================================================

Before changing anything:

1. Inspect the existing file.
2. Understand the current architecture.
3. Reuse existing components.
4. Reuse existing SCSS variables.
5. Reuse existing mixins.
6. Reuse existing layout.
7. Reuse existing routes when possible.
8. Check related files before making changes.

Never overwrite an existing file blindly.

Never delete working functionality without a reason.

============================================================
34. IMPORTANT CURRENT ISSUES TO WATCH
    ============================================================

There may be Sass variables referenced but not defined.

Example:

$color-accent-dark

If you find:

Undefined variable "$color-accent-dark"

do not randomly replace the variable everywhere.

First inspect:

resources/scss/common/_variables.scss

Then determine whether the intended variable is:

$color-accent
$color-accent-hover
$color-success-dark

or whether a new semantic variable should be added.

Make the smallest correct global fix.

Also watch for:

$color-primary-soft

which should exist if used by the UI.

============================================================
35. RESPONSIVE DESIGN
    ============================================================

Every page must be responsive.

Breakpoints:

576px
768px
992px
1200px
1440px

Desktop
Tablet
Mobile

must all be considered.

Do not simply shrink desktop UI.

Mobile layouts should be intentionally designed.

============================================================
36. UI QUALITY
    ============================================================

The application should feel like a real premium SaaS product.

Visual characteristics:

- Clean
- Modern
- Professional
- Spacious
- Strong typography
- Subtle borders
- Soft shadows
- Consistent radius
- Clear hierarchy
- Accessible interaction states
- Fast visual feedback

Avoid excessive gradients.

Avoid excessive shadows.

Avoid overly colorful dashboards.

Use blue as the primary action color.

Use green/orange/red/purple only for semantic purposes.

============================================================
37. ACCESSIBILITY
    ============================================================

Use:

- Semantic HTML
- Proper labels
- ARIA where needed
- Keyboard navigation
- Visible focus states
- Accessible buttons
- Accessible form errors
- Good contrast
- Meaningful icon labels

Do not use icons as the only indication of an important action.

============================================================
38. PERFORMANCE
    ============================================================

Keep the application performant.

Use:

- Eager loading when needed
- Pagination
- Query optimization
- Database indexes
- Caching where appropriate
- Queues for expensive jobs
- Lazy loading where appropriate
- Optimized assets

Do not query the database repeatedly inside Blade loops.

Avoid N+1 queries.

============================================================
39. TESTING
    ============================================================

As functionality is implemented, create appropriate tests.

Important test areas:

Authentication
Authorization
Workspace isolation
Project permissions
Task permissions
Subscription access
Billing
Critical CRUD operations

Especially test:

User A cannot access Workspace B.

============================================================
40. DEVELOPMENT WORKFLOW
    ============================================================

DO NOT attempt to build the whole application in one response.

Work in phases.

For every phase:

STEP 1
Explain what will be built.

STEP 2
Inspect existing related files.

STEP 3
List files that will be created/changed.

STEP 4
Implement the feature.

STEP 5
Explain database changes.

STEP 6
Explain routes.

STEP 7
Explain models/relationships.

STEP 8
Explain controllers/services/requests.

STEP 9
Explain Blade/AJAX/SCSS changes.

STEP 10
Provide commands to run.

STEP 11
Provide testing instructions.

STEP 12
Provide expected result.

Then STOP.

Do not automatically continue to the next phase.

============================================================
41. CURRENT TASK
    ============================================================

Before writing any code, perform a complete audit of the current project.

Inspect:

- composer.json
- package.json
- routes/web.php
- app/
- resources/views/
- resources/scss/
- resources/js/
- database/migrations/
- database/seeders/
- database/factories/
- config/
- existing models
- existing controllers
- existing services
- existing Form Requests
- existing middleware
- existing policies
- existing Blade layouts
- existing components

Determine:

1. What already exists.
2. What is only UI.
3. What is partially implemented.
4. What is missing.
5. What needs to be corrected.
6. What can be reused.
7. What should not be changed.

Do not modify files during the audit unless a compilation/runtime error must be fixed to continue inspection.

After the audit, produce:

A. Current Architecture
B. Existing Features
C. Missing Features
D. Database Status
E. Authentication Status
F. Authorization Status
G. Subscription/Billing Status
H. Frontend Status
I. Recommended Development Order
J. First Implementation Phase

Then STOP and wait for approval.

============================================================
42. FINAL DEVELOPMENT PRINCIPLE
    ============================================================

Build WorkManagement as a real production SaaS.

Do not treat it as a collection of static HTML pages.

The final architecture should look approximately like:

User
↓
Authentication
↓
Workspace
↓
Membership / Role
↓
Subscription
↓
Projects
↓
Tasks
↓
Collaboration
↓
Files / Documents
↓
Reports
↓
Notifications
↓
Billing
↓
SaaS Admin

Every feature must respect:

Authentication
Authorization
Workspace isolation
Validation
Database integrity
Security
Performance
Maintainability

IMPORTANT:

Do not rush.

Do not implement everything at once.

First understand the existing project.

Then audit.

Then recommend the first phase.

Then implement one phase at a time.



WORKMANAGEMENT PROJECT AUDIT

1. Current Laravel Version
2. Current PHP Version
3. Existing Database
4. Existing Models
5. Existing Controllers
6. Existing Routes
7. Existing Blade Pages
8. Existing SCSS Architecture
9. Existing JS Architecture
10. Authentication Status
11. Workspace Status
12. Authorization Status
13. Subscription Status
14. Billing Status
15. Missing Architecture
16. Problems Found
17. Recommended Roadmap

FIRST PHASE:
Authentication + User Foundation

DATABASE
↓
AUTH
↓
WORKSPACE
↓
MEMBERS
↓
ROLES & PERMISSIONS
↓
PLANS
↓
SUBSCRIPTION
↓
PROJECTS
↓
TASKS
↓
COLLABORATION
↓
DASHBOARD
↓
CALENDAR / TIMELINE
↓
FILES / DOCUMENTS
↓
REPORTS
↓
NOTIFICATIONS
↓
SETTINGS
↓
BILLING / PAYMENT
↓
DYNAMIC LANDING
↓
ADMIN PANEL
↓
PRODUCTION
