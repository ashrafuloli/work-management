@extends('layout.app')

@section('main')

    <div class="wm-task-detail-page">

        {{-- =========================================================
             BREADCRUMB
        ========================================================== --}}

        <div class="wm-task-detail-breadcrumb">

            <a
                href="{{ route('tasks.index') }}"
                class="wm-task-detail-breadcrumb__link"
            >
                Tasks
            </a>

            <i class="ph ph-caret-right"></i>

            <a
                href="#"
                class="wm-task-detail-breadcrumb__link"
            >
                Website Redesign
            </a>

            <i class="ph ph-caret-right"></i>

            <span class="wm-task-detail-breadcrumb__current">
            TASK-024
        </span>

        </div>


        {{-- =========================================================
             HEADER
        ========================================================== --}}

        <div class="wm-task-detail-header">

            <div class="wm-task-detail-header__main">

                <button
                    type="button"
                    class="wm-task-detail-back"
                    onclick="history.back()"
                    aria-label="Go back"
                >
                    <i class="ph ph-arrow-left"></i>
                </button>


                <div class="wm-task-detail-header__content">

                    <div class="wm-task-detail-header__meta">

                    <span class="wm-task-detail-id">
                        TASK-024
                    </span>

                        <span class="wm-task-detail-meta-divider">
                        /
                    </span>

                        <span class="wm-task-detail-project">
                        Website Redesign
                    </span>

                    </div>


                    <h1
                        class="wm-task-detail-title"
                        id="wm-task-title"
                    >
                        Finalize homepage redesign
                    </h1>


                    <p class="wm-task-detail-subtitle">
                        Complete the final homepage design updates
                        before the development handoff.
                    </p>

                </div>

            </div>


            <div class="wm-task-detail-header__actions">

                <button
                    type="button"
                    class="wm-btn wm-btn--secondary"
                    id="wm-task-share"
                >
                    <i class="ph ph-share-network"></i>
                    <span>Share</span>
                </button>


                <button
                    type="button"
                    class="wm-btn wm-btn--secondary"
                    id="wm-task-edit"
                >
                    <i class="ph ph-pencil-simple"></i>
                    <span>Edit</span>
                </button>


                <div class="wm-task-detail-actions">

                    <button
                        type="button"
                        class="wm-btn wm-btn--secondary wm-btn--icon"
                        id="wm-task-action-toggle"
                        aria-expanded="false"
                        aria-label="More actions"
                    >
                        <i class="ph ph-dots-three"></i>
                    </button>


                    <div
                        class="wm-task-detail-action-menu"
                        id="wm-task-action-menu"
                    >

                        <button
                            type="button"
                            class="wm-task-detail-action-menu__item"
                            data-detail-action="duplicate"
                        >
                            <i class="ph ph-copy"></i>
                            <span>Duplicate Task</span>
                        </button>

                        <button
                            type="button"
                            class="wm-task-detail-action-menu__item"
                            data-detail-action="move"
                        >
                            <i class="ph ph-arrow-right"></i>
                            <span>Move Task</span>
                        </button>

                        <button
                            type="button"
                            class="wm-task-detail-action-menu__item"
                            data-detail-action="archive"
                        >
                            <i class="ph ph-archive"></i>
                            <span>Archive Task</span>
                        </button>

                        <div class="wm-task-detail-action-menu__divider"></div>

                        <button
                            type="button"
                            class="wm-task-detail-action-menu__item wm-task-detail-action-menu__item--danger"
                            data-detail-action="delete"
                        >
                            <i class="ph ph-trash"></i>
                            <span>Delete Task</span>
                        </button>

                    </div>

                </div>

            </div>

        </div>


        {{-- =========================================================
             STATUS BAR
        ========================================================== --}}

        <div class="wm-task-detail-statusbar">

            <div class="wm-task-detail-statusbar__item">

            <span class="wm-task-detail-statusbar__label">
                Status
            </span>

                <div class="wm-task-detail-status-dropdown">

                    <button
                        type="button"
                        class="wm-task-status-control wm-task-status-control--progress"
                        id="wm-task-status-control"
                        aria-expanded="false"
                    >
                        <span class="wm-task-status-control__dot"></span>

                        <span id="wm-task-status-label">
                        In Progress
                    </span>

                        <i class="ph ph-caret-down"></i>
                    </button>


                    <div
                        class="wm-task-status-dropdown__menu"
                        id="wm-task-status-menu"
                    >

                        <button
                            type="button"
                            class="wm-task-status-option"
                            data-status="todo"
                            data-label="To Do"
                        >
                            <span class="wm-task-status-option__dot wm-task-status-option__dot--todo"></span>
                            <span>To Do</span>
                        </button>

                        <button
                            type="button"
                            class="wm-task-status-option is-active"
                            data-status="progress"
                            data-label="In Progress"
                        >
                            <span class="wm-task-status-option__dot wm-task-status-option__dot--progress"></span>
                            <span>In Progress</span>
                        </button>

                        <button
                            type="button"
                            class="wm-task-status-option"
                            data-status="completed"
                            data-label="Completed"
                        >
                            <span class="wm-task-status-option__dot wm-task-status-option__dot--completed"></span>
                            <span>Completed</span>
                        </button>

                        <button
                            type="button"
                            class="wm-task-status-option"
                            data-status="overdue"
                            data-label="Overdue"
                        >
                            <span class="wm-task-status-option__dot wm-task-status-option__dot--overdue"></span>
                            <span>Overdue</span>
                        </button>

                    </div>

                </div>

            </div>


            <div class="wm-task-detail-statusbar__item">

            <span class="wm-task-detail-statusbar__label">
                Priority
            </span>

                <div class="wm-task-priority-dropdown">

                    <button
                        type="button"
                        class="wm-task-priority-control wm-task-priority-control--high"
                        id="wm-task-priority-control"
                        aria-expanded="false"
                    >
                    <span class="wm-task-priority-control__icon">
                        <i class="ph ph-flag"></i>
                    </span>

                        <span id="wm-task-priority-label">
                        High
                    </span>

                        <i class="ph ph-caret-down"></i>
                    </button>


                    <div
                        class="wm-task-priority-dropdown__menu"
                        id="wm-task-priority-menu"
                    >

                        <button
                            type="button"
                            class="wm-task-priority-option"
                            data-priority="high"
                        >
                        <span class="wm-task-priority-option__icon wm-task-priority-option__icon--high">
                            <i class="ph ph-flag"></i>
                        </span>

                            <span>High</span>
                        </button>

                        <button
                            type="button"
                            class="wm-task-priority-option"
                            data-priority="medium"
                        >
                        <span class="wm-task-priority-option__icon wm-task-priority-option__icon--medium">
                            <i class="ph ph-flag"></i>
                        </span>

                            <span>Medium</span>
                        </button>

                        <button
                            type="button"
                            class="wm-task-priority-option"
                            data-priority="normal"
                        >
                        <span class="wm-task-priority-option__icon wm-task-priority-option__icon--normal">
                            <i class="ph ph-flag"></i>
                        </span>

                            <span>Normal</span>
                        </button>

                        <button
                            type="button"
                            class="wm-task-priority-option"
                            data-priority="low"
                        >
                        <span class="wm-task-priority-option__icon wm-task-priority-option__icon--low">
                            <i class="ph ph-flag"></i>
                        </span>

                            <span>Low</span>
                        </button>

                    </div>

                </div>

            </div>


            <div class="wm-task-detail-statusbar__item">

            <span class="wm-task-detail-statusbar__label">
                Assignee
            </span>

                <button
                    type="button"
                    class="wm-task-assignee-control"
                    id="wm-task-assignee-control"
                >

                <span class="wm-task-assignee-control__avatar">
                    AM
                </span>

                    <span class="wm-task-assignee-control__name">
                    Alex Morgan
                </span>

                    <i class="ph ph-caret-down"></i>

                </button>

            </div>


            <div class="wm-task-detail-statusbar__item">

            <span class="wm-task-detail-statusbar__label">
                Due Date
            </span>

                <button
                    type="button"
                    class="wm-task-due-control"
                    id="wm-task-due-control"
                >

                    <i class="ph ph-calendar-blank"></i>

                    <span>
                    Sep 25, 2026
                </span>

                </button>

            </div>

        </div>


        {{-- =========================================================
             MAIN CONTENT
        ========================================================== --}}

        <div class="wm-task-detail-layout">


            {{-- =====================================================
                 LEFT CONTENT
            ====================================================== --}}

            <div class="wm-task-detail-main">


                {{-- =================================================
                     DESCRIPTION
                ================================================== --}}

                <section class="wm-task-detail-card">

                    <div class="wm-task-detail-card__header">

                        <div>

                            <h2 class="wm-task-detail-card__title">
                                Description
                            </h2>

                            <p class="wm-task-detail-card__subtitle">
                                Details and requirements for this task.
                            </p>

                        </div>


                        <button
                            type="button"
                            class="wm-task-detail-card__edit"
                            id="wm-description-edit"
                        >
                            <i class="ph ph-pencil-simple"></i>
                            Edit
                        </button>

                    </div>


                    <div
                        class="wm-task-description"
                        id="wm-task-description"
                    >

                        <p>
                            Finalize the homepage redesign based on
                            the latest feedback from the design review.
                            Make sure all responsive states are completed
                            before handing the final design to the
                            development team.
                        </p>

                        <p>
                            The final version should include the updated
                            hero section, project showcase, navigation,
                            CTA blocks, footer, and mobile layouts.
                        </p>


                        <ul>

                            <li>
                                Apply the approved visual direction.
                            </li>

                            <li>
                                Verify desktop, tablet, and mobile layouts.
                            </li>

                            <li>
                                Prepare final assets for development.
                            </li>

                        </ul>

                    </div>


                    <div
                        class="wm-task-description-editor"
                        id="wm-task-description-editor"
                        hidden
                    >

                    <textarea
                        class="wm-form-control"
                        id="wm-task-description-input"
                        rows="8"
                    >Finalize the homepage redesign based on the latest feedback from the design review. Make sure all responsive states are completed before handing the final design to the development team.

The final version should include the updated hero section, project showcase, navigation, CTA blocks, footer, and mobile layouts.</textarea>


                        <div class="wm-task-description-editor__actions">

                            <button
                                type="button"
                                class="wm-btn wm-btn--secondary wm-btn--sm"
                                id="wm-description-cancel"
                            >
                                Cancel
                            </button>

                            <button
                                type="button"
                                class="wm-btn wm-btn--primary wm-btn--sm"
                                id="wm-description-save"
                            >
                                <i class="ph ph-check"></i>
                                Save Changes
                            </button>

                        </div>

                    </div>

                </section>



                {{-- =================================================
                     SUBTASKS
                ================================================== --}}

                <section class="wm-task-detail-card">

                    <div class="wm-task-detail-card__header">

                        <div>

                            <div class="wm-task-detail-card__title-row">

                                <h2 class="wm-task-detail-card__title">
                                    Subtasks
                                </h2>

                                <span
                                    class="wm-task-subtask-count"
                                    id="wm-subtask-count"
                                >
                                3/5
                            </span>

                            </div>

                            <p class="wm-task-detail-card__subtitle">
                                Break this task into smaller actionable items.
                            </p>

                        </div>


                        <button
                            type="button"
                            class="wm-task-detail-card__edit"
                            id="wm-add-subtask"
                        >
                            <i class="ph ph-plus"></i>
                            Add Subtask
                        </button>

                    </div>


                    <div class="wm-task-progress">

                        <div class="wm-task-progress__header">

                        <span>
                            Completion
                        </span>

                            <strong id="wm-subtask-progress-label">
                                60%
                            </strong>

                        </div>

                        <div class="wm-task-progress__bar">

                        <span
                            id="wm-subtask-progress"
                            style="width: 60%;"
                        ></span>

                        </div>

                    </div>


                    <div
                        class="wm-task-subtasks"
                        id="wm-task-subtasks"
                    >

                        {{-- Subtask 01 --}}
                        <div
                            class="wm-task-subtask is-completed"
                            data-subtask
                        >

                            <label class="wm-task-subtask__check">

                                <input
                                    type="checkbox"
                                    checked
                                >

                                <span class="wm-task-subtask__checkmark">
                                <i class="ph ph-check"></i>
                            </span>

                            </label>


                            <div class="wm-task-subtask__content">

                            <span class="wm-task-subtask__title">
                                Review latest design feedback
                            </span>

                                <span class="wm-task-subtask__meta">
                                Completed yesterday
                            </span>

                            </div>


                            <button
                                type="button"
                                class="wm-task-subtask__delete"
                                aria-label="Delete subtask"
                            >
                                <i class="ph ph-trash"></i>
                            </button>

                        </div>


                        {{-- Subtask 02 --}}
                        <div
                            class="wm-task-subtask is-completed"
                            data-subtask
                        >

                            <label class="wm-task-subtask__check">

                                <input
                                    type="checkbox"
                                    checked
                                >

                                <span class="wm-task-subtask__checkmark">
                                <i class="ph ph-check"></i>
                            </span>

                            </label>


                            <div class="wm-task-subtask__content">

                            <span class="wm-task-subtask__title">
                                Update hero section
                            </span>

                                <span class="wm-task-subtask__meta">
                                Completed today
                            </span>

                            </div>


                            <button
                                type="button"
                                class="wm-task-subtask__delete"
                                aria-label="Delete subtask"
                            >
                                <i class="ph ph-trash"></i>
                            </button>

                        </div>


                        {{-- Subtask 03 --}}
                        <div
                            class="wm-task-subtask is-completed"
                            data-subtask
                        >

                            <label class="wm-task-subtask__check">

                                <input
                                    type="checkbox"
                                    checked
                                >

                                <span class="wm-task-subtask__checkmark">
                                <i class="ph ph-check"></i>
                            </span>

                            </label>


                            <div class="wm-task-subtask__content">

                            <span class="wm-task-subtask__title">
                                Update navigation states
                            </span>

                                <span class="wm-task-subtask__meta">
                                Completed today
                            </span>

                            </div>


                            <button
                                type="button"
                                class="wm-task-subtask__delete"
                                aria-label="Delete subtask"
                            >
                                <i class="ph ph-trash"></i>
                            </button>

                        </div>


                        {{-- Subtask 04 --}}
                        <div
                            class="wm-task-subtask"
                            data-subtask
                        >

                            <label class="wm-task-subtask__check">

                                <input type="checkbox">

                                <span class="wm-task-subtask__checkmark">
                                <i class="ph ph-check"></i>
                            </span>

                            </label>


                            <div class="wm-task-subtask__content">

                            <span class="wm-task-subtask__title">
                                Complete responsive layouts
                            </span>

                                <span class="wm-task-subtask__meta">
                                Due Sep 24
                            </span>

                            </div>


                            <button
                                type="button"
                                class="wm-task-subtask__delete"
                                aria-label="Delete subtask"
                            >
                                <i class="ph ph-trash"></i>
                            </button>

                        </div>


                        {{-- Subtask 05 --}}
                        <div
                            class="wm-task-subtask"
                            data-subtask
                        >

                            <label class="wm-task-subtask__check">

                                <input type="checkbox">

                                <span class="wm-task-subtask__checkmark">
                                <i class="ph ph-check"></i>
                            </span>

                            </label>


                            <div class="wm-task-subtask__content">

                            <span class="wm-task-subtask__title">
                                Prepare development handoff
                            </span>

                                <span class="wm-task-subtask__meta">
                                Due Sep 25
                            </span>

                            </div>


                            <button
                                type="button"
                                class="wm-task-subtask__delete"
                                aria-label="Delete subtask"
                            >
                                <i class="ph ph-trash"></i>
                            </button>

                        </div>

                    </div>


                    {{-- Add Subtask Form --}}

                    <div
                        class="wm-task-add-subtask"
                        id="wm-task-add-subtask"
                        hidden
                    >

                        <div class="wm-task-add-subtask__input">

                            <i class="ph ph-check-square"></i>

                            <input
                                type="text"
                                class="wm-form-control"
                                id="wm-new-subtask"
                                placeholder="Write a subtask..."
                            >

                        </div>


                        <div class="wm-task-add-subtask__actions">

                            <button
                                type="button"
                                class="wm-btn wm-btn--secondary wm-btn--sm"
                                id="wm-cancel-subtask"
                            >
                                Cancel
                            </button>

                            <button
                                type="button"
                                class="wm-btn wm-btn--primary wm-btn--sm"
                                id="wm-save-subtask"
                            >
                                Add Subtask
                            </button>

                        </div>

                    </div>

                </section>



                {{-- =================================================
                     COMMENTS
                ================================================== --}}

                <section class="wm-task-detail-card">

                    <div class="wm-task-detail-card__header">

                        <div>

                            <h2 class="wm-task-detail-card__title">
                                Comments
                            </h2>

                            <p class="wm-task-detail-card__subtitle">
                                Discuss this task with your team.
                            </p>

                        </div>

                    </div>


                    <div class="wm-task-comment-form">

                        <div class="wm-task-comment-form__avatar">
                            AO
                        </div>


                        <div class="wm-task-comment-form__body">

                        <textarea
                            class="wm-form-control"
                            id="wm-task-comment"
                            rows="4"
                            placeholder="Write a comment..."
                        ></textarea>


                            <div class="wm-task-comment-form__footer">

                                <div class="wm-task-comment-form__tools">

                                    <button
                                        type="button"
                                        title="Attach file"
                                    >
                                        <i class="ph ph-paperclip"></i>
                                    </button>

                                    <button
                                        type="button"
                                        title="Mention"
                                    >
                                        <i class="ph ph-at"></i>
                                    </button>

                                </div>


                                <button
                                    type="button"
                                    class="wm-btn wm-btn--primary wm-btn--sm"
                                    id="wm-post-comment"
                                >
                                    <i class="ph ph-paper-plane-tilt"></i>
                                    Post Comment
                                </button>

                            </div>

                        </div>

                    </div>


                    <div
                        class="wm-task-comments"
                        id="wm-task-comments"
                    >

                        {{-- Comment --}}
                        <article class="wm-task-comment">

                            <div class="wm-task-comment__avatar">
                                JD
                            </div>


                            <div class="wm-task-comment__content">

                                <div class="wm-task-comment__header">

                                    <div>

                                        <strong>
                                            John Davis
                                        </strong>

                                        <span>
                                        2 hours ago
                                    </span>

                                    </div>

                                    <button
                                        type="button"
                                        class="wm-task-comment__menu"
                                        aria-label="Comment actions"
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                </div>


                                <p>
                                    The latest homepage direction looks good.
                                    I have updated the responsive spacing and
                                    mobile navigation states.
                                </p>


                                <div class="wm-task-comment__footer">

                                    <button type="button">
                                        <i class="ph ph-thumbs-up"></i>
                                        4
                                    </button>

                                    <button type="button">
                                        Reply
                                    </button>

                                </div>

                            </div>

                        </article>


                        {{-- Comment --}}
                        <article class="wm-task-comment">

                            <div class="wm-task-comment__avatar wm-task-comment__avatar--purple">
                                MK
                            </div>


                            <div class="wm-task-comment__content">

                                <div class="wm-task-comment__header">

                                    <div>

                                        <strong>
                                            Maria Kim
                                        </strong>

                                        <span>
                                        Yesterday
                                    </span>

                                    </div>

                                    <button
                                        type="button"
                                        class="wm-task-comment__menu"
                                        aria-label="Comment actions"
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                </div>


                                <p>
                                    Please make sure the final CTA section
                                    uses the updated copy from the campaign brief.
                                </p>


                                <div class="wm-task-comment__footer">

                                    <button type="button">
                                        <i class="ph ph-thumbs-up"></i>
                                        2
                                    </button>

                                    <button type="button">
                                        Reply
                                    </button>

                                </div>

                            </div>

                        </article>

                    </div>

                </section>



                {{-- =================================================
                     ACTIVITY
                ================================================== --}}

                <section class="wm-task-detail-card">

                    <div class="wm-task-detail-card__header">

                        <div>

                            <h2 class="wm-task-detail-card__title">
                                Activity
                            </h2>

                            <p class="wm-task-detail-card__subtitle">
                                Recent changes and task history.
                            </p>

                        </div>

                    </div>


                    <div class="wm-task-activity">

                        <div class="wm-task-activity__item">

                            <div class="wm-task-activity__icon wm-task-activity__icon--blue">
                                <i class="ph ph-pencil-simple"></i>
                            </div>

                            <div class="wm-task-activity__content">

                                <p>
                                    <strong>
                                        Alex Morgan
                                    </strong>

                                    updated the task description.
                                </p>

                                <span>
                                12 minutes ago
                            </span>

                            </div>

                        </div>


                        <div class="wm-task-activity__item">

                            <div class="wm-task-activity__icon wm-task-activity__icon--green">
                                <i class="ph ph-check-circle"></i>
                            </div>

                            <div class="wm-task-activity__content">

                                <p>
                                    <strong>
                                        John Davis
                                    </strong>

                                    completed a subtask.
                                </p>

                                <span>
                                1 hour ago
                            </span>

                            </div>

                        </div>


                        <div class="wm-task-activity__item">

                            <div class="wm-task-activity__icon wm-task-activity__icon--orange">
                                <i class="ph ph-flag"></i>
                            </div>

                            <div class="wm-task-activity__content">

                                <p>
                                    Priority changed from
                                    <strong>
                                        Medium
                                    </strong>
                                    to
                                    <strong>
                                        High
                                    </strong>.
                                </p>

                                <span>
                                Yesterday
                            </span>

                            </div>

                        </div>


                        <div class="wm-task-activity__item">

                            <div class="wm-task-activity__icon wm-task-activity__icon--purple">
                                <i class="ph ph-user-plus"></i>
                            </div>

                            <div class="wm-task-activity__content">

                                <p>
                                    <strong>
                                        Alex Morgan
                                    </strong>

                                    was assigned to this task.
                                </p>

                                <span>
                                Sep 21, 2026
                            </span>

                            </div>

                        </div>

                    </div>

                </section>

            </div>



            {{-- =====================================================
                 RIGHT SIDEBAR
            ====================================================== --}}

            <aside class="wm-task-detail-sidebar">


                {{-- =================================================
                     TASK DETAILS
                ================================================== --}}

                <section class="wm-task-detail-sidebar-card">

                    <div class="wm-task-detail-sidebar-card__header">

                        <h2>
                            Task Details
                        </h2>

                    </div>


                    <div class="wm-task-detail-properties">


                        {{-- Project --}}
                        <div class="wm-task-detail-property">

                        <span class="wm-task-detail-property__label">
                            <i class="ph ph-folder-simple"></i>
                            Project
                        </span>

                            <a
                                href="#"
                                class="wm-task-detail-property__value wm-task-detail-property__value--link"
                            >
                                Website Redesign
                            </a>

                        </div>


                        {{-- Assignee --}}
                        <div class="wm-task-detail-property">

                        <span class="wm-task-detail-property__label">
                            <i class="ph ph-user"></i>
                            Assignee
                        </span>

                            <div class="wm-task-detail-property__person">

                            <span class="wm-task-detail-property__avatar">
                                AM
                            </span>

                                <span>
                                Alex Morgan
                            </span>

                            </div>

                        </div>


                        {{-- Created --}}
                        <div class="wm-task-detail-property">

                        <span class="wm-task-detail-property__label">
                            <i class="ph ph-calendar-plus"></i>
                            Created
                        </span>

                            <span class="wm-task-detail-property__value">
                            Sep 18, 2026
                        </span>

                        </div>


                        {{-- Updated --}}
                        <div class="wm-task-detail-property">

                        <span class="wm-task-detail-property__label">
                            <i class="ph ph-clock"></i>
                            Updated
                        </span>

                            <span class="wm-task-detail-property__value">
                            12 min ago
                        </span>

                        </div>


                        {{-- Estimate --}}
                        <div class="wm-task-detail-property">

                        <span class="wm-task-detail-property__label">
                            <i class="ph ph-timer"></i>
                            Estimate
                        </span>

                            <span class="wm-task-detail-property__value">
                            8 hours
                        </span>

                        </div>


                        {{-- Time --}}
                        <div class="wm-task-detail-property">

                        <span class="wm-task-detail-property__label">
                            <i class="ph ph-hourglass"></i>
                            Time Spent
                        </span>

                            <span class="wm-task-detail-property__value">
                            5h 20m
                        </span>

                        </div>

                    </div>

                </section>



                {{-- =================================================
                     TAGS
                ================================================== --}}

                <section class="wm-task-detail-sidebar-card">

                    <div class="wm-task-detail-sidebar-card__header">

                        <h2>
                            Tags
                        </h2>

                        <button
                            type="button"
                            class="wm-task-detail-sidebar-card__add"
                        >
                            <i class="ph ph-plus"></i>
                        </button>

                    </div>


                    <div class="wm-task-tags">

                    <span class="wm-task-tag wm-task-tag--blue">
                        Design
                    </span>

                        <span class="wm-task-tag wm-task-tag--purple">
                        Homepage
                    </span>

                        <span class="wm-task-tag wm-task-tag--green">
                        Frontend
                    </span>

                    </div>

                </section>



                {{-- =================================================
                     ATTACHMENTS
                ================================================== --}}

                <section class="wm-task-detail-sidebar-card">

                    <div class="wm-task-detail-sidebar-card__header">

                        <div>

                            <h2>
                                Attachments
                            </h2>

                            <span class="wm-task-detail-sidebar-card__count">
                            3 files
                        </span>

                        </div>

                        <button
                            type="button"
                            class="wm-task-detail-sidebar-card__add"
                        >
                            <i class="ph ph-plus"></i>
                        </button>

                    </div>


                    <div class="wm-task-attachments">


                        <a
                            href="#"
                            class="wm-task-attachment"
                        >

                        <span class="wm-task-attachment__icon wm-task-attachment__icon--figma">
                            <i class="ph ph-file"></i>
                        </span>

                            <span class="wm-task-attachment__content">

                            <strong>
                                homepage-final.fig
                            </strong>

                            <span>
                                12.4 MB
                            </span>

                        </span>

                            <i class="ph ph-download-simple"></i>

                        </a>


                        <a
                            href="#"
                            class="wm-task-attachment"
                        >

                        <span class="wm-task-attachment__icon wm-task-attachment__icon--image">
                            <i class="ph ph-image"></i>
                        </span>

                            <span class="wm-task-attachment__content">

                            <strong>
                                homepage-preview.png
                            </strong>

                            <span>
                                2.8 MB
                            </span>

                        </span>

                            <i class="ph ph-download-simple"></i>

                        </a>


                        <a
                            href="#"
                            class="wm-task-attachment"
                        >

                        <span class="wm-task-attachment__icon wm-task-attachment__icon--pdf">
                            <i class="ph ph-file-pdf"></i>
                        </span>

                            <span class="wm-task-attachment__content">

                            <strong>
                                design-notes.pdf
                            </strong>

                            <span>
                                840 KB
                            </span>

                        </span>

                            <i class="ph ph-download-simple"></i>

                        </a>

                    </div>

                </section>



                {{-- =================================================
                     WATCHERS
                ================================================== --}}

                <section class="wm-task-detail-sidebar-card">

                    <div class="wm-task-detail-sidebar-card__header">

                        <div>

                            <h2>
                                Watchers
                            </h2>

                            <span class="wm-task-detail-sidebar-card__count">
                            4 people
                        </span>

                        </div>

                        <button
                            type="button"
                            class="wm-task-detail-sidebar-card__add"
                        >
                            <i class="ph ph-plus"></i>
                        </button>

                    </div>


                    <div class="wm-task-watchers">

                        <div class="wm-task-watcher">
                        <span class="wm-task-watcher__avatar">
                            AM
                        </span>
                        </div>

                        <div class="wm-task-watcher">
                        <span class="wm-task-watcher__avatar wm-task-watcher__avatar--green">
                            JD
                        </span>
                        </div>

                        <div class="wm-task-watcher">
                        <span class="wm-task-watcher__avatar wm-task-watcher__avatar--purple">
                            MK
                        </span>
                        </div>

                        <div class="wm-task-watcher">
                        <span class="wm-task-watcher__avatar wm-task-watcher__avatar--orange">
                            OL
                        </span>
                        </div>

                    </div>

                </section>

            </aside>

        </div>

    </div>

@endsection


@push('script')

    <script>

        document.addEventListener('DOMContentLoaded', function () {

            'use strict';


            // =========================================================
            // ELEMENTS
            // =========================================================

            const actionToggle =
                document.getElementById(
                    'wm-task-action-toggle'
                );

            const actionMenu =
                document.getElementById(
                    'wm-task-action-menu'
                );

            const detailActions =
                document.querySelector(
                    '.wm-task-detail-actions'
                );


            const statusControl =
                document.getElementById(
                    'wm-task-status-control'
                );

            const statusMenu =
                document.getElementById(
                    'wm-task-status-menu'
                );

            const statusLabel =
                document.getElementById(
                    'wm-task-status-label'
                );


            const priorityControl =
                document.getElementById(
                    'wm-task-priority-control'
                );

            const priorityMenu =
                document.getElementById(
                    'wm-task-priority-menu'
                );

            const priorityLabel =
                document.getElementById(
                    'wm-task-priority-label'
                );


            const description =
                document.getElementById(
                    'wm-task-description'
                );

            const descriptionEditor =
                document.getElementById(
                    'wm-task-description-editor'
                );

            const descriptionInput =
                document.getElementById(
                    'wm-task-description-input'
                );

            const descriptionEdit =
                document.getElementById(
                    'wm-description-edit'
                );

            const descriptionCancel =
                document.getElementById(
                    'wm-description-cancel'
                );

            const descriptionSave =
                document.getElementById(
                    'wm-description-save'
                );


            const subtasks =
                document.getElementById(
                    'wm-task-subtasks'
                );

            const addSubtaskButton =
                document.getElementById(
                    'wm-add-subtask'
                );

            const addSubtaskBox =
                document.getElementById(
                    'wm-task-add-subtask'
                );

            const newSubtaskInput =
                document.getElementById(
                    'wm-new-subtask'
                );

            const saveSubtask =
                document.getElementById(
                    'wm-save-subtask'
                );

            const cancelSubtask =
                document.getElementById(
                    'wm-cancel-subtask'
                );

            const subtaskCount =
                document.getElementById(
                    'wm-subtask-count'
                );

            const subtaskProgress =
                document.getElementById(
                    'wm-subtask-progress'
                );

            const subtaskProgressLabel =
                document.getElementById(
                    'wm-subtask-progress-label'
                );


            const commentInput =
                document.getElementById(
                    'wm-task-comment'
                );

            const postComment =
                document.getElementById(
                    'wm-post-comment'
                );

            const comments =
                document.getElementById(
                    'wm-task-comments'
                );


            // =========================================================
            // CLOSE DROPDOWNS
            // =========================================================

            function closeAllDropdowns(
                except = null
            ) {

                document
                    .querySelectorAll(
                        '.wm-task-detail-actions.is-open'
                    )
                    .forEach(function (item) {

                        if (
                            except &&
                            item === except
                        ) {
                            return;
                        }

                        item.classList.remove(
                            'is-open'
                        );

                    });


                document
                    .querySelectorAll(
                        '.wm-task-detail-status-dropdown.is-open'
                    )
                    .forEach(function (item) {

                        if (
                            except &&
                            item === except
                        ) {
                            return;
                        }

                        item.classList.remove(
                            'is-open'
                        );

                    });


                document
                    .querySelectorAll(
                        '.wm-task-priority-dropdown.is-open'
                    )
                    .forEach(function (item) {

                        if (
                            except &&
                            item === except
                        ) {
                            return;
                        }

                        item.classList.remove(
                            'is-open'
                        );

                    });


                document
                    .querySelectorAll(
                        '[aria-expanded="true"]'
                    )
                    .forEach(function (button) {

                        if (
                            except &&
                            except.contains(button)
                        ) {
                            return;
                        }

                        button.setAttribute(
                            'aria-expanded',
                            'false'
                        );

                    });

            }


            // =========================================================
            // MORE ACTIONS
            // =========================================================

            if (
                actionToggle &&
                detailActions
            ) {

                actionToggle.addEventListener(
                    'click',
                    function (event) {

                        event.preventDefault();

                        event.stopPropagation();


                        const isOpen =
                            detailActions.classList.contains(
                                'is-open'
                            );


                        closeAllDropdowns();


                        if (!isOpen) {

                            detailActions.classList.add(
                                'is-open'
                            );

                            actionToggle.setAttribute(
                                'aria-expanded',
                                'true'
                            );

                        }

                    }
                );

            }


            // =========================================================
            // STATUS DROPDOWN
            // =========================================================

            if (
                statusControl &&
                statusMenu
            ) {

                statusControl.addEventListener(
                    'click',
                    function (event) {

                        event.preventDefault();

                        event.stopPropagation();


                        const wrapper =
                            statusControl.closest(
                                '.wm-task-detail-status-dropdown'
                            );


                        const isOpen =
                            wrapper.classList.contains(
                                'is-open'
                            );


                        closeAllDropdowns();


                        if (!isOpen) {

                            wrapper.classList.add(
                                'is-open'
                            );

                            statusControl.setAttribute(
                                'aria-expanded',
                                'true'
                            );

                        }

                    }
                );

            }


            // =========================================================
            // STATUS SELECT
            // =========================================================

            document
                .querySelectorAll(
                    '.wm-task-status-option'
                )
                .forEach(function (option) {

                    option.addEventListener(
                        'click',
                        function () {

                            const status =
                                option.dataset.status;

                            const label =
                                option.dataset.label;


                            statusLabel.textContent =
                                label;


                            statusControl.className =
                                'wm-task-status-control';


                            statusControl.classList.add(
                                `wm-task-status-control--${status}`
                            );


                            document
                                .querySelectorAll(
                                    '.wm-task-status-option'
                                )
                                .forEach(
                                    function (item) {

                                        item.classList.remove(
                                            'is-active'
                                        );

                                    }
                                );


                            option.classList.add(
                                'is-active'
                            );


                            closeAllDropdowns();


                            console.log(
                                'Task status changed:',
                                status
                            );

                        }
                    );

                });


            // =========================================================
            // PRIORITY DROPDOWN
            // =========================================================

            if (priorityControl) {

                priorityControl.addEventListener(
                    'click',
                    function (event) {

                        event.preventDefault();

                        event.stopPropagation();


                        const wrapper =
                            priorityControl.closest(
                                '.wm-task-priority-dropdown'
                            );


                        const isOpen =
                            wrapper.classList.contains(
                                'is-open'
                            );


                        closeAllDropdowns();


                        if (!isOpen) {

                            wrapper.classList.add(
                                'is-open'
                            );

                            priorityControl.setAttribute(
                                'aria-expanded',
                                'true'
                            );

                        }

                    }
                );

            }


            // =========================================================
            // PRIORITY SELECT
            // =========================================================

            document
                .querySelectorAll(
                    '.wm-task-priority-option'
                )
                .forEach(function (option) {

                    option.addEventListener(
                        'click',
                        function () {

                            const priority =
                                option.dataset.priority;


                            const label =
                                option.querySelector(
                                    'span:last-child'
                                );


                            if (label) {

                                priorityLabel.textContent =
                                    label.textContent.trim();

                            }


                            priorityControl.className =
                                'wm-task-priority-control';


                            priorityControl.classList.add(
                                `wm-task-priority-control--${priority}`
                            );


                            document
                                .querySelectorAll(
                                    '.wm-task-priority-option'
                                )
                                .forEach(
                                    function (item) {

                                        item.classList.remove(
                                            'is-active'
                                        );

                                    }
                                );


                            option.classList.add(
                                'is-active'
                            );


                            closeAllDropdowns();


                            console.log(
                                'Task priority changed:',
                                priority
                            );

                        }
                    );

                });


            // =========================================================
            // DESCRIPTION EDIT
            // =========================================================

            if (descriptionEdit) {

                descriptionEdit.addEventListener(
                    'click',
                    function () {

                        description.hidden = true;

                        descriptionEditor.hidden = false;

                        descriptionInput.focus();

                    }
                );

            }


            if (descriptionCancel) {

                descriptionCancel.addEventListener(
                    'click',
                    function () {

                        descriptionEditor.hidden = true;

                        description.hidden = false;

                    }
                );

            }


            if (descriptionSave) {

                descriptionSave.addEventListener(
                    'click',
                    function () {

                        const value =
                            descriptionInput.value.trim();


                        if (!value) {
                            return;
                        }


                        const paragraphs =
                            value.split(/\n+/);


                        description.innerHTML =
                            paragraphs
                                .map(function (paragraph) {

                                    return `<p>${escapeHtml(
                                        paragraph
                                    )}</p>`;

                                })
                                .join('');


                        descriptionEditor.hidden = true;

                        description.hidden = false;


                        console.log(
                            'Description saved'
                        );

                    }
                );

            }


            // =========================================================
            // SUBTASK PROGRESS
            // =========================================================

            function updateSubtaskProgress() {

                const items =
                    document.querySelectorAll(
                        '[data-subtask]'
                    );


                const total =
                    items.length;


                const completed =
                    document.querySelectorAll(
                        '[data-subtask].is-completed'
                    ).length;


                if (!total) {

                    subtaskProgress.style.width =
                        '0%';

                    subtaskProgressLabel.textContent =
                        '0%';

                    subtaskCount.textContent =
                        '0/0';

                    return;

                }


                const percentage =
                    Math.round(
                        (completed / total) * 100
                    );


                subtaskProgress.style.width =
                    `${percentage}%`;


                subtaskProgressLabel.textContent =
                    `${percentage}%`;


                subtaskCount.textContent =
                    `${completed}/${total}`;

            }


            // =========================================================
            // SUBTASK CHECKBOX
            // =========================================================

            function bindSubtaskCheckbox(
                checkbox
            ) {

                checkbox.addEventListener(
                    'change',
                    function () {

                        const item =
                            checkbox.closest(
                                '[data-subtask]'
                            );


                        if (!item) {
                            return;
                        }


                        item.classList.toggle(
                            'is-completed',
                            checkbox.checked
                        );


                        updateSubtaskProgress();

                    }
                );

            }


            document
                .querySelectorAll(
                    '[data-subtask] input[type="checkbox"]'
                )
                .forEach(function (checkbox) {

                    bindSubtaskCheckbox(
                        checkbox
                    );

                });


            // =========================================================
            // SUBTASK DELETE
            // =========================================================

            function bindSubtaskDelete(
                button
            ) {

                button.addEventListener(
                    'click',
                    function () {

                        const item =
                            button.closest(
                                '[data-subtask]'
                            );


                        if (!item) {
                            return;
                        }


                        item.remove();

                        updateSubtaskProgress();

                    }
                );

            }


            document
                .querySelectorAll(
                    '.wm-task-subtask__delete'
                )
                .forEach(function (button) {

                    bindSubtaskDelete(
                        button
                    );

                });


            // =========================================================
            // ADD SUBTASK
            // =========================================================

            if (addSubtaskButton) {

                addSubtaskButton.addEventListener(
                    'click',
                    function () {

                        addSubtaskBox.hidden = false;

                        newSubtaskInput.focus();

                    }
                );

            }


            if (cancelSubtask) {

                cancelSubtask.addEventListener(
                    'click',
                    function () {

                        newSubtaskInput.value = '';

                        addSubtaskBox.hidden = true;

                    }
                );

            }


            function createSubtask(
                title
            ) {

                const item =
                    document.createElement('div');


                item.className =
                    'wm-task-subtask';


                item.setAttribute(
                    'data-subtask',
                    ''
                );


                item.innerHTML = `
            <label class="wm-task-subtask__check">

                <input type="checkbox">

                <span class="wm-task-subtask__checkmark">
                    <i class="ph ph-check"></i>
                </span>

            </label>

            <div class="wm-task-subtask__content">

                <span class="wm-task-subtask__title">
                    ${escapeHtml(title)}
                </span>

                <span class="wm-task-subtask__meta">
                    Added just now
                </span>

            </div>

            <button
                type="button"
                class="wm-task-subtask__delete"
                aria-label="Delete subtask"
            >
                <i class="ph ph-trash"></i>
            </button>
        `;


                subtasks.appendChild(
                    item
                );


                const checkbox =
                    item.querySelector(
                        'input[type="checkbox"]'
                    );


                const deleteButton =
                    item.querySelector(
                        '.wm-task-subtask__delete'
                    );


                bindSubtaskCheckbox(
                    checkbox
                );


                bindSubtaskDelete(
                    deleteButton
                );


                updateSubtaskProgress();

            }


            if (saveSubtask) {

                saveSubtask.addEventListener(
                    'click',
                    function () {

                        const value =
                            newSubtaskInput.value.trim();


                        if (!value) {

                            newSubtaskInput.focus();

                            return;

                        }


                        createSubtask(
                            value
                        );


                        newSubtaskInput.value = '';

                        addSubtaskBox.hidden = true;

                    }
                );

            }


            if (newSubtaskInput) {

                newSubtaskInput.addEventListener(
                    'keydown',
                    function (event) {

                        if (
                            event.key === 'Enter' &&
                            !event.shiftKey
                        ) {

                            event.preventDefault();

                            saveSubtask.click();

                        }

                    }
                );

            }


            // =========================================================
            // COMMENT
            // =========================================================

            if (postComment) {

                postComment.addEventListener(
                    'click',
                    function () {

                        const value =
                            commentInput.value.trim();


                        if (!value) {

                            commentInput.focus();

                            return;

                        }


                        const comment =
                            document.createElement('article');


                        comment.className =
                            'wm-task-comment';


                        comment.innerHTML = `
                    <div class="wm-task-comment__avatar wm-task-comment__avatar--blue">
                        AO
                    </div>

                    <div class="wm-task-comment__content">

                        <div class="wm-task-comment__header">

                            <div>

                                <strong>
                                    You
                                </strong>

                                <span>
                                    Just now
                                </span>

                            </div>

                            <button
                                type="button"
                                class="wm-task-comment__menu"
                                aria-label="Comment actions"
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                        </div>

                        <p>
                            ${escapeHtml(value)}
                        </p>

                        <div class="wm-task-comment__footer">

                            <button type="button">
                                <i class="ph ph-thumbs-up"></i>
                                0
                            </button>

                            <button type="button">
                                Reply
                            </button>

                        </div>

                    </div>
                `;


                        comments.prepend(
                            comment
                        );


                        commentInput.value = '';

                    }
                );

            }


            // =========================================================
            // DETAIL ACTIONS
            // =========================================================

            document
                .querySelectorAll(
                    '[data-detail-action]'
                )
                .forEach(function (button) {

                    button.addEventListener(
                        'click',
                        function () {

                            const action =
                                button.dataset.detailAction;


                            closeAllDropdowns();


                            switch (action) {

                                case 'duplicate':

                                    console.log(
                                        'Duplicate task'
                                    );

                                    break;


                                case 'move':

                                    console.log(
                                        'Move task'
                                    );

                                    break;


                                case 'archive':

                                    console.log(
                                        'Archive task'
                                    );

                                    break;


                                case 'delete':

                                    console.log(
                                        'Delete task'
                                    );

                                    break;

                            }

                        }
                    );

                });


            // =========================================================
            // SHARE
            // =========================================================

            const shareButton =
                document.getElementById(
                    'wm-task-share'
                );


            if (shareButton) {

                shareButton.addEventListener(
                    'click',
                    async function () {

                        try {

                            await navigator.clipboard.writeText(
                                window.location.href
                            );

                            console.log(
                                'Task URL copied'
                            );

                        } catch (error) {

                            console.log(
                                'Unable to copy URL'
                            );

                        }

                    }
                );

            }


            // =========================================================
            // EDIT
            // =========================================================

            const editButton =
                document.getElementById(
                    'wm-task-edit'
                );


            if (editButton) {

                editButton.addEventListener(
                    'click',
                    function () {

                        if (description) {

                            description.hidden = true;

                            descriptionEditor.hidden = false;

                            descriptionInput.focus();

                        }

                    }
                );

            }


            // =========================================================
            // OUTSIDE CLICK
            // =========================================================

            document.addEventListener(
                'click',
                function () {

                    closeAllDropdowns();

                }
            );


            // =========================================================
            // ESC
            // =========================================================

            document.addEventListener(
                'keydown',
                function (event) {

                    if (
                        event.key === 'Escape'
                    ) {

                        closeAllDropdowns();

                    }

                }
            );


            // =========================================================
            // ESCAPE HTML
            // =========================================================

            function escapeHtml(
                value
            ) {

                const div =
                    document.createElement('div');


                div.textContent =
                    value;


                return div.innerHTML;

            }


            // =========================================================
            // INITIAL
            // =========================================================

            updateSubtaskProgress();

        });

    </script>

@endpush
