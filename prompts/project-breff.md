# RESEARCH PROJECT MANAGEMENT SaaS

## Product Brief + Complete Page List + UI Design Instructions

---

# 1. PRODUCT OVERVIEW

Design and define a modern **Research Project Management SaaS** for academic research teams, R&D teams, laboratories, research organizations, and project-based scientific teams.

The platform is primarily a **Project Management System**, not a research publication or literature management platform.

The main goal is to help research and R&D teams plan, organize, execute, monitor, and report on projects from a single workspace.

The product should combine the best characteristics of:

* Linear
* Notion
* Asana
* ClickUp

with a specialized **Research / R&D Project Management** information architecture.

The product should feel like a real production-ready SaaS application that could be implemented using React / Next.js.

---

# 2. CORE PRODUCT FOCUS

The primary workflow is:

```text
Workspace
    ↓
Projects
    ↓
Project Planning
    ↓
Tasks
    ↓
Milestones
    ↓
Timeline
    ↓
Workstreams
    ↓
Files & Documents
    ↓
Team Collaboration
    ↓
Risks & Issues
    ↓
Reports & Analytics
```

The product should focus on:

* Project management
* Task management
* Milestones
* Project timelines
* Calendar
* Workstreams
* Team collaboration
* Files and documents
* Project reporting
* Risks and issues
* Dependencies
* Activity tracking
* Notifications
* Permissions
* Workspace management
* Subscription management

---

# 3. IMPORTANT SCOPE DECISIONS

This product is NOT a:

* Literature management system
* Publication management system
* Citation manager
* Research paper library
* DOI management platform
* ORCID management system
* PubMed platform

Therefore, DO NOT create dedicated pages for:

* Literature
* Publications
* Publication Detail
* Literature Detail
* DOI
* ORCID
* PubMed
* Citation Management

Research context should be communicated through project structure, terminology, workflows, milestones, workstreams, files, tasks, and project metadata.

---

# 4. FILE MANAGEMENT DECISION

Do NOT create a separate File Detail page.

Do NOT create a separate Version History page.

Instead, use one:

**Files & Documents** page.

When a user selects a file, show a side panel, drawer, modal, or split-view containing:

* File preview
* File metadata
* Related project
* Related task
* Comments
* Activity
* Version history

This keeps the product architecture simple.

---

# 5. SUBSCRIPTION SYSTEM

This is a SaaS product and must include a complete subscription system.

Subscription features include:

* Pricing
* Free plan
* Professional plan
* Team plan
* Enterprise plan
* Monthly billing
* Yearly billing
* Upgrade
* Downgrade
* Current subscription
* Usage tracking
* Project limits
* Team member limits
* Storage limits
* Payment method
* Invoices
* Billing history
* Cancel subscription
* Resume subscription
* Checkout
* Payment success
* Payment failure

Example subscription limits:

```text
                    Free    Professional    Team    Enterprise

Projects              1          10           ∞        Custom
Team Members          3          25          100       Custom
Storage              1GB        50GB         500GB     Custom
Workstreams           3           ∞            ∞        Custom
Reports              Basic      Advanced    Advanced   Custom
Permissions          Basic      Advanced    Advanced   Custom
Integrations           2           5            ∞        Custom
```

When a user reaches a plan limit, show an upgrade prompt rather than allowing unlimited usage.

---

# 6. TARGET USERS

Primary users:

* Research Project Managers
* Principal Investigators
* Research Leads
* Researchers
* R&D Teams
* Lab Managers
* Data Scientists
* Research Assistants
* Students
* Collaborators
* Organization Administrators

---

# 7. DESIGN DIRECTION

Create a:

* High-fidelity SaaS dashboard UI
* Modern professional research platform
* Clean minimal interface
* Research-focused visual identity
* Desktop-first layout
* Production-ready UI
* Data-rich but uncluttered interface
* Subtle borders
* Minimal shadows
* Clean typography
* Professional academic/R&D visual language

Visual inspiration:

**Linear + Notion + Asana + Research Management**

But the interface must have its own unique Research Project Management identity.

Avoid:

* Generic admin dashboard
* Generic CRM UI
* Generic Trello clone
* Excessive gradients
* Excessive glassmorphism
* Excessive cards
* Dribbble-style unrealistic UI
* Decorative laboratory imagery
* Overly colorful interfaces

The product should communicate research through:

**Information architecture + data + workflow**, not decorative scientific graphics.

---

# 8. GLOBAL UI SYSTEM

Every page must use the same design system.

Maintain consistency across:

* Sidebar
* Top header
* Typography
* Colors
* Buttons
* Inputs
* Dropdowns
* Tables
* Cards
* Status badges
* Priority badges
* Avatars
* Icons
* Spacing
* Border radius
* Modal
* Drawer
* Tabs
* Breadcrumbs

Once a component is established, reuse it across all future pages.

Do not randomly change the visual language between pages.

---

# 9. DEFAULT DESKTOP LAYOUT

Use a realistic desktop SaaS application viewport.

General structure:

```text
┌──────────────┬──────────────────────────────────────────────┐
│              │ Top Header                                   │
│   Sidebar    ├──────────────────────────────────────────────┤
│              │ Breadcrumb / Page Header                     │
│              │                                              │
│              │ Main Page Content                            │
│              │                                              │
│              │                                              │
└──────────────┴──────────────────────────────────────────────┘
```

Do NOT generate mobile/tablet designs unless explicitly requested.

---

# 10. GLOBAL SIDEBAR

Use a clean global navigation.

Recommended structure:

```text
ResearchOS

Dashboard

WORKSPACE
Projects
My Tasks
Calendar

COLLABORATION
Team
Reports

──────────────

Notifications
Integrations
Settings
```

When inside a project, use project-specific navigation:

```text
Project Overview
Tasks
Timeline
Milestones
Workstreams
Files
Team
Reports
Risks & Issues
Activity
```

---

# 11. COMPLETE PAGE LIST

The product contains exactly **35 primary pages**.

## Authentication & Onboarding

### 01. Login

Route: `/login`

### 02. Register

Route: `/register`

### 03. Forgot Password

Route: `/forgot-password`

### 04. Reset Password

Route: `/reset-password`

### 05. Email Verification

Route: `/verify-email`

### 06. Workspace Onboarding

Route: `/onboarding`

---

## Dashboard

### 07. Dashboard

Route: `/dashboard`

Include:

* Active projects
* Tasks due
* Overdue tasks
* Upcoming milestones
* Project health
* Team workload
* Recent activity
* Upcoming deadlines
* Progress charts

---

## Project Management

### 08. Projects

Route: `/projects`

Include:

* All projects
* Active projects
* Completed projects
* Archived projects
* My projects
* Search
* Filters
* List/Grid views

---

### 09. Create Project

Route: `/projects/create`

Include:

* Project name
* Description
* Owner
* Team
* Start date
* End date
* Priority
* Status
* Objectives
* Deliverables
* Milestones
* Project phases
* Dependencies
* Optional research metadata

---

### 10. Project Overview

Route: `/projects/:id`

Include:

* Project header
* Project status
* Progress
* Priority
* Deadline
* Owner
* Team
* Objectives
* Milestones
* Active workstreams
* Task summary
* Recent activity
* Project health

Project navigation:

```text
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
```

---

### 11. Tasks

Route: `/projects/:id/tasks`

Views:

* List
* Board
* My Tasks

Include:

* Search
* Filters
* Assignee
* Status
* Priority
* Due date
* Milestone
* Workstream

---

### 12. Task Detail

Route: `/projects/:id/tasks/:taskId`

Include:

* Task title
* Description
* Assignee
* Status
* Priority
* Due date
* Subtasks
* Checklist
* Attachments
* Comments
* Mentions
* Dependencies
* Activity

---

### 13. Milestones

Route: `/projects/:id/milestones`

Include:

* Milestone list
* Milestone progress
* Owner
* Due date
* Related tasks
* Status
* Completion percentage

---

### 14. Timeline

Route: `/projects/:id/timeline`

Create a professional Gantt-style timeline.

Include:

* Tasks
* Milestones
* Dependencies
* Start/end dates
* Progress
* Drag-and-drop scheduling

---

### 15. Calendar

Route: `/calendar`

Views:

* Month
* Week
* Day

Show:

* Task deadlines
* Milestones
* Meetings
* Project events
* Reviews

---

### 16. Workstreams

Route: `/projects/:id/workstreams`

Workstreams represent major areas of work within a research project.

Example:

```text
AI Drug Discovery

├── Experimental Work
├── Data Analysis
├── Model Development
├── Validation
└── Documentation
```

Include:

* Workstream owner
* Progress
* Tasks
* Milestones
* Files
* Activity

---

### 17. Files & Documents

Route: `/projects/:id/files`

Include:

* File search
* Filters
* Folders
* Upload
* File type
* File size
* Owner
* Modified date
* Related task
* Related milestone

Selecting a file should open a drawer/side panel with:

* Preview
* Metadata
* Version history
* Comments
* Activity
* Related project/task

Do NOT create a separate file detail page.

---

## Team & Collaboration

### 18. Team

Route: `/team`

Include:

* Team members
* Roles
* Projects
* Tasks
* Workload
* Availability

---

### 19. Team Member Detail

Route: `/team/:id`

Include:

* Profile
* Current tasks
* Projects
* Workload
* Activity

---

### 20. Project Activity

Route: `/projects/:id/activity`

Show:

* Task updates
* Comments
* File uploads
* Milestone updates
* Status changes
* Member activity

Include activity filters.

---

### 21. Notifications

Route: `/notifications`

Notification types:

* Task assignment
* Mentions
* Deadline reminders
* Milestone updates
* Project updates
* File uploads
* Comments
* Invitations

---

### 22. Global Search

Route: `/search`

Search across:

* Projects
* Tasks
* Milestones
* Workstreams
* Files
* Team

Support:

**⌘ K / Ctrl K**

---

## Reports & Analytics

### 23. Reports

Route: `/reports`

Include:

* Project completion
* Task completion
* Overdue tasks
* Milestone completion
* Project health
* Team workload
* Productivity
* Task completion trends
* Project velocity

---

### 24. Project Reports

Route: `/projects/:id/reports`

Include:

* Project health
* Overall progress
* Milestone performance
* Task performance
* Team workload
* Timeline performance
* Risks
* Issues

Allow export:

* PDF
* CSV
* Excel

---

### 25. Risks & Issues

Route: `/projects/:id/risks`

Support:

* Risks
* Issues
* Blockers
* Dependencies

Fields:

* Title
* Description
* Probability
* Impact
* Owner
* Status
* Due date
* Mitigation

---

## Settings

### 26. Settings

Route: `/settings`

Main settings hub.

Sections:

```text
Profile
Workspace
Members
Roles & Permissions
Notifications
Integrations
Billing
Security
Developer
```

---

### 27. Roles & Permissions

Route: `/settings/permissions`

Roles:

* Workspace Admin
* Project Manager
* Research Lead
* Researcher
* Contributor
* Viewer

Include a permission matrix.

---

### 28. Workspace Settings

Route: `/settings/workspace`

Include:

* Workspace name
* Logo
* Organization
* Default project settings
* Default task statuses
* Default priorities
* Working days
* Timezone
* Date format

---

### 29. Integrations

Route: `/settings/integrations`

Categories:

### Communication

* Slack
* Microsoft Teams

### Storage

* Google Drive
* Dropbox
* OneDrive

### Development

* GitHub
* GitLab

### Calendar

* Google Calendar
* Outlook Calendar

### Automation

* Webhooks
* API

---

### 30. API / Developer

Route: `/settings/developer`

Include:

* API keys
* Webhooks
* API usage
* Connected applications
* Developer documentation

---

# Subscription & Billing

### 31. Pricing

Route: `/pricing`

Include:

* Free
* Professional
* Team
* Enterprise

Support:

* Monthly
* Yearly

Compare:

* Projects
* Team members
* Storage
* Workstreams
* Reports
* Permissions
* Integrations

---

### 32. Billing / Subscription

Route: `/settings/billing`

Use tabs:

```text
Subscription
Usage
Invoices
```

Include:

* Current plan
* Renewal date
* Upgrade
* Downgrade
* Cancel
* Resume
* Billing cycle
* Usage
* Storage
* Team seats
* Payment method
* Invoice history

---

### 33. Checkout

Route: `/checkout`

Flow:

```text
Plan
↓
Billing Information
↓
Payment Method
↓
Order Summary
↓
Confirm Subscription
```

---

### 34. Payment Success

Route: `/checkout/success`

Show:

* Successful subscription
* Selected plan
* Billing information
* Next renewal date
* Go to Dashboard

---

### 35. Payment Failed

Route: `/checkout/failed`

Show:

* Payment failure
* Reason if available
* Retry payment
* Change payment method
* Return to Billing

---

# 12. PAGE DESIGN OUTPUT FORMAT

For EVERY page, provide the following:

## 1. Page Overview

* Page Name
* Route
* Phase
* Target Users
* Purpose
* Primary CTA

## 2. UI Wireframe

Provide a concise ASCII wireframe when useful.

## 3. High-Fidelity UI Image

Generate an actual high-fidelity desktop UI mockup.

The image MUST visually match the written specification.

## 4. UI Breakdown

Explain:

* Sidebar
* Header
* Page header
* Main sections
* Cards
* Tables
* Filters
* Buttons
* Forms
* Actions

## 5. States

Define:

* Empty
* Loading
* Error
* Success
* Disabled
* Permission denied

## 6. Responsive Behavior

Explain:

* Desktop
* Tablet
* Mobile

Do not generate responsive images unless explicitly requested.

## 7. Implementation Notes

Mention:

* Reusable components
* Important frontend behavior
* Data interactions
* Modals
* Drawers
* Filters
* Search
* Permissions
* API considerations

---

# 13. HIGH-FIDELITY IMAGE REQUIREMENT

For every major product page, generate a high-fidelity UI image.

The image must contain the actual page structure described in the specification.

If the specification contains:

* Sidebar → show sidebar
* Header → show header
* KPI cards → show KPI cards
* Table → show table
* Filters → show filters
* Tabs → show tabs
* Forms → show forms
* Charts → show charts
* Timeline → show timeline
* Kanban → show Kanban
* Project information → show project information

Never generate an unrelated visual.

---

# 14. IMAGE QUALITY STANDARD

Before generating an image, verify:

* Correct page hierarchy
* Correct sidebar
* Correct active navigation
* Correct page title
* Correct primary CTA
* Correct content density
* Correct research terminology
* Realistic spacing
* Realistic SaaS patterns
* Consistent design system
* No irrelevant content
* No placeholder-looking UI unless intentional

The final image should look like a real product design reference that can be directly implemented.

---

# 15. PAGE SEQUENCE

Generate pages in this exact order:

```text
01 Login
02 Register
03 Forgot Password
04 Reset Password
05 Email Verification
06 Workspace Onboarding
07 Dashboard
08 Projects
09 Create Project
10 Project Overview
11 Tasks
12 Task Detail
13 Milestones
14 Timeline
15 Calendar
16 Workstreams
17 Files & Documents
18 Team
19 Team Member Detail
20 Project Activity
21 Notifications
22 Global Search
23 Reports
24 Project Reports
25 Risks & Issues
26 Settings
27 Roles & Permissions
28 Workspace Settings
29 Integrations
30 API / Developer
31 Pricing
32 Billing / Subscription
33 Checkout
34 Payment Success
35 Payment Failed
```

When the user says:

**"next page"**

automatically continue to the next page in this sequence.

Do not ask which page unless the sequence is genuinely ambiguous.

---

# 16. FINAL PRODUCT PRINCIPLE

Every page must satisfy:

**Beautiful enough for a modern SaaS + structured enough for research + simple enough for daily project management.**

The product should feel like a serious, scalable SaaS platform for research and R&D teams, while keeping project management at the center of the experience.
