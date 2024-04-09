<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Api42/docs/_data/ui-text.yml */
class __TwigTemplate_11884f2f6e094508bf2b12f7cf2829dc extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "# User interface text and labels

# English (default)
# -----------------
en: &DEFAULT_EN
  skip_links                 : \"Skip links\"
  skip_primary_nav           : \"Skip to primary navigation\"
  skip_content               : \"Skip to content\"
  skip_footer                : \"Skip to footer\"
  page                       : \"Page\"
  pagination_previous        : \"Previous\"
  pagination_next            : \"Next\"
  breadcrumb_home_label      : \"Home\"
  breadcrumb_separator       : \"/\"
  menu_label                 : \"Toggle menu\"
  search_label               : \"Toggle search\"
  toc_label                  : \"On this page\"
  ext_link_label             : \"Direct link\"
  less_than                  : \"less than\"
  minute_read                : \"minute read\"
  share_on_label             : \"Share on\"
  meta_label                 :
  tags_label                 : \"Tags:\"
  categories_label           : \"Categories:\"
  date_label                 : \"Updated:\"
  comments_label             : \"Leave a comment\"
  comments_title             : \"Comments\"
  more_label                 : \"Learn more\"
  related_label              : \"You may also enjoy\"
  follow_label               : \"Follow:\"
  feed_label                 : \"Feed\"
  powered_by                 : \"Powered by\"
  website_label              : \"Website\"
  email_label                : \"Email\"
  recent_posts               : \"Recent posts\"
  undefined_wpm              : \"Undefined parameter words_per_minute at _config.yml\"
  comment_form_info          : \"Your email address will not be published. Required fields are marked\"
  comment_form_comment_label : \"Comment\"
  comment_form_md_info       : \"Markdown is supported.\"
  comment_form_name_label    : \"Name\"
  comment_form_email_label   : \"Email address\"
  comment_form_website_label : \"Website (optional)\"
  comment_btn_submit         : \"Submit comment\"
  comment_btn_submitted      : \"Submitted\"
  comment_success_msg        : \"Thanks for your comment! It will show on the site once it has been approved.\"
  comment_error_msg          : \"Sorry, there was an error with your submission. Please make sure all required fields have been completed and try again.\"
  loading_label              : \"Loading...\"
  search_label_text          : \"Enter your search term...\"
  search_placeholder_text    : \"Enter your search term...\"
  search_algolia_no_results  : \"No results\"
  results_found              : \"Result(s) found\"
  back_to_top                : \"Back to top\"
en-US:
  <<: *DEFAULT_EN
en-CA:
  <<: *DEFAULT_EN
en-GB:
  <<: *DEFAULT_EN
en-AU:
  <<: *DEFAULT_EN

# Spanish
# -------
es: &DEFAULT_ES
  skip_links                 : \"Saltar enlaces\"
  skip_primary_nav           : \"Saltar a navegación principal\"
  skip_content               : \"Saltar a contenido\"
  skip_footer                : \"Saltar a pie\"
  page                       : \"Página\"
  pagination_previous        : \"Anterior\"
  pagination_next            : \"Siguiente\"
  breadcrumb_home_label      : \"Inicio\"
  breadcrumb_separator       : \"/\"
  menu_label                 : \"Alternar menú\"
  search_label               : \"Alternar búsqueda\"
  toc_label                  : \"En esta página\"
  ext_link_label             : \"Enlace directo\"
  less_than                  : \"menos de\"
  minute_read                : \"minuto(s) de lectura\"
  share_on_label             : \"Compartir en\"
  meta_label                 :
  tags_label                 : \"Etiquetas:\"
  categories_label           : \"Categorías:\"
  date_label                 : \"Actualizado:\"
  comments_label             : \"Deja un comentario\"
  comments_title             : \"Comentarios\"
  more_label                 : \"Ver más\"
  related_label              : \"Puede que también te interese\"
  follow_label               : \"Seguir:\"
  feed_label                 : \"Feed\"
  powered_by                 : \"Funciona con\"
  website_label              : \"Sitio web\"
  email_label                : \"Correo electrónico\"
  recent_posts               : \"Entradas recientes\"
  undefined_wpm              : \"El parámetro words_per_minute (palabras por minuto) no está definido en _config.yml\"
  comment_form_info          : \"Tu dirección de correo electrónico no se publicará. Los campos obligatorios están marcados\"
  comment_form_comment_label : \"Comentario\"
  comment_form_md_info       : \"Puedes utilizar Markdown\"
  comment_form_name_label    : \"Nombre\"
  comment_form_email_label   : \"Dirección de correo electrónico\"
  comment_form_website_label : \"Sitio web (opcional)\"
  comment_btn_submit         : \"Enviar comentario\"
  comment_btn_submitted      : \"Enviado\"
  comment_success_msg        : \"¡Gracias por tu comentario! Se publicará una vez sea aprobado.\"
  comment_error_msg          : \"Ha ocurrido un error al enviar el comentario. Asegúrate de completar todos los campos obligatorios e inténtalo de nuevo.\"
  loading_label              : \"Cargando...\"
  search_label_text          : \"Términos de búsqueda...\"
  search_placeholder_text    : \"Términos de búsqueda...\"
  search_algolia_no_results  :
  results_found              : \"resultado(s) encontrado(s)\"
  back_to_top                : \"Volver arriba\"
es-ES:
  <<: *DEFAULT_ES
es-CO:
  <<: *DEFAULT_ES

# French
# ------
fr: &DEFAULT_FR
  skip_links                 :
  skip_primary_nav           :
  skip_content               :
  skip_footer                :
  page                       : \"Page\"
  pagination_previous        : \"Précédent\"
  pagination_next            : \"Suivant\"
  breadcrumb_home_label      : \"Accueil\"
  breadcrumb_separator       : \"/\"
  menu_label                 : \"Menu\"
  search_label               :
  toc_label                  : \"Sur cette page\"
  ext_link_label             : \"Lien direct\"
  less_than                  : \"moins de\"
  minute_read                : \"minute(s) de lecture\"
  share_on_label             : \"Partager sur\"
  meta_label                 :
  tags_label                 : \"Tags :\"
  categories_label           : \"Catégories :\"
  date_label                 : \"Mis à jour :\"
  comments_label             : \"Laisser un commentaire\"
  comments_title             : \"Commentaires\"
  more_label                 : \"Lire plus\"
  related_label              : \"Vous pourriez aimer aussi\"
  follow_label               : \"Contact\"
  feed_label                 : \"Flux\"
  powered_by                 : \"Propulsé par\"
  website_label              : \"Site\"
  email_label                : \"Email\"
  recent_posts               : \"Posts récents\"
  undefined_wpm              : \"Le paramètre words_per_minute n'est pas défini dans _config.yml\"
  comment_form_info          : \"Votre adresse email ne sera pas visible. Les champs obligatoires sont marqués\"
  comment_form_comment_label : \"Commentaire\"
  comment_form_md_info       : \"Markdown est supporté.\"
  comment_form_name_label    : \"Nom\"
  comment_form_email_label   : \"Adresse mail\"
  comment_form_website_label : \"Site web (optionnel)\"
  comment_btn_submit         : \"Envoyer\"
  comment_btn_submitted      : \"Envoyé\"
  comment_success_msg        : \"Merci pour votre commentaire, il sera visible sur le site une fois approuvé.\"
  comment_error_msg          : \"Désolé, une erreur est survenue lors de la soumission. Vérifiez que les champs obligatoires ont été remplis et réessayez.\"
  loading_label              : \"Chargement...\"
  search_label_text          :
  search_placeholder_text    : \"Entrez votre recherche...\"
  search_algolia_no_results  :
  results_found              : \"Résultat(s) trouvé(s)\"
  back_to_top                : \"Retour en haut\"
fr-FR:
  <<: *DEFAULT_FR
fr-BE:
  <<: *DEFAULT_FR
fr-CH:
  <<: *DEFAULT_FR

# Turkish
# -------
tr: &DEFAULT_TR
  skip_links                 :
  skip_primary_nav           :
  skip_content               :
  skip_footer                :
  page                       : \"Sayfa\"
  pagination_previous        : \"Önceki\"
  pagination_next            : \"Sonraki\"
  breadcrumb_home_label      : \"Ana Sayfa\"
  breadcrumb_separator       : \"/\"
  menu_label                 :
  search_label               :
  toc_label                  : \"İçindekiler\"
  ext_link_label             : \"Doğrudan Bağlantı\"
  less_than                  : \"Şu süreden az: \"
  minute_read                : \"dakika tahmini okuma süresi\"
  share_on_label             : \"Paylaş\"
  meta_label                 :
  tags_label                 : \"Etiketler:\"
  categories_label           : \"Kategoriler:\"
  date_label                 : \"Güncelleme tarihi:\"
  comments_label             : \"Yorum yapın\"
  comments_title             : \"Yorumlar\"
  more_label                 : \"Daha fazlasını öğrenin\"
  related_label              : \"Bunlar ilginizi çekebilir:\"
  follow_label               : \"Takip et:\"
  feed_label                 : \"RSS\"
  powered_by                 : \"Emeği geçenler: \"
  website_label              : \"Web sayfası\"
  email_label                : \"E-posta\"
  recent_posts               : \"Son yazılar\"
  undefined_wpm              : \"_config.yml dosyasında tanımlanmamış words_per_minute parametresi\"
  comment_form_info          : \"Email adresiniz gösterilmeyecektir. Zorunlu alanlar işaretlenmiştir\"
  comment_form_comment_label : \"Yorumunuz\"
  comment_form_md_info       : \"Markdown desteklenmektedir.\"
  comment_form_name_label    : \"Adınız\"
  comment_form_email_label   : \"Email adresiniz\"
  comment_form_website_label : \"Websiteniz (opsiyonel)\"
  comment_btn_submit         : \"Yorum Yap\"
  comment_btn_submitted      : \"Gönderildi\"
  comment_success_msg        : \"Yorumunuz için teşekkürler! Yorumunuz onaylandıktan sonra sitede gösterilecektir.\"
  comment_error_msg          : \"Maalesef bir hata oluştu. Lütfen zorunlu olan tüm alanları doldurduğunuzdan emin olun ve sonrasında tekrar deneyin.\"
  loading_label              : \"Yükleniyor...\"
  search_label_text          :
  search_algolia_no_results  :
tr-TR:
  <<: *DEFAULT_TR

# Portuguese
# ----------
pt: &DEFAULT_PT
  skip_links                 :
  skip_primary_nav           :
  skip_content               :
  skip_footer                :
  page                       : \"Página\"
  pagination_previous        : \"Anterior\"
  pagination_next            : \"Seguinte\"
  breadcrumb_home_label      : \"Início\"
  breadcrumb_separator       : \"/\"
  menu_label                 :
  search_label               :
  toc_label                  : \"Nesta Página\"
  ext_link_label             : \"Link Direto\"
  less_than                  : \"menos de\"
  minute_read                : \"minutos de leitura\"
  share_on_label             : \"Partilhar no\"
  meta_label                 :
  tags_label                 : \"Etiquetas:\"
  categories_label           : \"Categorias:\"
  date_label                 : \"Atualizado:\"
  comments_label             : \"Deixe um Comentário\"
  comments_title             : \"Comentários\"
  more_label                 : \"Saber mais\"
  related_label              : \"Também pode gostar de\"
  follow_label               : \"Siga:\"
  feed_label                 : \"Feed\"
  powered_by                 : \"Feito com\"
  website_label              : \"Site\"
  email_label                : \"Email\"
  recent_posts               : \"Artigos Recentes\"
  undefined_wpm              : \"Parâmetro words_per_minute não definido em _config.yml\"
  comment_form_info          : \"O seu endereço email não será publicado. Os campos obrigatórios estão assinalados\"
  comment_form_comment_label : \"Comentário\"
  comment_form_md_info       : \"Markdown é suportado.\"
  comment_form_name_label    : \"Nome\"
  comment_form_email_label   : \"Endereço Email\"
  comment_form_website_label : \"Site (opcional)\"
  comment_btn_submit         : \"Sumbeter Comentário\"
  comment_btn_submitted      : \"Submetido\"
  comment_success_msg        : \"Obrigado pelo seu comentário! Será visível no site logo que aprovado.\"
  comment_error_msg          : \"Lamento, ocorreu um erro na sua submissão. Por favor verifique se todos os campos obrigatórios estão corretamente preenchidos e tente novamente.\"
  loading_label              : \"A carregar...\"
  search_label_text          :
  search_algolia_no_results  :
pt-PT:
  <<: *DEFAULT_PT
# Brazilian Portuguese
pt-BR:
  skip_links                 :
  skip_primary_nav           :
  skip_content               :
  skip_footer                :
  page                       : \"Página\"
  pagination_previous        : \"Anterior\"
  pagination_next            : \"Próxima\"
  breadcrumb_home_label      : \"Home\"
  breadcrumb_separator       : \"/\"
  menu_label                 :
  search_label               : \"Buscar\"
  toc_label                  : \"Nesta página\"
  ext_link_label             : \"Link direto\"
  less_than                  : \"menos que\"
  minute_read                : \"minuto(s) de leitura\"
  share_on_label             : \"Compartilhe\"
  meta_label                 :
  tags_label                 : \"Tags:\"
  categories_label           : \"Categorias:\"
  date_label                 : \"Atualizado em:\"
  comments_label             : \"Deixe um comentário\"
  comments_title             : \"Comentários\"
  more_label                 : \"Saiba mais\"
  related_label              : \"Talvez você também goste\"
  follow_label               : \"Acompanhe no\"
  feed_label                 : \"Feed\"
  powered_by                 : \"Desenvolvido com\"
  website_label              : \"Site\"
  email_label                : \"E-mail\"
  recent_posts               : \"Publicações recentes\"
  undefined_wpm              : \"Parâmetro words_per_minute indefinido no _config.yml\"
  comment_form_info          : \"Seu e-mail não será publicado. Os campos obrigatórios estão marcados\"
  comment_form_comment_label : \"Comentário\"
  comment_form_md_info       : \"Você pode usar Markdown.\"
  comment_form_name_label    : \"Nome\"
  comment_form_email_label   : \"E-mail\"
  comment_form_website_label : \"Site (opcional)\"
  comment_btn_submit         : \"Enviar comentário\"
  comment_btn_submitted      : \"Enviado\"
  comment_success_msg        : \"Obrigado pelo seu comentário! Ele aparecerá no site assim que for aprovado.\"
  comment_error_msg          : \"Desculpe, ocorreu um erro no envio. Verifique se todos os campos obrigatórios foram preenchidos e tente novamente.\"
  loading_label              : \"Carregando...\"
  search_label_text          :
  search_placeholder_text    : \"Pesquisar...\"
  search_algolia_no_results  :
  results_found              : \"Resultado(s) encontrado(s)\"
  back_to_top                : \"Voltar para o topo\"

# Italian
# -------
it: &DEFAULT_IT
  skip_links                 :
  skip_primary_nav           :
  skip_content               :
  skip_footer                :
  page                       : \"Pagina\"
  pagination_previous        : \"Precedente\"
  pagination_next            : \"Prossima\"
  breadcrumb_home_label      : \"Home\"
  breadcrumb_separator       : \"/\"
  menu_label                 :
  search_label               :
  toc_label                  : \"Indice della pagina\"
  ext_link_label             : \"Link\"
  less_than                  : \"meno di\"
  minute_read                : \"minuto/i di lettura\"
  share_on_label             : \"Condividi\"
  meta_label                 :
  tags_label                 : \"Tags:\"
  categories_label           : \"Categorie:\"
  date_label                 : \"Aggiornato:\"
  comments_label             : \"Scrivi un commento\"
  comments_title             :
  more_label                 : \"Scopri di più\"
  related_label              : \"Potrebbe Piacerti Anche\"
  follow_label               : \"Segui:\"
  feed_label                 : \"Feed\"
  powered_by                 : \"Powered by\"
  website_label              : \"Website\"
  email_label                : \"Email\"
  recent_posts               : \"Articoli Recenti\"
  undefined_wpm              : \"Parametro words_per_minute non definito in _config.yml\"
  comment_form_info          : \"Il tuo indirizzo email non sarà pubblicato. Sono segnati i campi obbligatori\"
  comment_form_comment_label : \"Commenta\"
  comment_form_md_info       : \"Il linguaggio Markdown è supportato\"
  comment_form_name_label    : \"Nome\"
  comment_form_email_label   : \"Indirizzo email\"
  comment_form_website_label : \"Sito Web (opzionale)\"
  comment_btn_submit         : \"Invia commento\"
  comment_btn_submitted      : \"Inviato\"
  comment_success_msg        : \"Grazie per il tuo commento! Verrà visualizzato nel sito una volta che sarà approvato.\"
  comment_error_msg          : \"C'è stato un errore con il tuo invio. Assicurati che tutti i campi richiesti siano stati completati e riprova.\"
  loading_label              : \"Caricamento...\"
  search_label_text          :
  search_placeholder_text    : \"Inserisci termini di ricerca...\"
  search_algolia_no_results  :
  results_found              : \"Risultati\"
  back_to_top                : \"Vai su\"
it-IT:
  <<: *DEFAULT_IT

# Chinese  (zh-CN Chinese - China)
# --------------------------------
zh: &DEFAULT_ZH_HANS
  skip_links                 : \"跳转链接\"
  skip_primary_nav           : \"转到主导航栏\"
  skip_content               : \"转到内容\"
  skip_footer                : \"转到页脚\"
  page                       : \"页面\"
  pagination_previous        : \"向前\"
  pagination_next            : \"向后\"
  breadcrumb_home_label      : \"首页\"
  breadcrumb_separator       : \"/\"
  menu_label                 : \"切换菜单\"
  search_label               : \"切换搜索\"
  toc_label                  : \"在本页上\"
  ext_link_label             : \"直接链接\"
  less_than                  : \"少于\"
  minute_read                : \"分钟阅读\"
  share_on_label             : \"分享\"
  meta_label                 :
  tags_label                 : \"标签:\"
  categories_label           : \"分类:\"
  date_label                 : \"更新时间:\"
  comments_label             : \"留下评论\"
  comments_title             : \"评论\"
  more_label                 : \"了解更多\"
  related_label              : \"猜您还喜欢\"
  follow_label               : \"关注:\"
  feed_label                 : \"Feed\"
  powered_by                 : \"技术来自于\"
  website_label              : \"网站\"
  email_label                : \"电子邮箱\"
  recent_posts               : \"最新文章\"
  undefined_wpm              : \"_config.yml 配置中 words_per_minute 字段未定义\"
  comment_form_info          : \"您的电子邮箱地址并不会被展示。请填写标记为必须的字段。\"
  comment_form_comment_label : \"评论\"
  comment_form_md_info       : \"支持 Markdown 语法。\"
  comment_form_name_label    : \"姓名\"
  comment_form_email_label   : \"电子邮箱\"
  comment_form_website_label : \"网站（可选）\"
  comment_btn_submit         : \"提交评论\"
  comment_btn_submitted      : \"已提交\"
  comment_success_msg        : \"感谢您的评论！被批准后它会立即在此站点展示。\"
  comment_error_msg          : \"很抱歉，您的提交存在错误。请确保所有必填字段都已填写正确，然后再试一次。\"
  loading_label              : \"正在加载...\"
  search_label_text          : \"输入您要搜索的关键词...\"
  search_placeholder_text    : \"输入您要搜索的关键词...\"
  search_algolia_no_results  : \"无结果\"
  results_found              : \"条记录匹配\"
  back_to_top                : \"返回顶部\"
zh-CN:
  <<: *DEFAULT_ZH_HANS
zh-SG:
  <<: *DEFAULT_ZH_HANS
# Taiwan (Traditional Chinese)
zh-TW: &DEFAULT_ZH_HANT
  skip_links                 :
  skip_primary_nav           :
  skip_content               :
  skip_footer                :
  page                       : \"頁面\"
  pagination_previous        : \"較舊\"
  pagination_next            : \"較新\"
  breadcrumb_home_label      : \"首頁\"
  breadcrumb_separator       : \"/\"
  menu_label                 : \"切換選單\"
  search_label               :
  toc_label                  : \"本頁\"
  ext_link_label             : \"外部連結\"
  less_than                  : \"少於\"
  minute_read                : \"分鐘閱讀\"
  share_on_label             : \"分享到\"
  meta_label                 :
  tags_label                 : \"標籤:\"
  categories_label           : \"分類:\"
  date_label                 : \"更新時間:\"
  comments_label             : \"留言\"
  comments_title             : \"留言內容\"
  more_label                 : \"了解更多\"
  related_label              : \"猜您有與趣\"
  follow_label               : \"追蹤:\"
  feed_label                 : \"RSS Feed\"
  powered_by                 : \"Powered by\"
  website_label              : \"網站\"
  email_label                : \"電子信箱\"
  recent_posts               : \"最新文章\"
  undefined_wpm              : \"_config.yml 中未定義 words_per_minute\"
  comment_form_info          : \"您的電子信箱不會被公開. 必填部份已標記\"
  comment_form_comment_label : \"留言內容\"
  comment_form_md_info       : \"支援Markdown語法。\"
  comment_form_name_label    : \"名字\"
  comment_form_email_label   : \"電子信箱帳號\"
  comment_form_website_label : \"網頁 (可選填)\"
  comment_btn_submit         : \"送出留言\"
  comment_btn_submitted      : \"已送出\"
  comment_success_msg        : \"感謝您的留言！ 審核後將會顯示在站上。\"
  comment_error_msg          : \"抱歉，部份資料輸入有問題。請確認資料填寫正確後再試一次。\"
  loading_label              : \"載入中...\"
  search_label_text          :
  search_algolia_no_results  :
zh-HK:
  <<: *DEFAULT_ZH_HANT

# German / Deutsch
# ----------------
de: &DEFAULT_DE
  skip_links                 :
  skip_primary_nav           :
  skip_content               :
  skip_footer                :
  page                       : \"Seite\"
  pagination_previous        : \"Vorherige\"
  pagination_next            : \"Nächste\"
  breadcrumb_home_label      : \"Start\"
  breadcrumb_separator       : \"/\"
  menu_label                 : \"Menü ein-/ausschalten\"
  search_label               :
  toc_label                  : \"Auf dieser Seite\"
  ext_link_label             : \"Direkter Link\"
  less_than                  : \"weniger als\"
  minute_read                : \"Minuten zum lesen\"
  share_on_label             : \"Teilen auf\"
  meta_label                 :
  tags_label                 : \"Tags:\"
  categories_label           : \"Kategorien:\"
  date_label                 : \"Aktualisiert:\"
  comments_label             : \"Hinterlassen Sie einen Kommentar\"
  comments_title             : \"Kommentare\"
  more_label                 : \"Mehr anzeigen\"
  related_label              : \"Ihnen gefällt vielleicht auch\"
  follow_label               : \"Folgen:\"
  feed_label                 : \"Feed\"
  powered_by                 : \"Möglich durch\"
  website_label              : \"Webseite\"
  email_label                : \"E-Mail\"
  recent_posts               : \"Aktuelle Beiträge\"
  undefined_wpm              : \"Undefinierter Parameter words_per_minute in _config.yml\"
  comment_form_info          : \"Ihre E-Mail Adresse wird nicht veröffentlicht. Benötigte Felder sind markiert\"
  comment_form_comment_label : \"Kommentar\"
  comment_form_md_info       : \"Markdown wird unterstützt.\"
  comment_form_name_label    : \"Name\"
  comment_form_email_label   : \"E-Mail-Addresse\"
  comment_form_website_label : \"Webseite (optional)\"
  comment_btn_submit         : \"Kommentar absenden\"
  comment_btn_submitted      : \"Versendet\"
  comment_success_msg        : \"Danke für Ihren Kommentar! Er wird auf der Seite angezeigt, nachdem er geprüft wurde.\"
  comment_error_msg          : \"Entschuldigung, es gab einen Fehler. Bitte füllen Sie alle benötigten Felder aus und versuchen Sie es erneut.\"
  loading_label              : \"Lade...\"
  search_label_text          :
  search_placeholder_text    : \"Suchbegriff eingeben...\"
  search_algolia_no_results  :
  results_found              : \"Ergebnis(se) gefunden\"
de-DE:
  <<: *DEFAULT_DE
de-AT:
  <<: *DEFAULT_DE
de-CH:
  <<: *DEFAULT_DE
de-BE:
  <<: *DEFAULT_DE
de-LI:
  <<: *DEFAULT_DE
de-LU:
  <<: *DEFAULT_DE

# Nepali (Nepal)
# --------------
ne: &DEFAULT_NE
  skip_links                 :
  skip_primary_nav           :
  skip_content               :
  skip_footer                :
  page                       : \"पृष्‍ठ\"
  pagination_previous        : \"अघिल्लो\"
  pagination_next            : \"अर्को\"
  breadcrumb_home_label      : \"गृह\"
  breadcrumb_separator       : \"/\"
  menu_label                 : \"टगल मेनु\"
  search_label               :
  toc_label                  : \"यो पृष्‍ठमा\"
  ext_link_label             : \"सिधा सम्पर्क\"
  less_than                  : \"कम्तिमा\"
  minute_read                : \"मिनेट पढ्नुहोस्\"
  share_on_label             : \"शेयर गर्नुहोस्\"
  meta_label                 :
  tags_label                 : \"ट्यागहरू:\"
  categories_label           : \"वर्गहरु:\"
  date_label                 : \"अद्यावधिक:\"
  comments_label             : \"टिप्पणी दिनुहोस्\"
  comments_title             : \"टिप्पणीहरू\"
  more_label                 : \"अझै सिक्नुहोस्\"
  related_label              : \"तपाईं रुचाउन सक्नुहुन्छ \"
  follow_label               : \"पछ्याउनुहोस्:\"
  feed_label                 : \"फिड\"
  powered_by                 : \"Powered by\"
  website_label              : \"वेबसाइट\"
  email_label                : \"इमेल\"
  recent_posts               : \"ताजा लेखहरु\"
  undefined_wpm              : \"अपरिभाषित प्यारामिटर शब्दहरू_प्रति_मिनेट at _config.yml\"
  comment_form_info          : \"तपाइँको इमेल ठेगाना प्रकाशित गरिने छैन।आवश्यक जानकारीहरुमा चिन्ह लगाइको छ\"
  comment_form_comment_label : \"टिप्पणी\"
  comment_form_md_info       : \"मार्कडाउन  समर्थित छ।\"
  comment_form_name_label    : \"नाम\"
  comment_form_email_label   : \"इमेल ठेगाना\"
  comment_form_website_label : \"वेबसाइट (वैकल्पिक)\"
  comment_btn_submit         : \"टिप्पणी दिनुहोस् \"
  comment_btn_submitted      : \"टिप्पणी भयो\"
  comment_success_msg        : \"तपाईंको टिप्पणीको लागि धन्यवाद! एक पटक यो अनुमोदन गरेपछी यो साइटमा देखाउनेछ।\"
  comment_error_msg          : \"माफ गर्नुहोस्, तपाईंको टिप्पणी त्रुटि थियो।सबै आवश्यक जानकारीहरु पूरा गरिएको छ भने निश्चित गर्नुहोस् र फेरि प्रयास गर्नुहोस्।\"
  loading_label              : \"लोड हुँदैछ ...\"
  search_label_text          :
  search_algolia_no_results  :
ne-NP:
  <<: *DEFAULT_NE

# Korean
# ------
ko: &DEFAULT_KO
  skip_links                 :
  skip_primary_nav           :
  skip_content               :
  skip_footer                :
  page                       : \"페이지\"
  pagination_previous        : \"이전\"
  pagination_next            : \"다음\"
  breadcrumb_home_label      : \"Home\"
  breadcrumb_separator       : \"/\"
  menu_label                 : \"토글 메뉴\"
  search_label               :
  toc_label                  : \"On This Page\"
  ext_link_label             : \"직접 링크\"
  less_than                  : \"최대\"
  minute_read                : \"분 소요\"
  share_on_label             : \"공유하기\"
  meta_label                 :
  tags_label                 : \"태그:\"
  categories_label           : \"카테고리:\"
  date_label                 : \"업데이트:\"
  comments_label             : \"댓글남기기\"
  comments_title             : \"댓글\"
  more_label                 : \"더 보기\"
  related_label              : \"참고\"
  follow_label               : \"팔로우:\"
  feed_label                 : \"피드\"
  powered_by                 : \"Powered by\"
  website_label              : \"웹사이트\"
  email_label                : \"이메일\"
  recent_posts               : \"최근 포스트\"
  undefined_wpm              : \"Undefined parameter words_per_minute at _config.yml\"
  comment_form_info          : \"이메일은 공개되지 않습니다. 작성 필요 필드:\"
  comment_form_comment_label : \"댓글\"
  comment_form_md_info       : \"마크다운을 지원합니다.\"
  comment_form_name_label    : \"이름\"
  comment_form_email_label   : \"이메일\"
  comment_form_website_label : \"웹사이트(선택사항)\"
  comment_btn_submit         : \"댓글 등록\"
  comment_btn_submitted      : \"등록됨\"
  comment_success_msg        : \"감사합니다! 댓글이 머지된 후 확인하실 수 있습니다.\"
  comment_error_msg          : \"댓글 등록에 문제가 있습니다. 필요 필드를 작성했는지 확인하고 다시 시도하세요.\"
  loading_label              : \"로딩중...\"
  search_label_text          :
  search_placeholder_text    : \"검색어를 입력하세요...\"
  search_algolia_no_results  :
  results_found              : \"개 결과 발견\"
  back_to_top                : \"맨 위로 이동\"
ko-KR:
  <<: *DEFAULT_KO

# Russian / Русский
# -----------------
ru: &DEFAULT_RU
  skip_links                 :
  skip_primary_nav           :
  skip_content               :
  skip_footer                :
  page                       : \"Страница\"
  pagination_previous        : \"Предыдущая\"
  pagination_next            : \"Следующая\"
  breadcrumb_home_label      : \"Главная\"
  breadcrumb_separator       : \"/\"
  menu_label                 : \"Выпадающее меню\"
  search_label               :
  toc_label                  : \"Содержание\"
  ext_link_label             : \"Прямая ссылка\"
  less_than                  : \"менее\"
  minute_read                : \"мин на чтение\"
  share_on_label             : \"Поделиться\"
  meta_label                 :
  tags_label                 : \"Метки:\"
  categories_label           : \"Разделы:\"
  date_label                 : \"Дата изменения:\"
  comments_label             : \"Оставить комментарий\"
  comments_title             : \"Комментарии\"
  more_label                 : \"Читать далее\"
  related_label              : \"Вам также может понравиться\"
  follow_label               : \"Связаться со мной:\"
  feed_label                 : \"RSS-лента\"
  powered_by                 : \"Сайт работает на\"
  website_label              : \"Сайт\"
  email_label                : \"Электронная почта\"
  recent_posts               : \"Свежие записи\"
  undefined_wpm              : \"Не определён параметр words_per_minute в _config.yml\"
  comment_form_info          : \"Ваш адрес электронной почты не будет опубликован. Обязательные поля помечены\"
  comment_form_comment_label : \"Комментарий\"
  comment_form_md_info       : \"Поддерживается синтаксис Markdown.\"
  comment_form_name_label    : \"Имя\"
  comment_form_email_label   : \"Электронная почта\"
  comment_form_website_label : \"Ссылка на сайт (необязательно)\"
  comment_btn_submit         : \"Оставить комментарий\"
  comment_btn_submitted      : \"Отправлено\"
  comment_success_msg        : \"Спасибо за Ваш комментарий! Он будет опубликован на сайте после проверки.\"
  comment_error_msg          : \"К сожалению, произошла ошибка с отправкой комментария. Пожалуйста, убедитесь, что все обязательные поля заполнены и попытайтесь снова.\"
  loading_label              : \"Отправка...\"
  search_label_text          :
  search_placeholder_text    : \"Введите поисковый запрос...\"
  search_algolia_no_results  :
  results_found              : \"Найдено\"
ru-RU:
  <<: *DEFAULT_RU

# Lithuanian / Lietuviškai
# ------------------------
lt: &DEFAULT_LT
  skip_links                 :
  skip_primary_nav           :
  skip_content               :
  skip_footer                :
  page                       : \"Puslapis\"
  pagination_previous        : \"Ankstesnis\"
  pagination_next            : \"Sekantis\"
  breadcrumb_home_label      : \"Pagrindinis\"
  breadcrumb_separator       : \"/\"
  menu_label                 : \"Meniu rodymas\"
  search_label               :
  toc_label                  : \"Turinys\"
  ext_link_label             : \"Tiesioginė nuoroda\"
  less_than                  : \"mažiau nei\"
  minute_read                : \"min. skaitymo\"
  share_on_label             : \"Pasidalinti\"
  meta_label                 :
  tags_label                 : \"Žymės:\"
  categories_label           : \"Kategorijos:\"
  date_label                 : \"Atnaujinta:\"
  comments_label             : \"Palikti komentarą\"
  comments_title             : \"Komentaras\"
  more_label                 : \"Skaityti daugiau\"
  related_label              : \"Taip pat turėtų patikti\"
  follow_label               : \"Sekti:\"
  feed_label                 : \"Šaltinis\"
  powered_by                 : \"Sukurta su\"
  website_label              : \"Tinklapis\"
  email_label                : \"El. paštas\"
  recent_posts               : \"Naujausi įrašai\"
  undefined_wpm              : \"Nedeklaruotas parametras words_per_minute faile _config.yml\"
  comment_form_info          : \"El. pašto adresas nebus viešinamas. Būtini laukai pažymėti\"
  comment_form_comment_label : \"Komentaras\"
  comment_form_md_info       : \"Markdown palaikomas.\"
  comment_form_name_label    : \"Vardas\"
  comment_form_email_label   : \"El. paštas\"
  comment_form_website_label : \"Tinklapis (nebūtina)\"
  comment_btn_submit         : \"Komentuoti\"
  comment_btn_submitted      : \"Įrašytas\"
  comment_success_msg        : \"Ačiū už komentarą! Jis bus parodytas kai bus patvirtintas.\"
  comment_error_msg          : \"Atleiskite, įvyko netikėta klaida įrašant komentarą. Pasitikrinkite ar užpildėte visus būtinus laukus ir pamėginkite dar kartą.\"
  loading_label              : \"Kraunama...\"
  search_label_text          :
  search_algolia_no_results  :
lt-LT:
  <<: *DEFAULT_LT

# Greek
# -----
gr: &DEFAULT_GR
  skip_links                 :
  skip_primary_nav           :
  skip_content               :
  skip_footer                :
  page                       : \"Σελίδα\"
  pagination_previous        : \"Προηγούμενo\"
  pagination_next            : \"Επόμενo\"
  breadcrumb_home_label      : \"Αρχική\"
  breadcrumb_separator       : \"/\"
  menu_label                 : \"Μενού\"
  search_label               :
  toc_label                  : \"Περιεχόμενα\"
  ext_link_label             : \"Εξωτερικός Σύνδεσμος\"
  less_than                  : \"Λιγότερο από\"
  minute_read                : \"λεπτά ανάγνωσης\"
  share_on_label             : \"Μοιραστείτε το\"
  meta_label                 :
  tags_label                 : \"Ετικέτες:\"
  categories_label           : \"Κατηγορίες:\"
  date_label                 : \"Ενημερώθηκε:\"
  comments_label             : \"Αφήστε ένα σχόλιο\"
  comments_title             : \"Σχόλια\"
  more_label                 : \"Διάβαστε περισσότερα\"
  related_label              : \"Σχετικές αναρτήσεις\"
  follow_label               : \"Ακολουθήστε:\"
  feed_label                 : \"RSS Feed\"
  powered_by                 : \"Δημιουργήθηκε με\"
  website_label              : \"Ιστοσελίδα\"
  email_label                : \"Email\"
  recent_posts               : \"Τελευταίες αναρτήσεις\"
  undefined_wpm              : \"Δεν έχει οριστεί η παράμετρος words_per_minute στο αρχείο _config.yml\"
  comment_form_info          : \"Η διεύθυνση email σας δεν θα δημοσιευθεί. Τα απαιτούμενα πεδία εμφανίζονται με αστερίσκο\"
  comment_form_comment_label : \"Σχόλιο\"
  comment_form_md_info       : \"Το πεδίο υποστηρίζει Markdown.\"
  comment_form_name_label    : \"Όνομα\"
  comment_form_email_label   : \"Διεύθυνση email\"
  comment_form_website_label : \"Ιστοσελίδα (προαιρετικό)\"
  comment_btn_submit         : \"Υπόβαλε ένα σχόλιο\"
  comment_btn_submitted      : \"Έχει υποβληθεί\"
  comment_success_msg        : \"Ευχαριστούμε για το σχόλιό σας! Θα εμφανιστεί στην ιστοσελίδα αφού εγκριθεί.\"
  comment_error_msg          : \"Λυπούμαστε, παρουσιάστηκε σφάλμα με την υποβολή σας. Παρακαλούμε βεβαιωθείτε ότι έχετε όλα τα απαιτούμενα πεδία συμπληρωμένα και δοκιμάστε ξανά.\"
  loading_label              : \"Φόρτωση...\"
  search_label_text          :
  search_placeholder_text    : \"Εισάγετε όρο αναζήτησης...\"
  search_algolia_no_results  :
  results_found              : \"Αποτελέσματα\"
gr-GR:
  <<: *DEFAULT_GR

# Swedish
# -------
sv: &DEFAULT_SV
  skip_links                 :
  skip_primary_nav           :
  skip_content               :
  skip_footer                :
  page                       : \"Sidan\"
  pagination_previous        : \"Föregående\"
  pagination_next            : \"Nästa\"
  breadcrumb_home_label      : \"Hem\"
  breadcrumb_separator       : \"/\"
  menu_label                 : \"Växla menyläge\"
  search_label               : \"Växla sökläge\"
  toc_label                  : \"På denna sida\"
  ext_link_label             : \"Direkt länk\"
  less_than                  : \"mindre än\"
  minute_read                : \"minut läsning\"
  share_on_label             : \"Dela på\"
  meta_label                 :
  tags_label                 : \"Taggar:\"
  categories_label           : \"Kategorier:\"
  date_label                 : \"Uppdaterades:\"
  comments_label             : \"Lämna en kommentar\"
  comments_title             : \"Kommentarer\"
  more_label                 : \"Lär dig mer\"
  related_label              : \"Du kanske vill även läsa:\"
  follow_label               : \"Följ:\"
  feed_label                 : \"Flöde\"
  powered_by                 : \"Framställd med\"
  website_label              : \"Webbsida\"
  email_label                : \"E-post\"
  recent_posts               : \"Senaste inlägg\"
  undefined_wpm              : \"Odefinerade parametrar words_per_minute i _config.yml\"
  comment_form_info          : \"Din e-post adress kommer inte att publiceras. Obligatoriska fält är markerade\"
  comment_form_comment_label : \"Kommentar\"
  comment_form_md_info       : \"Stöd för Markdown finns.\"
  comment_form_name_label    : \"Namn\"
  comment_form_email_label   : \"E-post adress\"
  comment_form_website_label : \"Webdsida (valfritt)\"
  comment_btn_submit         : \"Skicka en kommentar\"
  comment_btn_submitted      : \"Kommentaren har tagits emot\"
  comment_success_msg        : \"Tack för din kommentar! Den kommer att visas på sidan så fort den har godkännts.\"
  comment_error_msg          : \"Tyvärr det har blivit något fel i ett av fälten, se till att du fyllt i alla obligatoriska fält och försök igen.\"
  loading_label              : \"Laddar...\"
  search_label_text          :
  search_placeholder_text    : \"Fyll i sökterm...\"
  search_algolia_no_results  :
  results_found              : \"Resultat funna\"
  back_to_top                : \"Tillbaka till toppen\"
sv-SE:
  <<: *DEFAULT_SV
sv-FI:
  <<: *DEFAULT_SV

# Dutch
# -----
nl: &DEFAULT_NL
  skip_links                 :
  skip_primary_nav           :
  skip_content               :
  skip_footer                :
  page                       : \"Pagina\"
  pagination_previous        : \"Vorige\"
  pagination_next            : \"Volgende\"
  breadcrumb_home_label      : \"Home\"
  breadcrumb_separator       : \"/\"
  menu_label                 : \"Wissel Menu\"
  search_label               :
  toc_label                  : \"Op deze pagina\"
  ext_link_label             : \"Directe Link\"
  less_than                  : \"minder dan\"
  minute_read                : \"minuut gelezen\"
  share_on_label             : \"Deel op\"
  meta_label                 :
  tags_label                 : \"Labels:\"
  categories_label           : \"Categorieën:\"
  date_label                 : \"Bijgewerkt:\"
  comments_label             : \"Laat een reactie achter\"
  comments_title             : \"Commentaren\"
  more_label                 : \"Meer informatie\"
  related_label              : \"Bekijk ook eens\"
  follow_label               : \"Volg:\"
  feed_label                 : \"Feed\"
  powered_by                 : \"Aangedreven door\"
  website_label              : \"Website\"
  email_label                : \"Email\"
  recent_posts               : \"Recente berichten\"
  undefined_wpm              : \"Niet gedefinieerde parameter words_per_minute bij _config.yml\"
  comment_form_info          : \"Uw e-mailadres wordt niet gepubliceerd. Verplichte velden zijn gemarkeerd\"
  comment_form_comment_label : \"Commentaar\"
  comment_form_md_info       : \"Markdown wordt ondersteund.\"
  comment_form_name_label    : \"Naam\"
  comment_form_email_label   : \"E-mailadres\"
  comment_form_website_label : \"Website (optioneel)\"
  comment_btn_submit         : \"Commentaar toevoegen\"
  comment_btn_submitted      : \"Toegevoegd\"
  comment_success_msg        : \"Bedankt voor uw reactie! Het zal op de site worden weergegeven zodra het is goedgekeurd.\"
  comment_error_msg          : \"Sorry, er is een fout opgetreden bij uw inzending. Zorg ervoor dat alle vereiste velden zijn voltooid en probeer het opnieuw.\"
  loading_label              : \"Laden...\"
  search_label_text          : \"Geef uw zoekterm in...\"
  search_placeholder_text    : \"Geef uw zoekterm in...\"
  search_algolia_no_results  :
  results_found              : \"Resultaat gevonden\"
  back_to_top                : \"Terug naar boven\"
nl-BE:
  <<: *DEFAULT_NL
nl-NL:
  <<: *DEFAULT_NL

# Indonesian
# ----------
id: &DEFAULT_ID
  skip_links                 :
  skip_primary_nav           :
  skip_content               :
  skip_footer                :
  page                       : \"Halaman\"
  pagination_previous        : \"Kembali\"
  pagination_next            : \"Maju\"
  breadcrumb_home_label      : \"Home\"
  breadcrumb_separator       : \"/\"
  menu_label                 : \"Menu Toggle\"
  search_label               :
  toc_label                  : \"Pada Halaman Ini\"
  ext_link_label             : \"Link langsung\"
  less_than                  : \"Kurang dari\"
  minute_read                : \"Waktu baca\"
  share_on_label             : \"Berbagi di\"
  meta_label                 :
  tags_label                 : \"Golongan:\"
  categories_label           : \"Kategori:\"
  date_label                 : \"Diupdate:\"
  comments_label             : \"Tinggalkan komentar\"
  comments_title             : \"Komentar\"
  more_label                 : \"Pelajari lagi\"
  related_label              : \"Anda juga akan suka\"
  follow_label               : \"Ikuti:\"
  feed_label                 : \"Feed\"
  powered_by                 : \"Didukung oleh\"
  website_label              : \"Website\"
  email_label                : \"Email\"
  recent_posts               : \"Posting terbaru\"
  undefined_wpm              : \"Parameter terdeskripsi words_per_minute di _config.yml\"
  comment_form_info          : \"Email Anda tidak akan dipublish. Kolom yang diperlukan ditandai\"
  comment_form_comment_label : \"Komentar\"
  comment_form_md_info       : \"Markdown disupport.\"
  comment_form_name_label    : \"Nama\"
  comment_form_email_label   : \"Alamat email\"
  comment_form_website_label : \"Website (opsional)\"
  comment_btn_submit         : \"Submit Komentar\"
  comment_btn_submitted      : \"Telah disubmit\"
  comment_success_msg        : \"Terimakasih atas komentar Anda! Komentar ini akan tampil setelah disetujui.\"
  comment_error_msg          : \"Maaf, ada kesalahan pada submisi Anda. Pastikan seluruh kolom sudah dilengkapi dan coba kembali.\"
  loading_label              : \"Sedang meload...\"
  search_label_text          :
  search_algolia_no_results  :
id-ID:
  <<: *DEFAULT_ID

# Vietnamese
# ----------
vi: &DEFAULT_VI
  skip_links                 : \"Đường dẫn tắt\"
  skip_primary_nav           : \"Nhảy tới thanh điều hướng\"
  skip_content               : \"Nhảy tới nội dung\"
  skip_footer                : \"Nhảy tới chân trang\"
  page                       : \"Trang\"
  pagination_previous        : \"Trước\"
  pagination_next            : \"Kế tiếp\"
  breadcrumb_home_label      : \"Trang chủ\"
  breadcrumb_separator       : \"/\"
  menu_label                 : \"Menu\"
  search_label               : \"Tìm kiếm\"
  toc_label                  : \"Tại trang này\"
  ext_link_label             : \"Đường dẫn trực tiếp\"
  less_than                  : \"chỉ cần\"
  minute_read                : \"phút để đọc\"
  share_on_label             : \"Chia sẻ tại\"
  meta_label                 :
  tags_label                 : \"Thẻ:\"
  categories_label           : \"Danh mục:\"
  date_label                 : \"Ngày cập nhật:\"
  comments_label             : \"Để lại bình luận\"
  comments_title             : \"Bình luận\"
  more_label                 : \"Mở rộng\"
  related_label              : \"Có thể bạn cũng thích\"
  follow_label               : \"Theo dõi:\"
  feed_label                 : \"Feed\"
  powered_by                 : \"Xây dựng trên nền tảng\"
  website_label              : \"Website\"
  email_label                : \"Email\"
  recent_posts               : \"Bài viết mới\"
  undefined_wpm              : \"Chưa định nghĩa thông số words_per_minute tại _config.yml\"
  comment_form_info          : \"Email của bạn sẽ được giữ bí mật. Các phần bắt buộc được đánh dấu\"
  comment_form_comment_label : \"Bình luận\"
  comment_form_md_info       : \"Hỗ trợ Markdown.\"
  comment_form_name_label    : \"Tên\"
  comment_form_email_label   : \"Địa chỉ email\"
  comment_form_website_label : \"Website (không bắt buộc)\"
  comment_btn_submit         : \"Gửi bình luận\"
  comment_btn_submitted      : \"Đã được gửi\"
  comment_success_msg        : \"Cảm ơn bạn đã bình luận! Bình luận sẽ xuất hiện sau khi được duyệt.\"
  comment_error_msg          : \"Rất tiếc, có lỗi trong việc gửi bình luận. Hãy đảm bảo toàn bộ các phần bắt buộc đã được điền đầy đủ và thử lại.\"
  loading_label              : \"Đang tải...\"
  search_label_text          : \"Nhập từ khóa cần tìm...\"
  search_placeholder_text    : \"Nhập từ khóa cần tìm...\"
  search_algolia_no_results  :
  results_found              : \"Kết quả tìm được\"
  back_to_top                : \"Lên đầu trang\"
vi-VN:
  <<: *DEFAULT_VI

# Danish
# ------
da: &DEFAULT_DA
  skip_links                 :
  skip_primary_nav           :
  skip_content               :
  skip_footer                :
  page                       : \"Side\"
  pagination_previous        : \"Forrige\"
  pagination_next            : \"Næste\"
  breadcrumb_home_label      : \"Home\"
  breadcrumb_separator       : \"/\"
  menu_label                 : \"Vis/skjul menu\"
  search_label               :
  toc_label                  : \"På denne side\"
  ext_link_label             : \"Direkte link\"
  less_than                  : \"mindre end\"
  minute_read                : \"minutters læsning\"
  share_on_label             : \"Del på\"
  meta_label                 :
  tags_label                 : \"Nøgleord:\"
  categories_label           : \"Kategorier:\"
  date_label                 : \"Opdateret:\"
  comments_label             : \"Skriv en kommentar\"
  comments_title             : \"Kommentarer\"
  more_label                 : \"Lær mere\"
  related_label              : \"Måske kan du også lide\"
  follow_label               : \"Følg:\"
  feed_label                 : \"Feed\"
  powered_by                 : \"Drives af\"
  website_label              : \"Website\"
  email_label                : \"E-mail\"
  recent_posts               : \"Seneste indlæg\"
  undefined_wpm              : \"Parameteren words_per_minute er ikke defineret i _config.yml\"
  comment_form_info          : \"Din e-mail bliver ikke offentliggjort. Obligatoriske felter er markeret\"
  comment_form_comment_label : \"Kommentar\"
  comment_form_md_info       : \"Markdown er understøttet.\"
  comment_form_name_label    : \"Navn\"
  comment_form_email_label   : \"E-mail\"
  comment_form_website_label : \"Website (frivillig)\"
  comment_btn_submit         : \"Send kommentar\"
  comment_btn_submitted      : \"Sendt\"
  comment_success_msg        : \"Tak for din kommentar! Den bliver vist på siden, så snart den er godkendt.\"
  comment_error_msg          : \"Desværre skete der en fejl. Prøv igen, mens du sørger for at alle obligatoriske felter er udfyldt.\"
  loading_label              : \"Indlæser...\"
  search_label_text          :
  search_placeholder_text    : \"Hvad leder du efter...\"
  search_algolia_no_results  :
  results_found              : \"Resultat(er) fundet\"
  back_to_top                : \"Tilbage til toppen\"
da-DK:
  <<: *DEFAULT_DA

# Polish
# ------
pl: &DEFAULT_PL
  skip_links                 :
  skip_primary_nav           :
  skip_content               :
  skip_footer                :
  page                       : \"Strona\"
  pagination_previous        : \"Poprzednia\"
  pagination_next            : \"Następna\"
  breadcrumb_home_label      : \"Strona główna\"
  breadcrumb_separator       : \"/\"
  menu_label                 : \"Przełącz menu\"
  search_label               :
  toc_label                  : \"Spis treści\"
  ext_link_label             : \"Link bezpośredni\"
  less_than                  : \"mniej niż\"
  minute_read                : \"minut(y)\"
  share_on_label             : \"Udostępnij\"
  meta_label                 :
  tags_label                 : \"Tagi:\"
  categories_label           : \"Kategorie:\"
  date_label                 : \"Ostatnia aktualizacja:\"
  comments_label             : \"Zostaw komentarz\"
  comments_title             : \"Komentarze\"
  more_label                 : \"Dowiedz się więcej\"
  related_label              : \"Także może Ci się spodobać\"
  follow_label               : \"Śledź:\"
  feed_label                 : \"Feed\"
  powered_by                 : \"Powstało dzięki\"
  website_label              : \"Strona\"
  email_label                : \"Email\"
  recent_posts               : \"Najnowsze wpisy\"
  undefined_wpm              : \"Parametr words_per_minute nie został zdefiniowany w _config.yml.\"
  comment_form_info          : \"Twój adres email nie będzie udostępiony. Wymagane pola są oznaczone\"
  comment_form_comment_label : \"Skomentuj\"
  comment_form_md_info       : \"Markdown jest wspierany\"
  comment_form_name_label    : \"Imię\"
  comment_form_email_label   : \"Adres email\"
  comment_form_website_label : \"Strona www (opcjonalna)\"
  comment_btn_submit         : \"Skomentuj\"
  comment_btn_submitted      : \"Komentarz dodany\"
  comment_success_msg        : \"Dziękuję za Twój komentarz! Zostanie dodany po akceptacji.\"
  comment_error_msg          : \"Niestety wystąpił błąd. Proszę upewnij się, że wszystkie wymagane pola zostały wypełnione i spróbuj ponownie.\"
  loading_label              : \"Trwa ładowanie strony...\"
  search_label_text          :
  search_algolia_no_results  : \"Brak wyników\"
pl-PL:
  <<: *DEFAULT_PL

# Japanese
# --------
ja: &DEFAULT_JA
  skip_links                 :
  skip_primary_nav           :
  skip_content               :
  skip_footer                :
  page                       : \"ページ\"
  pagination_previous        : \"前へ\"
  pagination_next            : \"次へ\"
  breadcrumb_home_label      : \"ホーム\"
  breadcrumb_separator       : \"/\"
  menu_label                 : \"メニュー\"
  search_label               :
  toc_label                  : \"目次\"
  ext_link_label             : \"リンク\"
  less_than                  :
  minute_read                :
  share_on_label             : \"共有\"
  meta_label                 :
  tags_label                 : \"タグ:\"
  categories_label           : \"カテゴリー:\"
  date_label                 : \"更新日時:\"
  comments_label             : \"コメントする\"
  comments_title             : \"コメント\"
  more_label                 : \"さらに詳しく\"
  related_label              : \"関連記事\"
  follow_label               : \"フォロー\"
  feed_label                 :
  powered_by                 :
  website_label              :
  email_label                :
  recent_posts               : \"最近の投稿\"
  undefined_wpm              : \"パラメータ words_per_minute が _config.yml で定義されていません\"
  comment_form_info          : \"メールアドレスが公開されることはありません。次の印のある項目は必ず入力してください:\"
  comment_form_comment_label : \"コメント\"
  comment_form_md_info       : \"Markdown を使用できます\"
  comment_form_name_label    : \"名前\"
  comment_form_email_label   : \"メールアドレス\"
  comment_form_website_label : \"URL (任意)\"
  comment_btn_submit         : \"コメントを送信する\"
  comment_btn_submitted      : \"送信しました\"
  comment_success_msg        : \"コメントありがとうございます！　コメントは承認されるとページに表示されます。\"
  comment_error_msg          : \"送信エラーです。必須項目がすべて入力されていることを確認して再送信してください。\"
  loading_label              : \"読み込み中...\"
  search_label_text          :
  search_placeholder_text    : \"検索キーワードを入力してください...\"
  search_algolia_no_results  :
  results_found              : \"件\"
ja-JP:
  <<: *DEFAULT_JA

# Slovak
# -----------------
sk: &DEFAULT_SK
  skip_links                 :
  skip_primary_nav           :
  skip_content               :
  skip_footer                :
  page                       : \"Stránka\"
  pagination_previous        : \"Predošlá\"
  pagination_next            : \"Ďalšia\"
  breadcrumb_home_label      : \"Domov\"
  breadcrumb_separator       : \"/\"
  menu_label                 : \"Menu\"
  search_label               :
  toc_label                  : \"Obsah\"
  ext_link_label             : \"Priamy odkaz\"
  less_than                  : \"menej ako\"
  minute_read                : \"minút\"
  share_on_label             : \"Zdieľaj na\"
  meta_label                 :
  tags_label                 : \"Tagy:\"
  categories_label           : \"Kategórie:\"
  date_label                 : \"Aktualizované:\"
  comments_label             : \"Zanechaj odkaz\"
  comments_title             : \"Komentáre\"
  more_label                 : \"Dozvedieť sa viac\"
  related_label              : \"Podobné články\"
  follow_label               : \"Sleduj:\"
  feed_label                 : \"Zoznam\"
  powered_by                 : \"Stránka vytvorená pomocou\"
  website_label              : \"Web stránka\"
  email_label                : \"Email\"
  recent_posts               : \"Najnovšie príspevky\"
  undefined_wpm              : \"Nedefinovaný parameter words_per_minute v _config.yml\"
  comment_form_info          : \"Tvoja emailová adresa nebude publikovaná. Požadované polia sú označené\"
  comment_form_comment_label : \"Komentár\"
  comment_form_md_info       : \"Markdown je podporovaný.\"
  comment_form_name_label    : \"Meno\"
  comment_form_email_label   : \"Emailová adresa\"
  comment_form_website_label : \"Webstránka (voliteľné)\"
  comment_btn_submit         : \"Vlož komentár\"
  comment_btn_submitted      : \"Vložený\"
  comment_success_msg        : \"Ďakujem za tvoj komentár! Po schválení bude zobrazený na stránke.\"
  comment_error_msg          : \"Prepáč, pri ukladaní nastala chyba. Ubezpeč sa prosím, že si vyplnil všetky požadované polia a skús znova.\"
  loading_label              : \"Načítava sa...\"
  search_label_text          :
  search_placeholder_text    : \"Zadaj hľadaný výraz...\"
  search_algolia_no_results  :
  results_found              : \"Nájdených výsledkov\"
  back_to_top                : \"Na začiatok stránky\"
sk-SK:
  <<: *DEFAULT_SK

# Hungarian
# -----------------
hu: &DEFAULT_HU
  skip_links                 :
  skip_primary_nav           :
  skip_content               :
  skip_footer                :
  page                       : \"Oldal\"
  pagination_previous        : \"Előző\"
  pagination_next            : \"Következő\"
  breadcrumb_home_label      : \"Kezdőlap\"
  breadcrumb_separator       : \"/\"
  menu_label                 : \"Menü nyit/zár\"
  search_label               :
  toc_label                  : \"Ezen az oldalon\"
  ext_link_label             : \"Közvetlen Link\"
  less_than                  : \"kevesebb mint\"
  minute_read                : \"eltöltött percek\"
  share_on_label             : \"Megosztás\"
  meta_label                 :
  tags_label                 : \"Tagek:\"
  categories_label           : \"Kategóriák:\"
  date_label                 : \"Frissítve:\"
  comments_label             : \"Szólj hozzá!\"
  comments_title             : \"Hozzászólások\"
  more_label                 : \"Tovább\"
  related_label              : \"Ajánlások\"
  follow_label               : \"Követés:\"
  feed_label                 : \"Folyam\"
  powered_by                 : \"Powered by\"
  website_label              : \"Honlap\"
  email_label                : \"Email\"
  recent_posts               : \"Friss cikkek\"
  undefined_wpm              : \"Ismeretlen paraméter words_per_minute : _config.yml\"
  comment_form_info          : \"Az e-mail címed nem lesz publikus. A csillagozott mezők kitöltése kötelező\"
  comment_form_comment_label : \"Hozzászólás\"
  comment_form_md_info       : \"Támogatott formázási mód: Markdown\"
  comment_form_name_label    : \"Név\"
  comment_form_email_label   : \"Email cím\"
  comment_form_website_label : \"Honlap (nem kötelező):\"
  comment_btn_submit         : \"Hozzászólás elküldése\"
  comment_btn_submitted      : \"Hozzászólás elküldve\"
  comment_success_msg        : \"Köszönjük a Hozzászólást! A Hozzászólások csak előzetes moderáció után lesznek publikusak.\"
  comment_error_msg          : \"Hoppá, hiba történt a beküldés közben. Kérlek ellenőrizd hogy minden kötelező mező ki van-e töltve.\"
  loading_label              : \"Betöltés...\"
  search_label_text          :
  search_placeholder_text    : \"Keresendő szöveg...\"
  search_algolia_no_results  :
  results_found              : \"Találatok:\"
  back_to_top                : \"Oldal tetejére\"
hu-HU:
  <<: *DEFAULT_HU

# Romanian
# -----------------
ro: &DEFAULT_RO
  skip_links                 :
  skip_primary_nav           :
  skip_content               :
  skip_footer                :
  page                       : \"Pagina\"
  pagination_previous        : \"Anterior\"
  pagination_next            : \"Următor\"
  breadcrumb_home_label      : \"Acasă\"
  breadcrumb_separator       : \"/\"
  menu_label                 : \"Comută meniul\"
  search_label               :
  toc_label                  : \"Pe această pagină\"
  ext_link_label             : \"Link direct\"
  less_than                  : \"mai puțin de\"
  minute_read                : \"minute de citit\"
  share_on_label             : \"Distribuie pe\"
  meta_label                 :
  tags_label                 : \"Etichete:\"
  categories_label           : \"Categorii:\"
  date_label                 : \"Actualizat:\"
  comments_label             : \"Lasă un comentariu\"
  comments_title             : \"Comentarii\"
  more_label                 : \"Citește mai departe\"
  related_label              : \"S-ar putea să-ți placă\"
  follow_label               : \"Urmărește:\"
  feed_label                 : \"Feed RSS\"
  powered_by                 : \"Cu sprijinul\"
  website_label              : \"Site\"
  email_label                : \"Email\"
  recent_posts               : \"Articole recente\"
  undefined_wpm              : \"Parametru words_per_minute nedefinit în _config.yml\"
  comment_form_info          : \"Adresa ta de email nu va fi făcută publică. Câmpurile marcate sunt obligatorii\"
  comment_form_comment_label : \"Comentariu\"
  comment_form_md_info       : \"Markdown este suportat.\"
  comment_form_name_label    : \"Nume\"
  comment_form_email_label   : \"Adresă de email\"
  comment_form_website_label : \"Site (opțional)\"
  comment_btn_submit         : \"Trimite comentariul\"
  comment_btn_submitted      : \"Trimis\"
  comment_success_msg        : \"Mulțumesc pentru comentariu! Va apărea pe site în momentul în care va fi aprobat.\"
  comment_error_msg          : \"Scuze, este o problemă cu comentariul tău. Asigură-te că toate câmpurile obligatorii au fost completate și încearcă din nou.\"
  loading_label              : \"Se încarcă...\"
  search_label_text          :
  search_placeholder_text    : \"Caută ceva...\"
  search_algolia_no_results  :
  results_found              : \"Rezultate găsite\"
  back_to_top                : \"Înapoi în susul paginii\"
ro-RO:
  <<: *DEFAULT_RO

# Punjabi
# -----------------
pa: &DEFAULT_PA
  skip_links                 : \"ਲਿੰਕ ਛੱਡੋ\"
  skip_primary_nav           : \"ਮੂਲ ਮਾਰਗ ਛੱਡੋ\"
  skip_content               : \"ਸਮੱਗਰੀ ਛੱਡੋ\"
  skip_footer                : \"ਅੰਤ ਵਿਚ ਲਿਖਿਆ ਛੱਡੋ\"
  page                       : \"ਸਫ਼ਾ\"
  pagination_previous        : \"ਪਿਛਲਾ\"
  pagination_next            : \"ਅਗਲਾ \"
  breadcrumb_home_label      : \"ਘਰ\"
  breadcrumb_separator       : \"/\"
  menu_label                 : \"ਟੌਗਲ ਮੀਨੂ\"
  search_label               : \"ਖੋਜ\"
  toc_label                  : \"ਇਸ ਸਫ਼ੇ 'ਤੇ\"
  ext_link_label             : \"ਸਿੱਧਾ ਸੰਪਰਕ\"
  less_than                  : \"ਤੋਂ ਘੱਟ\"
  minute_read                : \"ਮਿੰਟ ਵਿੱਚ ਪੜਿਆ ਜਾ ਸਕਦਾ ਹੈ\"
  share_on_label             : \"ਸਾਂਝਾ ਕਰੋ\"
  meta_label                 : \"ਸਵੈ-ਸੰਦਰਭ ਜਾਣਕਾਰੀ\"
  tags_label                 : \"ਟੈਗ\"
  categories_label           : \"ਵਰਗ\"
  date_label                 : \"ਅਪਡੇਟ ਕੀਤਾ:\"
  comments_label             : \"ਇੱਕ ਟਿੱਪਣੀ ਛੱਡੋ\"
  comments_title             : \"ਟਿੱਪਣੀਆਂ\"
  more_label                 : \"ਹੋਰ ਜਾਣੋ\"
  related_label              : \"ਤੁਸੀਂ ਇਸਦਾ ਆਨੰਦ ਵੀ ਲੈ ਸਕਦੇ ਹੋ\"
  follow_label               : \"ਫਾਲੋ ਅੱਪ ਕਰੋ:\"
  feed_label                 : \"ਫੀਡ\"
  powered_by                 : \"ਦੁਆਰਾ ਸੰਚਾਲਿਤ\"
  website_label              : \"ਵੈੱਬਸਾਇਟ\"
  email_label                : \"ਈਮੇਲ\"
  recent_posts               : \"ਹਾਲ ਹੀ ਦੇ ਪੋਸਟ\"
  undefined_wpm              : \"_config.yml ਤੇ ਅਣ-ਪ੍ਰਭਾਸ਼ਿਤ ਪੈਰਾਮੀਟਰ words_per_minute\"
  comment_form_info          : \"ਤੁਹਾਡਾ ਈਮੇਲ ਪਤਾ ਪ੍ਰਕਾਸ਼ਿਤ ਨਹੀਂ ਕੀਤਾ ਜਾਵੇਗਾ। ਅਨੁਮਾਨਿਤ ਸਥਾਨਾਂ ਨੂੰ ਅੰਡਰਲਾਈਨ ਕੀਤਾ ਗਿਆ ਹੈ\"
  comment_form_comment_label : \"ਟਿੱਪਣੀ\"
  comment_form_md_info       : \"ਮਾਰਕਡਾਊਨ ਵਰਤ ਸਕਦੇ ਹੋ।\"
  comment_form_name_label    : \"ਨਾਮ\"
  comment_form_email_label   : \"ਈਮੇਲ ਪਤਾ\"
  comment_form_website_label : \"ਵੈਬਸਾਈਟ (ਵਿਕਲਪਿਕ)\"
  comment_btn_submit         : \"ਕੋਈ ਟਿੱਪਣੀ ਭੇਜੋ\"
  comment_btn_submitted      : \"ਪੇਸ਼ ਕੀਤਾ\"
  comment_success_msg        : \"ਤੁਹਾਡੀਆਂ ਟਿੱਪਣੀਆਂ ਲਈ ਧੰਨਵਾਦ! ਇਹ ਮਨਜ਼ੂਰੀ ਮਿਲਣ ਦੇ ਬਾਅਦ ਸਾਈਟ 'ਤੇ ਦਿਖਾਇਆ ਜਾਵੇਗਾ।\"
  comment_error_msg          : \"ਮੁਆਫ ਕਰਨਾ, ਤੁਹਾਡੀ ਅਧੀਨਗੀ ਵਿੱਚ ਕੋਈ ਗਲਤੀ ਹੋਈ ਸੀ ਕਿਰਪਾ ਕਰਕੇ ਯਕੀਨੀ ਬਣਾਓ ਕਿ ਸਾਰੇ ਲੋੜੀਂਦੇ ਖੇਤਰ ਪੂਰੇ ਹੋ ਗਏ ਹਨ ਅਤੇ ਦੁਬਾਰਾ ਕੋਸ਼ਿਸ਼ ਕਰੋ।\"
  loading_label              : \"ਲੋਡ ਹੋ ਰਿਹਾ ਹੈ...\"
  search_label_text          : \"ਖੋਜ\"
  search_placeholder_text    : \"ਆਪਣੀ ਖੋਜ ਦੇ ਸ਼ਬਦ ਨੂੰ ਦਰਜ ਕਰੋ...\"
  search_algolia_no_results  :
  results_found              : \"ਨਤੀਜਾ ਮਿਲਿਆ/ਮਿਲੇ\"
  back_to_top                : \"ਵਾਪਸ ਚੋਟੀ 'ਤੇ ਜਾਓ\"
pa-IN:
  <<: *DEFAULT_PA

# Persian (Farsi)
# --------------
fa: &DEFAULT_FA
  skip_links                 :
  skip_primary_nav           :
  skip_content               :
  skip_footer                :
  page                       : \"صفحه\"
  pagination_previous        : \"قبلی\"
  pagination_next            : \"بعدی\"
  breadcrumb_home_label      : \"صفحه اصلی\"
  breadcrumb_separator       : \"/\"
  menu_label                 : \"فهرست\"
  toc_label                  : \"در این صفحه\"
  ext_link_label             : \"لینک مستقیم\"
  less_than                  : \" \"
  minute_read                : \"(طول مطالعه (دقیقه\"
  share_on_label             : \"اشتراک گذاری در\"
  meta_label                 :
  tags_label                 : \"تگ ها: \"
  categories_label           : \"دسته بندی ها: \"
  date_label                 : \"به روز شده در: \"
  comments_label             : \"ارسال نظر\"
  comments_title             : \"نظرات\"
  more_label                 : \"ادامه مطلب\"
  related_label              : \"ممکن است از این مطالب نیز لذت ببرید\"
  follow_label               : \"دنبال کنید: \"
  feed_label                 : \"خوراک\"
  powered_by                 : \"طراحی شده توسط\"
  website_label              : \"سایت اینترنتی\"
  email_label                : \"پست الکترونیک\"
  recent_posts               : \"آخرین مطالب\"
  undefined_wpm              : \".(words_per_minute) _config.yml متغیر اشتباه در\"
  comment_form_info          : \".آدرس ایمیل شما منتشر نخواهد شد. فیلدهای اجباری مشخص شده اند\"
  comment_form_comment_label : \"دیدگاه\"
  comment_form_md_info       : \".پشتیبانی می شود Markdown\"
  comment_form_name_label    : \"نام\"
  comment_form_email_label   : \"پست الکترونیک\"
  comment_form_website_label : \"سایت اینترنتی (اختیاری)\"
  comment_btn_submit         : \"ارسال نظر\"
  comment_btn_submitted      : \"ارسال شد\"
  comment_success_msg        : \".باتشکر از ارسال دیدگاه! پس از تأیید، این دیدگاه در سایت نشان داده خواهد شد\"
  comment_error_msg          : \".متاسفانه در ارسال شما خطایی بود. لطفا مطمئن شوید تمام فیلدهای مورد نیاز تکمیل شده و دوباره امتحان کنید\"
  loading_label              : \"...بارگذاری\"
  search_label_text          :
  search_placeholder_text    : \"...عبارت جستجوی خود را وارد کنید\"
  search_algolia_no_results  :
  results_found              : \"نتایج\"
  back_to_top                : \"بازگشت به بالا\"
fa-IR:
  <<: *DEFAULT_FA


# Malayalam
# -----------------
ml: &DEFAULT_ML
  skip_links                 :
  skip_primary_nav           :
  skip_content               :
  skip_footer                :
  page                       : \"പേജ്\"
  pagination_previous        : \"തിരികെ\"
  pagination_next            : \"മുന്നോട്ട്\"
  breadcrumb_home_label      : \"ഹോം\"
  breadcrumb_separator       : \"/\"
  menu_label                 : \"ടോഗിൾ മെനു\"
  search_label               : \"ടോഗിൾ സെർച്ച്\"
  toc_label                  : \"ഈ പേജിൽ\"
  ext_link_label             : \"ലിങ്കിലേക് പോകാൻ\"
  less_than                  : \"ഏതാണ്ട്\"
  minute_read                : \"മിനിറ്റ് ദൈർഖ്യം\"
  share_on_label             : \"ഷെയർ  ചെയ്യുവാൻ \"
  meta_label                 :
  tags_label                 : \"ടാഗുകൾ:\"
  categories_label           : \"വിഭാഗങ്ങൾ:\"
  date_label                 : \"അവസാന മാറ്റം:\"
  comments_label             : \"അഭിപ്രായം രേഖപ്പെടുത്തുക\"
  comments_title             : \"അഭിപ്രായങ്ങൾ\"
  more_label                 : \"കൂടുതൽ  അറിയുവാൻ\"
  related_label              : \"നിങ്ങൾക് ഇതും ഇഷ്ടപ്പെട്ടേക്കാം\"
  follow_label               : \"പിന്തുടരുക:\"
  feed_label                 : \"ഫീഡ്\"
  powered_by                 : \"പവേർഡ് ബൈ\"
  website_label              : \"വെബ്സൈറ്റ്\"
  email_label                : \"ഇ-മെയിൽ\"
  recent_posts               : \"സമീപകാല പോസ്റ്റുകൾ\"
  undefined_wpm              : \"Config.yml ലെ words_per_minute പരാമീറ്റർ നിർവചിച്ചിട്ടില്ല.\"
  comment_form_info          : \"നിങ്ങളുടെ ഇമെയിൽ വിലാസം പ്രസിദ്ധീകരിക്കില്ല. ആവശ്യമായ ഫീൽഡുകൾ അടയാളപ്പെടുത്തി.\"
  comment_form_comment_label : \"കമന്റ്\"
  comment_form_md_info       : \"Markdown സപ്പോർട്ട് ചെയ്യുന്നതാണ്.\"
  comment_form_name_label    : \"പേര്\"
  comment_form_email_label   : \"ഇ-മെയിൽ\"
  comment_form_website_label : \"വെബ്സൈറ് (ഓപ്ഷണൽ)\"
  comment_btn_submit         : \"അഭിപ്രായം രേഖപ്പെടുത്തുക\"
  comment_btn_submitted      : \"രേഖപ്പെടുത്തി\"
  comment_success_msg        : \"നിങ്ങളുടെ അഭിപ്രായത്തിന് നന്ദി! ഇത് അംഗീകരിച്ചുകഴിഞ്ഞാൽ ഇത് സൈറ്റിൽ പ്രദർശിപ്പിക്കും.\"
  comment_error_msg          : \"ക്ഷമിക്കണം, നിങ്ങളുടെ സമർപ്പണവുമായി ബന്ധപ്പെട്ട് ഒരു പിശകുണ്ടായിരുന്നു. ആവശ്യമായ എല്ലാ ഫീൽഡുകളും പൂർത്തിയായിട്ടുണ്ടെന്ന് ഉറപ്പുവരുത്തുക, വീണ്ടും ശ്രമിക്കുക.\"
  loading_label              : \"ലോഡിംഗ്...\"
  search_label_text          :
  search_placeholder_text    : \"നിങ്ങളുടെ തിരയൽ പദം നൽകുക...\"
  search_algolia_no_results  :
  results_found              : \"ഫലം (കൾ) കണ്ടെത്തി\"
  back_to_top                : \"മുകളിലേയ്ക്ക്\"
ml-IN:
  <<: *DEFAULT_ML

# Thailand
# --------------
th: &DEFAULT_TH
  skip_links                 :
  skip_primary_nav           :
  skip_content               :
  skip_footer                :
  page                       : \"หน้า\"
  pagination_previous        : \"ก่อนหน้า\"
  pagination_next            : \"ถัดไป\"
  breadcrumb_home_label      : \"หน้าแรก\"
  breadcrumb_separator       : \"/\"
  menu_label                 : \"พับเมนู\"
  search_label               : \"พับการค้นหา\"
  toc_label                  : \"บนหน้านี้\"
  ext_link_label             : \"ลิงก์โดยตรง\"
  less_than                  : \"น้อยกว่า\"
  minute_read                : \"นาที ในการอ่าน\"
  share_on_label             : \"แชร์ไปที่\"
  meta_label                 :
  tags_label                 : \"แท็ก:\"
  categories_label           : \"หมวดหมู่:\"
  date_label                 : \"อัพเดตล่าสุด:\"
  comments_label             : \"แสดงความคิดเห็น\"
  comments_title             : \"ความคิดเห็น\"
  more_label                 : \"อ่านต่อ\"
  related_label              : \"คุณอาจจะชอบสิ่งนี้\"
  follow_label               : \"ติดตาม:\"
  feed_label                 : \"ฟืดข่าว\"
  powered_by                 : \"ขับเคลื่อนโดย\"
  website_label              : \"เว็บไซต์\"
  email_label                : \"อีเมล\"
  recent_posts               : \"โพสล่าสุด\"
  undefined_wpm              : \"ไม่สามารถระบุพารามิเตอร์ words_per_minute ได้ใน _config.yml\"
  comment_form_info          : \"อีเมลของคุณไม่สามารถโพสสาธารณะได้ กรุณากรอกช่องที่ระบุด้วยเครื่องหมายดอกจันไว้\"
  comment_form_comment_label : \"แสดงความคิดเห็น\"
  comment_form_md_info       : \"มาร์กดาวน์ได้รับการสนับสนุน\"
  comment_form_name_label    : \"ชื่อ\"
  comment_form_email_label   : \"ที่อยู่อีเมล\"
  comment_form_website_label : \"เว็บไซต์ (ตัวเลือก)\"
  comment_btn_submit         : \"ส่งความคิดเห็น\"
  comment_btn_submitted      : \"ส่งเรียบร้อยแล้ว\"
  comment_success_msg        : \"ขอบคุณสำหรับการแสดงความคิดเห็น! ความคิดเห็นจะได้รับการแสดงหลังจากได้รับการยืนยัน\"
  comment_error_msg          : \"ขออภัย, มีบางอย่างผิดพลาดจากการส่งแบบฟอร์ม กรุณาตรวจทานทุกช่อง และลองส่งใหม่อีกครั้ง\"
  loading_label              : \"กำลังโหลด...\"
  search_label_text          :
  search_placeholder_text    : \"ใส่คำค้นหาของคุณ...\"
  search_algolia_no_results  :
  results_found              : \"ผลการค้นหา พบ\"
  back_to_top                : \"กลับด้านบน\"
th-TH:
  <<: *DEFAULT_TH

# Hindi
# -----------------
hi: &DEFAULT_HI
  skip_links                 : \"लिंक छोड़ें\"
  skip_primary_nav           : \"प्राथमिक पथ-प्रदर्शन छोड़ें\"
  skip_content               : \"सामग्री छोड़ें\"
  skip_footer                : \"अंत-में लिखा छोड़ें\"
  page                       : \"पृष्ठ\"
  pagination_previous        : \"पिछला\"
  pagination_next            : \"अगला\"
  breadcrumb_home_label      : \"घर\"
  breadcrumb_separator       : \"/\"
  menu_label                 : \"टॉगल मेनू\"
  toc_label                  : \"इस पृष्ठ पर\"
  ext_link_label             : \"सीधा संपर्क\"
  less_than                  : \"से कम\"
  minute_read                : \"मिनट में पढ़ सकते हैं\"
  share_on_label             : \"साझा करें\"
  meta_label                 : \"स्व-संदर्भात्मक जानकारी\"
  tags_label                 : \"अंकितक:\"
  categories_label           : \"श्रेणियाँ:\"
  date_label                 : \"अपडेट किया गया:\"
  comments_label             : \"एक टिप्पणी छोड़ें\"
  comments_title             : \"टिप्पणियाँ\"
  more_label                 : \"और अधिक जानें\"
  related_label              : \"आप इसका भी आनंद ले सकते हैं\"
  follow_label               : \"अनुसरण करे:\"
  feed_label                 : \"फ़ीड\"
  powered_by                 : \"द्वारा संचालित\"
  website_label              : \"वेबसाइट\"
  email_label                : \"ईमेल\"
  recent_posts               : \"हाल के पोस्ट\"
  undefined_wpm              : \"_config.yml पर अपरिभाषित पैरामीटर words_per_minute\"
  comment_form_info          : \"आपका ईमेल पता प्रकाशित नहीं किया जाएगा। अपेक्षित स्थानों को रेखांकित कर दिया गया है\"
  comment_form_comment_label : \"टिप्पणी\"
  comment_form_md_info       : \"मार्कडाउन की अनुमति है।\"
  comment_form_name_label    : \"नाम\"
  comment_form_email_label   : \"ईमेल पता\"
  comment_form_website_label : \"वेबसाइट (ऐच्छिक)\"
  comment_btn_submit         : \"टिप्पणी भेजें\"
  comment_btn_submitted      : \"प्रस्तुत\"
  comment_success_msg        : \"आपके कमेंट के लिए धन्यवाद! इसे स्वीकृति मिलने के बाद साइट पर दिखाया जाएगा।\"
  comment_error_msg          : \"क्षमा करें, आपके सबमिशन के साथ एक त्रुटि हुई थी। कृपया सुनिश्चित करें कि सभी आवश्यक फ़ील्ड पूरा हो गए हैं और पुनः प्रयास करें।\"
  loading_label              : \"लोड हो रहा है...\"
  search_label_text          : \"खोज\"
  search_placeholder_text    : \"अपना खोज शब्द दर्ज करें...\"
  search_algolia_no_results  :
  results_found              : \"परिणाम मिला/मिले\"
  back_to_top                : \"शीर्ष पर वापस\"
hi-IN:
  <<: *DEFAULT_HI

# Catalan
# --------------
ca: &DEFAULT_CA
  skip_links                 : \"Salta els enllaços\"
  skip_primary_nav           : \"Salta a la navegació primària\"
  skip_content               : \"Salta al contingut\"
  skip_footer                : \"Salta al peu\"
  page                       : \"Pàgina\"
  pagination_previous        : \"Anterior\"
  pagination_next            : \"Següent\"
  breadcrumb_home_label      : \"Inici\"
  breadcrumb_separator       : \"/\"
  menu_label                 : \"Mostra/amaga el menú\"
  search_label               : \"Mostra/amaga la cerca\"
  toc_label                  : \"En aquesta pàgina\"
  ext_link_label             : \"Enllaç directe\"
  less_than                  : \"es llegeix en menys de\"
  minute_read                : \"minut(s)\"
  share_on_label             : \"Comparteix a\"
  meta_label                 :
  tags_label                 : \"Etiquetes:\"
  categories_label           : \"Categories:\"
  date_label                 : \"Actualitzat:\"
  comments_label             : \"Deixa un comentari\"
  comments_title             : \"Comentaris\"
  more_label                 : \"Llegeix més\"
  related_label              : \"També et pot agradar\"
  follow_label               : \"Segueix-me:\"
  feed_label                 : \"Feed\"
  powered_by                 : \"Funciona amb\"
  website_label              : \"Pàgina web\"
  email_label                : \"Correu electrònic\"
  recent_posts               : \"Entrades recents\"
  undefined_wpm              : \"El paràmetre words_per_minute no està definit a _config.yml\"
  comment_form_info          : \"No es mostrarà el teu correu electrònic. Els camps obligatoris estan marcats\"
  comment_form_comment_label : \"Comentari\"
  comment_form_md_info       : \"Admet Markdown.\"
  comment_form_name_label    : \"Nom\"
  comment_form_email_label   : \"Correu electrònic\"
  comment_form_website_label : \"Pàgina web (opcional)\"
  comment_btn_submit         : \"Envia\"
  comment_btn_submitted      : \"Enviat\"
  comment_success_msg        : \"Gràcies pel teu comentari! Apareixerà un cop sigui aprovat.\"
  comment_error_msg          : \"Hi ha hagut un error enviat el comentari. Comprova que els camps obligatirs estiguin omplerts i torna-ho a provar.\"
  loading_label              : \"Carregant...\"
  search_label_text          : \"Introdueix termes per cercar...\"
  search_placeholder_text    : \"Introdueix termes per cercar...\"
  search_algolia_no_results  :
  results_found              : \"resultat(s)\"
  back_to_top                : \"Torna a dalt\"
ca-ES:
  <<: *DEFAULT_CA

# Irish (Gaeilge)
# --------------
ga: &DEFAULT_GA
  skip_links                 : \"Léim naisc\"
  skip_primary_nav           : \"Léim chuig príomh naiscleanúint\"
  skip_content               : \"Léim chuig inneachar\"
  skip_footer                : \"Léim chuig buntásc\"
  page                       : \"Leathanach\"
  pagination_previous        : \"Leathanach roimhe sin\"
  pagination_next            : \"Céad leathanach eile\"
  breadcrumb_home_label      : \"Baile\"
  breadcrumb_separator       : \"/\"
  menu_label                 : \"Scorán roghchlár\"
  search_label               : \"Scorán cuardach\"
  toc_label                  : \"Ar an leathanach seo\"
  ext_link_label             : \"Nasc díreach\"
  less_than                  : \"níos lú na\"
  minute_read                : \"a léamh\"
  share_on_label             : \"Roinn ar\"
  meta_label                 :
  tags_label                 : \"Clibeanna:\"
  categories_label           : \"Catagoírí:\"
  date_label                 : \"Nuashonraíodh:\"
  comments_label             : \"Fág trácht\"
  comments_title             : \"Tráchtanna\"
  more_label                 : \"Foghlaim níos mó\"
  follow_label               : \"Lean:\"
  feed_label                 : \"Feed\"
  powered_by                 : \"Ag fáil cumhacht as\"
  website_label              : \"Suíomh gréasáin\"
  email_label                : \"R-phost\"
  recent_posts               : \"Postálacha le deanaí\"
  comment_form_comment_label : \"Trácht\"
  comment_form_name_label    : \"Ainm\"
  comment_form_email_label   : \"Ríomhsheoladh\"
  comment_form_website_label : \"Suíomh gréasáin (roghnach)\"
  comment_btn_submit         : \"Cuir isteach trácht\"
  comment_btn_submitted      : \"Curtha isteach\"
  loading_label              : \"Lódáil...\"
  search_label_text          : \"Cuir do chuardach isteach...\"
  search_placeholder_text    : \"Cuir do chuardach isteach...\"
  search_algolia_no_results  :
  results_found              : \"Torthaí aimsithe\"
  back_to_top                : \"Ar ais go barr\"
ga-IE:
  <<: *DEFAULT_GA


# Finnish / Suomi
# -----------------
fi: &DEFAULT_FI
  skip_links                 : \"Ohita linkit\"
  skip_primary_nav           : \"Hyppää pää navigaatioon\"
  skip_content               : \"Hyppää sisältöön\"
  skip_footer                : \"Hyppää alareunaan\"
  page                       : \"Sivu\"
  pagination_previous        : \"Edellinen\"
  pagination_next            : \"Seuraava\"
  breadcrumb_home_label      : \"Etusivu\"
  breadcrumb_separator       : \"/\"
  menu_label                 : \"Avaa valikko\"
  search_label               : \"Avaa haku\"
  toc_label                  : \"Tällä sivulla\"
  ext_link_label             : \"Suora linkki\"
  less_than                  : \"vähemmän kuin\"
  minute_read                : \"lukuaika\"
  share_on_label             : \"Jaa\"
  meta_label                 :
  tags_label                 : \"Tagit:\"
  categories_label           : \"Kategoriat:\"
  date_label                 : \"Päivitetty:\"
  comments_label             : \"Jätä kommentti\"
  comments_title             : \"Kommentit\"
  more_label                 : \"Lisää\"
  related_label              : \"Voit olla kiinnostunut myös\"
  follow_label               : \"Seuraa:\"
  feed_label                 : \"Syöte\"
  powered_by                 : \"Voimanlähteenä\"
  website_label              : \"Websivu\"
  email_label                : \"Email\"
  recent_posts               : \"Viimeisimmät postaukset\"
  undefined_wpm              : \"words_per_minute asetusta ei ole määritelty _config.yml tiedostossa\"
  comment_form_info          : \"Your email address will not be published. Required fields are marked\"
  comment_form_comment_label : \"Kommentti\"
  comment_form_md_info       : \"Tukee markdown muotoilua.\"
  comment_form_name_label    : \"Nimi\"
  comment_form_email_label   : \"Email osoite\"
  comment_form_website_label : \"Webbisivu (vapaaehtoinen)\"
  comment_btn_submit         : \"Lähetä\"
  comment_btn_submitted      : \"Lähetetty\"
  comment_success_msg        : \"Kiitos kommentista, se julkaistaan tällä sivulla moderoinnin jälkeen.\"
  comment_error_msg          : \"Tarkista että olet täyttänyt kaikki kentät ja yritä uudelleen.\"
  loading_label              : \"Ladataan...\"
  search_label_text          : \"Hakusana...\"
  search_placeholder_text    : \"Hakusana...\"
  search_algolia_no_results  :
  results_found              : \"Tulosta\"
  back_to_top                : \"Ylös\"

# Myanmar (Burmese)
# -----------------
my: &DEFAULT_MY
  skip_links                 : \"လင့်များကို​ကျော်ပါ။\"
  skip_primary_nav           : \"မူလအညွှန်းသို့​ကျော်ပါ။\"
  skip_content               : \"အကြောင်းအရာသို့ကျော်ပါ။\"
  skip_footer                : \"အောက်ခြေသို့ကျော်ပါ။\"
  page                       : \"စာမျက်နှာ\"
  pagination_previous        : \"ရှေ့တစ်ခု\"
  pagination_next            : \"နောက်တစ်ခု\"
  breadcrumb_home_label      : \"ပင်မစာမျက်နှာ\"
  breadcrumb_separator       : \"/\"
  menu_label                 : \"မီနူး ဖွင့်၊ပိတ်\"
  search_label               : \"ရှာ​ဖွေရန် ဖွင့်၊ပိတ်\"
  toc_label                  : \"ဒီစာမျက်နှာတွင်\"
  ext_link_label             : \"တိုက်ရိုက်လင့်\"
  less_than                  : \"ဖတ်ရန်ကြာချိန်\"
  minute_read                : \"မိနစ်\"
  share_on_label             : \"မျှဝေပါ။\"
  meta_label                 :
  tags_label                 : \"အမှတ်အသားများ -\"
  categories_label           : \"အမျိုးအစားများ -\"
  date_label                 : \"ပြင်ဆင်ပြီး -\"
  comments_label             : \"မှတ်ချက်တစ်ခုချန်ထားပါ။\"
  comments_title             : \"မှတ်ချက်များ\"
  more_label                 : \"ပိုမိုသိရှိရန်\"
  related_label              : \"သင်နှစ်သက်နိုင်​သော\"
  follow_label               : \"သတင်းလိုက်ယူရန် -\"
  feed_label                 : \"Feed ယူရန် -\"
  powered_by                 : \"ပံ့ပိုးသည်\"
  website_label              : \"ဝဘ်ဆိုက်\"
  email_label                : \"အီးမေးလ်\"
  recent_posts               : \"လတ်တလောရေးသားချက်များ\"
  undefined_wpm              : \"_config.yml မှာ words_per_minute ကိုမသတ်မှတ်ထားပါ။\"
  comment_form_info          : \"သင့်အီးမေးလ်လိပ်စာကို​ဖော်ပြသွားမည်မဟုတ်ပါ။ လိုအပ်သောဖြည့်စွက်ရန်​နေရာများကို အမှတ်အသားပြထားပါသည်။\"
  comment_form_comment_label : \"မှတ်ချက်\"
  comment_form_md_info       : \"Markdown ကိုထောက်ပံ့သည်။\"
  comment_form_name_label    : \"နာမည်\"
  comment_form_email_label   : \"အီးမေးလိပ်စာ\"
  comment_form_website_label : \"ဝဘ်ဆိုက် (မဖြည့်စွက်လည်းရသည်)\"
  comment_btn_submit         : \"မှတ်ချက်တင်ပါ\"
  comment_btn_submitted      : \"တင်သွင်းလိုက်သည်\"
  comment_success_msg        : \"မှတ်ချက်ပေးတဲ့အတွက်ကျေးဇူးတင်ပါတယ်။ ၎င်းကိုအတည်ပြုပြီးသည့်အခါ ဝဘ်ဆိုက်ပေါ်တွင်ပြလိမ့်မည်။\"
  comment_error_msg          : \"တောင်းပန်ပါတယ်။ သင့်တင်သွင်းမှုတွင်အမှားတစ်ခုရှိခဲ့သည်။ ကျေးဇူးပြုပြီးလိုအပ်သောဖြည့်စွက်ရန်​နေရာအားလုံးဖြည့်ပြီးပါကထပ်မံကြိုးစားပါ။\"
  loading_label              : \"တင်နေသည်...\"
  search_label_text          : \"သင့်ရှာဖွေရေးဝေါဟာရကိုရိုက်ထည့်ပါ...\"
  search_placeholder_text    : \"သင့်ရှာဖွေရေးဝေါဟာရကိုရိုက်ထည့်ပါ...\"
  search_algolia_no_results  :
  results_found              : \"ရလဒ်(များ)ကိုတွေ့ရှိခဲ့သည်\"
  back_to_top                : \"အပေါ်သို့ပြန်သွား\"
my-MM:
  <<: *DEFAULT_MY

# Another locale
# --------------
#
";
    }

    public function getTemplateName()
    {
        return "Api42/docs/_data/ui-text.yml";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Api42/docs/_data/ui-text.yml", "/var/www/html/app/Plugin/Api42/docs/_data/ui-text.yml");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
