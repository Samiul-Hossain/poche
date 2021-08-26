@extends('layouts.app')

@section('content')
{{-- style="background-image: url('{{asset('img/studio1.jpg')}}')" --}}
<div>
  <button type="submit" onclick="myFunc()">Toggle Dark Mode</button>
</div>
<div class="studio_banner">
    <img
      src="https://pochegroup.com/frontend/images/studio/studio1.jpg"
      alt="Studio Slider Image1"
    />
    {{-- <div class="banner-overlay"></div> --}}
</div>
<div>
  <div class="container">
    <div class="studio_section">
      <div class="row">
        <div class="col-sm-4">
          <div
            class="title aos-init aos-animate"
            data-aos-once="true"
            data-aos="fade-up"
            data-aos-duration="1000"
          >
            <h3>Profile</h3>
          </div>
        </div>
        <div
          class="col-sm-4 aos-init aos-animate"
          data-aos-once="true"
          data-aos="fade-up"
          data-aos-duration="3000"
        >
          <div class="studio_text">
            <p>
              The Poché Group is a research and design practice based in
              Dhaka, Bangladesh, and Los Angeles, California.
            </p>
            <p>
              Having worked for renowned practices across the world, our
              archipreneurs, the majority of whom are graduates of the famed
              SCI-Arc program, have aggregated a wealth of experience in
              architecture and design to unleash upon you a radical firm
              that is leaving a fresh footprint the city.
            </p>
          </div>
        </div>
        <div
          class="col-sm-4 aos-init aos-animate"
          data-aos-once="true"
          data-aos="fade-up"
          data-aos-duration="5000"
        >
          <div class="studio_text">
            <p>
              At Poché, we use VR technologies so clients can experience
              physical spaces and 3D printers to show physical
              manifestations of designs before a single brick has been laid
              . Our robotics programs grants us the ability to develop
              experimental designs. Combined with implementation aptitude,
              our technology and research division drives Poché to the
              vanguard of design development.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="spaces_xs"></div>
  <div class="container-full">
    <div class="studio_section">
      <div class="row">
        <div
          class="col-sm-8 padding_left_0 aos-init aos-animate"
          data-aos-once="true"
          data-aos="fade-right"
          data-aos-duration="1500"
          data-aos-easing="ease-in-sine"
        >
          <div class="img_holder">
            <img
              src="https://pochegroup.com/frontend/images/studio/philosophy_1920x842.jpg"
              alt=""
              class="img-responsive"
            />
          </div>
        </div>
        <div
          class="col-sm-4 aos-init aos-animate"
          data-aos-once="true"
          data-aos="fade-up"
          data-aos-duration="3000"
        >
          <div class="title">
            <h3>Philosophy</h3>
          </div>
          <p>
            At Poché, we keep no room for the hollow and the flimsy.
            Straddling a space between respecting the past and highlighting
            the future, we sustain a balanced ode with an egalitarian team
            that allows us to provoke the status quo and execute divergent
            ideas.
          </p>
          <p>
            We seek to destroy the developer’s mindset. We are vision
            oriented and believe in no compromise when regards to
            architectural integrity. We are on a quest to shatter fractional
            attempts in the city and replace it with raw design that molds
            itself to transforming a space and optimizing the potential for
            greatness with precise execution.
          </p>
        </div>
      </div>
      <div class="spaces_xs"></div>
      <div class="studio_section">
        <div class="row">
          <div
            class="col-sm-4 aos-init aos-animate"
            data-aos-once="true"
            data-aos="fade-up"
            data-aos-duration="3000"
          >
            <div class="title">
              <h3>Approach</h3>
            </div>
            <p>
              Every new project begins with a fresh foundation and
              exhaustive research. We implement a collaborative and
              explorative approach that draws on our collective design
              experiences and research interests. Our experimental approach
              and willingness to work with pioneering technology provides a
              marked difference for our clients. Our work is finalized with
              vigilant analysis of the constraints and nuances of each
              project , allowing us to bring forth architecture that is a
              result of streamlined design and an efficient construction
              process. We optimize the layout of spaces, tailor the
              aesthetic essence of each project, and ensure detailed
              craftsmanship. For every scale of project, we are on a quest
              to deliver broader environmental benefits through our designs
              and work closely with clients to ensure that their projects
              achieve more. Join our mutiny.
            </p>
          </div>
          <div
            class="col-sm-8 padding_left_0 aos-init aos-animate"
            data-aos-once="true"
            data-aos="fade-right"
            data-aos-duration="1500"
            data-aos-easing="ease-in-sine"
          >
            <div class="img_holder">
              <img
                src="https://pochegroup.com/frontend/images/studio/approach_1920x842.jpg"
                alt=""
                class="img-responsive"
              />
            </div>
          </div>
        </div>
      </div>
      <div class="spaces_x"></div>
      <div class="container">
        <div class="team_section">
          <div
            class="title text-center aos-init aos-animate"
            data-aos-once="true"
            data-aos="fade-up"
            data-aos-duration="1000"
          >
            <h2>Meet Our Team</h2>
          </div>
          <div class="spaces_xs"></div>
          <div class="clearfix">
            <div class="founder_left">
              <div
                class="team_md aos-init aos-animate"
                data-aos-once="true"
                data-aos="fade-up"
                data-aos-duration="2000"
              >
                <img
                  data-aos-once="true"
                  style= "paddingBottom: 20px;" 
                  src="https://pochegroup.com/frontend/images/team/img_maysun.jpg"
                  alt="Kazi Mahzuza Maysun"
                />
                <div class="text-center popup_right">
                  <h4>Kazi Mahzuza Maysun</h4>
                  <div class="popup_info">
                    Founder / Manageing Director
                  </div>
                </div>
              </div>
            </div>
            <div class="founder_right">
              <div
                class="aos-init aos-animate"
                data-aos-once="true"
                data-aos="fade-up"
                data-aos-duration="3000"
              >
                <p>
                  On her way to starting business school in South Carolina,
                  Kazi Mahzuza Maysun opened an acceptance letter from an
                  experimental architectural program called SCI-Arc and took
                  a 180 degree turn towards California in a matter of hours.
                  While commerce was a natural pathway for someone who had
                  grown up amongst hoteliers, Maysun knew architecture was
                  the precise blend of technicality and arts she could
                  challenge herself with, even if it meant several semesters
                  of grueling catch-up work to stay on par with her peers.
                </p>

                <p>
                  That passionate adaptability, combined with her persistent
                  work ethic and unbounded vision for achieving the new and
                  experimental has touched upon every initiative she has
                  taken on since graduating in 2016 with an award-winning
                  senior thesis. Inspired by Zaha Hadid’s take on posh
                  nature, Maysun brings a duality to her portfolio.
                </p>

                <p>
                  Her approach transcends to next gen primitives achieved
                  through nested and mutated challenges of geometric clones.
                  A combination of continuous and discontinuous analysis of
                  discrete masses resulting in moments of intersecting
                  ideals of the interior and exterior, piercing each other
                  to provide the impression of a fulfilled enclosure, is her
                  characterization of a built mass.
                </p>

                <p>
                  “To explore my horizons in order to have a better
                  understanding of light, shading, shadow, mathematics and
                  patterns, I looked more into Mughal architecture. So I
                  took a trip to India and surveyed as many buildings as
                  possible, which led me to complete my style theory, which
                  focuses on the 3M’s:”
                </p>

                <p>
                  Minimalistic
                  <br /> Monochromatic
                  <br /> Materialistic
                </p>

                <p>
                  Following my last exploration, I’m experimenting with how
                  to do a modern day version of intricate stonework from the
                  1500s with robotic toolpaths.
                </p>

                <p>
                  Obsessed with evolving her design palate, Maysun has
                  sought to bring duality in her design experiences with
                  M.S. Innovations, the Mahmmud Group, Bangladesh Ansar,
                  Bangladesh Institute of International and Strategic
                  Studies, and the Dusit Princess hotel in Dhaka.
                </p>
              </div>
            </div>
          </div>
          <div class="spaces_md clearfix"></div>
          <div class="row">
            <div
              class="col-sm-6 aos-init aos-animate"
              data-aos-once="true"
              data-aos="fade-up"
              data-aos-duration="1500"
            >
              <div class="row">
                <div class="col-sm-6">
                  <div class="team_member parent_hover">
                    <div class="team_img">
                      <img
                        src="https://pochegroup.com/frontend/images/team/img_fernando.jpg"
                        alt="Fernando Gomez"
                      />
                    </div>
                    {{--  <!--<div class="team_des element_show text-center">
                        <h4>Fernando Gomez</h4>
                        <div class="designation">Project Manager / Architect </div>
                    </div>--> --}}
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="popup_right">
                    <h4>Fernando Gomez</h4>
                    <div class="popup_info">
                      Project Manager / Architect
                    </div>
                    <div class="popup_info">+880 9617776661</div>
                    <div class="popup_info">
                      <a href="mailto:fernando@pochegroup.com">
                        fernando@pochegroup.com
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="spaces_xs clearfix"></div>

              <div class="row">
                <div class="col-sm-12">
                  <p>
                    Trained at the New School of Architecture and Design in
                    San Diego, Fernando is a versatile architect with
                    extensive project management experience. Fernando’s
                    architectural aspirations come from an unlikely place:
                    As a teenager, exploring the vastness of different
                    construction sites, Fernando became fascinated with the
                    implementation process.
                  </p>
                  <p>
                    With extensive experience in technical drawings in Los
                    Angeles, a hub for the art industry, Fernando strives to
                    bring an artistic aesthetic to Dhaka urbanity. Believing
                    art to be a boundless force and driven by an obsession
                    with concrete lasting structures, Fernando seeks
                    improvements upon existing construction processes as a
                    project evolves from paper to execution with the
                    client’s utilization experience as priority.
                  </p>
                  <p>
                    “I think there’s beauty in destruction. If I see an
                    experimental design, I look the practical angle to see
                    what’s actually feasible. I emphasize the art within
                    practicality, but always prioritize functionality over
                    external appearances.”
                  </p>
                  <p>
                    Prior to joining Poché as the lead of the design team,
                    Fernando was a self-employed architect focusing on
                    managing multiple projects with various clients in Los
                    Angeles.
                  </p>
                </div>
              </div>
            </div>

            <div
              class="col-sm-6 aos-init aos-animate"
              data-aos-once="true"
              data-aos="fade-up"
              data-aos-duration="3000"
            >
              <div class="row">
                <div class="col-sm-6">
                  <div class="team_member parent_hover">
                    <div class="team_img">
                      <img
                        src="https://pochegroup.com/frontend/images/team/img_rishab.jpg"
                        alt="Rishabh Khurana"
                      />
                    </div>
                    {{--  <!--<div class="team_des element_show text-center">
                            <h4>Rishabh Khurana</h4>
                            <div class="designation">Architect & Designer</div>
                        </div>-->  --}}
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="popup_right">
                    <h4>Rishabh Khurana</h4>
                    <div class="popup_info">Reasearch Head</div>
                    <div class="popup_info">+880 9617776661</div>
                    <div class="popup_info">
                      <a href="mailto:rishabh@pochegroup.com">
                        rishabh@pochegroup.com
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="spaces_xs clearfix"></div>

              <div class="row">
                <div class="col-sm-12">
                  <p>
                    Bored of traditional software in his senior year
                    internship at an undergraduate architectural program in
                    India, Rishabh chased experimental training until he
                    stumbled upon parametric architecture at a workshop in
                    Rome led by his now mentor Lorenzo Vianello. Focused on
                    computational architecture, Rishabh chose SCI-Arc for
                    his Master in Design Studies because of the sheer weight
                    on technical training and design.
                  </p>
                  <p>
                    “I want to take my research beyond a theoretical status.
                    I want to take it and apply it to the practical world of
                    architecture in an utterly unique way, because you have
                    to the first in something if you want to leave a mark on
                    the world.”
                  </p>
                  <p>
                    Following his graduate program, Rishabh worked as a
                    computational designer in London, specializing in
                    digital fabrication and robotics at both AI-Build and
                    Mamou-Mani Ltd, where he worked on the world’s first 3D
                    printed restaurant. Rishabh has also taught at the
                    Chitkara School of Planning and Architecture in India,
                    and worked as a Junior Architect at the acclaimed
                    Sou-Fujimoto Architects of Tokyo. At Poché, Rishabh
                    heads the robotics and research division and looks
                    forward to implementing limitless computational design
                    to architecture, facades, interiors, and even furniture.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  
@endsection