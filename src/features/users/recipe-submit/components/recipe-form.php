<div class="recipe-form">
    <div class="form-header">
        <h2>Submit a Recipe</h2>
        <div class="line"></div>
    </div>
    <form id="recipeForm" class="ui form">
        <!-- Basic Information -->
        <div class="basic-information mb-5">
            <div class="field mb-4">
                <label>Recipe Title*</label>
                <input type="text" placeholder="Enter recipe title" required>
            </div>
            <div class="field mb-4">
                <label>Description*</label>
                <textarea rows="3" placeholder="Describe your recipe" required></textarea>
            </div>
            <div class="two fields">
                <div class="field">
                    <label>Category*</label>
                    <div class="ui selection dropdown">
                        <input type="hidden" name="category">
                        <i class="dropdown icon"></i>
                        <div class="default text">Select Category</div>
                        <div class="menu">
                            <div class="item" data-value="main">Main Dish</div>
                            <div class="item" data-value="dessert">Dessert</div>
                            <div class="item" data-value="appetizer">Appetizer</div>
                            <div class="item" data-value="beverage">Beverage</div>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label>Cooking Time (minutes)*</label>
                    <input type="number" placeholder="Enter cooking time" required>
                </div>
            </div>
        </div>

        <!-- Ingredients -->
        <div class="ingredients mb-4">
            <h5 class="mb-3">Ingredients</h5>
            <div id="ingredientsList">
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
            </div>
            <button type="button" class="ui basic green button" id="addIngredient">
                <i class="plus icon"></i> Add Ingredient
            </button>
        </div>

        <!-- Instructions -->
        <div class="instructions mb-5">
            <h5 class="mb-3">Instructions</h5>
            <div id="instructionsList">
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
            </div>
            <button type="button" class="ui basic green button" id="addInstruction">
                <i class="plus icon"></i> Add Step
            </button>
        </div>

        <!-- Image Upload -->
        <div class="image-upload mb-4">
            <h5 class="mb-3">Recipe Image</h5>
            <div class="ui file input">
                <input type="file" accept="image/*" id="recipeImage">
            </div>
            <img id="imagePreview" class="ui medium rounded image mt-3" style="display: none;">
        </div>

        <!-- Submit Button -->
        <div class="actions text-end">
            <button type="reset" class="ui clear basic button me-2">Clear Form</button>
            <button type="submit" class="ui submit positive button">Submit Recipe</button>
        </div>
    </form>
</div>