    <!-- content end here -->
    </main>
    <footer class="page__footer <?= isset($addClassFooter) ?  $addClassFooter : ''; ?>">
       <div class="l-footer">
           <ul class="l-footer__links">
               <li>ITEM</li>
               <span class="separator"></span>
               <li>ITEM</li>
               <span class="separator"></span>
               <li>ITEM</li>
               <span class="separator"></span>
               <li>ITEM</li>
               <span class="separator"></span>
               <li>ITEM</li>
           </ul>
           <p class="copyright">Copyright &copy; Kracie Holdings,Ltd. All Rights Reserved.</p>
           <span class="scrollTop"></span>
       </div>
    </footer>
    </body>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <!-- script here for global -->
    <?= resources('js', isset($footerJS) ? $footerJS : '', true) ?>

    </html>