<?php
    if(isset($_POST['submit']))
    {
        $name =$_POST['name'];
        $year =$_POST['year'];

        if ($year == 1912 || $year == 1924 || $year == 1936 || $year == 1948 || $year == 1960 || $year == 1972 || $year == 1984 || $year == 1996 || $year == 2008 || $year == 2020)
        {
            echo " <br/>
                Your name : $name <br/>
                Your year of birth : $year </br> <br/>
                <b>Rat People</b> <br/> 
                Birth year : 1912, 1924, 1936, 1948, 1960, 1972, 1984, 1996, 2008, 2020. Beware if your birthday is before February 4th, your year is most likely Pig, not Rat. Please verify this again. <br/><br/>
                <b>Career</b> <br/>
                Very good career opportunity, you will have a lot of tasks to accomplish this year but you will be
                able to accomplish them. Your boss and colleagues will appreciate your dedication. Sign of success
                is very strong. Should you consider a job change ? Yes, why not, promotion and better career opportunity
                is on the horizon this year. <br/><br/>
                <b> Wealth </b> <br/>
                Good income but nothing spectacular. Make sure to save for rainy days. <br/><br/>
                <b> Love </b> <br/>
                This is good year to find romance, if you are currently in a relationship make sure to spend more time with your significant other to keep the romance going. Warmer months of june, july, and august is a good time to get angaged or confess your love. <br/><br/>
               <b> Friendship </b> <br/>
               You will be busy with work so social activities are likely reduced. Try to spend more time to understand
               and interact with your cowokers, this will benefit your career. Stay out of trouble and refrain form getting into hated arguments. <br/><br/>
               <b> Health </b> <br/>
               Beware of digestive and kidney related illnesses, this year have a lot of outdoor activities under the sunshine like walking, hiking, jogging, cycling, etc. <br/><br/>
               <b> Overall </b> <br/>
               Pretty good year although not too remarkable. 
                 ";
        }
        else if ($year == 1913 || $year == 1925 || $year == 1937 || $year == 1949 || $year == 1961 || $year == 1973 || $year == 1985 || $year == 1997 || $year == 2009)
        {
            echo "<br/>
            Your name : $name <br/>
            Your year of birth : $year <br/> <br/>
            <b> Ox People </b> <br/>
            Birth Year: 1913, 1925, 1937, 1949, 1961, 1973, 1985, 1997, 2009. If your birthday is before February 4, then your astrological sign might be Rat, not Ox. <br/> <br/>
            <b> Career </b> <br/>
            Not too good, do your best this year and stay out of trouble.  Not a good year to do drastic career change too. There will be a lot of competition and things can get challenging this year. People who were born in the year of tiger,horse or sheep can help you if you encounter difficulties. <br/> <br/>
            <b> Wealth </b> <br/>
            Do not expect bonuses or an abundant of additional income. Save your money and be as frugal as possible this year. Do not make hasty investment decision. <br/> <br/>
            <b> Love </b> <br/>
            Have patience, if you are single and searching for love,this year you will face tough competitions. If you are already in a relationship you need to put more effort in understanding and caring for your significant others. <br/> <br/>
            <b> Friendship </b> <br/>
            Just fine, beware of arguments and getting into quarrels. <br/> <br/>
            <b> Health </b> <br/>
            You can get serious illness if you are not careful with what you consume. <br/> <br/>
            <b> Overall </b> <br/>
            Tough year but you will be able to go through it with hard work.
            ";
        }
        else if ($year == 1914 || $year == 1926 || $year == 1938|| $year == 1950 || $year == 1962|| $year == 1974 || $year == 1986 || $year == 1998 || $year == 2010)
        {
            echo " <br/>
            Your name : $name <br/>
            Your year of birth : $year <br/> <br/>
            <b> Tiger People </b> <br/>
            Birth Year: 1914, 1926, 1938, 1950, 1962, 1974, 1986, 1998, 2010. If your birthday is before February 4, then your astrological sign might be Cow, not Tiger. <br/> <br/>
            <b> Career </b> <br/>
            Your career is stable and under control. You might even get a pay raise this year. There will be an opportunity to get promoted or a career change. <br/> <br/>
            <b> Wealth </b> <br/>
            Excellent. You will get a lot of return from your investment. <br/> <br/>
             <b> Love </b> <br/>
             Your love relationship is great this year. If you are single, this is a good year to find love. If you are in a relationship, it will be stable and sweet. <br/> <br/>
              <b> Friendship </b> <br/>
              You will have a great relationship with your friends and colleagues. This will help your business and career. <br/> <br/>
              <b> Health </b> <br/>
              You should have good health this year. Drink more water. <br/> <br/>
              <b> Overall </b> <br/>
              Good Fortune!

            ";
        }
        
    }
    ?>