const $reminderModal = $("#reminderModal");
const $reminderForm = $reminderModal.find(".ui.form");

function validateReminderForm($form = null) {
    let reminderFormConf = {
        form: $form,
        fields: {
            employee: {
                identifier: "employee",
                rules: [
                    {
                        type: "empty",
                        prompt: "Please enter a name",
                    },
                ],
            },
            employee_search: {
                identifier: "employee_search",
                optional: true,
            },
            date: {
                identifier: "date",
                rules: [
                    {
                        type: "empty",
                        prompt: "Please enter a date",
                    },
                ],
            },
            time_in: {
                identifier: "time_in",
                rules: [
                    {
                        type: "empty",
                        prompt: "Please select a time in",
                    },
                ],
            },
            time_out: {
                identifier: "time_out",
                rules: [
                    {
                        type: "empty",
                        prompt: "Please select a time in",
                    },
                ],
            },
            memo: {
                identifier: "memo",
                rules: [
                    {
                        type: "empty",
                        prompt: "Please enter a memo",
                    },
                    {
                        type: "minLength[2]",
                        prompt: "Memo must be at least 2 characters",
                    },
                ],
            },
        },
    };
    validateHandler(reminderFormConf);
}

$(function () {
    initModal({
        modal_id: $reminderModal,
        transition: "swing down",
        duration: 800,
    });

    validateReminderForm($reminderForm);
});
