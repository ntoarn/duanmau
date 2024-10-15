let anh = [
    "img/banner-1.jpg",
    "img/banner-2.jpg",
    // "img/banner-3.jpg"
        ]
        let imgtag = document.querySelector('.load')
        let vitri = 0;
        function anhchinh() {
            if (vitri == anh.length) {
                vitri =  0
            }
            if (vitri < 0) {
                vitri = anh.length -1
            }
            imgtag.src = anh[vitri]
            ++vitri
        }
        function anhdau() {
            anhchinh()
        }
        function first() {
            imgtag.src = anh[0]
            vitri =1
        }
        function last() {
            imgtag.src = anh[anh.length -1]
            vitri = 0
        }
        function sau() {
            anhchinh()
        }
        function truoc() {
            vitri -= 2
            anhchinh()
        }
        let play = null;
        function start() {
            play= setInterval(sau,5000) 
            
        }
        start()
    
    