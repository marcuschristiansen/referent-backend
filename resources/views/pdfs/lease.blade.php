<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width==, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lease Agreement</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="my-0 mx-auto">
        <div class="text-center text-3xl">
            <h1 class="py-8">Agreement of Lease</h1>
        </div>
        <div class="text-center text-xl" style="page-break-after: always;">
            <p>Made and entered into by and between</p>
            <p class="italic mt-16 underline">{{ $lease->listing->user->profile->first_name }} {{ $lease->listing->user->profile->last_name }}</p>
            <p>(The Landlord)</p>
            <h4 class="pt-8">ID Number</h4>
            <p>{{ $lease->listing->user->profile->id_number }}</p>
            <h4 class="py-8">And</h4>
            <p class="underline italic">{{ $lease->tenant->profile->first_name }} {{ $lease->tenant->profile->last_name }}</p>
            <p>(The Tenant)</p>
            <h4 class="pt-8">ID Number</h4>
            <p>{{ $lease->tenant->profile->id_number }}</p>
        </div>

        <div class="leading-loose text-justify text-sm">
            <div class="mt-2">
                <div class="font-bold">1 Interpretation</div>
                <div><span class="font-bold">1.1</span> In this lease, except in a context indicating that some other
                    meaning is intended,</div>
                <div><span class="font-bold">1.1.1</span> "the Building" means the building known as the house, garages
                    and Granny Flat situated on the Property, and includes, where the context so allows, all permanent
                    improvements on the Property;</div>
                <div><span class="font-bold">1.1.2</span> "day" means any day of the week, excluding Sundays and public
                    holidays;</div>
                <div><span class="font-bold">1.1.3</span> "the Lease Period" means the period for which this lease
                    subsists, including any period for which it is renewed;</div>
                <div><span class="font-bold">1.1.4</span> "month" means a calendar month, and more specifically</div>
                <div><span class="font-bold">1.1.4.1</span> in reference to a number of months from a specific date, a
                    calendar month commencing on that date or the same date of any subsequent month; and</div>
                <div><span class="font-bold">1.1.4.2</span> in any other context, a month of the calendar, that is, one
                    of the 12 months of the calendar, and "monthly" has the corresponding meaning;</div>
                <div><span class="font-bold">1.1.5</span> "the Premises" means the Granny flat in the Building;</div>
                <div><span class="font-bold">1.1.6</span> "the Property" means the house, outbuildings and grounds
                    situated at</div>
                <div class="underline italic">{{ $lease->listing->residential_address }};</div>

                <div><span class="font-bold">1.1.8</span> "year" means a period of 12 consecutive months commencing on
                    the date on which this lease comes into operation or any anniversary of that date;</div>
                <div><span class="font-bold">1.1.9</span> references to notices, statements and other communications by
                    or from the Lessor include notices by or from the Lessor's agent;</div>
                <div><span class="font-bold">1.1.10</span> expressions in the singular also denote the plural, and vice
                    versa;</div>
                <div><span class="font-bold">1.1.11</span> words and phrases denoting natural persons refer also to
                    juristic persons, and vice versa; and</div>
                <div><span class="font-bold">1.1.12</span> pronouns of any gender include the corresponding pronouns of
                    the other gender.</div>
                <div><span class="font-bold">1.2</span> Any provision of this lease imposing a restraint, prohibition,
                    or restriction on the Lessee shall be so construed that the Lessee is not only bound to comply
                    therewith but is also obliged to procure that the same restraint, prohibition, or restriction is
                    observed by everybody occupying or entering t he Premises or any other part of the Property or the
                    Building through, under, by arrangement with, or at the invitation of, the Lessee, including
                    (without limiting the generality of this provision) the family, guests and servants of the Lessee.
                </div>
                <div><span class="font-bold">1.3</span> Clause headings appear in this lease for purposes of reference
                    only and shall not influence the proper interpretation of the subject matter.</div>
                <div><span class="font-bold">1.4</span> This lease shall be interpreted and applied in accordance with
                    South African law.</div>
            </div>
            <div class="mt-2">
                <div class="font-bold">2 Letting and hiring</div>
                <div>The Lessor lets and the Lessee hires the Premises on the terms of this lease.</div>
            </div>
            <div class="mt-2">

                <div class="font-bold">3 Duration</div>
                <div>This lease shall come into operation on <span class="underline italic">{{ Carbon\Carbon::createFromFormat('Y-m-d', $lease->start_date)->toFormattedDateString() }}</span> and shall consist
                    of a period of <span class="underline italic">{{ $lease->lease_duration_months }}</span> months
                </div>
            </div>

            <div class="mt-2">
                <div class="font-bold">4 Rent</div>
                <div><span class="font-bold">4.1</span> The rent shall be
                    <span class="underline italic">R{{ $lease->rental_amount }}</span> for each month the Lease Period; and</div>
                <div><span class="font-bold">4.3</span> The Lessee shall pay the rent monthly in advance on or before
                    the last day of every month.</div>
            </div>
            <div class="mt-2">
                <div class="font-bold">5 Payments</div>
                <div><span class="font-bold">5.1</span> All payments due by the Lessee to the Lessor under this lease
                    shall be made to the lessor at the property or to such other person, if any, at such other place, if
                    any, as the Lessor has designated for the time being by written notice to the Lessee.</div>
                <div><span class="font-bold">5.2</span> The Lessee shall not withhold, defer, or make any deduction from
                    any payment due to the Lessor, whether or not the Lessor is indebted to the Lessee or in breach of
                    any obligation to the Lessee.</div>
                <div><span class="font-bold">5.3</span> The rent and all other amounts payable by the Lessee under this
                    lease shall be inclusive of value-added tax in so far as it is applicable.</div>
                <div><span class="font-bold">5.4</span> The Lessee shall be liable for interest on all overdue amounts
                    payable under this lease at a rate per annum equivalent to the prime interest rate per annum of
                    First National Bank from time to time, reckoned from the due dates of such amounts until they are
                    respectively paid.</div>
            </div>
            <div class="mt-2">
                <div class="font-bold">6 Assignment and subletting</div>
                <div><span class="font-bold">6.1</span> The Lessee shall not be entitled, except with the prior written
                    consent of the Lessor</div>
                <div><span class="font-bold">6.1.1</span> cede or assign all or any of the rights and obligations of the
                    Lessee under this agreement;</div>
                <div><span class="font-bold">6.1.2</span> to sublet the Premises in whole or part; or</div>
                <div><span class="font-bold">6.1.3</span> to give up possession of the Premises to any third party.
                </div>
                <div><span class="font-bold">6.2</span> The Lessor shall not, however, unreasonably withhold its consent
                    to a subletting of the whole of the Premises.</div>
            </div>
            <div class="mt-2">
                <div class="font-bold">7 Sundry duties of the lessee</div>
                <div>The Lessee shall</div>
                <div><span class="font-bold">7.1</span> take all reasonable measures to protect the Premises and all
                    parts thereof (including all fixtures, fittings, appurtenances, appliances and keys) from abuse,
                    damage, destruction, and theft;</div>

                <div><span class="font-bold">7.2</span> not bring into the Premises or the Building any article which,
                    by reason of its weight or other characteristics, is liable to cause damage to the Building or the
                    Premises;</div>

                <div><span class="font-bold">7.3</span> not contravene any of the conditions of title of the Property or
                    any of the laws, rules or regulations affecting owners or occupiers of the Property or the Building;
                </div>

                <div><span class="font-bold">7.4</span> not cause or commit any nuisance on the Property or cause any
                    annoyance or discomfort to other tenants or occupiers of the Building;</div>

                <div><span class="font-bold">7.5</span> not allow more than 2 persons to reside in the Premises
                    at the same time for more than two consecutive nights, except with the prior written consent of the
                    Lessor.</div>

                <div><span class="font-bold">7.6</span> not keep any live animals or birds (except for a single small
                    domestic dog) on the Premises except with the prior written consent of the Lessor;</div>
            </div>
            <div class="mt-2">
                <div class="font-bold">8 Maintenance and repairs</div>

                <div><span class="font-bold">8.1</span> The Lessee shall at his own expense and without recourse to the
                    Lessor</div>

                <div><span class="font-bold">8.1.1</span> promptly repair or make good all damage occurring within the
                    Premises from time to time during the Lease Period, including damage to any part of the interior of
                    the Premises or to any window, door, appurtenance, fixture or fitting, and replace all such items
                    (as well as any keys) which have been broken, lost or destroyed. This clause must be fulfilled
                    whatever the cause of damage, except where such damage is caused by the Lessor or an act of God. In
                    addition</div>

                <div><span class="font-bold">8.1.2</span> on the termination of this lease, howsoever and whenever it
                    terminates, return the Premises and all such parts thereof (including all keys) to the Lessor in
                    good order, condition and repair, fair wear and tear excepted.</div>

                <div><span class="font-bold">8.2</span> If the Lessee notifies the Lessor in writing within 30 days
                    after having taken possession of the Premises of the need for any repairs to or in the Premises or
                    of the fact that any part of the Premises, including any lock, key, door, window, appurtenance,
                    fixture or fitting, is damaged, missing, or out of order, the Lessor shall promptly cause the
                    necessary repair or replacement to be effected at the Lessor's own expense. If or in so far as the
                    Lessee does not give such notice, the Lessee shall be deemed to have acknowledged that the Premises
                    and all parts thereof were intact, in place, and in good order, condition, and repair when the
                    Lessee took possession of the Premises under this lease.</div>

                <div><span class="font-bold">8.3</span> The Lessor shall be responsible for the maintenance of, and for
                    all repairs and replacements becoming necessary from time to time in or to, the Building and all
                    parts thereof other than those which are the responsibility for the time being of tenants or of the
                    local authority, and the Lessor's obligations in this respect shall include the maintenance and
                    repair of the structure of the Building, all systems, works and installations contained therein, the
                    roofs, the exterior walls, the grounds and gardens, and all other common parts of the Property.
                </div>

                <div><span class="font-bold">8.4</span> Should the Lessee fail to carry out any of its obligations under
                    this lease with regard to any maintenance, repair, or replacement, the Lessor shall be entitled,
                    without prejudice to any of its other rights or remedies, to effect the required item of
                    maintenance, repair, or replacement and to recover the cost thereof from the Lessee on demand.</div>
            </div>
            <div class="mt-2">
                <div class="font-bold">9 Alterations, additions and improvements</div>

                <div><span class="font-bold">9.1</span> The Lessee shall not make any alterations or additions to the
                    Premises without the Lessor's prior consent, but the Lessor shall not withhold its consent
                    unreasonably to an alteration or addition which is not structural.</div>

                <div><span class="font-bold">9.2</span> If the Lessee does alter, add to, or improve the Premises in any
                    way, whether in breach of clause 10.1 or not, the Lessee shall, if so required in writing by the
                    Lessor, restore the Premises on the termination of this lease to their condition as it was prior to
                    such alteration, addition or improvement having been made. The Lessor's requirement in this regard
                    may be communicated to the Lessee at any time, but not later than the 30th day after the Lessee has
                    delivered up the Premises pursuant to the termination of this lease; and this clause 10.2 shall not
                    be construed as excluding any other or further remedy which the Lessor may have in consequence of a
                    breach by the Lessee of clause 9.1.</div>

                <div><span class="font-bold">9.3</span> Save for any improvement which is removed from the Premises as
                    required by the Lessor in terms of clause 9.2, all improvements made to the Premises shall belong to
                    the Lessor and may not be removed from the Premises at any time. The Lessee shall not, whatever the
                    circumstances, have any claim against the Lessor for compensation for any improvement to the
                    Premises, unless such improvements are made with the Lessor's prior written consent, nor shall the
                    Lessee have a right of retention in respect of any improvements.</div>
            </div>

            <div class="mt-2">
                <div class="font-bold">10 Exclusion of lessor from certain liability and indemnity</div>

                <div><span class="font-bold">10.1</span> The Lessee shall have no claim for damages against the Lessor
                    and may not withhold or delay any payment due to the Lessor by reason directly or indirectly of
                </div>

                <div><span class="font-bold">10.1.1</span> a breach by the Lessor of any of its obligations under this
                    lease;</div>

                <div><span class="font-bold">10.1.2</span> any act or omission of the Lessor or any agent or servant of
                    or contractor to the Lessor, whether or not negligent, or otherwise actionable at law, and including
                    (without limiting the generality of the aforegoing) any act or omission of any cleaner, maintenance
                    person, handyman, artisan, labourer, workman, watchman, guard, or commissionaire;</div>

                <div><span class="font-bold">10.1.3</span> the condition or state of repair at any time of the Property,
                    the Building, or any part of the Property or the Building;
                </div>

                <div><span class="font-bold">10.1.4</span> any failure or suspension of, or any interruption in, the
                    supply of water, electricity, gas, air-conditioning, heating, or any other amenity or service to the
                    Premises, the Building, or the Property (including, without generality being limited, any cleaning
                    service), whatever the cause;</div>

                <div><span class="font-bold">10.1.5</span> any breakdown of, or interruption in the operation of, any
                    machinery, plant, equipment, installation or system situated in or on, or serving, the Property, the
                    Building, or the Premises, and including (but without limiting the generality of the a foregoing)
                    any geyser, electric gate, burglar alarm, or security installation or system, again regardless of
                    cause;</div>

                <div><span class="font-bold">10.1.6</span> any interruption of or interference with the enjoyment or
                    beneficial occupation of the Premises or any of the common parts of the Property or the Building
                    caused by any building operations or other works to or in the Building or elsewhere on or about the
                    Property, whether carried out by the Lessor or by anybody else; or</div>

                <div><span class="font-bold">10.1.7</span> any other event or circumstance whatever occurring, or
                    failing to occur, upon, in, or about the Property, the Building, or the Premises, whether or not the
                    Lessor could otherwise have been held liable for such occurrence or failure,
                </div>

                <div>and the Lessee indemnifies the Lessor against all liability to members of the Lessee's household,
                    the Lessee's servants, guests and other invitees, and all other persons who may occupy or be
                    entitled to occupy the Premises or any parts thereof through or under the Lessee, in consequence of
                    any such matter as is referred to in clauses 10.1.1 to 10.1.7 above.
                </div>

                <div><span class="font-bold">10.2</span> The Lessor shall not, however, be excused from specific
                    performance of any of its obligations under this lease, whether express or implied, and particularly
                    (but not only) its obligations to afford the Lessee occupation and enjoyment of the Premises as
                    contemplated by this lease and to carry out such maintenance and repairs as are incumbent upon the
                    Lessor in terms hereof; and if the Lessor fails to carry out any such obligation of maintenance or
                    repair with reasonable speed or efficiency, and persists in such default after reasonable notice in
                    writing requiring that it be remedied, the Lessee may cause the necessary maintenance or repair
                    (including any incidental or necessary replacement) to be carried out and may then recover the
                    reasonable cost thereof from the Lessor on demand.</div>
            </div>

            <div class="mt-2">
                <div class="font-bold">11 Lessor's rights of entry and carrying out of works</div>

                <div><span class="font-bold">11.1</span> The Lessor's representatives, agents, servants and contractors
                    may at all reasonable times, without thereby giving rise to any claim or right of action on the part
                    of the Lessee or any other occupier of the Premises</div>

                <div><span class="font-bold">11.1.1</span> enter the leased Premises in order to inspect them, to carry
                    out any necessary repairs, replacements, or other works, or to perform any other lawful function in
                    the bona fide interests of the Lessor or any of the occupiers of the Property; or</div>

                <div><span class="font-bold">11.1.2</span> carry out elsewhere in the Building or on the Property any
                    necessary repairs, replacements or other works, but the Lessor shall ensure that this right is
                    exercised with due regard for and a minimum of interference with the beneficial enjoyment of the
                    Premises by those in occupation thereof and the Lessor shall endevour where possible to notify the
                    Lessee in advance before the exercising of this right.</div>

                <div><span class="font-bold">11.2</span> The Lessor shall not, however, cause or allow any major
                    building works to be carried out anywhere upon the Property for a duration longer than three months
                    from the date of their commencement unless</div>

                <div><span class="font-bold">11.2.1</span> such works are necessary and do not merely involve additions
                    to the Building, the construction of additional buildings, or redecorations of a solely aesthetic
                    nature; or</div>

                <div><span class="font-bold">11.2.2</span> the Lessee has consented otherwise in writing.</div>
            </div>

            <div class="mt-2">
                <div class="font-bold">12 Damage to or destruction of premises</div>

                <div><span class="font-bold">12.1</span> If the Premises are destroyed or so damaged that they can no
                    longer be beneficially occupied, this lease shall terminate when that happens unless the parties
                    agree in writing otherwise.</div>

                <div><span class="font-bold">12.2</span> If the Premises are significantly damaged but can still be
                    beneficially occupied, this lease shall remain in force and the Lessor shall repair the damage
                    without undue delay but the rent shall be abated so as to compensate the Lessee fairly for the
                    effects on the enjoyment of the Premises of the damage and repair work. Failing agreement on such
                    abatement or on the applicability of this clause to any particular circumstances, the matter shall
                    be referred to an expert appointed by the parties jointly or, if they do not agree on such
                    appointment, nominated by the President for the time being of The Institute of Estate Agents of
                    South Africa, and the decision of such expert shall be final and binding. The expert's fees and
                    disbursements, including any inspection costs, shall be borne by the parties in equal shares.
                    Pending determination of the abatement the Lessee shall continue to pay the full rent for the
                    Premises as if they had not been damaged, and as soon as the matter has been resolved the Lessor
                    shall make the appropriate repayment to the Lessee.</div>

                <div><span class="font-bold">12.3</span> If any damage to the Premises or the destruction thereof is
                    caused by an act or omission for which either party is responsible in terms of this lease or in law,
                    the other party shall not be precluded by reason of any of the a foregoing provisions of this clause
                    12 from exercising or pursuing any alternative or additional right of action or remedy available to
                    the latter party under the circumstances.</div>
            </div>

            <div class="mt-2">
                <div class="font-bold">13 Special remedy for breach</div>

                <div><span class="font-bold">13.1</span> Should the Lessee default in any payment due under this lease
                    or be in breach of its terms in any other way, and fail to remedy such default or breach within 15
                    days after receiving a written demand that it be remedied, the Lessor shall be entitled, without
                    prejudice to any alternative or additional right of action or remedy available to the Lessor under
                    the circumstances without further notice, to cancel this lease with immediate effect, be repossessed
                    of the Premises, and recover from the Lessee damages for the default or breach and the cancellation
                    of this lease.</div>

                <div><span class="font-bold">13.2</span> Clause 16.1 shall not be construed as excluding the ordinary
                    lawful consequences of a breach of this lease by either party (save any such consequences as are
                    expressly excluded by any of the other provisions of this lease) and in particular any right of
                    cancellation of this lease on the ground of a material breach going to the root of this lease.</div>

                <div><span class="font-bold">13.3</span> In the event of the Lessor having cancelled this lease
                    justifiably but the Lessee remaining in occupation of the Premises, with or without disputing the
                    cancellation, and continuing to tender payments of rent and any other amounts which would have been
                    payable to the Lessor but for the cancellation, the Lessor may accept such payments without
                    prejudice to and without affecting the cancellation, in all respects as if they had been payments on
                    account of the damages suffered by the Lessor by reason of the unlawful holding over on the part of
                    the Lessee.</div>
            </div>

            <div class="mt-2">
                <div class="font-bold">14 Option of Extension</div>

                <div><span class="font-bold">14.1</span> The Lessee may request the Lessor to extend the duration of the
                    Lease subject to the conditions set out below.</div>

                <div><span class="font-bold">14.2</span> The period for which this lease may be extended is one month,
                    on a month by month basis.</div>

                <div><span class="font-bold">14.3</span> All the terms of this lease shall continue to apply during the
                    extended period</div>

                <div><span class="font-bold">14.4</span> The request of extension of the Lease period shall be deemed to
                    be exercised by the Lessee automatically every month unless the Lessee notifies the Lessor in
                    writing with one month’s notice of the intention to terminate this lease.</div>

                <div><span class="font-bold">14.5</span> If the request of extension of the lease period is duly
                    exercised, this lease shall be renewed automatically and without the need for any further act of the
                    parties.</div>

                <div><span class="font-bold">14.6</span> The Lessee may not, however, exercise the right of lease period
                    extension while in breach or default of any of the terms of this lease.</div>

                <div><span class="font-bold">14.7</span> If this lease does not endure at least for the full term for
                    which it is initially contracted, the right of renewal shall lapse and any notice of exercise
                    thereof given prior to such lapsing shall be null and void.</div>

                <div><span class="font-bold">14.8</span> The Lessor may refuse to grant the request of the Lease period
                    extension for any reason, however must notify the Lessee of this refusal in writing with one month’s
                    notice.</div>
            </div>

            <div class="mt-2">
                <div class="font-bold">15 New tenants and purchasers</div>

                <div>The Lessee shall at all reasonable times</div>

                <div><span class="font-bold">15.1</span> during the Lease Period, allow prospective purchasers of the
                    Property or of any shares or other interests in the Lessor; and</div>

                <div><span class="font-bold">15.2</span> during the last 2 months of the Lease Period, allow prospective
                    tenants or purchasers of the Premises, to enter and view the interior of the Premises.</div>
            </div>

            <div class="mt-2">
                <div class="font-bold">16 Domicilia and notices</div>

                <div><span class="font-bold">16.1</span> The parties choose as their domicilia citandi et executandi the
                    addresses mentioned in clause 16.2 below, but such domicilium of either party may be changed by
                    written notice from such party to the other party with effect from the date of receipt or deemed
                    receipt by the latter of such notice.</div>

                <div><span class="font-bold">16.2.1</span> The Lessor:
                    ________________________________________________________________</div>

                <div><span class="font-bold">16.2.2</span> The Lessee:
                    ________________________________________________________________</div>

                <div>Email: ___________________________</div>

                <div><span class="font-bold">16.3</span> Any notice, demand or other communication properly addressed by
                    either party to the other party at the latter's domicilium in terms hereof for the time being and
                    sent by prepaid registered post shall be deemed to be received by the latter on the 10th business
                    day following the date of posting thereof. This provision shall not be construed as precluding the
                    utilisation of other means and methods (including telefacsimile) for the transmission or delivery of
                    notices, acceptances, demands and other communications, but no presumption of delivery shall arise
                    if any such other means or method is used.</div>
            </div>

            <div class="mt-2">
                <div class="font-bold">17 Whole agreement</div>

                <div><span class="font-bold">17.1</span> This is the entire agreement between the parties.</div>

                <div><span class="font-bold">17.2</span> Neither party relies in entering into this lease upon any
                    warranties, representations, disclosures or expressions of opinion which have not been incorporated
                    into this agreement as warranties or undertakings.</div>

                <div><span class="font-bold">17.3</span> No variation or consensual cancellation of this lease shall be
                    of any force or effect unless reduced to writing and signed by both parties.</div>
            </div>

            <div class="mt-2">
                <div class="font-bold">18 Non-waiver</div>

                <div><span class="font-bold">18.1</span> Neither party shall be regarded as having waived, or be
                    precluded in any way from exercising, any right under or arising from this lease by reason of such
                    party having at any time granted any extension of time for, or having shown any indulgence to the
                    other party with reference to, any payment or performance hereunder, or having failed to enforce, or
                    delayed in the enforcement of, any right of action against the other party.</div>

                <div><span class="font-bold">18.2</span> The failure of either party to comply with any non-material
                    provision of this lease shall not excuse the other party from performing the latter's obligations
                    hereunder fully and timeously.</div>
            </div>

            <div class="mt-2">
                <div class="font-bold">19 Sale of premises</div>

                <div>The validity of this lease shall not in any way be affected by the transfer of the Premises from
                    the Lessor pursuant to a sale thereof. It shall accordingly, upon registration of transfer of the
                    Premises into the name of the purchaser, remain of full force and effect save that the purchaser
                    shall be substituted as lessor and acquire all rights and be liable to fulfil all the obligations
                    which the Lessor, as lessor, enjoyed against or was liable to fulfil in favour of the Lessee in
                    terms of the lease.</div>
            </div>

            <div class="mt-2">
                <div class="font-bold">20 Termination by death or insolvency</div>

                <div><span class="font-bold">20.1</span> This lease shall not terminate with the death of either the
                    Lessor or the Lessee. The executor of the deceased Lessee's estate shall have the option, depending
                    upon the circumstances of the estate, either to abide by the contract for the remainder period of
                    the lease (the successor or successors of the Lessee assuming his rights and obligations) or to
                    cancel this lease by giving the Lessor 1 months written notice of termination, such notice to be
                    given not more than 2 months after the death of the Lessee.</div>

                <div><span class="font-bold">20.2</span> The insolvency of either the Lessor or the Lessee shall not
                    terminate this lease. However, the trustee of the Lessee's insolvent estate shall have the option to
                    terminate this lease by notice in writing to the Lessor. If the trustee does not within three months
                    of his appointment as trustee notify the Lessor that he desires to continue with the lease on behalf
                    of the estate, he shall be deemed to have terminated the lease at the end of the three months.</div>
            </div>

            <div class="mt-2">
                SIGNED at ___________________________________________ on this date: __________________ in the presence
                of the undersigned witnesses
            </div>

            <div>Witnesses:</div>

            <div class="grid grid-cols-2">
                <div>
                    <div>1 _____________________________________________________________</div>
                    <div>2_____________________________________________________________</div>
                    <div>(Signatures of witnesses)</div>
                </div>
                <div>
                    _____________________________________________________________..
                    <div>(Signature of lessor) </div>
                </div>
            </div>

            <div class="mt-2">
                SIGNED at ___________________________________________ on this date: __________________ in the presence
                of the undersigned witnesses
            </div>

            <div>Witnesses:</div>

            <div class="grid grid-cols-2">
                <div>
                    <div>1 _____________________________________________________________ </div>
                    <div>2 _____________________________________________________________</div>
                    <div>(Signatures of witnesses)</div>
                </div>
                <div>
                    _____________________________________________________________
                    <div>(Signature of lessee) </div>

                </div>
            </div>

        </div>

    </div>

    </div>
</body>

</html>