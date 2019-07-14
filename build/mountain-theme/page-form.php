<?php
    /*
    Template Name: Page with Form
    */
    while (have_posts()) {
        the_post();
    }
    get_header();
?>
<div class="page__main">
    <img class="page__img" src="<?php echo get_field('page_image')[url]; ?>" alt="">
    <h1 class="page__h1 u-margin-bottom-lg">
        <span class="page__h1--small"><?php echo get_field('page_small_heading'); ?></span><br>
        <?php echo get_field('page_heading'); ?>
    </h1>
    <p class="page__text">
        <?php echo get_field('page_main_copy'); ?>
    </p>
</div>
    <form id="register-form" class="form">
        <div class="form__container">
            <fieldset class="u-margin-bottom-md">
                <legend class="form__legend">All Fields Required</legend>
            </fieldset>
            <div class="form__row">
                <div class="form-group">
                    <input class="form-control" name="firstName" placeholder="First name" type="text">
                </div>
                <div class="form-group">
                    <input class="form-control" name="secondName" placeholder="Last name" type="text">
                </div>
            </div>
            <div class="form-group">
                <input class="form-control" name="email" placeholder="Email address" type="email">
            </div>
            <div class="form__row">
                <div class="form-group">
                    <select class="form__dropdown form-control" name="state">
                            <option value="" selected disabled hidden>Choose Your State</option>
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="DC">District Of Columbia</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WA">Washington</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY">Wyoming</option>
                    </select>
                </div>
                <div class="form-group">
                    <input class="form-control" name="zipcode" placeholder="ZIP Code" type="text">
                </div>
            </div>
            <div class="form-group custom-radio">
                <p class="custom-radio__header">Please choose one:</p>
                <p class="custom-radio__question">I like mountains.</p>
                <input name="likesMountains" class="custom-radio__real-radio custom-radio__real-radio--1" id="like-yes" type="radio">
                <input name="likesMountains" class="custom-radio__real-radio custom-radio__real-radio--2" id="like-no" type="radio">
                <div class="custom-radio__label-container u-margin-bottom-md">
                    <label class="custom-radio__label custom-radio__label--1" for="like-yes">
                        <div class="custom-radio__custom custom-radio__custom--1"><img class="custom-radio__img" src="<?php echo get_theme_file_uri('css/svg/check.svg'); ?>" alt=""></div>
                        <p class="custom-radio__label-text">Yes</p>
                    </label>
                    <label class="custom-radio__label custom-radio__label--2" for="like-no">
                        <div class="custom-radio__custom custom-radio__custom--2"><img class="custom-radio__img" src="<?php echo get_theme_file_uri('css/svg/check.svg'); ?>" alt=""></div>
                        <p class="custom-radio__label-text">No</p>
                    </label>
                </div>
                <div class="custom-radio__conditional">
                    <p class="custom-radio__question">Would you be willing to share your story?</p>
                    <input name="share" class="custom-radio__real-radio custom-radio__real-radio--1-cond" id="like-yes--cond" type="radio">
                    <input name="share" class="custom-radio__real-radio custom-radio__real-radio--2-cond" id="like-no--cond" type="radio">
                    <div class="custom-radio__label-container">
                        <label class="custom-radio__label custom-radio__label--1-cond" for="like-yes--cond">
                            <div class="custom-radio__custom custom-radio__custom--1-cond"><img class="custom-radio__img--cond" src="<?php echo get_theme_file_uri('css/svg/check.svg'); ?>" alt=""></div>
                            <p class="custom-radio__label-text">Yes</p>
                        </label>
                        <label class="custom-radio__label custom-radio__label--2-cond" for="like-no--cond">
                            <div class="custom-radio__custom custom-radio__custom--2-cond"><img class="custom-radio__img--cond" src="<?php echo get_theme_file_uri('css/svg/check.svg'); ?>" alt=""></div>
                            <p class="custom-radio__label-text">No</p>
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group custom-checkbox">
                <input class="custom-checkbox__real-checkbox" id="terms" name="terms" type="checkbox">
                <label class="custom-checkbox__checkbox-label" for="terms">
                    <div class="custom-checkbox__custom"><img class="custom-checkbox__img" src="<?php echo get_theme_file_uri('css/svg/check.svg'); ?>" alt="checkmark"></div>
                    <p class="custom-checkbox__checkbox-text">By checking this box, I attest to the fact that I am 18 years of age or older and have read, understand, and agree to all of the Terms of Use.</p>
                </label>
            </div>
            <div>
                <input class="form__button" id="submit-button" type="submit" value="Submit">
            </div>
        </div>
    </form>

<?php the_content(); ?>
<?php  get_footer(); ?>