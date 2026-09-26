@extends('layout.app')

@section('main')

    <div class="wm-documents-page">

        {{-- ============================================================
            Page Header
        ============================================================= --}}
        <div class="wm-documents-page__header">

            <div class="wm-documents-page__breadcrumb">

                <a
                    href="{{ route('dashboard') }}"
                    class="wm-documents-page__breadcrumb-link"
                >
                    Dashboard
                </a>

                <i class="ph ph-caret-right"></i>

                <span class="wm-documents-page__breadcrumb-current">
                Documents
            </span>

            </div>


            <div class="wm-documents-page__title-row">

                <div>
                    <h1 class="wm-documents-page__title">
                        Documents
                    </h1>

                    <p class="wm-documents-page__subtitle">
                        Create, organize, and manage research documents across your workspace.
                    </p>
                </div>


                <div class="wm-documents-page__header-actions">

                    <button
                        type="button"
                        class="wm-btn wm-btn--secondary"
                        data-document-action="new-folder"
                    >
                        <i class="ph ph-folder-plus"></i>
                        <span>New Folder</span>
                    </button>

                    <button
                        type="button"
                        class="wm-btn wm-btn--primary"
                        data-document-action="create"
                    >
                        <i class="ph ph-file-plus"></i>
                        <span>New Document</span>
                    </button>

                </div>

            </div>

        </div>


        {{-- ============================================================
            Summary
        ============================================================= --}}
        <div class="wm-documents-page__summary">

            <div class="wm-documents-page__summary-card">

                <div class="wm-documents-page__summary-icon wm-documents-page__summary-icon--blue">
                    <i class="ph ph-files"></i>
                </div>

                <div class="wm-documents-page__summary-content">

                <span class="wm-documents-page__summary-label">
                    Total Documents
                </span>

                    <strong class="wm-documents-page__summary-value">
                        86
                    </strong>

                    <span class="wm-documents-page__summary-meta">
                    Across 12 projects
                </span>

                </div>

            </div>


            <div class="wm-documents-page__summary-card">

                <div class="wm-documents-page__summary-icon wm-documents-page__summary-icon--green">
                    <i class="ph ph-check-circle"></i>
                </div>

                <div class="wm-documents-page__summary-content">

                <span class="wm-documents-page__summary-label">
                    Published
                </span>

                    <strong class="wm-documents-page__summary-value">
                        42
                    </strong>

                    <span class="wm-documents-page__summary-meta">
                    Ready for use
                </span>

                </div>

            </div>


            <div class="wm-documents-page__summary-card">

                <div class="wm-documents-page__summary-icon wm-documents-page__summary-icon--orange">
                    <i class="ph ph-pencil-simple"></i>
                </div>

                <div class="wm-documents-page__summary-content">

                <span class="wm-documents-page__summary-label">
                    Drafts
                </span>

                    <strong class="wm-documents-page__summary-value">
                        31
                    </strong>

                    <span class="wm-documents-page__summary-meta">
                    Still in progress
                </span>

                </div>

            </div>


            <div class="wm-documents-page__summary-card">

                <div class="wm-documents-page__summary-icon wm-documents-page__summary-icon--purple">
                    <i class="ph ph-clock-counter-clockwise"></i>
                </div>

                <div class="wm-documents-page__summary-content">

                <span class="wm-documents-page__summary-label">
                    Recently Updated
                </span>

                    <strong class="wm-documents-page__summary-value">
                        13
                    </strong>

                    <span class="wm-documents-page__summary-meta">
                    Updated this week
                </span>

                </div>

            </div>

        </div>


        {{-- ============================================================
            Main Card
        ============================================================= --}}
        <div class="wm-documents-page__card">

            {{-- Toolbar --}}
            <div class="wm-documents-page__toolbar">

                <div class="wm-documents-page__toolbar-left">

                    <div class="wm-documents-page__search">

                        <i class="ph ph-magnifying-glass"></i>

                        <input
                            type="search"
                            id="wm-document-search"
                            class="wm-documents-page__search-input"
                            placeholder="Search documents..."
                            autocomplete="off"
                        >

                        <button
                            type="button"
                            class="wm-documents-page__search-clear"
                            id="wm-document-search-clear"
                            aria-label="Clear search"
                        >
                            <i class="ph ph-x"></i>
                        </button>

                    </div>


                    <button
                        type="button"
                        class="wm-documents-page__filter-toggle"
                        id="wm-document-filter-toggle"
                    >
                        <i class="ph ph-funnel"></i>
                        <span>Filters</span>

                        <span
                            class="wm-documents-page__filter-count"
                            id="wm-document-filter-count"
                        >
                        0
                    </span>
                    </button>

                </div>


                <div class="wm-documents-page__toolbar-right">

                    <div class="wm-documents-page__sort">

                    <span class="wm-documents-page__sort-label">
                        Sort:
                    </span>

                        <select
                            id="wm-document-sort"
                            class="wm-documents-page__sort-select"
                        >
                            <option value="recent">
                                Recently updated
                            </option>

                            <option value="name-asc">
                                Name A-Z
                            </option>

                            <option value="name-desc">
                                Name Z-A
                            </option>

                            <option value="created">
                                Recently created
                            </option>
                        </select>

                    </div>


                    <div class="wm-documents-page__view-switcher">

                        <button
                            type="button"
                            class="wm-documents-page__view-btn is-active"
                            data-document-view="list"
                            aria-label="List view"
                        >
                            <i class="ph ph-list"></i>
                        </button>

                        <button
                            type="button"
                            class="wm-documents-page__view-btn"
                            data-document-view="grid"
                            aria-label="Grid view"
                        >
                            <i class="ph ph-squares-four"></i>
                        </button>

                    </div>

                </div>

            </div>


            {{-- Filters --}}
            <div
                class="wm-documents-page__filters"
                id="wm-document-filters"
            >

                <div class="wm-documents-page__filter-group">

                    <label for="wm-document-project">
                        Project
                    </label>

                    <select id="wm-document-project">

                        <option value="all">
                            All projects
                        </option>

                        <option value="atlas">
                            Atlas Research
                        </option>

                        <option value="neuro">
                            Neuro Imaging
                        </option>

                        <option value="climate">
                            Climate Study
                        </option>

                        <option value="genome">
                            Genome Project
                        </option>

                    </select>

                </div>


                <div class="wm-documents-page__filter-group">

                    <label for="wm-document-type">
                        Type
                    </label>

                    <select id="wm-document-type">

                        <option value="all">
                            All types
                        </option>

                        <option value="report">
                            Research Report
                        </option>

                        <option value="proposal">
                            Proposal
                        </option>

                        <option value="protocol">
                            Protocol
                        </option>

                        <option value="notes">
                            Research Notes
                        </option>

                        <option value="presentation">
                            Presentation
                        </option>

                    </select>

                </div>


                <div class="wm-documents-page__filter-group">

                    <label for="wm-document-owner">
                        Owner
                    </label>

                    <select id="wm-document-owner">

                        <option value="all">
                            Everyone
                        </option>

                        <option value="olivia">
                            Olivia Martin
                        </option>

                        <option value="sophia">
                            Sophia Chen
                        </option>

                        <option value="ethan">
                            Ethan Brooks
                        </option>

                        <option value="liam">
                            Liam Carter
                        </option>

                    </select>

                </div>


                <div class="wm-documents-page__filter-group">

                    <label for="wm-document-status">
                        Status
                    </label>

                    <select id="wm-document-status">

                        <option value="all">
                            All statuses
                        </option>

                        <option value="draft">
                            Draft
                        </option>

                        <option value="review">
                            In Review
                        </option>

                        <option value="published">
                            Published
                        </option>

                        <option value="archived">
                            Archived
                        </option>

                    </select>

                </div>


                <button
                    type="button"
                    class="wm-documents-page__clear-filters"
                    id="wm-document-clear-filters"
                >
                    Clear filters
                </button>

            </div>


            {{-- Active Filters --}}
            <div
                class="wm-documents-page__active-filters"
                id="wm-document-active-filters"
            ></div>


            {{-- ========================================================
                List View
            ========================================================= --}}
            <div
                class="wm-documents-page__list-view"
                id="wm-document-list-view"
            >

                <div class="wm-documents-page__table-wrap">

                    <table class="wm-documents-page__table">

                        <thead>

                        <tr>

                            <th class="wm-documents-page__check-column">

                                <label class="wm-checkbox">

                                    <input
                                        type="checkbox"
                                        id="wm-document-select-all"
                                    >

                                    <span></span>

                                </label>

                            </th>

                            <th>
                                Document
                            </th>

                            <th>
                                Project
                            </th>

                            <th>
                                Owner
                            </th>

                            <th>
                                Status
                            </th>

                            <th>
                                Version
                            </th>

                            <th>
                                Updated
                            </th>

                            <th class="wm-documents-page__action-column"></th>

                        </tr>

                        </thead>


                        <tbody id="wm-document-table-body">


                        {{-- Document 01 --}}
                        <tr
                            class="wm-documents-page__document-row"
                            data-document
                            data-name="research methodology"
                            data-project="atlas"
                            data-type="protocol"
                            data-owner="olivia"
                            data-status="published"
                            data-updated="2026-09-23"
                            data-created="2026-08-12"
                        >

                            <td class="wm-documents-page__check-column">

                                <label class="wm-checkbox">

                                    <input
                                        type="checkbox"
                                        class="wm-document-checkbox"
                                    >

                                    <span></span>

                                </label>

                            </td>


                            <td>

                                <div class="wm-documents-page__document-info">

                                    <div class="wm-documents-page__document-icon wm-documents-page__document-icon--protocol">
                                        <i class="ph ph-file-text"></i>
                                    </div>

                                    <div class="wm-documents-page__document-content">

                                        <a
                                            href="#"
                                            class="wm-documents-page__document-name"
                                        >
                                            Research Methodology
                                        </a>

                                        <span class="wm-documents-page__document-meta">
                                            Research Protocol
                                        </span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <a
                                    href="#"
                                    class="wm-documents-page__project"
                                >
                                    Atlas Research
                                </a>

                            </td>


                            <td>

                                <div class="wm-documents-page__owner">

                                    <div class="wm-documents-page__avatar">
                                        OM
                                    </div>

                                    <span>
                                        Olivia Martin
                                    </span>

                                </div>

                            </td>


                            <td>

                                <span class="wm-documents-page__status wm-documents-page__status--published">
                                    <span></span>
                                    Published
                                </span>

                            </td>


                            <td>

                                <span class="wm-documents-page__version">
                                    v2.4
                                </span>

                            </td>


                            <td>

                                <span class="wm-documents-page__date">
                                    Sep 23, 2026
                                </span>

                            </td>


                            <td>

                                <div class="wm-documents-page__action">

                                    <button
                                        type="button"
                                        class="wm-documents-page__action-btn"
                                        data-document-menu
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>


                                    <div class="wm-documents-page__action-menu">

                                        <button data-document-action="open">
                                            <i class="ph ph-arrow-square-out"></i>
                                            Open
                                        </button>

                                        <button data-document-action="preview">
                                            <i class="ph ph-eye"></i>
                                            Preview
                                        </button>

                                        <button data-document-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-document-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <button data-document-action="download">
                                            <i class="ph ph-download-simple"></i>
                                            Download
                                        </button>

                                        <button data-document-action="share">
                                            <i class="ph ph-share-network"></i>
                                            Share
                                        </button>

                                        <div class="wm-documents-page__action-divider"></div>

                                        <button
                                            class="is-danger"
                                            data-document-action="delete"
                                        >
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- Document 02 --}}
                        <tr
                            class="wm-documents-page__document-row"
                            data-document
                            data-name="research proposal"
                            data-project="neuro"
                            data-type="proposal"
                            data-owner="sophia"
                            data-status="review"
                            data-updated="2026-09-22"
                            data-created="2026-09-10"
                        >

                            <td class="wm-documents-page__check-column">

                                <label class="wm-checkbox">

                                    <input
                                        type="checkbox"
                                        class="wm-document-checkbox"
                                    >

                                    <span></span>

                                </label>

                            </td>


                            <td>

                                <div class="wm-documents-page__document-info">

                                    <div class="wm-documents-page__document-icon wm-documents-page__document-icon--proposal">
                                        <i class="ph ph-file-doc"></i>
                                    </div>

                                    <div class="wm-documents-page__document-content">

                                        <a
                                            href="#"
                                            class="wm-documents-page__document-name"
                                        >
                                            Research Proposal
                                        </a>

                                        <span class="wm-documents-page__document-meta">
                                            Project Proposal
                                        </span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <a href="#" class="wm-documents-page__project">
                                    Neuro Imaging
                                </a>

                            </td>


                            <td>

                                <div class="wm-documents-page__owner">

                                    <div class="wm-documents-page__avatar">
                                        SC
                                    </div>

                                    <span>
                                        Sophia Chen
                                    </span>

                                </div>

                            </td>


                            <td>

                                <span class="wm-documents-page__status wm-documents-page__status--review">
                                    <span></span>
                                    In Review
                                </span>

                            </td>


                            <td>

                                <span class="wm-documents-page__version">
                                    v1.8
                                </span>

                            </td>


                            <td>

                                <span class="wm-documents-page__date">
                                    Sep 22, 2026
                                </span>

                            </td>


                            <td>

                                <div class="wm-documents-page__action">

                                    <button
                                        type="button"
                                        class="wm-documents-page__action-btn"
                                        data-document-menu
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-documents-page__action-menu">

                                        <button data-document-action="open">
                                            <i class="ph ph-arrow-square-out"></i>
                                            Open
                                        </button>

                                        <button data-document-action="preview">
                                            <i class="ph ph-eye"></i>
                                            Preview
                                        </button>

                                        <button data-document-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-document-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <button data-document-action="download">
                                            <i class="ph ph-download-simple"></i>
                                            Download
                                        </button>

                                        <button data-document-action="share">
                                            <i class="ph ph-share-network"></i>
                                            Share
                                        </button>

                                        <div class="wm-documents-page__action-divider"></div>

                                        <button
                                            class="is-danger"
                                            data-document-action="delete"
                                        >
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- Document 03 --}}
                        <tr
                            class="wm-documents-page__document-row"
                            data-document
                            data-name="monthly research report"
                            data-project="climate"
                            data-type="report"
                            data-owner="ethan"
                            data-status="published"
                            data-updated="2026-09-20"
                            data-created="2026-08-20"
                        >

                            <td class="wm-documents-page__check-column">

                                <label class="wm-checkbox">

                                    <input
                                        type="checkbox"
                                        class="wm-document-checkbox"
                                    >

                                    <span></span>

                                </label>

                            </td>


                            <td>

                                <div class="wm-documents-page__document-info">

                                    <div class="wm-documents-page__document-icon wm-documents-page__document-icon--report">
                                        <i class="ph ph-file-pdf"></i>
                                    </div>

                                    <div class="wm-documents-page__document-content">

                                        <a
                                            href="#"
                                            class="wm-documents-page__document-name"
                                        >
                                            Monthly Research Report
                                        </a>

                                        <span class="wm-documents-page__document-meta">
                                            Research Report
                                        </span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <a href="#" class="wm-documents-page__project">
                                    Climate Study
                                </a>

                            </td>


                            <td>

                                <div class="wm-documents-page__owner">

                                    <div class="wm-documents-page__avatar">
                                        EB
                                    </div>

                                    <span>
                                        Ethan Brooks
                                    </span>

                                </div>

                            </td>


                            <td>

                                <span class="wm-documents-page__status wm-documents-page__status--published">
                                    <span></span>
                                    Published
                                </span>

                            </td>


                            <td>

                                <span class="wm-documents-page__version">
                                    v3.1
                                </span>

                            </td>


                            <td>

                                <span class="wm-documents-page__date">
                                    Sep 20, 2026
                                </span>

                            </td>


                            <td>

                                <div class="wm-documents-page__action">

                                    <button
                                        type="button"
                                        class="wm-documents-page__action-btn"
                                        data-document-menu
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-documents-page__action-menu">

                                        <button data-document-action="open">
                                            <i class="ph ph-arrow-square-out"></i>
                                            Open
                                        </button>

                                        <button data-document-action="preview">
                                            <i class="ph ph-eye"></i>
                                            Preview
                                        </button>

                                        <button data-document-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-document-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <button data-document-action="download">
                                            <i class="ph ph-download-simple"></i>
                                            Download
                                        </button>

                                        <button data-document-action="share">
                                            <i class="ph ph-share-network"></i>
                                            Share
                                        </button>

                                        <div class="wm-documents-page__action-divider"></div>

                                        <button
                                            class="is-danger"
                                            data-document-action="delete"
                                        >
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- Document 04 --}}
                        <tr
                            class="wm-documents-page__document-row"
                            data-document
                            data-name="field research notes"
                            data-project="atlas"
                            data-type="notes"
                            data-owner="olivia"
                            data-status="draft"
                            data-updated="2026-09-18"
                            data-created="2026-09-15"
                        >

                            <td class="wm-documents-page__check-column">

                                <label class="wm-checkbox">

                                    <input
                                        type="checkbox"
                                        class="wm-document-checkbox"
                                    >

                                    <span></span>

                                </label>

                            </td>


                            <td>

                                <div class="wm-documents-page__document-info">

                                    <div class="wm-documents-page__document-icon wm-documents-page__document-icon--notes">
                                        <i class="ph ph-notepad"></i>
                                    </div>

                                    <div class="wm-documents-page__document-content">

                                        <a
                                            href="#"
                                            class="wm-documents-page__document-name"
                                        >
                                            Field Research Notes
                                        </a>

                                        <span class="wm-documents-page__document-meta">
                                            Research Notes
                                        </span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <a href="#" class="wm-documents-page__project">
                                    Atlas Research
                                </a>

                            </td>


                            <td>

                                <div class="wm-documents-page__owner">

                                    <div class="wm-documents-page__avatar">
                                        OM
                                    </div>

                                    <span>
                                        Olivia Martin
                                    </span>

                                </div>

                            </td>


                            <td>

                                <span class="wm-documents-page__status wm-documents-page__status--draft">
                                    <span></span>
                                    Draft
                                </span>

                            </td>


                            <td>

                                <span class="wm-documents-page__version">
                                    v0.9
                                </span>

                            </td>


                            <td>

                                <span class="wm-documents-page__date">
                                    Sep 18, 2026
                                </span>

                            </td>


                            <td>

                                <div class="wm-documents-page__action">

                                    <button
                                        type="button"
                                        class="wm-documents-page__action-btn"
                                        data-document-menu
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-documents-page__action-menu">

                                        <button data-document-action="open">
                                            <i class="ph ph-arrow-square-out"></i>
                                            Open
                                        </button>

                                        <button data-document-action="preview">
                                            <i class="ph ph-eye"></i>
                                            Preview
                                        </button>

                                        <button data-document-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-document-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <button data-document-action="download">
                                            <i class="ph ph-download-simple"></i>
                                            Download
                                        </button>

                                        <button data-document-action="share">
                                            <i class="ph ph-share-network"></i>
                                            Share
                                        </button>

                                        <div class="wm-documents-page__action-divider"></div>

                                        <button
                                            class="is-danger"
                                            data-document-action="delete"
                                        >
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- Document 05 --}}
                        <tr
                            class="wm-documents-page__document-row"
                            data-document
                            data-name="experimental protocol"
                            data-project="genome"
                            data-type="protocol"
                            data-owner="liam"
                            data-status="review"
                            data-updated="2026-09-16"
                            data-created="2026-09-01"
                        >

                            <td class="wm-documents-page__check-column">

                                <label class="wm-checkbox">

                                    <input
                                        type="checkbox"
                                        class="wm-document-checkbox"
                                    >

                                    <span></span>

                                </label>

                            </td>


                            <td>

                                <div class="wm-documents-page__document-info">

                                    <div class="wm-documents-page__document-icon wm-documents-page__document-icon--protocol">
                                        <i class="ph ph-flask"></i>
                                    </div>

                                    <div class="wm-documents-page__document-content">

                                        <a
                                            href="#"
                                            class="wm-documents-page__document-name"
                                        >
                                            Experimental Protocol
                                        </a>

                                        <span class="wm-documents-page__document-meta">
                                            Research Protocol
                                        </span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <a href="#" class="wm-documents-page__project">
                                    Genome Project
                                </a>

                            </td>


                            <td>

                                <div class="wm-documents-page__owner">

                                    <div class="wm-documents-page__avatar">
                                        LC
                                    </div>

                                    <span>
                                        Liam Carter
                                    </span>

                                </div>

                            </td>


                            <td>

                                <span class="wm-documents-page__status wm-documents-page__status--review">
                                    <span></span>
                                    In Review
                                </span>

                            </td>


                            <td>

                                <span class="wm-documents-page__version">
                                    v1.2
                                </span>

                            </td>


                            <td>

                                <span class="wm-documents-page__date">
                                    Sep 16, 2026
                                </span>

                            </td>


                            <td>

                                <div class="wm-documents-page__action">

                                    <button
                                        type="button"
                                        class="wm-documents-page__action-btn"
                                        data-document-menu
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-documents-page__action-menu">

                                        <button data-document-action="open">
                                            <i class="ph ph-arrow-square-out"></i>
                                            Open
                                        </button>

                                        <button data-document-action="preview">
                                            <i class="ph ph-eye"></i>
                                            Preview
                                        </button>

                                        <button data-document-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-document-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <button data-document-action="download">
                                            <i class="ph ph-download-simple"></i>
                                            Download
                                        </button>

                                        <button data-document-action="share">
                                            <i class="ph ph-share-network"></i>
                                            Share
                                        </button>

                                        <div class="wm-documents-page__action-divider"></div>

                                        <button
                                            class="is-danger"
                                            data-document-action="delete"
                                        >
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- Document 06 --}}
                        <tr
                            class="wm-documents-page__document-row"
                            data-document
                            data-name="project presentation"
                            data-project="neuro"
                            data-type="presentation"
                            data-owner="sophia"
                            data-status="published"
                            data-updated="2026-09-12"
                            data-created="2026-08-28"
                        >

                            <td class="wm-documents-page__check-column">

                                <label class="wm-checkbox">

                                    <input
                                        type="checkbox"
                                        class="wm-document-checkbox"
                                    >

                                    <span></span>

                                </label>

                            </td>


                            <td>

                                <div class="wm-documents-page__document-info">

                                    <div class="wm-documents-page__document-icon wm-documents-page__document-icon--presentation">
                                        <i class="ph ph-presentation"></i>
                                    </div>

                                    <div class="wm-documents-page__document-content">

                                        <a
                                            href="#"
                                            class="wm-documents-page__document-name"
                                        >
                                            Project Presentation
                                        </a>

                                        <span class="wm-documents-page__document-meta">
                                            Presentation
                                        </span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <a href="#" class="wm-documents-page__project">
                                    Neuro Imaging
                                </a>

                            </td>


                            <td>

                                <div class="wm-documents-page__owner">

                                    <div class="wm-documents-page__avatar">
                                        SC
                                    </div>

                                    <span>
                                        Sophia Chen
                                    </span>

                                </div>

                            </td>


                            <td>

                                <span class="wm-documents-page__status wm-documents-page__status--published">
                                    <span></span>
                                    Published
                                </span>

                            </td>


                            <td>

                                <span class="wm-documents-page__version">
                                    v2.0
                                </span>

                            </td>


                            <td>

                                <span class="wm-documents-page__date">
                                    Sep 12, 2026
                                </span>

                            </td>


                            <td>

                                <div class="wm-documents-page__action">

                                    <button
                                        type="button"
                                        class="wm-documents-page__action-btn"
                                        data-document-menu
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-documents-page__action-menu">

                                        <button data-document-action="open">
                                            <i class="ph ph-arrow-square-out"></i>
                                            Open
                                        </button>

                                        <button data-document-action="preview">
                                            <i class="ph ph-eye"></i>
                                            Preview
                                        </button>

                                        <button data-document-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-document-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <button data-document-action="download">
                                            <i class="ph ph-download-simple"></i>
                                            Download
                                        </button>

                                        <button data-document-action="share">
                                            <i class="ph ph-share-network"></i>
                                            Share
                                        </button>

                                        <div class="wm-documents-page__action-divider"></div>

                                        <button
                                            class="is-danger"
                                            data-document-action="delete"
                                        >
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>

                        </tbody>

                    </table>

                </div>

            </div>


            {{-- ========================================================
                Grid View
            ========================================================= --}}
            <div
                class="wm-documents-page__grid-view"
                id="wm-document-grid-view"
            >

                <div class="wm-documents-page__grid">


                    <div
                        class="wm-documents-page__grid-card"
                        data-grid-document
                        data-name="research methodology"
                        data-project="atlas"
                        data-type="protocol"
                        data-owner="olivia"
                        data-status="published"
                    >

                        <div class="wm-documents-page__grid-card-top">

                            <div class="wm-documents-page__document-icon wm-documents-page__document-icon--protocol">
                                <i class="ph ph-file-text"></i>
                            </div>

                            <div class="wm-documents-page__action">

                                <button
                                    type="button"
                                    class="wm-documents-page__action-btn"
                                    data-document-menu
                                >
                                    <i class="ph ph-dots-three"></i>
                                </button>

                                <div class="wm-documents-page__action-menu">

                                    <button data-document-action="open">
                                        <i class="ph ph-arrow-square-out"></i>
                                        Open
                                    </button>

                                    <button data-document-action="edit">
                                        <i class="ph ph-pencil-simple"></i>
                                        Edit
                                    </button>

                                    <button data-document-action="duplicate">
                                        <i class="ph ph-copy"></i>
                                        Duplicate
                                    </button>

                                    <button data-document-action="share">
                                        <i class="ph ph-share-network"></i>
                                        Share
                                    </button>

                                    <div class="wm-documents-page__action-divider"></div>

                                    <button
                                        class="is-danger"
                                        data-document-action="delete"
                                    >
                                        <i class="ph ph-trash"></i>
                                        Delete
                                    </button>

                                </div>

                            </div>

                        </div>


                        <a href="#" class="wm-documents-page__grid-name">
                            Research Methodology
                        </a>

                        <span class="wm-documents-page__grid-type">
                        Research Protocol
                    </span>


                        <div class="wm-documents-page__grid-meta">

                            <div class="wm-documents-page__grid-project">

                                <i class="ph ph-folder-simple"></i>

                                <span>
                                Atlas Research
                            </span>

                            </div>


                            <span class="wm-documents-page__status wm-documents-page__status--published">
                            <span></span>
                            Published
                        </span>

                        </div>


                        <div class="wm-documents-page__grid-footer">

                            <div class="wm-documents-page__owner">

                                <div class="wm-documents-page__avatar">
                                    OM
                                </div>

                                <span>
                                Olivia Martin
                            </span>

                            </div>

                            <span class="wm-documents-page__version">
                            v2.4
                        </span>

                        </div>

                    </div>


                    <div
                        class="wm-documents-page__grid-card"
                        data-grid-document
                        data-name="research proposal"
                        data-project="neuro"
                        data-type="proposal"
                        data-owner="sophia"
                        data-status="review"
                    >

                        <div class="wm-documents-page__grid-card-top">

                            <div class="wm-documents-page__document-icon wm-documents-page__document-icon--proposal">
                                <i class="ph ph-file-doc"></i>
                            </div>

                            <div class="wm-documents-page__action">

                                <button
                                    type="button"
                                    class="wm-documents-page__action-btn"
                                    data-document-menu
                                >
                                    <i class="ph ph-dots-three"></i>
                                </button>

                                <div class="wm-documents-page__action-menu">

                                    <button data-document-action="open">
                                        <i class="ph ph-arrow-square-out"></i>
                                        Open
                                    </button>

                                    <button data-document-action="edit">
                                        <i class="ph ph-pencil-simple"></i>
                                        Edit
                                    </button>

                                    <button data-document-action="duplicate">
                                        <i class="ph ph-copy"></i>
                                        Duplicate
                                    </button>

                                    <button data-document-action="share">
                                        <i class="ph ph-share-network"></i>
                                        Share
                                    </button>

                                    <div class="wm-documents-page__action-divider"></div>

                                    <button
                                        class="is-danger"
                                        data-document-action="delete"
                                    >
                                        <i class="ph ph-trash"></i>
                                        Delete
                                    </button>

                                </div>

                            </div>

                        </div>


                        <a href="#" class="wm-documents-page__grid-name">
                            Research Proposal
                        </a>

                        <span class="wm-documents-page__grid-type">
                        Project Proposal
                    </span>


                        <div class="wm-documents-page__grid-meta">

                            <div class="wm-documents-page__grid-project">

                                <i class="ph ph-folder-simple"></i>

                                <span>
                                Neuro Imaging
                            </span>

                            </div>

                            <span class="wm-documents-page__status wm-documents-page__status--review">
                            <span></span>
                            In Review
                        </span>

                        </div>


                        <div class="wm-documents-page__grid-footer">

                            <div class="wm-documents-page__owner">

                                <div class="wm-documents-page__avatar">
                                    SC
                                </div>

                                <span>
                                Sophia Chen
                            </span>

                            </div>

                            <span class="wm-documents-page__version">
                            v1.8
                        </span>

                        </div>

                    </div>


                    <div
                        class="wm-documents-page__grid-card"
                        data-grid-document
                        data-name="monthly research report"
                        data-project="climate"
                        data-type="report"
                        data-owner="ethan"
                        data-status="published"
                    >

                        <div class="wm-documents-page__grid-card-top">

                            <div class="wm-documents-page__document-icon wm-documents-page__document-icon--report">
                                <i class="ph ph-file-pdf"></i>
                            </div>

                            <div class="wm-documents-page__action">

                                <button
                                    type="button"
                                    class="wm-documents-page__action-btn"
                                    data-document-menu
                                >
                                    <i class="ph ph-dots-three"></i>
                                </button>

                                <div class="wm-documents-page__action-menu">

                                    <button data-document-action="open">
                                        <i class="ph ph-arrow-square-out"></i>
                                        Open
                                    </button>

                                    <button data-document-action="edit">
                                        <i class="ph ph-pencil-simple"></i>
                                        Edit
                                    </button>

                                    <button data-document-action="duplicate">
                                        <i class="ph ph-copy"></i>
                                        Duplicate
                                    </button>

                                    <button data-document-action="share">
                                        <i class="ph ph-share-network"></i>
                                        Share
                                    </button>

                                    <div class="wm-documents-page__action-divider"></div>

                                    <button
                                        class="is-danger"
                                        data-document-action="delete"
                                    >
                                        <i class="ph ph-trash"></i>
                                        Delete
                                    </button>

                                </div>

                            </div>

                        </div>


                        <a href="#" class="wm-documents-page__grid-name">
                            Monthly Research Report
                        </a>

                        <span class="wm-documents-page__grid-type">
                        Research Report
                    </span>


                        <div class="wm-documents-page__grid-meta">

                            <div class="wm-documents-page__grid-project">

                                <i class="ph ph-folder-simple"></i>

                                <span>
                                Climate Study
                            </span>

                            </div>

                            <span class="wm-documents-page__status wm-documents-page__status--published">
                            <span></span>
                            Published
                        </span>

                        </div>


                        <div class="wm-documents-page__grid-footer">

                            <div class="wm-documents-page__owner">

                                <div class="wm-documents-page__avatar">
                                    EB
                                </div>

                                <span>
                                Ethan Brooks
                            </span>

                            </div>

                            <span class="wm-documents-page__version">
                            v3.1
                        </span>

                        </div>

                    </div>


                    <div
                        class="wm-documents-page__grid-card"
                        data-grid-document
                        data-name="field research notes"
                        data-project="atlas"
                        data-type="notes"
                        data-owner="olivia"
                        data-status="draft"
                    >

                        <div class="wm-documents-page__grid-card-top">

                            <div class="wm-documents-page__document-icon wm-documents-page__document-icon--notes">
                                <i class="ph ph-notepad"></i>
                            </div>

                            <div class="wm-documents-page__action">

                                <button
                                    type="button"
                                    class="wm-documents-page__action-btn"
                                    data-document-menu
                                >
                                    <i class="ph ph-dots-three"></i>
                                </button>

                                <div class="wm-documents-page__action-menu">

                                    <button data-document-action="open">
                                        <i class="ph ph-arrow-square-out"></i>
                                        Open
                                    </button>

                                    <button data-document-action="edit">
                                        <i class="ph ph-pencil-simple"></i>
                                        Edit
                                    </button>

                                    <button data-document-action="duplicate">
                                        <i class="ph ph-copy"></i>
                                        Duplicate
                                    </button>

                                    <button data-document-action="share">
                                        <i class="ph ph-share-network"></i>
                                        Share
                                    </button>

                                    <div class="wm-documents-page__action-divider"></div>

                                    <button
                                        class="is-danger"
                                        data-document-action="delete"
                                    >
                                        <i class="ph ph-trash"></i>
                                        Delete
                                    </button>

                                </div>

                            </div>

                        </div>


                        <a href="#" class="wm-documents-page__grid-name">
                            Field Research Notes
                        </a>

                        <span class="wm-documents-page__grid-type">
                        Research Notes
                    </span>


                        <div class="wm-documents-page__grid-meta">

                            <div class="wm-documents-page__grid-project">

                                <i class="ph ph-folder-simple"></i>

                                <span>
                                Atlas Research
                            </span>

                            </div>

                            <span class="wm-documents-page__status wm-documents-page__status--draft">
                            <span></span>
                            Draft
                        </span>

                        </div>


                        <div class="wm-documents-page__grid-footer">

                            <div class="wm-documents-page__owner">

                                <div class="wm-documents-page__avatar">
                                    OM
                                </div>

                                <span>
                                Olivia Martin
                            </span>

                            </div>

                            <span class="wm-documents-page__version">
                            v0.9
                        </span>

                        </div>

                    </div>


                    <div
                        class="wm-documents-page__grid-card"
                        data-grid-document
                        data-name="experimental protocol"
                        data-project="genome"
                        data-type="protocol"
                        data-owner="liam"
                        data-status="review"
                    >

                        <div class="wm-documents-page__grid-card-top">

                            <div class="wm-documents-page__document-icon wm-documents-page__document-icon--protocol">
                                <i class="ph ph-flask"></i>
                            </div>

                            <div class="wm-documents-page__action">

                                <button
                                    type="button"
                                    class="wm-documents-page__action-btn"
                                    data-document-menu
                                >
                                    <i class="ph ph-dots-three"></i>
                                </button>

                                <div class="wm-documents-page__action-menu">

                                    <button data-document-action="open">
                                        <i class="ph ph-arrow-square-out"></i>
                                        Open
                                    </button>

                                    <button data-document-action="edit">
                                        <i class="ph ph-pencil-simple"></i>
                                        Edit
                                    </button>

                                    <button data-document-action="duplicate">
                                        <i class="ph ph-copy"></i>
                                        Duplicate
                                    </button>

                                    <button data-document-action="share">
                                        <i class="ph ph-share-network"></i>
                                        Share
                                    </button>

                                    <div class="wm-documents-page__action-divider"></div>

                                    <button
                                        class="is-danger"
                                        data-document-action="delete"
                                    >
                                        <i class="ph ph-trash"></i>
                                        Delete
                                    </button>

                                </div>

                            </div>

                        </div>


                        <a href="#" class="wm-documents-page__grid-name">
                            Experimental Protocol
                        </a>

                        <span class="wm-documents-page__grid-type">
                        Research Protocol
                    </span>


                        <div class="wm-documents-page__grid-meta">

                            <div class="wm-documents-page__grid-project">

                                <i class="ph ph-folder-simple"></i>

                                <span>
                                Genome Project
                            </span>

                            </div>

                            <span class="wm-documents-page__status wm-documents-page__status--review">
                            <span></span>
                            In Review
                        </span>

                        </div>


                        <div class="wm-documents-page__grid-footer">

                            <div class="wm-documents-page__owner">

                                <div class="wm-documents-page__avatar">
                                    LC
                                </div>

                                <span>
                                Liam Carter
                            </span>

                            </div>

                            <span class="wm-documents-page__version">
                            v1.2
                        </span>

                        </div>

                    </div>


                    <div
                        class="wm-documents-page__grid-card"
                        data-grid-document
                        data-name="project presentation"
                        data-project="neuro"
                        data-type="presentation"
                        data-owner="sophia"
                        data-status="published"
                    >

                        <div class="wm-documents-page__grid-card-top">

                            <div class="wm-documents-page__document-icon wm-documents-page__document-icon--presentation">
                                <i class="ph ph-presentation"></i>
                            </div>

                            <div class="wm-documents-page__action">

                                <button
                                    type="button"
                                    class="wm-documents-page__action-btn"
                                    data-document-menu
                                >
                                    <i class="ph ph-dots-three"></i>
                                </button>

                                <div class="wm-documents-page__action-menu">

                                    <button data-document-action="open">
                                        <i class="ph ph-arrow-square-out"></i>
                                        Open
                                    </button>

                                    <button data-document-action="edit">
                                        <i class="ph ph-pencil-simple"></i>
                                        Edit
                                    </button>

                                    <button data-document-action="duplicate">
                                        <i class="ph ph-copy"></i>
                                        Duplicate
                                    </button>

                                    <button data-document-action="share">
                                        <i class="ph ph-share-network"></i>
                                        Share
                                    </button>

                                    <div class="wm-documents-page__action-divider"></div>

                                    <button
                                        class="is-danger"
                                        data-document-action="delete"
                                    >
                                        <i class="ph ph-trash"></i>
                                        Delete
                                    </button>

                                </div>

                            </div>

                        </div>


                        <a href="#" class="wm-documents-page__grid-name">
                            Project Presentation
                        </a>

                        <span class="wm-documents-page__grid-type">
                        Presentation
                    </span>


                        <div class="wm-documents-page__grid-meta">

                            <div class="wm-documents-page__grid-project">

                                <i class="ph ph-folder-simple"></i>

                                <span>
                                Neuro Imaging
                            </span>

                            </div>

                            <span class="wm-documents-page__status wm-documents-page__status--published">
                            <span></span>
                            Published
                        </span>

                        </div>


                        <div class="wm-documents-page__grid-footer">

                            <div class="wm-documents-page__owner">

                                <div class="wm-documents-page__avatar">
                                    SC
                                </div>

                                <span>
                                Sophia Chen
                            </span>

                            </div>

                            <span class="wm-documents-page__version">
                            v2.0
                        </span>

                        </div>

                    </div>

                </div>

            </div>


            {{-- Empty State --}}
            <div
                class="wm-documents-page__empty"
                id="wm-document-empty"
            >

                <div class="wm-documents-page__empty-icon">
                    <i class="ph ph-files"></i>
                </div>

                <h3>
                    No documents found
                </h3>

                <p>
                    Try adjusting your search or filters to find the document you're looking for.
                </p>

                <button
                    type="button"
                    class="wm-btn wm-btn--secondary"
                    id="wm-document-empty-reset"
                >
                    Clear filters
                </button>

            </div>


            {{-- Footer --}}
            <div class="wm-documents-page__footer">

                <div class="wm-documents-page__footer-info">

                    Showing
                    <strong id="wm-document-visible-count">
                        6
                    </strong>
                    of
                    <strong>
                        86
                    </strong>
                    documents

                </div>


                <div class="wm-documents-page__pagination">

                    <button
                        type="button"
                        class="wm-documents-page__pagination-btn is-disabled"
                        disabled
                    >
                        <i class="ph ph-caret-left"></i>
                    </button>

                    <button
                        type="button"
                        class="wm-documents-page__pagination-btn is-active"
                    >
                        1
                    </button>

                    <button
                        type="button"
                        class="wm-documents-page__pagination-btn"
                    >
                        2
                    </button>

                    <button
                        type="button"
                        class="wm-documents-page__pagination-btn"
                    >
                        3
                    </button>

                    <span class="wm-documents-page__pagination-dots">
                    ...
                </span>

                    <button
                        type="button"
                        class="wm-documents-page__pagination-btn"
                    >
                        15
                    </button>

                    <button
                        type="button"
                        class="wm-documents-page__pagination-btn"
                    >
                        <i class="ph ph-caret-right"></i>
                    </button>

                </div>

            </div>

        </div>

    </div>

@endsection


@push('script')

    <script>
        $(document).ready(function () {

            'use strict';


            // ============================================================
            // Elements
            // ============================================================

            const $search = $('#wm-document-search');
            const $searchClear = $('#wm-document-search-clear');

            const $filterToggle = $('#wm-document-filter-toggle');
            const $filters = $('#wm-document-filters');
            const $filterCount = $('#wm-document-filter-count');

            const $project = $('#wm-document-project');
            const $type = $('#wm-document-type');
            const $owner = $('#wm-document-owner');
            const $status = $('#wm-document-status');

            const $sort = $('#wm-document-sort');

            const $rows = $('[data-document]');
            const $gridCards = $('[data-grid-document]');

            const $listView = $('#wm-document-list-view');
            const $gridView = $('#wm-document-grid-view');

            const $viewButtons = $('[data-document-view]');

            const $activeFilters = $('#wm-document-active-filters');

            const $empty = $('#wm-document-empty');

            const $visibleCount = $('#wm-document-visible-count');

            const $selectAll = $('#wm-document-select-all');


            // ============================================================
            // State
            // ============================================================

            let currentView = 'list';


            // ============================================================
            // Labels
            // ============================================================

            const projectLabels = {
                atlas: 'Atlas Research',
                neuro: 'Neuro Imaging',
                climate: 'Climate Study',
                genome: 'Genome Project'
            };


            const typeLabels = {
                report: 'Research Report',
                proposal: 'Proposal',
                protocol: 'Protocol',
                notes: 'Research Notes',
                presentation: 'Presentation'
            };


            const statusLabels = {
                draft: 'Draft',
                review: 'In Review',
                published: 'Published',
                archived: 'Archived'
            };


            // ============================================================
            // Functions
            // ============================================================

            function getFilters() {

                return {
                    search: $.trim($search.val()).toLowerCase(),
                    project: $project.val(),
                    type: $type.val(),
                    owner: $owner.val(),
                    status: $status.val()
                };

            }


            function filterDocuments() {

                const filters = getFilters();

                let visibleCount = 0;


                $rows.each(function () {

                    const $row = $(this);

                    const name = String(
                        $row.data('name')
                    ).toLowerCase();

                    const project = $row.data('project');
                    const type = $row.data('type');
                    const owner = $row.data('owner');
                    const status = $row.data('status');


                    const matchesSearch =
                        !filters.search ||
                        name.includes(filters.search);


                    const matchesProject =
                        filters.project === 'all' ||
                        project === filters.project;


                    const matchesType =
                        filters.type === 'all' ||
                        type === filters.type;


                    const matchesOwner =
                        filters.owner === 'all' ||
                        owner === filters.owner;


                    const matchesStatus =
                        filters.status === 'all' ||
                        status === filters.status;


                    const visible =
                        matchesSearch &&
                        matchesProject &&
                        matchesType &&
                        matchesOwner &&
                        matchesStatus;


                    $row.toggle(visible);


                    if (visible) {
                        visibleCount++;
                    }

                });


                filterGrid();

                updateActiveFilters();

                updateFilterCount();

                updateEmptyState(visibleCount);

                $visibleCount.text(visibleCount);

            }


            function filterGrid() {

                const filters = getFilters();


                $gridCards.each(function () {

                    const $card = $(this);

                    const name = String(
                        $card.data('name')
                    ).toLowerCase();

                    const project = $card.data('project');
                    const type = $card.data('type');
                    const owner = $card.data('owner');
                    const status = $card.data('status');


                    const matchesSearch =
                        !filters.search ||
                        name.includes(filters.search);


                    const matchesProject =
                        filters.project === 'all' ||
                        project === filters.project;


                    const matchesType =
                        filters.type === 'all' ||
                        type === filters.type;


                    const matchesOwner =
                        filters.owner === 'all' ||
                        owner === filters.owner;


                    const matchesStatus =
                        filters.status === 'all' ||
                        status === filters.status;


                    const visible =
                        matchesSearch &&
                        matchesProject &&
                        matchesType &&
                        matchesOwner &&
                        matchesStatus;


                    $card.toggle(visible);

                });

            }


            function updateFilterCount() {

                let count = 0;


                if ($project.val() !== 'all') {
                    count++;
                }

                if ($type.val() !== 'all') {
                    count++;
                }

                if ($owner.val() !== 'all') {
                    count++;
                }

                if ($status.val() !== 'all') {
                    count++;
                }


                $filterCount.text(count);

                $filterCount.toggle(count > 0);

            }


            function updateActiveFilters() {

                const filters = getFilters();

                let html = '';


                if (filters.project !== 'all') {

                    html += `
                    <button
                        type="button"
                        class="wm-documents-page__filter-chip"
                        data-remove-filter="project"
                    >
                        Project: ${projectLabels[filters.project]}
                        <i class="ph ph-x"></i>
                    </button>
                `;

                }


                if (filters.type !== 'all') {

                    html += `
                    <button
                        type="button"
                        class="wm-documents-page__filter-chip"
                        data-remove-filter="type"
                    >
                        Type: ${typeLabels[filters.type]}
                        <i class="ph ph-x"></i>
                    </button>
                `;

                }


                if (filters.owner !== 'all') {

                    const ownerLabel =
                        $owner.find('option:selected').text();

                    html += `
                    <button
                        type="button"
                        class="wm-documents-page__filter-chip"
                        data-remove-filter="owner"
                    >
                        Owner: ${ownerLabel}
                        <i class="ph ph-x"></i>
                    </button>
                `;

                }


                if (filters.status !== 'all') {

                    html += `
                    <button
                        type="button"
                        class="wm-documents-page__filter-chip"
                        data-remove-filter="status"
                    >
                        Status: ${statusLabels[filters.status]}
                        <i class="ph ph-x"></i>
                    </button>
                `;

                }


                $activeFilters.html(html);

            }


            function updateEmptyState(count) {

                if (count === 0) {

                    $empty.addClass('is-visible');

                    $listView.hide();

                    $gridView.hide();

                    return;

                }


                $empty.removeClass('is-visible');


                if (currentView === 'list') {

                    $listView.show();

                    $gridView.hide();

                } else {

                    $listView.hide();

                    $gridView.show();

                }

            }


            function resetFilters() {

                $search.val('');

                $project.val('all');
                $type.val('all');
                $owner.val('all');
                $status.val('all');

                $searchClear.hide();

                filterDocuments();

            }


            function sortDocuments() {

                const sortValue = $sort.val();

                const $tbody =
                    $('#wm-document-table-body');

                const rows =
                    $tbody.find('[data-document]').get();


                rows.sort(function (a, b) {

                    const $a = $(a);
                    const $b = $(b);


                    if (sortValue === 'name-asc') {

                        return String(
                            $a.data('name')
                        ).localeCompare(
                            String($b.data('name'))
                        );

                    }


                    if (sortValue === 'name-desc') {

                        return String(
                            $b.data('name')
                        ).localeCompare(
                            String($a.data('name'))
                        );

                    }


                    if (sortValue === 'created') {

                        return String(
                            $b.data('created')
                        ).localeCompare(
                            String($a.data('created'))
                        );

                    }


                    return String(
                        $b.data('updated')
                    ).localeCompare(
                        String($a.data('updated'))
                    );

                });


                $.each(rows, function (_, row) {

                    $tbody.append(row);

                });


                filterDocuments();

            }


            function closeMenus() {

                $('.wm-documents-page__action')
                    .removeClass('is-open');

            }


            function getDocumentName($element) {

                const $row =
                    $element.closest('[data-document]');


                if ($row.length) {

                    return $row
                        .find('.wm-documents-page__document-name')
                        .text()
                        .trim();

                }


                return $element
                    .closest('[data-grid-document]')
                    .find('.wm-documents-page__grid-name')
                    .text()
                    .trim();

            }


            function handleDocumentAction(
                action,
                documentName
            ) {

                console.log(
                    'Document action:',
                    action,
                    documentName
                );

            }


            // ============================================================
            // Search
            // ============================================================

            $search.on('input', function () {

                const hasValue =
                    $.trim($(this).val()).length > 0;


                $searchClear.toggle(hasValue);

                filterDocuments();

            });


            $searchClear.on('click', function () {

                $search.val('');

                $(this).hide();

                filterDocuments();

                $search.trigger('focus');

            });


            // ============================================================
            // Filters
            // ============================================================

            $filterToggle.on('click', function () {

                $filters.toggleClass('is-visible');

            });


            $project
                .add($type)
                .add($owner)
                .add($status)
                .on('change', function () {

                    filterDocuments();

                });


            $('#wm-document-clear-filters')
                .add('#wm-document-empty-reset')
                .on('click', function () {

                    resetFilters();

                });


            $(document).on(
                'click',
                '[data-remove-filter]',
                function () {

                    const filter =
                        $(this).data('remove-filter');


                    if (filter === 'project') {
                        $project.val('all');
                    }


                    if (filter === 'type') {
                        $type.val('all');
                    }


                    if (filter === 'owner') {
                        $owner.val('all');
                    }


                    if (filter === 'status') {
                        $status.val('all');
                    }


                    filterDocuments();

                }
            );


            // ============================================================
            // Sorting
            // ============================================================

            $sort.on('change', function () {

                sortDocuments();

            });


            // ============================================================
            // View Switcher
            // ============================================================

            $viewButtons.on('click', function () {

                const view =
                    $(this).data('document-view');


                currentView = view;


                $viewButtons.removeClass('is-active');

                $(this).addClass('is-active');


                if (view === 'grid') {

                    $listView.hide();

                    $gridView.show();

                } else {

                    $gridView.hide();

                    $listView.show();

                }


                filterDocuments();

            });


            // ============================================================
            // Action Menus
            // ============================================================

            $(document).on(
                'click',
                '[data-document-menu]',
                function (event) {

                    event.stopPropagation();


                    const $action =
                        $(this).closest(
                            '.wm-documents-page__action'
                        );


                    $('.wm-documents-page__action')
                        .not($action)
                        .removeClass('is-open');


                    $action.toggleClass('is-open');

                }
            );


            $(document).on(
                'click',
                '[data-document-action]',
                function (event) {

                    event.stopPropagation();


                    const action =
                        $(this).data('document-action');


                    const documentName =
                        getDocumentName($(this));


                    closeMenus();


                    handleDocumentAction(
                        action,
                        documentName
                    );

                }
            );


            // ============================================================
            // Header Actions
            // ============================================================

            $(document).on(
                'click',
                '[data-document-action="create"]',
                function () {

                    console.log(
                        'Create new document'
                    );

                }
            );


            $(document).on(
                'click',
                '[data-document-action="new-folder"]',
                function () {

                    console.log(
                        'Create new document folder'
                    );

                }
            );


            // ============================================================
            // Select All
            // ============================================================

            $selectAll.on('change', function () {

                const checked =
                    $(this).is(':checked');


                $('#wm-document-table-body')
                    .find('[data-document]:visible')
                    .find('.wm-document-checkbox')
                    .prop('checked', checked);

            });


            $(document).on(
                'change',
                '.wm-document-checkbox',
                function () {

                    const $visibleCheckboxes =
                        $('#wm-document-table-body')
                            .find('[data-document]:visible')
                            .find('.wm-document-checkbox');


                    const checkedCount =
                        $visibleCheckboxes
                            .filter(':checked')
                            .length;


                    $selectAll.prop(
                        'checked',
                        checkedCount ===
                        $visibleCheckboxes.length &&
                        $visibleCheckboxes.length > 0
                    );

                }
            );


            // ============================================================
            // Document Links
            // ============================================================

            $(document).on(
                'click',
                '.wm-documents-page__document-name, .wm-documents-page__grid-name',
                function (event) {

                    event.preventDefault();


                    console.log(
                        'Open document:',
                        $(this).text().trim()
                    );

                }
            );


            $(document).on(
                'click',
                '.wm-documents-page__project',
                function (event) {

                    event.preventDefault();


                    console.log(
                        'Open project:',
                        $(this).text().trim()
                    );

                }
            );


            // ============================================================
            // Outside Click
            // ============================================================

            $(document).on(
                'click',
                function () {

                    closeMenus();

                }
            );


            // ============================================================
            // Escape
            // ============================================================

            $(document).on(
                'keydown',
                function (event) {

                    if (event.key === 'Escape') {

                        closeMenus();

                        $filters.removeClass(
                            'is-visible'
                        );

                    }

                }
            );


            // ============================================================
            // Initial
            // ============================================================

            $searchClear.hide();

            $filterCount.hide();

            $gridView.hide();

            filterDocuments();

        });
    </script>

@endpush
