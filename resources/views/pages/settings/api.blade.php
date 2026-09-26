@extends('layout.app')

@section('main')

    <div class="wm-api-page">

        {{-- =========================================================
            Page Header
        ========================================================== --}}
        <div class="wm-page-header">

            <div class="wm-page-header__content">

                <div class="wm-page-header__breadcrumb">

                    <a href="{{ route('settings.index') }}">
                        <i class="ph ph-gear"></i>
                        Settings
                    </a>

                    <i class="ph ph-caret-right"></i>

                    <span>API & Developer</span>

                </div>

                <h1 class="wm-page-header__title">
                    API & Developer
                </h1>

                <p class="wm-page-header__description">
                    Manage API keys, webhooks, integrations, and developer
                    access for your workspace.
                </p>

            </div>

            <div class="wm-page-header__actions">

                <a
                    href="#"
                    class="wm-btn wm-btn--light"
                    id="apiDocumentationBtn"
                >
                    <i class="ph ph-book-open"></i>
                    API Documentation
                </a>

                <button
                    type="button"
                    class="wm-btn wm-btn--primary"
                    id="createApiKeyHeaderBtn"
                >
                    <i class="ph ph-plus"></i>
                    Create API Key
                </button>

            </div>

        </div>


        {{-- =========================================================
            API Status
        ========================================================== --}}
        <div class="wm-api-status">

            <div class="wm-api-status__main">

                <div class="wm-api-status__icon">
                    <i class="ph ph-code"></i>
                </div>

                <div class="wm-api-status__content">

                    <div class="wm-api-status__title">

                        <h2>API Access</h2>

                        <span class="wm-api-status__badge">
                        <i class="ph ph-check-circle"></i>
                        Operational
                    </span>

                    </div>

                    <p>
                        Your workspace API is available and ready for
                        integrations and custom applications.
                    </p>

                </div>

            </div>


            <div class="wm-api-status__meta">

                <div>
                    <span>API Version</span>
                    <strong>v1</strong>
                </div>

                <div>
                    <span>Base URL</span>

                    <button
                        type="button"
                        class="wm-copy-value"
                        data-copy-value="https://api.workmanagement.com/v1"
                    >
                        <code>api.workmanagement.com/v1</code>
                        <i class="ph ph-copy"></i>
                    </button>
                </div>

            </div>

        </div>


        {{-- =========================================================
            Usage Summary
        ========================================================== --}}
        <div class="wm-api-summary">

            <div class="wm-api-summary__card">

                <div class="wm-api-summary__top">

                <span class="wm-api-summary__icon wm-api-summary__icon--primary">
                    <i class="ph ph-arrows-left-right"></i>
                </span>

                    <span class="wm-api-summary__period">
                    This month
                </span>

                </div>

                <strong>24,680</strong>

                <span class="wm-api-summary__label">
                API Requests
            </span>

                <div class="wm-api-summary__trend wm-api-summary__trend--up">
                    <i class="ph ph-trend-up"></i>
                    12.4% from last month
                </div>

            </div>


            <div class="wm-api-summary__card">

                <div class="wm-api-summary__top">

                <span class="wm-api-summary__icon wm-api-summary__icon--success">
                    <i class="ph ph-check-circle"></i>
                </span>

                    <span class="wm-api-summary__period">
                    This month
                </span>

                </div>

                <strong>99.8%</strong>

                <span class="wm-api-summary__label">
                Success Rate
            </span>

                <div class="wm-api-summary__trend wm-api-summary__trend--up">
                    <i class="ph ph-trend-up"></i>
                    0.3% improvement
                </div>

            </div>


            <div class="wm-api-summary__card">

                <div class="wm-api-summary__top">

                <span class="wm-api-summary__icon wm-api-summary__icon--warning">
                    <i class="ph ph-warning-circle"></i>
                </span>

                    <span class="wm-api-summary__period">
                    This month
                </span>

                </div>

                <strong>42</strong>

                <span class="wm-api-summary__label">
                Failed Requests
            </span>

                <div class="wm-api-summary__trend">
                    <i class="ph ph-minus"></i>
                    4 fewer than last month
                </div>

            </div>


            <div class="wm-api-summary__card">

                <div class="wm-api-summary__top">

                <span class="wm-api-summary__icon wm-api-summary__icon--purple">
                    <i class="ph ph-clock"></i>
                </span>

                    <span class="wm-api-summary__period">
                    Average
                </span>

                </div>

                <strong>182ms</strong>

                <span class="wm-api-summary__label">
                Response Time
            </span>

                <div class="wm-api-summary__trend wm-api-summary__trend--up">
                    <i class="ph ph-trend-down"></i>
                    8ms faster
                </div>

            </div>

        </div>


        {{-- =========================================================
            API Keys Section
        ========================================================== --}}
        <section class="wm-api-section">

            <div class="wm-api-section__header">

                <div>

                    <div class="wm-api-section__title-row">

                        <h2>API Keys</h2>

                        <span class="wm-api-section__count">
                        3 keys
                    </span>

                    </div>

                    <p>
                        API keys authenticate applications and services
                        with your WorkManagement workspace.
                    </p>

                </div>

                <button
                    type="button"
                    class="wm-btn wm-btn--primary wm-btn--sm"
                    id="createApiKeyBtn"
                >
                    <i class="ph ph-plus"></i>
                    New API Key
                </button>

            </div>


            <div class="wm-api-toolbar">

                <div class="wm-api-search">

                    <i class="ph ph-magnifying-glass"></i>

                    <input
                        type="search"
                        id="apiKeySearch"
                        placeholder="Search API keys..."
                        autocomplete="off"
                    >

                    <button
                        type="button"
                        class="wm-api-search__clear"
                        id="clearApiKeySearch"
                        aria-label="Clear search"
                    >
                        <i class="ph ph-x"></i>
                    </button>

                </div>

                <select
                    id="apiKeyStatusFilter"
                    class="wm-form-control wm-form-control--auto"
                >
                    <option value="all">All Status</option>
                    <option value="active">Active</option>
                    <option value="expired">Expired</option>
                </select>

            </div>


            <div class="wm-api-keys-table-wrapper">

                <table class="wm-api-keys-table">

                    <thead>

                    <tr>
                        <th>Key</th>
                        <th>Permissions</th>
                        <th>Created</th>
                        <th>Last Used</th>
                        <th>Expires</th>
                        <th>Status</th>
                        <th class="wm-api-table__action-cell"></th>
                    </tr>

                    </thead>

                    <tbody id="apiKeysTableBody">


                    {{-- Key 1 --}}
                    <tr
                        data-api-key
                        data-name="ResearchOS Production"
                        data-status="active"
                    >

                        <td>

                            <div class="wm-api-key">

                                <div class="wm-api-key__icon">
                                    <i class="ph ph-key"></i>
                                </div>

                                <div class="wm-api-key__content">

                                    <strong>
                                        ResearchOS Production
                                    </strong>

                                    <div class="wm-api-key__value">

                                        <code>
                                            wm_live_••••••••••••7K9P
                                        </code>

                                        <button
                                            type="button"
                                            data-copy-value="wm_live_xxxxxxxxxxxxxxxxxxxx7K9P"
                                            class="wm-copy-button"
                                            aria-label="Copy API key"
                                        >
                                            <i class="ph ph-copy"></i>
                                        </button>

                                    </div>

                                </div>

                            </div>

                        </td>

                        <td>

                            <div class="wm-permission-tags">

                                <span>Projects</span>
                                <span>Tasks</span>
                                <span>Files</span>

                                <small>+2</small>

                            </div>

                        </td>

                        <td>
                            <span class="wm-table-muted">
                                Sep 10, 2026
                            </span>
                        </td>

                        <td>
                            <span class="wm-table-muted">
                                12 min ago
                            </span>
                        </td>

                        <td>
                            <span class="wm-table-muted">
                                Never
                            </span>
                        </td>

                        <td>

                            <span class="wm-status-badge wm-status-badge--success">
                                <i class="ph ph-check-circle"></i>
                                Active
                            </span>

                        </td>

                        <td class="wm-api-table__action-cell">

                            <button
                                type="button"
                                class="wm-table-action"
                                data-api-menu
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div class="wm-api-action-menu">

                                <button
                                    type="button"
                                    data-api-action="view"
                                >
                                    <i class="ph ph-eye"></i>
                                    View Details
                                </button>

                                <button
                                    type="button"
                                    data-api-action="edit"
                                >
                                    <i class="ph ph-pencil-simple"></i>
                                    Edit Permissions
                                </button>

                                <button
                                    type="button"
                                    class="is-danger"
                                    data-api-action="revoke"
                                >
                                    <i class="ph ph-prohibit"></i>
                                    Revoke Key
                                </button>

                            </div>

                        </td>

                    </tr>


                    {{-- Key 2 --}}
                    <tr
                        data-api-key
                        data-name="Development Environment"
                        data-status="active"
                    >

                        <td>

                            <div class="wm-api-key">

                                <div class="wm-api-key__icon">
                                    <i class="ph ph-key"></i>
                                </div>

                                <div class="wm-api-key__content">

                                    <strong>
                                        Development Environment
                                    </strong>

                                    <div class="wm-api-key__value">

                                        <code>
                                            wm_test_••••••••••••3M2Q
                                        </code>

                                        <button
                                            type="button"
                                            data-copy-value="wm_test_xxxxxxxxxxxxxxxxxxxx3M2Q"
                                            class="wm-copy-button"
                                            aria-label="Copy API key"
                                        >
                                            <i class="ph ph-copy"></i>
                                        </button>

                                    </div>

                                </div>

                            </div>

                        </td>

                        <td>

                            <div class="wm-permission-tags">

                                <span>Projects</span>
                                <span>Tasks</span>

                            </div>

                        </td>

                        <td>
                            <span class="wm-table-muted">
                                Aug 28, 2026
                            </span>
                        </td>

                        <td>
                            <span class="wm-table-muted">
                                2 hours ago
                            </span>
                        </td>

                        <td>
                            <span class="wm-table-muted">
                                Dec 31, 2026
                            </span>
                        </td>

                        <td>

                            <span class="wm-status-badge wm-status-badge--success">
                                <i class="ph ph-check-circle"></i>
                                Active
                            </span>

                        </td>

                        <td class="wm-api-table__action-cell">

                            <button
                                type="button"
                                class="wm-table-action"
                                data-api-menu
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div class="wm-api-action-menu">

                                <button
                                    type="button"
                                    data-api-action="view"
                                >
                                    <i class="ph ph-eye"></i>
                                    View Details
                                </button>

                                <button
                                    type="button"
                                    data-api-action="edit"
                                >
                                    <i class="ph ph-pencil-simple"></i>
                                    Edit Permissions
                                </button>

                                <button
                                    type="button"
                                    class="is-danger"
                                    data-api-action="revoke"
                                >
                                    <i class="ph ph-prohibit"></i>
                                    Revoke Key
                                </button>

                            </div>

                        </td>

                    </tr>


                    {{-- Key 3 --}}
                    <tr
                        data-api-key
                        data-name="Analytics Service"
                        data-status="expired"
                    >

                        <td>

                            <div class="wm-api-key">

                                <div class="wm-api-key__icon">
                                    <i class="ph ph-key"></i>
                                </div>

                                <div class="wm-api-key__content">

                                    <strong>
                                        Analytics Service
                                    </strong>

                                    <div class="wm-api-key__value">

                                        <code>
                                            wm_live_••••••••••••9A4R
                                        </code>

                                        <button
                                            type="button"
                                            data-copy-value="wm_live_xxxxxxxxxxxxxxxxxxxx9A4R"
                                            class="wm-copy-button"
                                            aria-label="Copy API key"
                                        >
                                            <i class="ph ph-copy"></i>
                                        </button>

                                    </div>

                                </div>

                            </div>

                        </td>

                        <td>

                            <div class="wm-permission-tags">

                                <span>Reports</span>
                                <span>Projects</span>

                            </div>

                        </td>

                        <td>
                            <span class="wm-table-muted">
                                Jul 14, 2026
                            </span>
                        </td>

                        <td>
                            <span class="wm-table-muted">
                                Aug 14, 2026
                            </span>
                        </td>

                        <td>
                            <span class="wm-table-muted">
                                Aug 15, 2026
                            </span>
                        </td>

                        <td>

                            <span class="wm-status-badge wm-status-badge--danger">
                                <i class="ph ph-x-circle"></i>
                                Expired
                            </span>

                        </td>

                        <td class="wm-api-table__action-cell">

                            <button
                                type="button"
                                class="wm-table-action"
                                data-api-menu
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div class="wm-api-action-menu">

                                <button
                                    type="button"
                                    data-api-action="view"
                                >
                                    <i class="ph ph-eye"></i>
                                    View Details
                                </button>

                                <button
                                    type="button"
                                    data-api-action="edit"
                                >
                                    <i class="ph ph-pencil-simple"></i>
                                    Edit Permissions
                                </button>

                                <button
                                    type="button"
                                    class="is-danger"
                                    data-api-action="revoke"
                                >
                                    <i class="ph ph-prohibit"></i>
                                    Revoke Key
                                </button>

                            </div>

                        </td>

                    </tr>

                    </tbody>

                </table>

            </div>


            <div
                class="wm-api-empty"
                id="apiKeysEmpty"
            >

                <div class="wm-api-empty__icon">
                    <i class="ph ph-key"></i>
                </div>

                <h3>No API keys found</h3>

                <p>
                    Try changing your search or status filter.
                </p>

                <button
                    type="button"
                    class="wm-btn wm-btn--light"
                    id="clearApiKeyFilters"
                >
                    Clear Filters
                </button>

            </div>

        </section>


        {{-- =========================================================
            Webhooks
        ========================================================== --}}
        <section class="wm-api-section">

            <div class="wm-api-section__header">

                <div>

                    <div class="wm-api-section__title-row">

                        <h2>Webhooks</h2>

                        <span class="wm-api-section__count">
                        2 webhooks
                    </span>

                    </div>

                    <p>
                        Send real-time event notifications to your external
                        applications and services.
                    </p>

                </div>

                <button
                    type="button"
                    class="wm-btn wm-btn--primary wm-btn--sm"
                    id="createWebhookBtn"
                >
                    <i class="ph ph-plus"></i>
                    Add Webhook
                </button>

            </div>


            <div class="wm-webhooks-list">


                {{-- Webhook 1 --}}
                <div
                    class="wm-webhook"
                    data-webhook
                    data-name="ResearchOS Events"
                    data-status="active"
                >

                    <div class="wm-webhook__icon">
                        <i class="ph ph-webhooks-logo"></i>
                    </div>

                    <div class="wm-webhook__content">

                        <div class="wm-webhook__title">

                            <h3>ResearchOS Events</h3>

                            <span class="wm-status-badge wm-status-badge--success">
                            Active
                        </span>

                        </div>

                        <code>
                            https://example.com/webhooks/researchos
                        </code>

                        <div class="wm-webhook__meta">

                        <span>
                            <i class="ph ph-lightning"></i>
                            8 events
                        </span>

                            <span>
                            <i class="ph ph-clock"></i>
                            Last delivery 5 min ago
                        </span>

                            <span>
                            <i class="ph ph-check-circle"></i>
                            99.9% success
                        </span>

                        </div>

                    </div>

                    <div class="wm-webhook__actions">

                        <label class="wm-switch">

                            <input
                                type="checkbox"
                                checked
                                data-webhook-toggle
                            >

                            <span></span>

                        </label>

                        <button
                            type="button"
                            class="wm-table-action"
                            data-webhook-menu
                        >
                            <i class="ph ph-dots-three"></i>
                        </button>

                        <div class="wm-api-action-menu">

                            <button
                                type="button"
                                data-webhook-action="edit"
                            >
                                <i class="ph ph-pencil-simple"></i>
                                Edit Webhook
                            </button>

                            <button
                                type="button"
                                data-webhook-action="test"
                            >
                                <i class="ph ph-paper-plane-tilt"></i>
                                Send Test
                            </button>

                            <button
                                type="button"
                                data-webhook-action="logs"
                            >
                                <i class="ph ph-list-bullets"></i>
                                View Logs
                            </button>

                            <button
                                type="button"
                                class="is-danger"
                                data-webhook-action="delete"
                            >
                                <i class="ph ph-trash"></i>
                                Delete Webhook
                            </button>

                        </div>

                    </div>

                </div>


                {{-- Webhook 2 --}}
                <div
                    class="wm-webhook"
                    data-webhook
                    data-name="Analytics Listener"
                    data-status="inactive"
                >

                    <div class="wm-webhook__icon">
                        <i class="ph ph-webhooks-logo"></i>
                    </div>

                    <div class="wm-webhook__content">

                        <div class="wm-webhook__title">

                            <h3>Analytics Listener</h3>

                            <span class="wm-status-badge wm-status-badge--muted">
                            Inactive
                        </span>

                        </div>

                        <code>
                            https://analytics.example.com/events
                        </code>

                        <div class="wm-webhook__meta">

                        <span>
                            <i class="ph ph-lightning"></i>
                            4 events
                        </span>

                            <span>
                            <i class="ph ph-clock"></i>
                            Last delivery 3 days ago
                        </span>

                            <span>
                            <i class="ph ph-check-circle"></i>
                            98.2% success
                        </span>

                        </div>

                    </div>

                    <div class="wm-webhook__actions">

                        <label class="wm-switch">

                            <input
                                type="checkbox"
                                data-webhook-toggle
                            >

                            <span></span>

                        </label>

                        <button
                            type="button"
                            class="wm-table-action"
                            data-webhook-menu
                        >
                            <i class="ph ph-dots-three"></i>
                        </button>

                        <div class="wm-api-action-menu">

                            <button
                                type="button"
                                data-webhook-action="edit"
                            >
                                <i class="ph ph-pencil-simple"></i>
                                Edit Webhook
                            </button>

                            <button
                                type="button"
                                data-webhook-action="test"
                            >
                                <i class="ph ph-paper-plane-tilt"></i>
                                Send Test
                            </button>

                            <button
                                type="button"
                                data-webhook-action="logs"
                            >
                                <i class="ph ph-list-bullets"></i>
                                View Logs
                            </button>

                            <button
                                type="button"
                                class="is-danger"
                                data-webhook-action="delete"
                            >
                                <i class="ph ph-trash"></i>
                                Delete Webhook
                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        {{-- =========================================================
            Developer Resources
        ========================================================== --}}
        <section class="wm-developer-resources">

            <div class="wm-developer-resources__header">

                <div>

                    <h2>Developer Resources</h2>

                    <p>
                        Everything you need to build integrations
                        with WorkManagement.
                    </p>

                </div>

            </div>


            <div class="wm-developer-resources__grid">

                <a href="#" class="wm-developer-resource">

                    <div class="wm-developer-resource__icon">
                        <i class="ph ph-book-open"></i>
                    </div>

                    <div>

                        <h3>API Documentation</h3>

                        <p>
                            Explore endpoints, authentication,
                            parameters and examples.
                        </p>

                        <span>
                        Read Documentation
                        <i class="ph ph-arrow-up-right"></i>
                    </span>

                    </div>

                </a>


                <a href="#" class="wm-developer-resource">

                    <div class="wm-developer-resource__icon">
                        <i class="ph ph-terminal-window"></i>
                    </div>

                    <div>

                        <h3>API Reference</h3>

                        <p>
                            Browse the complete REST API reference
                            and available resources.
                        </p>

                        <span>
                        View API Reference
                        <i class="ph ph-arrow-up-right"></i>
                    </span>

                    </div>

                </a>


                <a href="#" class="wm-developer-resource">

                    <div class="wm-developer-resource__icon">
                        <i class="ph ph-code"></i>
                    </div>

                    <div>

                        <h3>SDKs & Examples</h3>

                        <p>
                            Get started quickly with SDKs and
                            example applications.
                        </p>

                        <span>
                        Explore Examples
                        <i class="ph ph-arrow-up-right"></i>
                    </span>

                    </div>

                </a>

            </div>

        </section>


        {{-- =========================================================
            Create API Key Modal
        ========================================================== --}}
        <div
            class="modal fade wm-api-modal"
            id="createApiKeyModal"
            tabindex="-1"
            aria-hidden="true"
        >

            <div class="modal-dialog modal-dialog-centered">

                <div class="modal-content">

                    <div class="modal-header">

                        <div>

                            <h5>Create API Key</h5>

                            <p>
                                Create a new key for an application or service.
                            </p>

                        </div>

                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                        ></button>

                    </div>


                    <div class="modal-body">

                        <div class="wm-form-group">

                            <label for="apiKeyName">
                                Key Name
                                <span>*</span>
                            </label>

                            <input
                                type="text"
                                id="apiKeyName"
                                class="wm-form-control"
                                placeholder="e.g. Production App"
                            >

                            <small>
                                Use a descriptive name so you can identify
                                this key later.
                            </small>

                        </div>


                        <div class="wm-form-group">

                            <label for="apiKeyEnvironment">
                                Environment
                            </label>

                            <select
                                id="apiKeyEnvironment"
                                class="wm-form-control"
                            >
                                <option value="live" selected>
                                    Live
                                </option>

                                <option value="test">
                                    Test
                                </option>
                            </select>

                        </div>


                        <div class="wm-form-group">

                            <label>
                                Permissions
                            </label>

                            <div class="wm-permission-selector">

                                <label class="wm-permission-option">

                                    <input
                                        type="checkbox"
                                        name="api_permissions[]"
                                        value="projects"
                                        checked
                                    >

                                    <span class="wm-permission-option__check">
                                    <i class="ph ph-check"></i>
                                </span>

                                    <span>
                                    <strong>Projects</strong>
                                    <small>
                                        Read and manage projects
                                    </small>
                                </span>

                                </label>


                                <label class="wm-permission-option">

                                    <input
                                        type="checkbox"
                                        name="api_permissions[]"
                                        value="tasks"
                                        checked
                                    >

                                    <span class="wm-permission-option__check">
                                    <i class="ph ph-check"></i>
                                </span>

                                    <span>
                                    <strong>Tasks</strong>
                                    <small>
                                        Read and manage tasks
                                    </small>
                                </span>

                                </label>


                                <label class="wm-permission-option">

                                    <input
                                        type="checkbox"
                                        name="api_permissions[]"
                                        value="team"
                                    >

                                    <span class="wm-permission-option__check">
                                    <i class="ph ph-check"></i>
                                </span>

                                    <span>
                                    <strong>Team</strong>
                                    <small>
                                        Access team information
                                    </small>
                                </span>

                                </label>


                                <label class="wm-permission-option">

                                    <input
                                        type="checkbox"
                                        name="api_permissions[]"
                                        value="files"
                                    >

                                    <span class="wm-permission-option__check">
                                    <i class="ph ph-check"></i>
                                </span>

                                    <span>
                                    <strong>Files</strong>
                                    <small>
                                        Read and manage files
                                    </small>
                                </span>

                                </label>


                                <label class="wm-permission-option">

                                    <input
                                        type="checkbox"
                                        name="api_permissions[]"
                                        value="reports"
                                    >

                                    <span class="wm-permission-option__check">
                                    <i class="ph ph-check"></i>
                                </span>

                                    <span>
                                    <strong>Reports</strong>
                                    <small>
                                        Access reports and analytics
                                    </small>
                                </span>

                                </label>

                            </div>

                        </div>


                        <div class="wm-form-group">

                            <label for="apiKeyExpiration">
                                Expiration
                            </label>

                            <select
                                id="apiKeyExpiration"
                                class="wm-form-control"
                            >
                                <option value="never" selected>
                                    Never
                                </option>

                                <option value="30">
                                    30 days
                                </option>

                                <option value="90">
                                    90 days
                                </option>

                                <option value="180">
                                    180 days
                                </option>

                                <option value="365">
                                    1 year
                                </option>
                            </select>

                        </div>

                        <div class="wm-api-security-note">

                            <i class="ph ph-shield-check"></i>

                            <p>
                                Keep API keys private. Never expose secret keys
                                in client-side code or public repositories.
                            </p>

                        </div>

                    </div>


                    <div class="modal-footer">

                        <button
                            type="button"
                            class="wm-btn wm-btn--light"
                            data-bs-dismiss="modal"
                        >
                            Cancel
                        </button>

                        <button
                            type="button"
                            class="wm-btn wm-btn--primary"
                            id="generateApiKeyBtn"
                        >
                            <i class="ph ph-key"></i>
                            Generate Key
                        </button>

                    </div>

                </div>

            </div>

        </div>


        {{-- =========================================================
            Generated API Key Modal
        ========================================================== --}}
        <div
            class="modal fade wm-api-modal"
            id="generatedApiKeyModal"
            tabindex="-1"
            aria-hidden="true"
        >

            <div class="modal-dialog modal-dialog-centered">

                <div class="modal-content">

                    <div class="wm-generated-key">

                        <div class="wm-generated-key__icon">
                            <i class="ph ph-check"></i>
                        </div>

                        <h2>API Key Created</h2>

                        <p>
                            Copy this key now. For security reasons,
                            you won't be able to see it again.
                        </p>

                        <div class="wm-generated-key__value">

                            <code id="generatedApiKey">
                                wm_live_xxxxxxxxxxxxxxxxxxxxxxxxx
                            </code>

                            <button
                                type="button"
                                class="wm-copy-button"
                                id="copyGeneratedApiKey"
                            >
                                <i class="ph ph-copy"></i>
                            </button>

                        </div>

                        <div class="wm-api-security-note">

                            <i class="ph ph-warning"></i>

                            <p>
                                Store this key securely. Treat it like a password.
                            </p>

                        </div>

                        <button
                            type="button"
                            class="wm-btn wm-btn--primary"
                            data-bs-dismiss="modal"
                        >
                            Done
                        </button>

                    </div>

                </div>

            </div>

        </div>


        {{-- =========================================================
            Create Webhook Modal
        ========================================================== --}}
        <div
            class="modal fade wm-api-modal"
            id="createWebhookModal"
            tabindex="-1"
            aria-hidden="true"
        >

            <div class="modal-dialog modal-dialog-centered">

                <div class="modal-content">

                    <div class="modal-header">

                        <div>

                            <h5>Add Webhook</h5>

                            <p>
                                Send event data to an external endpoint.
                            </p>

                        </div>

                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                        ></button>

                    </div>


                    <div class="modal-body">

                        <div class="wm-form-group">

                            <label for="webhookName">
                                Webhook Name
                                <span>*</span>
                            </label>

                            <input
                                type="text"
                                id="webhookName"
                                class="wm-form-control"
                                placeholder="e.g. Production Events"
                            >

                        </div>


                        <div class="wm-form-group">

                            <label for="webhookUrl">
                                Endpoint URL
                                <span>*</span>
                            </label>

                            <input
                                type="url"
                                id="webhookUrl"
                                class="wm-form-control"
                                placeholder="https://example.com/webhook"
                            >

                        </div>


                        <div class="wm-form-group">

                            <label>
                                Events
                            </label>

                            <div class="wm-webhook-events">

                                <label>
                                    <input
                                        type="checkbox"
                                        value="project.created"
                                        checked
                                    >
                                    <span>Project Created</span>
                                </label>

                                <label>
                                    <input
                                        type="checkbox"
                                        value="project.updated"
                                    >
                                    <span>Project Updated</span>
                                </label>

                                <label>
                                    <input
                                        type="checkbox"
                                        value="task.created"
                                        checked
                                    >
                                    <span>Task Created</span>
                                </label>

                                <label>
                                    <input
                                        type="checkbox"
                                        value="task.completed"
                                    >
                                    <span>Task Completed</span>
                                </label>

                                <label>
                                    <input
                                        type="checkbox"
                                        value="task.updated"
                                    >
                                    <span>Task Updated</span>
                                </label>

                                <label>
                                    <input
                                        type="checkbox"
                                        value="member.created"
                                    >
                                    <span>Member Added</span>
                                </label>

                            </div>

                        </div>

                    </div>


                    <div class="modal-footer">

                        <button
                            type="button"
                            class="wm-btn wm-btn--light"
                            data-bs-dismiss="modal"
                        >
                            Cancel
                        </button>

                        <button
                            type="button"
                            class="wm-btn wm-btn--primary"
                            id="saveWebhookBtn"
                        >
                            <i class="ph ph-plus"></i>
                            Create Webhook
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection


@push('script')
    <script>
        $(document).ready(function () {

            'use strict';

            /* -------------------------------------------------------
             * Elements
             * ----------------------------------------------------- */

            const $page = $('.wm-api-page');

            const $apiKeySearch = $('#apiKeySearch');
            const $apiKeyStatusFilter = $('#apiKeyStatusFilter');

            const $apiKeys = $('[data-api-key]');
            const $apiKeysEmpty = $('#apiKeysEmpty');

            let apiKeySearchTerm = '';
            let apiKeyStatus = 'all';

            let selectedApiKey = null;
            let selectedWebhook = null;

            const createApiKeyModalElement =
                document.getElementById('createApiKeyModal');

            const generatedApiKeyModalElement =
                document.getElementById('generatedApiKeyModal');

            const createWebhookModalElement =
                document.getElementById('createWebhookModal');

            const createApiKeyModal =
                createApiKeyModalElement
                    ? new bootstrap.Modal(createApiKeyModalElement)
                    : null;

            const generatedApiKeyModal =
                generatedApiKeyModalElement
                    ? new bootstrap.Modal(generatedApiKeyModalElement)
                    : null;

            const createWebhookModal =
                createWebhookModalElement
                    ? new bootstrap.Modal(createWebhookModalElement)
                    : null;


            /* -------------------------------------------------------
             * Functions
             * ----------------------------------------------------- */

            function normalize(value) {

                return String(value || '')
                    .toLowerCase()
                    .trim();

            }


            function filterApiKeys() {

                let visibleCount = 0;

                $apiKeys.each(function () {

                    const $row = $(this);

                    const name =
                        normalize($row.data('name'));

                    const status =
                        normalize($row.data('status'));

                    const matchesSearch =
                        !apiKeySearchTerm ||
                        name.indexOf(apiKeySearchTerm) !== -1;

                    const matchesStatus =
                        apiKeyStatus === 'all' ||
                        status === apiKeyStatus;

                    if (matchesSearch && matchesStatus) {

                        $row.removeClass('is-hidden');

                        visibleCount++;

                    } else {

                        $row.addClass('is-hidden');

                    }

                });

                if (visibleCount === 0) {

                    $apiKeysEmpty.addClass('is-visible');

                } else {

                    $apiKeysEmpty.removeClass('is-visible');

                }

                updateApiSearchClear();

            }


            function updateApiSearchClear() {

                if (apiKeySearchTerm) {

                    $('#clearApiKeySearch')
                        .addClass('is-visible');

                } else {

                    $('#clearApiKeySearch')
                        .removeClass('is-visible');

                }

            }


            function clearApiKeyFilters() {

                apiKeySearchTerm = '';
                apiKeyStatus = 'all';

                $apiKeySearch.val('');
                $apiKeyStatusFilter.val('all');

                filterApiKeys();

            }


            function openCreateApiKeyModal() {

                $('#apiKeyName').val('');
                $('#apiKeyEnvironment').val('live');
                $('#apiKeyExpiration').val('never');

                $('input[name="api_permissions[]"]')
                    .prop('checked', false);

                $('input[name="api_permissions[]"][value="projects"]')
                    .prop('checked', true);

                $('input[name="api_permissions[]"][value="tasks"]')
                    .prop('checked', true);

                if (createApiKeyModal) {
                    createApiKeyModal.show();
                }

            }


            function generateRandomApiKey() {

                const chars =
                    'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

                let value = '';

                for (let i = 0; i < 32; i++) {

                    value += chars.charAt(
                        Math.floor(Math.random() * chars.length)
                    );

                }

                const environment =
                    $('#apiKeyEnvironment').val() === 'test'
                        ? 'test'
                        : 'live';

                return 'wm_' + environment + '_' + value;

            }


            function createApiKey() {

                const name =
                    $.trim($('#apiKeyName').val());

                if (!name) {

                    Swal.fire({
                        icon: 'warning',
                        title: 'Key name required',
                        text: 'Please enter a name for your API key.'
                    });

                    $('#apiKeyName').trigger('focus');

                    return;
                }


                const permissions =
                    $('input[name="api_permissions[]"]:checked')
                        .map(function () {
                            return $(this).val();
                        })
                        .get();


                if (!permissions.length) {

                    Swal.fire({
                        icon: 'warning',
                        title: 'Select permissions',
                        text: 'Please select at least one API permission.'
                    });

                    return;
                }


                const payload = {

                    name: name,

                    environment:
                        $('#apiKeyEnvironment').val(),

                    permissions: permissions,

                    expiration:
                        $('#apiKeyExpiration').val()

                };


                console.log(
                    'Create API key payload:',
                    payload
                );


                const generatedKey =
                    generateRandomApiKey();


                $('#generatedApiKey')
                    .text(generatedKey);


                if (createApiKeyModal) {
                    createApiKeyModal.hide();
                }

                setTimeout(function () {

                    if (generatedApiKeyModal) {
                        generatedApiKeyModal.show();
                    }

                }, 250);

            }


            function copyToClipboard(value, $button) {

                if (!navigator.clipboard) {

                    Swal.fire({
                        icon: 'info',
                        title: 'Copy unavailable',
                        text: 'Please copy the value manually.'
                    });

                    return;
                }


                navigator.clipboard
                    .writeText(value)
                    .then(function () {

                        const original =
                            $button.html();

                        $button.html(
                            '<i class="ph ph-check"></i>'
                        );

                        setTimeout(function () {

                            $button.html(original);

                        }, 1200);

                        Swal.fire({
                            icon: 'success',
                            title: 'Copied',
                            text: 'Value copied to clipboard.',
                            timer: 1200,
                            showConfirmButton: false
                        });

                    });

            }


            function revokeApiKey($row) {

                const name =
                    $row.data('name');

                Swal.fire({

                    icon: 'warning',

                    title: 'Revoke API key?',

                    text:
                        'The key "' + name + '" will immediately stop working.',

                    showCancelButton: true,

                    confirmButtonText: 'Revoke Key',

                    cancelButtonText: 'Keep Key',

                    confirmButtonColor: '#EF4444',

                    reverseButtons: true

                }).then(function (result) {

                    if (!result.isConfirmed) {
                        return;
                    }


                    $row
                        .attr('data-status', 'expired')
                        .data('status', 'expired');


                    const $status =
                        $row.find('.wm-status-badge');


                    $status
                        .removeClass('wm-status-badge--success')
                        .addClass('wm-status-badge--danger')
                        .html(
                            '<i class="ph ph-x-circle"></i> Revoked'
                        );


                    Swal.fire({

                        icon: 'success',

                        title: 'API key revoked',

                        text:
                            '"' + name + '" is no longer active.',

                        timer: 1600,

                        showConfirmButton: false

                    });


                    filterApiKeys();

                });

            }


            function viewApiKey($row) {

                const name =
                    $row.data('name');

                const key =
                    $row.find('code').text();

                Swal.fire({

                    title: name,

                    html:
                        '<div class="wm-swal-api-detail">' +
                        '<span>API Key</span>' +
                        '<code>' + key + '</code>' +
                        '</div>',

                    confirmButtonText: 'Close'

                });

            }


            function editApiKey($row) {

                const name =
                    $row.data('name');

                Swal.fire({

                    title: 'Edit Permissions',

                    text:
                        'Permission management for "' +
                        name +
                        '" will be connected to the backend API.',

                    icon: 'info',

                    confirmButtonText: 'Continue'

                });

            }


            function openCreateWebhookModal() {

                $('#webhookName').val('');
                $('#webhookUrl').val('');

                $('.wm-webhook-events input')
                    .prop('checked', false);

                $('.wm-webhook-events input[value="project.created"]')
                    .prop('checked', true);

                $('.wm-webhook-events input[value="task.created"]')
                    .prop('checked', true);

                if (createWebhookModal) {
                    createWebhookModal.show();
                }

            }


            function saveWebhook() {

                const name =
                    $.trim($('#webhookName').val());

                const url =
                    $.trim($('#webhookUrl').val());


                if (!name || !url) {

                    Swal.fire({
                        icon: 'warning',
                        title: 'Required fields',
                        text: 'Please provide a webhook name and endpoint URL.'
                    });

                    return;
                }


                const events =
                    $('.wm-webhook-events input:checked')
                        .map(function () {
                            return $(this).val();
                        })
                        .get();


                if (!events.length) {

                    Swal.fire({
                        icon: 'warning',
                        title: 'Select events',
                        text: 'Select at least one webhook event.'
                    });

                    return;
                }


                const payload = {

                    name: name,

                    url: url,

                    events: events

                };


                console.log(
                    'Create webhook payload:',
                    payload
                );


                if (createWebhookModal) {
                    createWebhookModal.hide();
                }


                Swal.fire({

                    icon: 'success',

                    title: 'Webhook created',

                    text:
                        name + ' has been added successfully.',

                    timer: 1600,

                    showConfirmButton: false

                });

            }


            function handleWebhookAction(action, $webhook) {

                const name =
                    $webhook.data('name');


                $('.wm-api-action-menu')
                    .removeClass('is-open');


                if (action === 'edit') {

                    Swal.fire({

                        title: 'Edit Webhook',

                        text:
                            'Webhook configuration for "' +
                            name +
                            '" can be connected to your backend.',

                        icon: 'info',

                        confirmButtonText: 'Continue'

                    });

                    return;

                }


                if (action === 'test') {

                    Swal.fire({

                        icon: 'success',

                        title: 'Test sent',

                        text:
                            'A test webhook request has been queued for "' +
                            name +
                            '".',

                        timer: 1600,

                        showConfirmButton: false

                    });

                    return;

                }


                if (action === 'logs') {

                    Swal.fire({

                        title: 'Webhook Logs',

                        text:
                            'Delivery logs for "' +
                            name +
                            '" will appear here.',

                        icon: 'info',

                        confirmButtonText: 'Close'

                    });

                    return;

                }


                if (action === 'delete') {

                    Swal.fire({

                        icon: 'warning',

                        title: 'Delete webhook?',

                        text:
                            'The webhook "' +
                            name +
                            '" will stop receiving events.',

                        showCancelButton: true,

                        confirmButtonText: 'Delete',

                        cancelButtonText: 'Cancel',

                        confirmButtonColor: '#EF4444',

                        reverseButtons: true

                    }).then(function (result) {

                        if (!result.isConfirmed) {
                            return;
                        }


                        $webhook.remove();


                        Swal.fire({

                            icon: 'success',

                            title: 'Webhook deleted',

                            timer: 1400,

                            showConfirmButton: false

                        });

                    });

                }

            }


            /* -------------------------------------------------------
             * Search & Filter
             * ----------------------------------------------------- */

            $apiKeySearch.on('input', function () {

                apiKeySearchTerm =
                    normalize($(this).val());

                filterApiKeys();

            });


            $apiKeyStatusFilter.on('change', function () {

                apiKeyStatus =
                    $(this).val();

                filterApiKeys();

            });


            $('#clearApiKeySearch').on('click', function () {

                $apiKeySearch
                    .val('')
                    .trigger('focus');

                apiKeySearchTerm = '';

                filterApiKeys();

            });


            $('#clearApiKeyFilters').on('click', function () {

                clearApiKeyFilters();

            });


            /* -------------------------------------------------------
             * API Key Creation
             * ----------------------------------------------------- */

            $('#createApiKeyHeaderBtn, #createApiKeyBtn')
                .on('click', function () {

                    openCreateApiKeyModal();

                });


            $('#generateApiKeyBtn').on('click', function () {

                createApiKey();

            });


            /* -------------------------------------------------------
             * Copy
             * ----------------------------------------------------- */

            $(document).on(
                'click',
                '[data-copy-value]',
                function () {

                    const value =
                        $(this).data('copy-value');

                    copyToClipboard(
                        value,
                        $(this)
                    );

                }
            );


            $('#copyGeneratedApiKey').on('click', function () {

                const value =
                    $('#generatedApiKey').text();

                copyToClipboard(
                    value,
                    $(this)
                );

            });


            /* -------------------------------------------------------
             * API Key Menu
             * ----------------------------------------------------- */

            $(document).on(
                'click',
                '[data-api-menu]',
                function (event) {

                    event.stopPropagation();

                    const $menu =
                        $(this)
                            .siblings('.wm-api-action-menu');

                    $('.wm-api-action-menu')
                        .not($menu)
                        .removeClass('is-open');

                    $menu.toggleClass('is-open');

                }
            );


            $(document).on(
                'click',
                '[data-api-action]',
                function () {

                    const action =
                        $(this).data('api-action');

                    const $row =
                        $(this).closest('[data-api-key]');

                    selectedApiKey =
                        $row.data('name');


                    $('.wm-api-action-menu')
                        .removeClass('is-open');


                    if (action === 'view') {

                        viewApiKey($row);

                        return;

                    }


                    if (action === 'edit') {

                        editApiKey($row);

                        return;

                    }


                    if (action === 'revoke') {

                        revokeApiKey($row);

                    }

                }
            );


            /* -------------------------------------------------------
             * Webhooks
             * ----------------------------------------------------- */

            $('#createWebhookBtn').on('click', function () {

                openCreateWebhookModal();

            });


            $('#saveWebhookBtn').on('click', function () {

                saveWebhook();

            });


            $(document).on(
                'click',
                '[data-webhook-menu]',
                function (event) {

                    event.stopPropagation();

                    const $menu =
                        $(this)
                            .siblings('.wm-api-action-menu');

                    $('.wm-api-action-menu')
                        .not($menu)
                        .removeClass('is-open');

                    $menu.toggleClass('is-open');

                }
            );


            $(document).on(
                'click',
                '[data-webhook-action]',
                function () {

                    const action =
                        $(this).data('webhook-action');

                    const $webhook =
                        $(this).closest('[data-webhook]');

                    handleWebhookAction(
                        action,
                        $webhook
                    );

                }
            );


            $(document).on(
                'change',
                '[data-webhook-toggle]',
                function () {

                    const $toggle =
                        $(this);

                    const $webhook =
                        $toggle.closest('[data-webhook]');

                    const name =
                        $webhook.data('name');

                    const enabled =
                        $toggle.is(':checked');


                    $webhook.attr(
                        'data-status',
                        enabled ? 'active' : 'inactive'
                    );

                    const $status =
                        $webhook.find('.wm-status-badge');


                    if (enabled) {

                        $status
                            .removeClass('wm-status-badge--muted')
                            .addClass('wm-status-badge--success')
                            .text('Active');

                    } else {

                        $status
                            .removeClass('wm-status-badge--success')
                            .addClass('wm-status-badge--muted')
                            .text('Inactive');

                    }


                    console.log(
                        'Webhook status:',
                        {
                            name: name,
                            enabled: enabled
                        }
                    );

                }
            );


            /* -------------------------------------------------------
             * Documentation
             * ----------------------------------------------------- */

            $('#apiDocumentationBtn, .wm-developer-resource')
                .on('click', function (event) {

                    event.preventDefault();

                    Swal.fire({

                        icon: 'info',

                        title: 'API Documentation',

                        text:
                            'Connect this button to your public API documentation URL.',

                        confirmButtonText: 'Close'

                    });

                });


            /* -------------------------------------------------------
             * Close Menus
             * ----------------------------------------------------- */

            $(document).on('click', function () {

                $('.wm-api-action-menu')
                    .removeClass('is-open');

            });


            $(document).on('keydown', function (event) {

                if (event.key === 'Escape') {

                    $('.wm-api-action-menu')
                        .removeClass('is-open');

                }

            });


            /* -------------------------------------------------------
             * Initial
             * ----------------------------------------------------- */

            filterApiKeys();

        });
    </script>
@endpush
