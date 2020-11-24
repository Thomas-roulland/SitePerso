<div id="experience" >
        <div class="description">
            <div class="title-primary"><?php echo $experience['title']; ?></div>
            <div class="subtitle"><?php echo $experience['subtitle']; ?></div>
            <div class="contenu">
                <div class="bloc1">
                    <div id="type2" class="type2"><?php echo $experience['poste']; ?></div>
                    <div id="type4" class="type4"><?php echo $experience['etablissement']; ?></div>
                    <div  id="type3" class="type3"><?php echo $experience['date']; ?></div>
                    <div id="type4" class="type4"><?php echo $experience['lieux']; ?></div>
                    <i class="logo-shop fas fa-store"></i>
                </div>
                    <div class="bloc2">
                        <div class="text"><?php echo $experience['descriptif']; ?></div>
                    </div>    
            </div>

                 <div class="contenu">
                     <div class="bloc1">
                        <div class="type2"><?php echo $experience1['poste']; ?></div>
                        <div class="type4"><?php echo $experience1['etablissement']; ?></div>
                        <div class="type3"><?php echo $experience1['date']; ?></div>
                        <div class="type4"><?php echo $experience1['lieux']; ?></div>
                        <i class="logo-shop2 fas fa-store"></i>
                     </div>
                     <div class="bloc2">
                        <div class="text"><?php echo $experience1['descriptif']; ?></div>
                    </div>
                </div>

            <a class="link" href="Documents/CV.pdf" download> <input class="btn" type="button" value="Télécharger mon CV"  /> </a> 
            
        </div>
    </div>