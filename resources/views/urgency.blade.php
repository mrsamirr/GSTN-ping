 <section class="bg-primary text-white text-center text-sm py-2"
       x-data="{
         days:0,hours:0,mins:0,secs:0,
         expiry:new Date('2025-07-31T00:00:00').getTime(),
         tick(){
           const d=this.expiry-Date.now();
           if(d<0) return;
           this.days = Math.floor(d/864e5);
           this.hours= Math.floor(d%864e5/36e5);
           this.mins = Math.floor(d%36e5/6e4);
           this.secs = Math.floor(d%6e4/1e3);
         }
       }"
       x-init="setInterval(()=>tick(),1000)">
    <span class="font-semibold">Pre-launch deal:</span>
    30% lifetime discount ends in
    <span x-text="days"></span>d :
    <span x-text="hours"></span>h :
    <span x-text="mins"></span>m :
    <span x-text="secs"></span>s
</section>