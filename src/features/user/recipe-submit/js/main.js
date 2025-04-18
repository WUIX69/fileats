$(function () {
    console.log("Recipe submit script loaded...");

    // Initialize dropdowns
    $(".ui.dropdown").dropdown();

    // Add Ingredient
    $("#addIngredient").click(function () {
        const newIngredient = `
            <div class="ingredient-item">
                <div class="fields">
                    <div class="seven wide field">
                        <input type="text" placeholder="Amount" required>
                    </div>
                    <div class="eight wide field">
                        <input type="text" placeholder="Ingredient" required>
                    </div>
                    <div class="one wide field">
                        <i class="close icon remove-item"></i>
                    </div>
                </div>
            </div>
        `;
        $("#ingredientsList").append(newIngredient);
    });

    // Add Instruction
    $("#addInstruction").click(function () {
        const newInstruction = `
            <div class="instruction-item">
                <div class="fields">
                    <div class="fifteen wide field">
                        <textarea rows="2" placeholder="Enter instruction step" required></textarea>
                    </div>
                    <div class="one wide field">
                        <i class="close icon remove-item"></i>
                    </div>
                </div>
            </div>
        `;
        $("#instructionsList").append(newInstruction);
    });

    // Remove ingredient or instruction
    $(document).on("click", ".remove-item", function () {
        $(this).closest(".ingredient-item, .instruction-item").remove();
    });

    // Image preview
    $("#recipeImage").change(function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                $("#imagePreview").attr("src", e.target.result).show();
            };
            reader.readAsDataURL(file);
        }
    });

    // Form validation
    $("#recipeForm").form({
        fields: {
            title: "empty",
            description: "empty",
            category: "empty",
            cookingTime: "empty",
        },
    });
});
