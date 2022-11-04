const { SlashCommandBuilder } = require("@discordjs/builders")
const { MessageEmbed } = require("discord.js")
const { QueryType } = require("discord-player")

module.exports = {
    data: new SlashCommandBuilder()
        .setName("play")
        .setDescription("loads songs from youtube")
        .addSubcommand((subcommand) => 
            subcommand.setName("song")
            .setDescription("Loads a singe song from a url")
            .addStringOption((option) => option.setName("url").setDescription("the song's url").setRequired(true)))
            .addSubcommand((subcommand) => 
                subcommand
                    .setName("playlist")
                    .setDescription("Load a playlist of songs from a url")
                    .addStringOption((option) => option.setName("url").setDescription("the playlist's url").setRequired(true)))
            .addSubcommand((subcommand)=>
                subcommand
                    .setName("search")
                    .setDescription("Searches for sogn based on provided keywords")
                    .addStringOption((option) => option.setName("searchterms").setDescription("the search keyswords").setRequired(true)
                )
        ),
        run: async ({client, interaction }) => {
            if (!interaction.member.voice.channel)
                return interaction.edtReply("You need to be in a VC to use this commmand")

            const queue = await client.player.createQueue(interaction.guild)
            if (!queue.connection) await queue.connect(interaction.member.voice.channel)

            let embed = new MenssageEmbed()

            if (interaction.options.getSubcommand() === "song") {
                let url = interaction.options.getString("url")
                const result = await client.player.search(url, {
                    requestBy: interaction.user,
                    searchEngine: QueryType.YOUTUBE_VIDEO
                })
                if (result.tracks.length === 0 )
                    return interaction.editReply("No results")

                const song = result.traacks[0]
                await queue.addTrack(song)
                embed
                    .setDescription(`**[${song.tittle}](${song.url})** has been added to the queue`)
                    .setThumbnail(song.thumbnail)
                    .setFooter({ text: `Duraction: ${song.duration}`})
            } else if (interaction.options.getSubcommand() === "playlist") {
                let url = interaction.options.getString("url")
                const result = await client.player.search(url, {
                    requestBy: interaction.user,
                    searchEngine: QueryType.YOUTUBE_PLAYLIST
                })
                if (result.tracks.length === 0 )
                    return interaction.editReply("No results")

                const playlist = result.playlist
                await queue.addTrack(result.tracks)
                embed
                    .setDescription(`**${result.tracks.length} songs from [${playlist.tittle}](${playlist.url})** have been added to the queue`)
                    .setThumbnail(song.thumbnail)
            } else if (interaction.options.getSubcommand() === "serach") {
                let url = interaction.options.getString("url")
                const result = await client.player.search(url, {
                    requestBy: interaction.user,
                    searchEngine: QueryType.YOUTUBE_VIDEO
                })
                if (result.tracks.length === 0 )
                    return interaction.editReply("No results")

                const song = result.traacks[0]
                await queue.addTrack(song)
                embed
                    .setDescription(`**[${song.tittle}](${song.url})** has been added to the queue`)
                    .setThumbnail(song.thumbnail)
                    .setFooter({ text: `Duraction: ${song.duration}`})
            } php - larevel / js - eletron / bootstrap - materalize - semantic
        }

}