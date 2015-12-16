{extends 'views/template.smarty.tpl'}

{block 'header'}<link href="views/styleInscription.css" rel="stylesheet" type="text/css" />{/block}
{block 'main'}
        <aside>

            <div class="texte">

                <address>
                    <h2>BLABLABLABLA</h2>
                    BLABLABlA<br/>
                    BLABLABLA<br/>
                    BLABLABLA<br/>
                </address>

                <ul>
                    <li class="phone">
                        06 94 12 25 53
                    </li>
                    <li class="email">
                        ADOPTEUNGEEK@mail.com
                    </li>
                </ul>


                </ul>
            </div>
        </aside>
    </header>

    <div class="contact">

        <h1>Contact us</h1>

        {form_inscription()}

            <br>

            <input type="submit" name="Your message" Class="Connexion" value="Connexion"/>

            <br>


        </form>


    </div>

    </body>
    </html>
{/block}