<?php
    require_once("action/aboutAction.php");

    $action = new aboutAction();
    $data = $action->execute();

    require_once("partial/header.php");
?>
    <div class="titre-section">
        ABOUT US    
    </div>
    <div class="section1-about">
        <div class="cadre-section1">
            <div class="cadre">
                <div class="txt-cadre">
                The environmental shoewear brand was founded just last year, dedicated to making stylish, sustainable sneakers. As the name suggests, 
                Nothing New shoes are only created with recycled materials, including recycled plastic, cotton, fishing nets, rubber and cork. 
                </div>
                <div class="img-cadre1">
                </div>            
            </div>
        </div>
        <div class="cadre-section1">
            <div class="cadre">
                <div class="img-cadre2"></div>
                <div class="txt-cadre">
                That the shoes are actually durable and last a long time
                That the materials themselves have been recycled
                Or that the materials are renewable, meaning it’s more environmentally-friendly to produce than a conventional materia
                </div>            
            </div>
        </div>
        <div class="cadre-section1">
            <div class="cadre">
                <div class="txt-cadre">
                Shoppers (like you) might be paying more attention to where their purchases come from and the resulting environmental 
                impact these days, says Pete Lankford, a footwear industry consultant and former design director for Timberland. 
                </div>
                <div class="img-cadre3">

                </div>            
            </div>
        </div>
        <div class="cadre-section1">
            <div class="cadre">
                <div class="img-cadre4"></div>
                <div class="txt-cadre">
                move to zero is UniqueShoes journey toward zero carbon and zero waste to help protect the future of sport.
                 follow each step in our journey towrd zero carbon and zero wate to help protext the futre of sport
                </div>
            </div>
        </div>
    </div>
    <div class="section2-about">
        <div class="container-inside">
            <div class="titre-section">What are eco-friendly sneakers?</div>
            <div class="txt-section2">
            Conventional sneakers are generally made from leather, plastic or rubber, said McLoughlin. 
            The sneaker manufacturing practice is extremely energy-intensive, producing a large amount of greenhouse gasses. Additionally, an estimated 80 percent of sneakers go to landfills, he said.
            </br>“The fact that shoes are made of so many different materials is what makes them so hard to recycle,” McLoughlin told NBC News
            . “They break down very slowly, and when they do, they release toxins, chemicals and fossil fuels into the surrounding environment.”
            </div>
        </div>
    </div>
    <div class="section3-about">
        <div class="cadre-section3">
            <div class="card-section3">
                <div class="icon-section3">
                    <div class="icon-radius">
                        <img src="images/leaf.png" alt="">
                    </div>
                </div>
                <div class="txt-section3">
                If you bought a pair of shoes made out of recycled soda bottles that falls apart in a 
                couple months, that’s probably less eco-friendly than just buying a 
                pair of standard sneakers and wearing them for years.
                </div>
            </div>
        </div>
        <div class="cadre-section3">
            <div class="card-section3">
                <div class="icon-section3">
                    <div class="icon-radius">
                        <img src="images/handshake.png" alt="">
                    </div>
                </div>
                <div class="txt-section3">
                Orders are processed and delivered Monday–Friday, except for national holidays. Be aware that orders may experience longer processing and delivery times during holidays.
                UniqueShoes By You orders arrive within six weeks—standard delivery times do not apply.
                Refunds include the total value of any returned items. Please note that delivery fees are not refundable unless you receive an incorrect item.
                </div>
            </div>
        </div>
        <div class="cadre-section3">
            <div class="card-section3">
                <div class="icon-section3">
                    <div class="icon-radius">
                        <img src="images/plane.png" alt="">
                    </div>
                </div>
                <div class="txt-section3">
                We use a variety of shipping carriers to make sure we deliver your order as soon as possible.
                If you order multiple items, you may get multiple deliveries. We’ll send you a shipping confirmation email for each shipment, so you’ll know exactly what to expect and when to expect it.
                The estimated delivery date in checkout is based on your delivery address and the shipping option you’ve selected.
                We do not offer international shipping and are unable to ship to US territories, PO boxes, re-shippers, or package forwarding services.

                </div>
            </div>
        </div>
    </div>
<?php
    require_once("partial/footer.php");